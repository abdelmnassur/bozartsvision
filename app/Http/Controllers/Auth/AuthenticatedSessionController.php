<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use App\Models\Artiste;
use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Inertia\Response;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create()
    {   
        return view('auth.login');
    }



    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        $user = Auth()->user()->id;

        //$user = User::where("email", $request->email)->get(['id']);

        $admin = Admin::where("user_id", $user)->get(['id']);

        $artiste = Artiste::where("user_id", $user)->get(['id']);
 
        dd($user);
        dd($user);
        dd($artiste);

        if($admin)
        {
            return redirect()->route('admin_dashboard');
        }

        // if($artiste > 0)
        // {
        //     return redirect()->route('artiste_dashboard');
        // }

        // return redirect()->route('home');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
