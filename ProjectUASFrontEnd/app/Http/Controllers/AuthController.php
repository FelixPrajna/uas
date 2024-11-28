<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use MongoDB\Client;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLoginForm()
{
    return view('auth.login'); // Pastikan file login.blade.php ada di folder resources/views/auth
}
public function register(Request $request)
{
    \Log::info('CSRF Token:', [
        'session' => session('_token'),
        'input' => $request->_token,
    ]);
    
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'password' => 'required|min:6',
    ]);

    $client = new Client(env('DB_URI'));
    $collection = $client->uas_projek->users;

    $existingUser = $collection->findOne(['email' => $request->email]);

    if ($existingUser) {
        return redirect()->back()->withErrors(['email' => 'Email already exists']);
    }

    $collection->insertOne([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'created_at' => now(),
        'updated_at' => now(),
    ]);

    return redirect()->route('login')->with('success', 'Registration successful! Please login.');
}


public function login(Request $request)
{
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    $client = new Client(env('DB_URI'));
    $collection = $client->uas_projek->users;

    $user = $collection->findOne(['email' => $request->email]);

    if ($user && Hash::check($request->password, $user['password'])) {
        // Simpan token atau session jika diperlukan
        session(['user' => $user]);

        return redirect()->route('index')->with('success', 'Login successful!');
    }

    return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
}



    public function logout(Request $request)
        {
            return response()->json(['message' => 'Logged out successfully']);
        }

    
    public function changePassword(Request $request)
        {
            $request->validate([
                'email' => 'required|email',
                'current_password' => 'required',
                'new_password' => 'required|min:6',
            ]);

            $client = new Client(env('DB_URI'));
            $collection = $client->uas_projek->users;

            $user = $collection->findOne(['email' => $request->email]);

            if (!$user || !Hash::check($request->current_password, $user['password'])) {
                return response()->json(['error' => 'Current password is incorrect'], 400);
            }

            $collection->updateOne(
                ['email' => $request->email],
                ['$set' => ['password' => bcrypt($request->new_password), 'updated_at' => now()]]
            );

            return response()->json(['message' => 'Password changed successfully']);
        }

}
