<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Socialite;
use App\User;
use App\Http\Controllers\Controller;

class SocialAuthController extends Controller
{
// Metodo encargado de la redireccion a Facebook
public function redirectToProvider($provider)
{
    return Socialite::driver($provider)->redirect();
}

// Metodo encargado de obtener la información del usuario
public function handleProviderCallback($provider)
{

\DB::beginTransaction();
try {
// Obtenemos los datos del usuario
$social_user = Socialite::driver($provider)->user();
// Comprobamos si el usuario ya existe
if ($user = User::where('email', $social_user->email)->first()) {
return $this->authAndRedirect($user); // Login y redirección
} else {
//aqui la modificacion
$user = User::create([
    'name' => $social_user->name,
    'email' => $social_user->email,
    'avatar' => $social_user->avatar,
    'provider'=>trim($provider)
]);
\DB::commit();
return $this->authAndRedirect($user); // Login y redirección
}


} catch (\Exception $e) {
\DB::rollback();
throw $e;
}
}

// Login y redirección
public function authAndRedirect($user)
{
Auth::login($user);

return redirect()->to('/home#');
}
}