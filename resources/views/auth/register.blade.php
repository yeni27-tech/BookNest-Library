{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Nama Lengkap -->
        <div>
            <x-input-label for="nama_lengkap" :value="('Nama Lengkap')" />
            <x-text-input id="nama_lengkap" class="block mt-1 w-full" type="text" name="nama_lengkap" :value="old('nama_lengkap')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('nama_lengkap')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Nomor HP -->
        <div class="mt-4">
            <x-input-label for="phone" :value="('Nomor HP')" />
            <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required />
            <x-input-error :messages="$errors->get('phone')" class="mt-2" />
        </div>

        <!-- Alamat -->
        <div class="mt-4">
            <x-input-label for="address" :value="('Alamat')" />
            <textarea id="address" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="address" required>{{ old('address') }}</textarea>
            <x-input-error :messages="$errors->get('address')" class="mt-2" />
        </div>

        <!-- Kategori User -->
        <div class="mt-4">
            <x-input-label for="user_type" :value="('Kategori Pengguna')" />
            <select id="user_type" class="block mt-1 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm" name="user_type" required>
                <option value="umum" {{ old('user_type') == 'umum' ? 'selected' : '' }}>Umum</option>
                <option value="pelajar" {{ old('user_type') == 'pelajar' ? 'selected' : '' }}>Pelajar</option>
            </select>
            <x-input-error :messages="$errors->get('user_type')" class="mt-2" />
        </div>

        <!-- NIK / NISN -->
        <div class="mt-4">
            <x-input-label for="identity_number" :value="('NIK / NISN')" />
            <x-text-input id="identity_number" class="block mt-1 w-full" type="text" name="identity_number" :value="old('identity_number')" required />
            <x-input-error :messages="$errors->get('identity_number')" class="mt-2" />
        </div>

        <!-- Institusi (Opsional, hanya untuk pelajar) -->
        <div class="mt-4" id="institution-field" style="display: none;">
            <x-input-label for="institution" :value="('Sekolah / Universitas (Opsional)')" />
            <x-text-input id="institution" class="block mt-1 w-full" type="text" name="institution" :value="old('institution')" />
            <x-input-error :messages="$errors->get('institution')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="('Konfirmasi Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- Button Register -->
        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                {{ __('Sudah terdaftar?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Daftar') }}
            </x-primary-button>
        </div>
    </form>

    <script>
        document.getElementById('user_type').addEventListener('change', function() {
            let institutionField = document.getElementById('institution-field');
            if (this.value === 'pelajar') {
                institutionField.style.display = 'block';
            } else {
                institutionField.style.display = 'none';
            }
        });
    </script>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            background-color: #f7f9fc;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 40px 20px;
        }

        .register-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 580px;
            padding: 30px;
        }

        .logo {
            text-align: center;
            margin-bottom: 25px;
        }

        .logo img {
            height: 50px;
        }

        .register-title {
            font-size: 24px;
            font-weight: 600;
            color: #333;
            text-align: center;
            margin-bottom: 25px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-label {
            display: block;
            margin-bottom: 8px;
            font-size: 14px;
            color: #555;
            font-weight: 500;
        }

        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #4f46e5;
            outline: none;
            box-shadow: 0 0 0 3px rgba(79, 70, 229, 0.1);
        }

        .error-messages {
            color: #dc2626;
            font-size: 12px;
            margin-top: 5px;
        }

        .register-button {
            padding: 12px 24px;
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .register-button:hover {
            background-color: #3730a3;
        }

        .login-link {
            font-size: 14px;
            color: #4f46e5;
            text-decoration: none;
            transition: color 0.3s;
        }

        .login-link:hover {
            color: #3730a3;
            text-decoration: underline;
        }

        .form-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 25px;
        }

        .two-columns {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 15px;
        }

        @media (max-width: 768px) {
            .two-columns {
                grid-template-columns: 1fr;
            }

            .form-footer {
                flex-direction: column;
                gap: 15px;
            }

            .form-footer a {
                margin-right: auto;
            }
        }

        textarea.form-control {
            min-height: 100px;
            resize: vertical;
        }

        select.form-control {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='%23555' viewBox='0 0 16 16'%3E%3Cpath d='M7.247 11.14 2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z'/%3E%3C/svg%3E");
            background-repeat: no-repeat;
            background-position: calc(100% - 12px) center;
            padding-right: 35px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="logo">
            <!-- You can add your logo here -->
            <img src="{{ asset('images/logo.png') }}" alt="Logo">
        </div>

        <h1 class="register-title">Buat Akun Baru</h1>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="form-group">
                <label for="nama_lengkap" class="form-label">Nama Lengkap</label>
                <input id="nama_lengkap" class="form-control @error('nama_lengkap') is-invalid @enderror" type="text" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required autofocus autocomplete="name">
                @error('nama_lengkap')
                    <div class="error-messages">{{ $message }}</div>
                @enderror
            </div>

            <div class="two-columns">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input id="email" class="form-control @error('email') is-invalid @enderror" type="email" name="email" value="{{ old('email') }}" required autocomplete="username">
                    @error('email')
                        <div class="error-messages">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label">Nomor HP</label>
                    <input id="phone" class="form-control @error('phone') is-invalid @enderror" type="text" name="phone" value="{{ old('phone') }}" required>
                    @error('phone')
                        <div class="error-messages">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="form-label">Alamat</label>
                <textarea id="address" class="form-control @error('address') is-invalid @enderror" name="address" required>{{ old('address') }}</textarea>
                @error('address')
                    <div class="error-messages">{{ $message }}</div>
                @enderror
            </div>

            <div class="two-columns">
                <div class="form-group">
                    <label for="user_type" class="form-label">Kategori Pengguna</label>
                    <select id="user_type" class="form-control @error('user_type') is-invalid @enderror" name="user_type" required>
                        <option value="umum" {{ old('user_type') == 'umum' ? 'selected' : '' }}>Umum</option>
                        <option value="pelajar" {{ old('user_type') == 'pelajar' ? 'selected' : '' }}>Pelajar</option>
                    </select>
                    @error('user_type')
                        <div class="error-messages">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="identity_number" class="form-label">NIK / NISN</label>
                    <input id="identity_number" class="form-control @error('identity_number') is-invalid @enderror" type="text" name="identity_number" value="{{ old('identity_number') }}" required>
                    @error('identity_number')
                        <div class="error-messages">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group" id="institution-field" style="display: none;">
                <label for="institution" class="form-label">Sekolah / Universitas (Opsional)</label>
                <input id="institution" class="form-control @error('institution') is-invalid @enderror" type="text" name="institution" value="{{ old('institution') }}">
                @error('institution')
                    <div class="error-messages">{{ $message }}</div>
                @enderror
            </div>

            <div class="two-columns">
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input id="password" class="form-control @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password">
                    @error('password')
                        <div class="error-messages">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                    <input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>

            <div class="form-footer">
                <a class="login-link" href="{{ route('login') }}">
                    {{ __('Sudah terdaftar?') }}
                </a>

                <button type="submit" class="register-button">
                    {{ __('Daftar') }}
                </button>
            </div>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Check initial state
            let userType = document.getElementById('user_type');
            let institutionField = document.getElementById('institution-field');

            if (userType.value === 'pelajar') {
                institutionField.style.display = 'block';
            }

            // Add event listener
            userType.addEventListener('change', function() {
                if (this.value === 'pelajar') {
                    institutionField.style.display = 'block';
                } else {
                    institutionField.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html>
