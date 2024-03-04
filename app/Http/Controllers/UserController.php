<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function store(Request $request)
    {
        // Valideer de invoer
         
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Maak de gebruiker aan
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password), // Wachtwoord hashen voordat het wordt opgeslagen
        ]);

        // Geef een succesbericht terug
        return response()->json(['message' => 'User created successfully', 'user' => $user], 201);
    }
}
