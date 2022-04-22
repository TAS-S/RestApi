<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>


    <div class="py-12">
        
        <div class="container mx-auto" style="margin-top: 100px">

            @if (session()->has('message'))
                <p class="self-center"><strong>Info </strong>{{ session()->get('message') }}</p>
                
            @endif
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-end m-2 p-2">
                <a href="{{ route('contacts.create') }}"
                    class="px-4 py-2 bg-indigo-500 hover:bg-indigo-700 rounded-md text-white font-bold">New Contact</a>
            </div>
            <div class="flex flex-col">
                <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block py-2 min-w-full sm:px-6 lg:px-8">
                        <div class="overflow-hidden shadow-md sm:rounded-lg">
                            <table class="min-w-full">
                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th scope="col"
                                            class="py-3 px-6 text-white font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Company Name
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-white font-medium tracking-wider text-left text-gray-700 uppercase">
                                            NIP
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-white font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Address
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-white font-medium tracking-wider text-left text-gray-700 uppercase">
                                            City
                                        </th>
                                        <th scope="col"
                                            class="py-3 px-6 text-white font-medium tracking-wider text-left text-gray-700 uppercase">
                                            Zip Code
                                        </th>
                                        <th scope="col" class="relative py-3 px-6 text-white">
                                            <span class="sr-only">Edit</span>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($contacts as $contact)
                                        <tr class="bg-white border-b">
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                {{ $contact->name }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                {{ $contact->NIP }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                {{ $contact->address }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                {{ $contact->city }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                {{ $contact->zip_code }}
                                            </td>
                                            <td
                                                class="py-4 px-6 text-sm font-medium text-gray-900 whitespace-nowrap">
                                                <div class="flex space-x-2">
                                                    <a href="{{ route('contacts.edit', $contact->id) }}"
                                                        class="px-4 py-2 bg-green-500 hover:bg-green-700 rounded-lg text-white">Edit</a>
                                                    <form
                                                        class="px-4 py-2 bg-red-500 hover:bg-red-700 rounded-lg text-white"
                                                        method="post"
                                                        action="{{ route('contacts.destroy', $contact->id) }}"
                                                        onsubmit="return confirm('Are you sure?');">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit">Delete</button>
                                                    </form>
                                                </div>

                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</x-app-layout>