<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AuthController extends Controller
{
    public function authenticate(LoginRequest $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            return redirect()->intended($this->redirectTo);
        }
    }
}  // https://github.com/Boele/wefc/blob/auth/app/Http/Controllers/AuthController.php

