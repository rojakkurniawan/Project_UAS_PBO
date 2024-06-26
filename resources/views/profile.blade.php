<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    @vite('resources/css/app.css')
    <link rel=”icon” href=”https://i.ibb.co/D8DDFFN/1719337919935.png”>
</head>
<body class="bg-gray-100">
    @include('components.navbar')

    <div class="flex justify-center items-center min-h-screen">
        <div class="container mx-auto px-4 py-8 bg-white shadow-md rounded-lg w-full md:w-1/2">
            <div class="px-4 sm:px-0">
                <h3 class="text-base font-semibold leading-7 text-gray-900 text-center">Profile</h3>
                <p class="mt-1 max-w-2xl text-sm leading-6 text-gray-500">Personal details.</p>
            </div>
            <div class="border-t border-gray-100">
                @if (session('status'))
                    <div class="text-green-500 text-sm mb-4 mt-4">
                        {{ session('status') }}
                    </div>
                @endif
                @if ($errors->any())
                    <div class="text-red-500 text-sm mb-4 mt-4">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <form class=" space-y-6" action="{{ route('profile.update-profile') }}" method="POST">
                    @csrf
                    <div class="flex flex-col">
                        <label for="name" class="text-sm font-medium text-gray-700 ">Name</label>
                        <input type="text" value="{{ Auth::user()->name }}" id="name" name="name" class="bg-white text-gray-900 mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="flex flex-col">
                        <label for="email" class="text-sm font-medium text-gray-700 ">Email</label>
                        <input type="email" value="{{ Auth::user()->email }}" id="email" name="email" class="bg-white text-gray-900 mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="flex flex-col">
                        <label for="current-password" class="text-sm font-medium text-gray-700 ">Current Password</label>
                        <input type="password" id="current-password" name="current_password" class="bg-white text-gray-900 mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="flex flex-col">
                        <label for="new-password" class="text-sm font-medium text-gray-700 ">New Password</label>
                        <input type="password" id="new-password" name="new_password" class="bg-white text-gray-900 mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div class="flex flex-col">
                        <label for="confirm-password" class="text-sm font-medium text-gray-700 ">Confirm New Password</label>
                        <input type="password" id="confirm-password" name="new_password_confirmation" class="bg-white text-gray-900 mt-1 px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    </div>
                    <div>
                        <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Save Changes
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
