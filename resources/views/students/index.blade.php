<x-layout>

    <div class="text-right">
        <a href="{{ route('students.create') }}"
            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Add New Student</a>
    </div>

    <div class="table flex flex-col w-full mt-10">
        @foreach ($students as $student)
        <div class="student flex border border-gray-300 rounded-md p-5 mb-1">
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
                <div class="action text-sm font-medium text-blue-600 hover:text-blue-900">
                    Edit
                </div>
                <div class="action text-sm font-medium text-red-600 hover:text-red-900">
                    Delete
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="my-10">
        {{ $students->links() }}
    </div>

</x-layout>