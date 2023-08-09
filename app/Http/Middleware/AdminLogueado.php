<?php

namespace App\Http\Middleware;

use App\Http\Controllers\Backend\AdminController;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpFoundation\Response;

class AdminLogueado
{
    
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            return $next($request);
        }
        
        return Redirect::action([AdminController::class, 'login']);
    }
}
