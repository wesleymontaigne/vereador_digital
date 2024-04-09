<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'cep'=> ['required','string','max:11'],
            'rua'=> ['required','string','max:40'],
            'bairro'=> ['required','string','max:100'],
            'cidade'=> ['required','string','max:20'],
            'uf'=> ['required','string','max:2'],
            'codmun'=> ['required','string','max:11'],
        ]);

        $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'cep' => $request->cep,
        'rua' => $request->rua,
        'bairro' => $request->bairro,
        'cidade' => $request->cidade,
        'uf' => $request->uf,
        'codmun' => $request->codmun,
        'password' => Hash::make($request->password),
        
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
