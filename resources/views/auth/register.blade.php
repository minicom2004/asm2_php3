<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Full Name -->
        <div>
            <x-input-label for="fullname" :value="__('Full Name')" />
            <x-text-input id="fullname" class="block mt-1 w-full" type="text" name="fullname" :value="old('fullname')" required
                autofocus autocomplete="fullname" />
            <x-input-error :messages="$errors->get('fullname')" class="mt-2" />
        </div>

        <!-- User Name -->
        <div class="mt-4">
            <x-input-label for="username" :value="__('User Name')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required
                autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                autocomplete="email" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Avatar -->
        <div class="mt-4">
            <x-input-label for="avatar" :value="__('Avatar')" />
            <x-text-input id="avatar" class="block mt-1 w-full" type="text" name="avatar" :value="old('avatar')" />
            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />
        </div>

        <!-- Role -->
        <div class="mt-4">
            <x-input-label for="role" :value="__('Role')" />
            <select id="role" class="block mt-1 w-full form-control" name="role" required>
                <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
                <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Active -->
        <div class="mt-4">
            <x-input-label for="active" :value="__('Active')" />
            <select id="active" class="block mt-1 w-full form-control" name="active" required>
                <option value="1" {{ old('active') == '1' ? 'selected' : '' }}>Active</option>
                <option value="0" {{ old('active') == '0' ? 'selected' : '' }}>Inactive</option>
            </select>
            <x-input-error :messages="$errors->get('active')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
