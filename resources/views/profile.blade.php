<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Siswa - SMKN 4 Bandung</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="bg-gradient-to-br from-blue-50 via-white to-indigo-50 min-h-screen p-4">
    <div class="w-full max-w-6xl mx-auto">
        <!-- Profile Page -->
        <div class="bg-white rounded-3xl shadow-2xl overflow-hidden border border-gray-100">
            <div class="p-10">
                <div class="flex justify-between items-center mb-8">
                    <h1 class="text-4xl font-bold text-gray-800">Profile Siswa</h1>
                    <form id="logoutForm" method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="button" onclick="logout()" class="px-8 py-4 bg-red-600 hover:bg-red-700 text-white font-bold rounded-xl transition-all duration-300 transform hover:scale-105 shadow-lg">
                            Logout
                        </button>
                    </form>
                </div>
                
                <div class="bg-gradient-to-r from-blue-500 to-indigo-600 rounded-2xl p-10 text-white text-center mb-8">
                    <div class="flex justify-center mb-6">
                        <div class="w-24 h-24 bg-white rounded-full flex items-center justify-center mb-4">
                            <i class="fas fa-user-circle text-6xl text-blue-500"></i>
                        </div>
                    </div>
                    <h2 class="text-3xl font-bold" id="studentName">{{ $user->name ?: $user->username }}</h2>
                    <p class="text-xl text-blue-100 mb-2">SMKN 4 Bandung</p>
                    <p class="text-lg text-blue-100" id="studentEmail">{{ $user->email }}</p>
                </div>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-8">
                    <div class="bg-gray-50 p-8 rounded-2xl border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Biodata Pribadi</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">Nama Lengkap:</span>
                                <span id="fullName" class="text-gray-800">{{ $user->name ?: '-' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">NISN:</span>
                                <span id="nisn" class="text-gray-800">{{ $user->nisn ?: '-' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">Tanggal Lahir:</span>
                                <span id="birthDate" class="text-gray-800">{{ $user->birth_date ?: '-' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">Alamat:</span>
                                <span id="address" class="text-gray-800">{{ $user->address ?: '-' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">No. HP:</span>
                                <span id="phone" class="text-gray-800">{{ $user->phone ?: '-' }}</span>
                            </div>
                        </div>
                        <button onclick="showEditProfile()" class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-xl transition-colors">
                            Edit Profil
                        </button>
                    </div>
                    
                    <div class="bg-gray-50 p-8 rounded-2xl border border-gray-200">
                        <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Informasi Sekolah</h3>
                        <div class="space-y-4">
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">Kelas:</span>
                                <span id="kelas" class="text-gray-800">{{ $user->kelas ?: '-' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">Jurusan:</span>
                                <span id="jurusan" class="text-gray-800">{{ $user->jurusan ?: '-' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">Tahun Ajaran:</span>
                                <span id="tahunAjaran" class="text-gray-800">{{ $user->tahun_ajaran ?: '-' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">Status:</span>
                                <span id="status" class="text-gray-800">{{ $user->status ?: '-' }}</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="font-medium text-gray-700">NIP Guru Wali:</span>
                                <span id="guruWali" class="text-gray-800">{{ $user->guru_wali ?: '-' }}</span>
                            </div>
                        </div>
                        <button onclick="showEditProfile()" class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-xl transition-colors">
                            Edit Profil
                        </button>
                    </div>
                </div>
                
                <div class="bg-gray-50 p-8 rounded-2xl border border-gray-200 mb-8">
                    <h3 class="text-2xl font-bold text-gray-800 mb-6 text-center">Media Sosial</h3>
                    <div class="space-y-4">
                        <div class="flex justify-between">
                            <span class="font-medium text-gray-700">Instagram:</span>
                            <span id="instagram" class="text-gray-800">{{ $user->instagram ?: '-' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-medium text-gray-700">Facebook:</span>
                            <span id="facebook" class="text-gray-800">{{ $user->facebook ?: '-' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-medium text-gray-700">Twitter/X:</span>
                            <span id="twitter" class="text-gray-800">{{ $user->twitter ?: '-' }}</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="font-medium text-gray-700">LinkedIn:</span>
                            <span id="linkedin" class="text-gray-800">{{ $user->linkedin ?: '-' }}</span>
                        </div>
                    </div>
                    <button onclick="showEditProfile()" class="mt-6 w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-4 rounded-xl transition-colors">
                        Edit Profil
                    </button>
                </div>
                
                <div class="bg-gradient-to-r from-blue-50 to-indigo-50 rounded-2xl p-8 border border-gray-200 text-center">
                    <h3 class="text-2xl font-bold text-gray-800 mb-4">Selamat Datang di SMKN 4 Bandung</h3>
                    <p class="text-gray-600 text-lg mb-2">Sekolah Menengah Kejuruan Negeri 4 Bandung adalah sekolah unggulan yang berkomitmen untuk mencetak generasi siap kerja dan berdaya saing tinggi.</p>
                    <p class="text-gray-600 text-lg">Jl. Cihampelas No. 123, Bandung, Jawa Barat</p>
                </div>
            </div>
        </div>

        <!-- Edit Profile Modal -->
        <div id="editProfileModal" class="hidden fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white rounded-2xl p-8 w-full max-w-2xl mx-4 max-h-screen overflow-y-auto">
                <h2 class="text-2xl font-bold text-gray-800 mb-6 text-center">Edit Profil Siswa</h2>
                
                <form id="editProfileForm" onsubmit="saveProfileData(event)">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="editName" class="block text-sm font-medium text-gray-700 mb-2">Nama Lengkap</label>
                            <input type="text" id="editName" name="name" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->name }}">
                        </div>
                        
                        <div>
                            <label for="editUsername" class="block text-sm font-medium text-gray-700 mb-2">Username</label>
                            <input type="text" id="editUsername" name="username" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->username }}">
                        </div>
                        
                        <div>
                            <label for="editEmail" class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" id="editEmail" name="email" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->email }}">
                        </div>
                        
                        <div>
                            <label for="editNISN" class="block text-sm font-medium text-gray-700 mb-2">NISN</label>
                            <input type="text" id="editNISN" name="nisn" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->nisn }}">
                        </div>
                        
                        <div>
                            <label for="editBirthDate" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Lahir</label>
                            <input type="date" id="editBirthDate" name="birth_date" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->birth_date }}">
                        </div>
                        
                        <div>
                            <label for="editPhone" class="block text-sm font-medium text-gray-700 mb-2">No. HP</label>
                            <input type="tel" id="editPhone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->phone }}">
                        </div>
                        
                        <div>
                            <label for="editAddress" class="block text-sm font-medium text-gray-700 mb-2">Alamat</label>
                            <textarea id="editAddress" name="address" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" rows="2">{{ $user->address }}</textarea>
                        </div>
                        
                        <div>
                            <label for="editGuruWali" class="block text-sm font-medium text-gray-700 mb-2">NIP Guru Wali</label>
                            <input type="text" id="editGuruWali" name="guru_wali" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->guru_wali }}">
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="editKelas" class="block text-sm font-medium text-gray-700 mb-2">Kelas</label>
                            <input type="text" id="editKelas" name="kelas" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->kelas }}">
                        </div>
                        
                        <div>
                            <label for="editJurusan" class="block text-sm font-medium text-gray-700 mb-2">Jurusan</label>
                            <input type="text" id="editJurusan" name="jurusan" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->jurusan }}">
                        </div>
                        
                        <div>
                            <label for="editTahunAjaran" class="block text-sm font-medium text-gray-700 mb-2">Tahun Ajaran</label>
                            <input type="text" id="editTahunAjaran" name="tahun_ajaran" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" value="{{ $user->tahun_ajaran }}">
                        </div>
                        
                        <div>
                            <label for="editStatus" class="block text-sm font-medium text-gray-700 mb-2">Status</label>
                            <select id="editStatus" name="status" required class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <option value="">Pilih Status</option>
                                <option value="Aktif" {{ $user->status == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                <option value="Tidak Aktif" {{ $user->status == 'Tidak Aktif' ? 'selected' : '' }}>Tidak Aktif</option>
                                <option value="Lulus" {{ $user->status == 'Lulus' ? 'selected' : '' }}>Lulus</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label for="editInstagram" class="block text-sm font-medium text-gray-700 mb-2">Instagram</label>
                            <input type="text" id="editInstagram" name="instagram" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="@username" value="{{ $user->instagram }}">
                        </div>
                        
                        <div>
                            <label for="editFacebook" class="block text-sm font-medium text-gray-700 mb-2">Facebook</label>
                            <input type="text" id="editFacebook" name="facebook" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="username" value="{{ $user->facebook }}">
                        </div>
                        
                        <div>
                            <label for="editTwitter" class="block text-sm font-medium text-gray-700 mb-2">Twitter/X</label>
                            <input type="text" id="editTwitter" name="twitter" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="@username" value="{{ $user->twitter }}">
                        </div>
                        
                        <div>
                            <label for="editLinkedin" class="block text-sm font-medium text-gray-700 mb-2">LinkedIn</label>
                            <input type="text" id="editLinkedin" name="linkedin" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent" placeholder="username" value="{{ $user->linkedin }}">
                        </div>
                    </div>
                    
                    <div class="flex justify-end space-x-3 pt-4">
                        <button type="button" onclick="closeEditProfileModal()" class="px-6 py-3 border border-gray-300 text-gray-700 rounded-lg hover:bg-gray-100 transition-colors">
                            Cancel
                        </button>
                        <button type="submit" class="px-6 py-3 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script>
        function logout() {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You will be logged out',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Yes, logout',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('logoutForm').submit();
                }
            });
        }
        
        function showEditProfile() {
            document.getElementById('editProfileModal').classList.remove('hidden');
        }
        
        function closeEditProfileModal() {
            document.getElementById('editProfileModal').classList.add('hidden');
        }
        
        function saveProfileData(e) {
            e.preventDefault();
            
            // Get form data
            const formData = new FormData(document.getElementById('editProfileForm'));
            formData.append('_token', document.querySelector('meta[name="csrf-token"]').getAttribute('content'));
            
            // Send update request
            fetch('/profile/update', {
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
                        location.reload(); // Reload page to show updated data
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
                    text: 'An error occurred while updating profile',
                    icon: 'error',
                    confirmButtonText: 'OK'
                });
            });
        }
    </script>
</body>
</html>
