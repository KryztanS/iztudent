<x-layout>

    <div class="mt-10 sm:mt-0">
        <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
                <div class="px-4 sm:px-0">
                    <h3 class="text-lg font-medium leading-6 text-gray-900">Create New Student</h3>
                </div>
            </div>
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf

                    <div class="shadow overflow-hidden sm:rounded-md mb-3">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <div class="grid grid-cols-6 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                                    <input type="text" name="name" id="name" autocomplete="name"
                                        class="p-3 border mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error("name")
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="contact_number" class="block text-sm font-medium text-gray-700">Contact
                                        Number</label>
                                    <input type="text" name="contact_number" id="contact_number"
                                        class="p-3 border mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error("contact_number")
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="text" name="email" id="email" autocomplete="email"
                                        class="p-3 border mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error("email")
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                    <input type="text" name="address" id="address" autocomplete="address"
                                        class="p-3 border mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                @error("address")
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <fieldset>
                                <legend class="text-base font-medium text-gray-900">Courses Enrolled</legend>
                                <div class="mt-4 space-y-4">
                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="basic-math" name="basic-math" type="checkbox" value="1"
                                                class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="basic-math" class="font-medium text-gray-700">Basic Math</label>
                                        </div>
                                    </div>
                                    @error("basic-math")
                                    <p class="text-red-500 text-sm mt-2">Invalid value submitted.</p>
                                    @enderror

                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="adv-math" name="adv-math" type="checkbox" value="2"
                                                class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="adv-math" class="font-medium text-gray-700">Advance Math</label>
                                        </div>
                                    </div>
                                    @error("adv-math")
                                    <p class="text-red-500 text-sm mt-2">Invalid value submitted.</p>
                                    @enderror

                                    <div class="flex items-start">
                                        <div class="flex items-center h-5">
                                            <input id="adv-pp-math" name="adv-pp-math" type="checkbox" value="3"
                                                class="focus:ring-blue-500 h-4 w-4 text-blue-600 border-gray-300 rounded">
                                        </div>
                                        <div class="ml-3 text-sm">
                                            <label for="adv-pp-math" class="font-medium text-gray-700">Advance++
                                                Math</label>
                                        </div>
                                    </div>
                                    @error("adv-pp-math")
                                    <p class="text-red-500 text-sm mt-2">Invalid value submitted.</p>
                                    @enderror
                                </div>
                            </fieldset>
                        </div>
                    </div>

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="hidden sm:block" aria-hidden="true">
        <div class="py-5">
            <div class="border-t border-gray-200"></div>
        </div>
    </div>

</x-layout>