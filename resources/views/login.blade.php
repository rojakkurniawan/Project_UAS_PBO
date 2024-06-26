<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Login Page</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        @vite('resources/css/app.css')
    </head>
    <body >
        <div class="font-sans antialiased h-screen flex items-center justify-center">
            <section class="bg-gray-900 flex rounded-2xl shadow-lg max-w-3xl">
                <div class="w-1/2 p-5 pl-10 ">
                    <h1 class="text-2xl pb-2 flex align-middle mt-10 text-white pt-10">Login Page</h1>
                    <p class="text-sm text-white ">If you're not member, please register in <a href="/register" class="text-yellow-500">here</a></p>
                    @if(Session::has('error'))
                        <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-6" role="alert">
                            {{ Session::get('error') }}
                        </div>
                    @endif
                    <form action="{{ route('login') }}" method="POST" class="mt-4">
                        @csrf
                        <div class="mb-4">
                            <label class="block text-sm mb-2 text-white" for="email">Email</label>
                            <input class="w-full px-3 py-2 text-black rounded-lg border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500" type="email" id="email" name="email" placeholder="Enter your email" required>
                        </div>
                        <div class="mb-4">
                            <label class="block text-sm mb-2 text-white" for="password">Password</label>
                            <input class="w-full px-3 py-2 text-black rounded-lg border border-gray-300 bg-white focus:outline-none focus:ring-2 focus:ring-yellow-500" type="password" id="password" name="password" placeholder="Enter your password" required>
                        </div>
                        <div class="flex items-center justify-between mb-4 text-white">
                            <div>
                                <input class="mr-2 border-white" type="checkbox" id="remember_me">
                                <label class="text-sm" for="remember_me">Remember me</label>
                            </div>
                            <a href="#" class="text-sm text-yellow-500">Forgot password?</a>
                        </div>
                        <button class="w-full bg-yellow-500 hover:bg-yellow-600 text-white py-2 rounded-lg" type="submit">Login</button>
                    </form>
                </div>
                <div class="w-1/2  p-5">
                    <img class="rounded-2xl" src="https://static.vecteezy.com/system/resources/previews/030/316/663/large_2x/cart-in-context-supermarket-shopping-cart-amidst-blurred-store-bokeh-atmosphere-vertical-mobile-wallpaper-ai-generated-free-photo.jpg" alt="">
                </div>
            </section>
        </div>
    </body>
</html>
