<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:16'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData = array_merge($validatedData, array('photo' => 'https://ui-avatars.com/api/?name=' . urlencode($validatedData['name']) . '&background=7F9CF5&color=EBF4FF'));

        User::create($validatedData);

        return redirect('login')->with('success', 'Registration success, please login');
    }
}