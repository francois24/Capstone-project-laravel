<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Create User
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <a href="{{ route('admin.index') }}" class="bg-gray-200 hover:bg-gray-300 text-black font-bold py-2 px-4 rounded">Back to list</a>
            </div>

            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="{{ route('admin.store') }}">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            

                            <label for="description" class="block font-medium text-sm text-gray-700">Date Pick up</label>
                            <input type="date" name="date_pickup" id="description" required class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('date_pickup', '') }}" />
                            {{-- @error('date_pickup')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror --}}
                                   <br>
                            <label for="description" class="block font-medium text-sm text-gray-700">Drop off Date</label>
                            <input type="date" name="drop_off_date" id="description" required class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('drop_off_date', '') }}" />
                            {{-- @error('drop_off_date')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror --}}
                                   <br>

                            <label for="description" class="block font-medium text-sm text-gray-700">First Name</label>
                            <input type="text" name="first_name" id="description" required class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('first_name', '') }}" />
                            {{-- @error('first_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror --}}
                                   <br>
                            
                            <label for="description" class="block font-medium text-sm text-gray-700">Last Name</label>
                            <input type="text" name="last_name" id="description" required class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('last_name', '') }}" />
                            {{-- @error('last_name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror --}}
                                   <br>
                            
                            <label for="description" class="block font-medium text-sm text-gray-700">Phone Number</label>
                            <input type="text" name="phone" id="description"  required class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('phone', '') }}" />
                            {{-- @error('phone')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror --}}
                                    <br>
                            <label for="description" class="block font-medium text-sm text-gray-700">Email</label>
                            <input type="text" name="email" id="description"  required class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('email', '') }}" />
                            {{-- @error('email')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror --}}
                                        <br>
                            <label for="description" class="block font-medium text-sm text-gray-700">Address</label>
                            <input type="text" name="address" id="description" required class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('address', '') }}" />
                            {{-- @error('address')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror --}}
                                        <br>
                            <label for="description" class="block font-medium text-sm text-gray-700">License Number</label>
                            <input type="text" name="license_no" id="description" required class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('license_no', '') }}" />
                            {{-- @error('license_no')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror --}}
                                        <br>
                            <label for="description" class="block font-medium text-sm text-gray-700">Car brand</label>
                            {{-- <input type="text" name="car_brand" id="description" class="form-input rounded-md shadow-sm mt-1 block w-full"
                            value="{{ old('car_brand', '') }}" />
                            @error('car_brand')
                            <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror --}}

                            <select name="car_brand" id="name">
                                <option value="Forester Subaru">Forester Subaru</option>
                                <option value="Mirage Range">Mirage Range</option>
                                <option value="Mitsubishi Lancer">Mitsubishi Lancer</option>
                                <option value="Pajero Range">Pajero Range</option>
                                <option value="Subaru Liberty">Subaru Liberty</option>
                                <option value="Subaru Liberty">Subaru Liberty</option>
                                
                            </select>
   
                        </div>



                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Create
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
   

</x-app-layout>
