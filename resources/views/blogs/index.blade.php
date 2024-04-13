<x-app-layout>
 
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
       
       
        <form method="POST" action="{{ route('blog.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="img">
                <img class="img" id="output" src="https://upload.wikimedia.org/wikipedia/en/0/05/Flag_of_Brazil.svg"/>
                <label for="upload-photo">Mudar Capa...</label>
                 <input type="file" name="photo" id="upload-photo" 
                 onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" required/>
                </div>
            </br>
              <!-- titulo do post -->
        
            <x-input-label for="titulo" :value="__('titulo')" />
            <x-text-input id="titulo" class="block mt-1 w-full" type="text" name="titulo" :value="old('titulo')" required autofocus  />
            <x-input-error :messages="$errors->get('titulo')" class="mt-2" />
        
           <br/>
           <x-input-label for="titulo" :value="__('Materia')" />
            <textarea
                name="message"
                placeholder="{{ __('What\'s on your mind?') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm"
            >{{ old('message') }}</textarea>
            <x-input-error :messages="$errors->get('message')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('enviar') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>