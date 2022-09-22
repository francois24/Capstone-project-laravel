
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit User 
        </h2>
    </x-slot>

    <div>
        
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">

            <div class="block mb-8">
                <a href="{{ route('admin.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('admin.update', $users->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="description" class="block font-medium text-sm text-gray-700">Name</label>
                            <input type="text" name="name" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', $users->name) }}" />
                            
                            <label for="description" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="text" name="email" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                          value="{{ old('email', $users->email) }}" />

                            <label for="description" class="block font-medium text-sm text-gray-700">Role</label>
                            <input type="text" name="role" id="description" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                                 value="{{ old('role', $users->role) }}" />

                            @error('description')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Edit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
