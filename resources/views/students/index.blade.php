<x-layout>

    <div class="flex items-center justify-between">
        <div class="flex border-2 border-gray-200 rounded">
            <form method="GET" action="#">
                <input type="text" name="search" class="px-4 py-2 w-80" placeholder="Search"
                    value="{{ request('search') }}">
                <button type="submit"
                    class="bg-blue-500 border border-transparent focus:outline-none font-medium h-full hover:bg-blue-700 px-4 py-2 rounded-sm shadow-sm text-white">
                    Search</button>
            </form>
        </div>

        <a href="{{ route('students.create') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Student</a>
    </div>

    @if ($students->count())
    <div class="table-header bg-gray-300 flex font-medium mb-1 mt-10 px-4 py-2 rounded-md text-md">
        <div class="w-4/12">
            Student Information
        </div>
        <div class="w-3/12">
            Parents
        </div>
        <div class="w-3/12">
            Courses
        </div>
        <div class="w-2/12">

        </div>
    </div>
    <div class="table flex flex-col w-full">
        @foreach ($students as $student)
        <div
            class="student flex border border-gray-300 rounded-md p-5 mb-1{{ ($loop->index % 2 == 0 ? '' : ' bg-gray-100') }}">
            <div class="column flex flex-col w-4/12 pr-0.5">
                <div class="info text-md text-gray-900 font-medium">
                    {{ $student->name }}
                </div>
                <div class="info text-sm text-gray-700">
                    {{ $student->contact_number }}
                </div>
                <div class="info text-sm text-gray-700">
                    {{ $student->email }}
                </div>
                <div class="info text-sm text-gray-700">
                    {{ $student->address }}
                </div>
            </div>
            <div class="column flex flex-col w-3/12">
                @foreach ($student->parents as $parent)
                <div class="course text-sm text-gray-900">
                    {{ $parent->name }}
                </div>
                @endforeach
            </div>
            <div class="column flex flex-col w-3/12">
                @foreach ($student->courses as $course)
                <div class="course text-sm text-gray-900">
                    {{ $course->name }}
                </div>
                @endforeach
            </div>
            <div class="column flex flex-col w-2/12">
                <a href="{{ route('students.edit', ['student' => $student->id]) }}"
                    class="action text-sm font-medium text-blue-600 hover:text-blue-700">Edit</a>
                <div class="action">
                    <form action="{{ route('students.destroy', ['student' => $student->id]) }}" method="POST"
                        class="student-del-form">
                        @csrf
                        @method('DELETE')

                        <button
                            class="student-del-btn text-sm font-medium text-red-600 hover:text-red-700">Delete</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    @else
    <p class="text-center mt-36">No students found.</p>
    @endif

    <div class="mt-10">
        {{ $students->links() }}
    </div>

</x-layout>

<script>
    $(document).ready(function() {
        $(".student-del-btn").click(function (event) {
            event.preventDefault();

            let choice = confirm("Are you sure you want to delete this student?");

            if (choice) {
                $(this).closest(".student-del-form").submit();
            }
        });
    });
</script>