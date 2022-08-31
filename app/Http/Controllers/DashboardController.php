<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard')->with('posts', $user->posts);
    }

    public function edit(Request $request)
    {
        $validatedData = $request->validate([
            'bitcoin_address' => ['required', 'unique:users,bitcoin_address']
        ]);

        $user_id = auth()->user()->id;
        $user = User::find($user_id); // test this one liner: $user = auth()->user()

        $user->bitcoin_address = $request->bitcoin_address;

        $user->save();
        return redirect('/dashboard')->with('success', 'User has been updated!!');
    }

    public function delete()
    {
        $user_id = auth()->user()->id;
        $user = User::find($user_id); // test this one liner: $user = auth()->user()

        $user->bitcoin_address = null;

        $user->save();
        return redirect('/dashboard')->with('success', 'Wallet has been deleted!!');
    }

}
