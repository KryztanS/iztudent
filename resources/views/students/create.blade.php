<x-layout>

    <div class="my-10 sm:mt-0">
        <x-back-button link="{{ route('home') }}">Back to Students</x-back-button>

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
                                        class="p-3 border mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>
                                @error("name")
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="contact_number" class="block text-sm font-medium text-gray-700">Contact
                                        Number</label>
                                    <input type="text" name="contact_number" id="contact_number"
                                        class="p-3 border mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>
                                @error("contact_number")
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                    <input type="text" name="email" id="email" autocomplete="email"
                                        class="p-3 border mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>
                                @error("email")
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror

                                <div class="col-span-6 sm:col-span-4">
                                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                                    <input type="text" name="address" id="address" autocomplete="address"
                                        class="p-3 border mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
                                        required>
                                </div>
                                @error("address")
                                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="shadow overflow-hidden sm:rounded-md mb-3">
                        <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                            <div class="flex items-end">
                                <div class="w-1/2">
                                    <label for="parent"
                                        class="block text-base font-medium text-gray-900 mb-3">Parents</label>
                                    <select id="parent" name="parent"
                                        class="select-parent mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                                        @foreach ($parents as $parent)
                                        <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <button type="button"
                                    class="add-parent-btn bg-blue-500 border border-transparent focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 
                                        font-medium h-full hover:bg-blue-700 px-4 py-2 rounded-md shadow-sm text-sm text-white ml-5">
                                    Add Parent</button>
                            </div>

                            <input class="parent-ids" type="hidden" name="parent_ids" value="[]">
                            @error("parent_ids")
                            <p class="text-red-500 text-sm mt-2">Invalid value submitted.</p>
                            @enderror

                            <div class="parents-container">
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

                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6 mt-0.5">
                        <button type="submit"
                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-blue-500 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                            Save
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layout>

<script>
    $(document).ready(function() {
        $('.add-parent-btn').click(function() {
            let parentsArray = JSON.parse($('.parent-ids').val());

            let parentId = $('.select-parent').val();

            if(parentsArray.includes(parentId)){
                return;
            }

            parentsArray.push(parentId);
            $('.parent-ids').val(JSON.stringify(parentsArray));

            let parentName = $('.select-parent option:selected').text();
            let parentElement = `<div
                class="parent w-1/2 flex justify-between items-center border border-gray-300 p-2 rounded-md mb-2" data-parent="` + parentId + `">
                <div class="parent-name text-sm font-medium">` + parentName + `</div><button
                    type="button" class="parent-remove inline-flex justify-center py-0.5 px-2 border border-transparent shadow-sm text-sm font-medium 
                rounded-md text-white bg-red-500 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 
                focus:ring-red-500 ml-5">x</button>
            </div>`;

            $('.parents-container').append(parentElement);
        });

        $('body').on('click', '.parent-remove', function() {
            $(this).closest('.parent').remove();

            let parentsArray = [];
            $('.parent').each(function(index) {
                let parentId = $(this).data('parent');

                parentsArray.push(parentId);
            });

            $('.parent-ids').val(JSON.stringify(parentsArray));
        });

    });
</script>