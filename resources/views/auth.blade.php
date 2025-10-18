<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Auth System - SMKN 4 Bandung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen flex items-center justify-center p-4">
    <div class="w-full max-w-4xl">
        <!-- Login Form -->
        <div id="loginForm" class="bg-white rounded-3xl shadow-2xl overflow-hidden transition-all duration-300 transform hover:scale-[1.02] border border-gray-100">
            <div class="flex">
                <div class="w-1/2 bg-gradient-to-br from-blue-500 to-indigo-600 p-10 flex flex-col justify-center">
                    <div class="text-center mb-8">
                        <i class="fas fa-school text-4xl text-white mb-4"></i>
                        <h2 class="text-3xl font-bold text-white mb-2">SMKN 4 Bandung</h2>
                        <p class="text-blue-100 text-lg">Sekolah Menengah Kejuruan Negeri 4 Bandung</p>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-4">Hello, Welcome!</h2>
                    <p class="text-blue-100 text-lg">Don't have an account?</p>
                    <button onclick="showRegister()" class="mt-6 px-6 py-3 bg-white text-blue-600 rounded-xl font-medium hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        Register
                    </button>
                </div>
                <div class="w-1/2 p-10">
                    <div class="text-center mb-8">
                        <i class="fas fa-user-lock text-4xl text-blue-600 mb-4"></i>
                        <h1 class="text-3xl font-bold text-gray-800">Login to Your Account</h1>
                    </div>
                    
                    <form id="loginFormElement" onsubmit="handleLogin(event)">
                        @csrf
                        <div class="mb-6">
                            <label for="email" class="block text-lg font-medium text-gray-700 mb-3">Email/Username</label>
                            <div class="relative">
                                <input type="text" id="email" name="email" required class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg">
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400 text-lg"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="password" class="block text-lg font-medium text-gray-700 mb-3">Password</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" required class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg">
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400 text-lg"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-8">
                            <a href="#" class="text-lg text-blue-600 hover:text-blue-800 transition-colors">Forgot password?</a>
                        </div>
                        
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-xl text-lg transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                            Login
                        </button>
                        
                        <div class="mt-10 text-center">
                            <p class="text-lg text-gray-600 mb-6">or login with social platforms</p>
                            <div class="flex justify-center space-x-6">
                                <button type="button" class="w-14 h-14 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                    <i class="fab fa-google text-red-500 text-xl"></i>
                                </button>
                                <button type="button" class="w-14 h-14 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                    <i class="fab fa-facebook-f text-blue-600 text-xl"></i>
                                </button>
                                <button type="button" class="w-14 h-14 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                    <i class="fab fa-twitter text-blue-400 text-xl"></i>
                                </button>
                                <button type="button" class="w-14 h-14 bg-gray-100 hover:bg-gray-200 rounded-full flex items-center justify-center transition-all duration-300 transform hover:scale-110">
                                    <i class="fab fa-linkedin-in text-blue-700 text-xl"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Register Form -->
        <div id="registerForm" class="hidden bg-white rounded-3xl shadow-2xl overflow-hidden transition-all duration-300 transform hover:scale-[1.02] mt-8 border border-gray-100">
            <div class="flex">
                <div class="w-1/2 bg-gradient-to-br from-blue-500 to-indigo-600 p-10 flex flex-col justify-center">
                    <div class="text-center mb-8">
                        <i class="fas fa-school text-4xl text-white mb-4"></i>
                        <h2 class="text-3xl font-bold text-white mb-2">SMKN 4 Bandung</h2>
                        <p class="text-blue-100 text-lg">Sekolah Menengah Kejuruan Negeri 4 Bandung</p>
                    </div>
                    <h2 class="text-2xl font-bold text-white mb-4">Welcome Back!</h2>
                    <p class="text-blue-100 text-lg">Already have an account?</p>
                    <button onclick="showLogin()" class="mt-6 px-6 py-3 bg-white text-blue-600 rounded-xl font-medium hover:bg-gray-100 transition-all duration-300 transform hover:scale-105">
                        Login
                    </button>
                </div>
                <div class="w-1/2 p-10">
                    <div class="text-center mb-8">
                        <i class="fas fa-user-plus text-4xl text-blue-600 mb-4"></i>
                        <h1 class="text-3xl font-bold text-gray-800">Create Your Account</h1>
                    </div>
                    
                    <form id="registerFormElement" onsubmit="handleRegister(event)">
                        @csrf
                        <div class="mb-6">
                            <label for="username" class="block text-lg font-medium text-gray-700 mb-3">Username</label>
                            <div class="relative">
                                <input type="text" id="username" name="username" required placeholder="Enter your preferred username" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg">
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <i class="fas fa-user text-gray-400 text-lg"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="email" class="block text-lg font-medium text-gray-700 mb-3">Email</label>
                            <div class="relative">
                                <input type="email" id="email" name="email" required placeholder="yourname@example.com" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg">
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <i class="fas fa-envelope text-gray-400 text-lg"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-6">
                            <label for="password" class="block text-lg font-medium text-gray-700 mb-3">Password</label>
                            <div class="relative">
                                <input type="password" id="password" name="password" required minlength="6" placeholder="Create a strong password (min. 6 characters)" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg">
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400 text-lg"></i>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mb-8">
                            <label for="password_confirmation" class="block text-lg font-medium text-gray-700 mb-3">Confirm Password</label>
                            <div class="relative">
                                <input type="password" id="password_confirmation" name="password_confirmation" required minlength="6" placeholder="Confirm your password" class="w-full px-5 py-4 border border-gray-300 rounded-xl focus:ring-4 focus:ring-blue-500 focus:border-transparent transition-all duration-300 text-lg">
                                <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none">
                                    <i class="fas fa-lock text-gray-400 text-lg"></i>
                                </div>
                            </div>
                        </div>
                        
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-4 px-6 rounded-xl text-lg transition-all duration-300 transform hover:scale-[1.02] shadow-lg hover:shadow-xl">
                            Register
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Show/hide forms
        function showLogin() {
            document.getElementById('loginForm').classList.remove('hidden');
            document.getElementById('registerForm').classList.add('hidden');
        }
        
        function showRegister() {
            document.getElementById('loginForm').classList.add('hidden');
            document.getElementById('registerForm').classList.remove('hidden');
        }
        
        function handleLogin(e) {
            e.preventDefault();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            
            // Validate inputs
            if (!email || !password) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill in all fields',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            
            // Create form data
            const formData = new FormData();
            formData.append('email', email);
            formData.append('password', password);
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            
            // Send login request
            fetch('/login', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Success!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        window.location.href = data.redirect;
                    });
                } else {
                    Swal.fire({
                        title: 'Error!',
                        text: data.message,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Error!',
                    text: 'An error occurred during login',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        }
        
        function handleRegister(e) {
            e.preventDefault();
            const username = document.getElementById('username').value.trim();
            const email = document.getElementById('email').value.trim();
            const password = document.getElementById('password').value.trim();
            const passwordConfirmation = document.getElementById('password_confirmation').value.trim();
            
            // Validate inputs
            if (!username || !email || !password || !passwordConfirmation) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please fill in all fields',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            
            if (password.length < 6) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Password must be at least 6 characters',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            
            if (password !== passwordConfirmation) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Passwords do not match',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            
            // Simple email validation - must contain @ and .
            if (!email.includes('@') || !email.includes('.')) {
                Swal.fire({
                    title: 'Error!',
                    text: 'Please enter a valid email address (must contain @ and .)',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
                return;
            }
            
            // Create form data
            const formData = new FormData();
            formData.append('username', username);
            formData.append('email', email);
            formData.append('password', password);
            formData.append('password_confirmation', passwordConfirmation);
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            
            // Send register request
            fetch('/register', {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                }
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    Swal.fire({
                        title: 'Success!',
                        text: data.message,
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        showLogin();
                    });
                } else {
                    let errorMessage = data.message;
                    if (data.errors) {
                        const firstError = Object.values(data.errors)[0];
                        if (Array.isArray(firstError)) {
                            errorMessage = firstError[0];
                        }
                    }
                    Swal.fire({
                        title: 'Error!',
                        text: errorMessage,
                        icon: 'error',
                        confirmButtonText: 'OK'
                    });
                }
            })
            .catch(error => {
                console.error('Error:', error);
                Swal.fire({
                    title: 'Error!',
                    text: 'An error occurred during registration',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        }
        
        window.onload = function() {
            showLogin();
        };
    </script>
</body>
</html>
