<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Auth\Events\Registered;

class RegisterController extends Controller
{
    /**
     * Show the registration form.
     *
     * @return \Illuminate\View\View
     */
    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function register(Request $request)
    {
        // Validar los datos de entrada
        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        // Si la validación falla, redirigir con los errores
        if ($validator->fails()) {
            return redirect()->route('register')
                ->withErrors($validator)
                ->withInput();
        }

        // Crear el nuevo usuario
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Asignar el rol de usuario por defecto (puedes cambiar esto según tu lógica)
        $user->role = 'user';  // Asigna el rol 'user' por defecto (puedes cambiarlo si deseas)
        $user->save();

        // Disparar el evento Registered si necesitas algún otro procesamiento después del registro
        event(new Registered($user));

        // Iniciar sesión automáticamente después del registro
        auth()->login($user);

        // Verificar el rol del usuario y redirigir
        if ($user->role == 'admin') {
            return redirect()->route('admin.home'); // Redirigir al administrador
        }

        // Redirigir al usuario regular
        return redirect()->route('home'); 
    }
}
