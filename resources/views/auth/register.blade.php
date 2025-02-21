<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf
        <!-- firstname -->
        <div>
            <x-input-label for="firstname" :value="__('firstname')" />
            <x-text-input id="firstname" class="block mt-1 w-full" type="text" name="firstname" :value="old('firstname')" required autofocus autocomplete="firstname" />
            <x-input-error :messages="$errors->get('firstname')" class="mt-2" />
        </div>
         <!-- firstname -->
         <div>
            <x-input-label for="lastname" :value="__('lastname')" />
            <x-text-input id="lastname" class="block mt-1 w-full" type="text" name="lastname" :value="old('lastname')" required autofocus autocomplete="lastname" />
            <x-input-error :messages="$errors->get('lastname')" class="mt-2" />
        </div>
        <!-- username -->
        <div>
            <x-input-label for="username" :value="__('username')" />
            <x-text-input id="username" class="block mt-1 w-full" type="text" name="username" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <!-- phone_number -->
        <div class="mt-4">
            <x-input-label for="phone_number" :value="__('phone_number')" />
            <x-text-input id="phone_number" class="block mt-1 w-full" type="numeric" name="phone_number" :value="old('phone_number')" required autofocus autocomplete="phone_number" />
            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="role_id_role" :value="__('role_id_role')" />
            <x-text-input id="role_id_role" class="block mt-1 w-full" type="numeric" name="role_id_role" :value="old('role_id_role')" required autofocus autocomplete="role_id_role" />
            <x-input-error :messages="$errors->get('role_id_role')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="position_id_position" :value="__('position_id_position')" />
            <x-text-input id="position_id_position" class="block mt-1 w-full" type="numeric" name="position_id_position" :value="old('position_id_position')" required autofocus autocomplete="position_id_position" />
            <x-input-error :messages="$errors->get('position_id_position')" class="mt-2" />
        </div>

        <div class="mt-4">
            <x-input-label for="divisi_id_divisi" :value="__('divisi_id_divisi')" />
            <x-text-input id="divisi_id_divisi" class="block mt-1 w-full" type="numeric" name="divisi_id_divisi" :value="old('divisi_id_divisi')" required autofocus autocomplete="divisi_id_divisi" />
            <x-input-error :messages="$errors->get('divisi_id_divisi')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>