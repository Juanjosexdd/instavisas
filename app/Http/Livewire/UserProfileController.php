<?php

namespace Laravel\Jetstream\Http\Controllers\Livewire;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class UserProfileController extends Controller
{
    /**
     * Show the user profile screen.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function show(Request $request)
    {
        $ingresoNotifications = auth()->user()->unreadNotifications;
        return view('profile.show', [
            'request' => $request,
            'user' => $request->user(),
            
        ], compact('ingresoNotifications'));
    }
}
