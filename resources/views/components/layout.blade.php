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
    <!-- Header -->
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
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Students
                    </a>
                    <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">
                        Parents
                    </a>
                </nav>
                <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                    <a href="#" class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">
                        Sign in
                    </a>
                    <a href="#"
                        class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-500 hover:bg-blue-700">
                        Sign up
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->

    <div class="max-w-6xl mt-16 mx-auto">
        {{ $slot }}
    </div>

</body>

</html>