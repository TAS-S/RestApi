<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="flex m-2 p-2">
              <a href="{{ route('contacts.index') }}" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white font-bold">Back</a>
          </div>
          
          @if ($errors->any())
          <div role="alert">
            <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
              Danger
            </div>
            <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
              <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            </div>
          </div>
          @endif
          <div class="m-2 p-2">
              <div class="space-y-8 divide-y divide-gray-200 w-1/2 mt-10">
                  <form method="POST" action="{{ route('contacts.store') }}" enctype="multipart/form-data">
                      @csrf
                    <div class="sm:col-span-6">
                      <label for="name" class="block text-sm font-bold text-gray-700"> Company </label>
                      <div class="mt-1">
                        <input type="text" id="name" name="name" required class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                      </div>
                    </div>
                    <div class="sm:col-span-6">
                      <label for="text" pattern="[0-9]{10}" class="block text-sm font-bold text-gray-700"> NIP </label>
                      <div class="mt-1">
                        <input type="text" id="NIP" name="NIP" required class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                      </div>
                    </div>
                    <div class="sm:col-span-6">
                      <label for="name" class="block text-sm font-bold text-gray-700"> Address </label>
                      <div class="mt-1">
                        <input type="text" id="address" name="address" required class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                      </div>
                    </div>
                    <div class="sm:col-span-6">
                      <label for="name" class="block text-sm font-bold text-gray-700"> City </label>
                      <div class="mt-1">
                        <input type="text" id="city" name="city" required class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                      </div>
                    </div>
                    <div class="sm:col-span-6">
                      <label for="name" class="block text-sm font-bold text-gray-700"> ZIP Code </label>
                      <div class="mt-1">
                        <input type="text" id="zip_code" name="zip_code" required class="block w-full transition duration-150 ease-in-out appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal sm:text-sm sm:leading-5" />
                      </div>
                    </div>
                    

                    
                    <div class="mt-6 p-4">
                        <button type="submit" class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white">Save</button>
                    </div>

                  </form>
                </div>
          </div>

      </div>
  </div>


</x-app-layout>