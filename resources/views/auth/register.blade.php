<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

          <!-- CEP Address -->
          <div class="mt-4">
            <x-input-label for="CEP" :value="__('cep')" />
            <x-text-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')"  size="10" maxlength="9" required  onblur="pesquisacep(this.value);" />
            <x-input-error :messages="$errors->get('cep')" class="mt-2" />
        </div>

        <!-- rua Address -->
          <div class="mt-4">
            <x-input-label for="rua" :value="__('rua')" />
            <x-text-input id="rua" class="block mt-1 w-full" type="text" name="rua" :value="old('rua')"  size="10" maxlength="9" required  />
            <x-input-error :messages="$errors->get('rua')" class="mt-2" />
        </div>

        <!-- bairro Address -->
          <div class="mt-4">
            <x-input-label for="bairro" :value="__('bairro')" />
            <x-text-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')"  size="10" maxlength="9" required  />
            <x-input-error :messages="$errors->get('bairro')" class="mt-2" />
        </div>

         <!-- cidade Address -->
          <div class="mt-4">
            <x-input-label for="cidade" :value="__('cidade')" />
            <x-text-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')"  size="10" maxlength="9" required  />
            <x-input-error :messages="$errors->get('cidade')" class="mt-2" />
        </div>

        <!-- uf Address -->
          <div class="mt-4">
            <x-input-label for="uf" :value="__('uf')" />
            <x-text-input id="uf" class="block mt-1 w-full" type="text" name="uf" :value="old('uf')"  size="10" maxlength="9" required />
            <x-input-error :messages="$errors->get('uf')" class="mt-2" />
        </div>

        <!-- codMun Address -->
          <div class="mt-4">
            <input id="codmun" class="block mt-1 w-full" value="" type="hidden" name="codmun" :value="old('codmun')"  size="10" maxlength="9" " />
           
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

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

<script src="assets/javascripts/main.js"></script>
</x-guest-layout>
