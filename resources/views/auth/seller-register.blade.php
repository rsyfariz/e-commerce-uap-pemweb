<x-guest-layout>
    <form method="POST" action="{{ route('seller.register') }}" enctype="multipart/form-data">
        @csrf

        <h2 class="text-xl font-semibold text-gray-800 mb-4">Daftar sebagai Penjual</h2>

        {{-- User Information --}}
        <div class="border-b pb-4 mb-4">
            <h3 class="text-lg font-medium text-gray-700 mb-3">Informasi Akun</h3>

            <!-- Name -->
            <div class="mb-4">
                <x-input-label for="name" :value="__('Nama Lengkap')" />
                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mb-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mb-4">
                <x-input-label for="password" :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                    type="password"
                    name="password"
                    required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mb-4">
                <x-input-label for="password_confirmation" :value="__('Konfirmasi Password')" />
                <x-text-input id="password_confirmation" class="block mt-1 w-full"
                    type="password"
                    name="password_confirmation" required autocomplete="new-password" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>
        </div>

        {{-- Store Information --}}
        <div class="border-b pb-4 mb-4">
            <h3 class="text-lg font-medium text-gray-700 mb-3">Informasi Toko</h3>

            <!-- Store Name -->
            <div class="mb-4">
                <x-input-label for="store_name" :value="__('Nama Toko')" />
                <x-text-input id="store_name" class="block mt-1 w-full" type="text" name="store_name" :value="old('store_name')" required />
                <x-input-error :messages="$errors->get('store_name')" class="mt-2" />
            </div>

            <!-- Logo -->
            <div class="mb-4">
                <x-input-label for="logo" :value="__('Logo Toko (Opsional)')" />
                <input id="logo" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" type="file" name="logo" accept="image/*" />
                <p class="text-sm text-gray-500 mt-1">Format: JPG, PNG, GIF. Maksimal 2MB</p>
                <x-input-error :messages="$errors->get('logo')" class="mt-2" />
            </div>

            <!-- About -->
            <div class="mb-4">
                <x-input-label for="about" :value="__('Tentang Toko')" />
                <textarea id="about" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" name="about" rows="4" required>{{ old('about') }}</textarea>
                <p class="text-sm text-gray-500 mt-1">Ceritakan tentang toko Anda (maksimal 1000 karakter)</p>
                <x-input-error :messages="$errors->get('about')" class="mt-2" />
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <x-input-label for="phone" :value="__('Nomor Telepon')" />
                <x-text-input id="phone" class="block mt-1 w-full" type="text" name="phone" :value="old('phone')" required placeholder="08xxxxxxxxxx" />
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
        </div>

        {{-- Store Address --}}
        <div class="mb-4">
            <h3 class="text-lg font-medium text-gray-700 mb-3">Alamat Toko</h3>

            <!-- City -->
            <div class="mb-4">
                <x-input-label for="city" :value="__('Kota')" />
                <x-text-input id="city" class="block mt-1 w-full" type="text" name="city" :value="old('city')" required />
                <x-input-error :messages="$errors->get('city')" class="mt-2" />
            </div>

            <!-- Address -->
            <div class="mb-4">
                <x-input-label for="address" :value="__('Alamat Lengkap')" />
                <textarea id="address" class="block mt-1 w-full border-gray-300 rounded-md shadow-sm" name="address" rows="3" required>{{ old('address') }}</textarea>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>

            <!-- Postal Code -->
            <div class="mb-4">
                <x-input-label for="postal_code" :value="__('Kode Pos')" />
                <x-text-input id="postal_code" class="block mt-1 w-full" type="text" name="postal_code" :value="old('postal_code')" required />
                <x-input-error :messages="$errors->get('postal_code')" class="mt-2" />
            </div>
        </div>

        @if($errors->has('error'))
        <div class="mb-4 p-4 bg-red-100 border border-red-400 text-red-700 rounded">
            {{ $errors->first('error') }}
        </div>
        @endif

        <div class="flex items-center justify-between mt-6">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Sudah punya akun?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Daftar Sebagai Penjual') }}
            </x-primary-button>
        </div>

        <div class="mt-4 text-center">
            <a class="text-sm text-gray-600 hover:text-gray-900" href="{{ route('register') }}">
                Daftar sebagai Pembeli
            </a>
        </div>
    </form>
</x-guest-layout>