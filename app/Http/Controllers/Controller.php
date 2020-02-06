<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\User;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function myMethod(User $user) {
        Auth::login($user);
        /*
         * Psalm error:
         * ERROR: InvalidArgument - app/Http/Controllers/Controller.php:17:21 - Argument 1 of Auth::login
         * expects Illuminate\Contracts\Auth\Authenticatable, App\User provided
         */
    }
}
