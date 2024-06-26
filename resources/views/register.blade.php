<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Register Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body class="font-sans antialiased h-screen  flex items-center justify-center">
        <div class="font-sans antialiased h-screen flex items-center justify-center">
            <section class="bg-gray-900 flex rounded-2xl shadow-lg max-w-3xl ">

                <div class="w-1/2 p-5 pl-10 ">
                    <h1 class="text-2xl pb-2 flex align-middle text-white">Register Page</h1>
                    <p class="text-sm text-white">If you're already a member, please log in <a href="/login" class="text-yellow-500">here</a></p>
                    @if(Session::has('success'))
                        <div class="p-4 mb-4 text-sm text-green-800 rounded-lg bg-green-50  mt-6" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form action="{{ route('register') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-sm mb-2 text-white" for="name">Name</label>
                            <input class="w-full px-3 py-2 text-black rounded-lg border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500" type="text" id="name" name="name" placeholder="Enter your fullname" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm mb-2 text-white" for="email">Email</label>
                            <input class="w-full px-3 py-2 text-black rounded-lg border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500" type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm mb-2 text-white " for="password">Password</label>
                            <input class="w-full px-3 py-2 text-black rounded-lg border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500" type="password" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="flex items-center justify-between mb-4">
                        </div>
                        <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded-lg" type="submit">Register</button>
                    </form>
                </div>
                <div class="w-1/2  p-5">
                    <img class="rounded-2xl mt-7" src="https://img.freepik.com/free-vector/sign-concept-illustration_114360-125.jpg" alt="">
                </div>
            </section>
            </div>
    </body>
</html>
