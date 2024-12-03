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
        // Simpan data user yang diperlukan ke dalam session
        session([
            'user' => [
                'id' => (string)$user['_id'], // Simpan ID user jika diperlukan
                'name' => $user['name'],
                'email' => $user['email'],
            ]
        ]);

        return redirect('/')->with('success', 'Login successful!'); // Arahkan ke halaman Home
    }

    return redirect()->back()->withErrors(['error' => 'Invalid credentials']);
}




public function logout(Request $request)
{
    // Hapus data sesi
    session()->forget('user');
    session()->flush();

    // Redirect ke halaman utama
    return redirect()->route('index')->with('success', 'You have been logged out.');
}

}
