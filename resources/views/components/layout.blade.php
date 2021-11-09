<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Iztudent</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.11/tailwind.min.css"
        integrity="sha512-x2cJ7AaAfneohxPgwnLNuG8QoQIarTu+GKmfKwVNJyGohutC647m9EUmB9bz/HBWzyjdz32WMkIx74eXHIsvhA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/ea157adf1a.js" crossorigin="anonymous"></script>
</head>

<body>
    @auth
    <div class="relative bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6">
            <div
                class="flex justify-between items-center border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
                <div class="flex justify-start lg:w-0 lg:flex-1">
                    <a href="{{ route('home') }}">
                        <span class="sr-only">Izumi</span>
                        <img class="h-8 w-auto sm:h-10" src="{{ asset('images/iztudent_logo2.jpg') }}" alt="">
                    </a>
                </div>
                <nav class="hidden md:flex space-x-10">
                    <a href="{{ route('home') }}" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Students
                    </a>
                    <a href="{{ route('parents.index') }}"
                        class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Parents
                    </a>
                </nav>
                @auth
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <div class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        {{ auth()->user()->name }}
                    </div>
                    <a href="javascript:{}" onclick="document.getElementById('logout-form').submit();"
                        class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-500 hover:bg-blue-700">
                        Sign Out
                    </a>
                </div>
                <form action="{{ route('logout') }}" method="POST" id="logout-form" class="hidden">
                    @csrf
                </form>
                @else
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <div class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">

                    </div>
                </div>
                @endauth

                {{--
                <a href="#" class="ml-8 whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                    {{ auth()->user()->name }}
                </a>
                <a href="javascript:{}" onclick="document.getElementById('logout-form').submit();"
                    class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 text-base font-medium text-gray-500 hover:text-gray-900">
                    Sign out
                </a>
                <form action="/logout" method="POST" id="logout-form" class="hidden">
                    @csrf
                </form> --}}
            </div>
        </div>
    </div>
    @endauth

    <div class="max-w-6xl my-16 mx-auto">
        {{ $slot }}
    </div>

    @if (session()->has('success'))
    <x-flash>{{ session('success') }}</x-flash>
    @endif

    <script>
        $(document).ready(function () {
            setTimeout(function () {
                $(".flash-message").hide();
            }, 3000);
        });
    </script>
</body>

</html>