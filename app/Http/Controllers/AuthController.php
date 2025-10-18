<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class AuthController extends Controller
{
    /**
     * Show login page
     */
    public function showLoginPage()
    {
        return view('auth');
    }

    /**
     * Handle login request
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $credentials = $request->only('email', 'password');
        
        // Try to login with email first, then username
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // ensure welcome tooltip shows on first home visit after login
            $request->session()->put('show_welcome_tooltip', true);
            
            return response()->json([
                'success' => true,
                'message' => 'Login successful',
                'redirect' => route('home')
            ]);
        }

        // If email login fails, try with username
        $user = User::where('username', $request->email)->first();
        if ($user && Hash::check($request->password, $user->password)) {
            Auth::login($user);
            $request->session()->regenerate();
            // ensure welcome tooltip shows on first home visit after login
            $request->session()->put('show_welcome_tooltip', true);
            
            return response()->json([
                'success' => true,
                'message' => 'Login successful',
                'redirect' => route('home')
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Invalid credentials'
        ], 401);
    }

    /**
     * Handle register request
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|unique:users,username|max:255',
            'email' => 'required|string|email|unique:users,email|max:255',
            'password' => 'required|string|min:6|confirmed',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name' => $request->username, // Use username as name initially
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'user',
            'status' => 'Aktif',
        ]);

        // after registration, set tooltip to show when user goes to login then home
        $request->session()->put('show_welcome_tooltip', true);

        return response()->json([
            'success' => true,
            'message' => 'Registration successful! You can now login.',
            'redirect' => route('login')
        ]);
    }

    /**
     * Handle logout request
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }

    /**
     * Show profile page
     */
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    /**
     * Update profile
     */
    public function updateProfile(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $user->id,
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'nisn' => 'required|string|max:255',
            'birth_date' => 'required|date',
            'address' => 'required|string',
            'phone' => 'nullable|string|max:20',
            'kelas' => 'required|string|max:255',
            'jurusan' => 'required|string|max:255',
            'tahun_ajaran' => 'required|string|max:255',
            'status' => 'required|in:Aktif,Tidak Aktif,Lulus',
            'guru_wali' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'twitter' => 'nullable|string|max:255',
            'linkedin' => 'nullable|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $user->update($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully'
        ]);
    }
}
