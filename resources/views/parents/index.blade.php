<x-layout>

    <div class="text-right">
        <a href="{{ route('parents.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Parent</a>
    </div>

    @if ($parents->count())
    <div class="table-header bg-gray-300 flex font-medium mb-1 mt-10 px-4 py-2 rounded-md text-md">
        <div class="w-8/12">
            Parents Information
        </div>
        <div class="w-4/12">

        </div>
    </div>
    <div class="table flex flex-col w-full">
        @foreach ($parents as $parent)
        <div class="parent flex border border-gray-300 rounded-md p-5 mb-1">
            <div class="column flex flex-col w-8/12 pr-0.5">
                <div class="info text-md text-gray-900 font-medium">
                    {{ $parent->name }}
                </div>
                <div class="info text-sm text-gray-700">
                    {{ $parent->contact_number }}
                </div>
                <div class="info text-sm text-gray-700">
                    {{ $parent->email }}
                </div>
            </div>
            <div class="column flex flex-col w-4/12">
                <a href="{{ route('parents.edit', ['parent' => $parent->id]) }}"
                    class="action text-sm font-medium text-blue-600 hover:text-blue-700">Edit</a>
                <div class="action">
                    <form action="{{ route('parents.destroy', ['parent' => $parent->id]) }}" method="POST"
                        class="parent-del-form">
                        @csrf
                        @method('DELETE')

                        <button
                            class="parent-del-btn text-sm font-medium text-red-600 hover:text-red-700">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p class="text-center mt-36">No parents found.</p>
    @endif

    <div class="mt-10">
        {{ $parents->links() }}
    </div>

</x-layout>

<script>
    $(document).ready(function() {
        $(".parent-del-btn").click(function (event) {
            event.preventDefault();

            let choice = confirm("Are you sure you want to delete this parent?");

            if (choice) {
                $(this).closest(".parent-del-form").submit();
            }
        });
    });
</script>