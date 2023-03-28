<x-guest-layout>
    <div class="flex flex-col items-center justify-center min-h-screen bg-yellow-100">
        <div class="bg-white rounded-lg shadow-lg p-6">
            <div class="text-center">
                <h2 class="text-2xl font-bold text-gray-800">Inscription</h2>
            </div>
            <form class="mt-6" method="POST" action="{{ route('register') }}">
                @csrf
                    <!-- Name -->
                    <div>
                <x-input-label for="nom" :value="__('Nom')" />
                <x-text-input id="nom" class="block mt-1 w-full bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:bg-white focus:ring-0" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                <x-input-error :messages="$errors->get('nom')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="prenom" :value="__('Prenom')" />
                <x-text-input id="prenom" class="block mt-1 w-full bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:bg-white focus:ring-0" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
                <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="adresse" :value="__('Adresse')" />
                <x-text-input id="adresse" class="block mt-1 w-full bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:bg-white focus:ring-0" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" />
                <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
            </div>
            
            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:bg-white focus:ring-0" type="email" name="email" :value="old('email')" required autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <div class="mt-4">
                <x-input-label for="telephone" :value="__('Telephone')" />
                <x-text-input id="telephone" class="block mt-1 w-full bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:bg-white focus:ring-0" type="telephone" name="telephone" :value="old('telephone')" required autocomplete="telephone" />
                <x-input-error :messages="$errors->get('telephone')" class="mt-2" />
            </div>
            
            <div class="mt-4">
                <x-input-label for="role" :value="__('Role')" />
                <select id="role" class="block mt-1 w-full bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:bg-white focus:ring-0" type="role" name="role" :value="old('role')" required autocomplete="role">
                    <option value="chauffeur">chauffeur</option>
                    <option value="client">client</option>
                </select>
                <x-input-error :messages="$errors->get('role')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Mot De Passe')" />

                <x-text-input id="password" class="block mt-1 w-full bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:bg-white focus:ring-0"
                type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>


        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirmer le Mot De Passe')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full bg-gray-100 border-transparent rounded-md focus:border-gray-500 focus:bg-white focus:ring-0"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}"
            style="color: green;" >
                {{ __('Se Connecter') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Enregistrer') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
