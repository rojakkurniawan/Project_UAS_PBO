<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home</title>
      @vite('resources/css/app.css')
   </head>
   <body>
      <header class="bg-white">
         <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
            <div class="flex lg:flex-1">
               <a href="#" class="-m-1.5 p-1.5">
               <span class="sr-only">Your Company</span>
               <img class="h-8 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
               </a>
            </div>
            <div class="flex lg:hidden">
               <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                  <span class="sr-only">Open main menu</span>
                  <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                     <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
               </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
               <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
               <a href="#" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
               <a href="#" class="text-sm font-semibold leading-6 text-gray-900">About</a>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
               <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger text-sm font-semibold leading-6 text-gray-900" type="submit">Logout<span aria-hidden="true">&rarr;</span></button>
               </form>
            </div>
         </nav>
      </header>
      <div>
         <div class="grid grid-cols-6 gap-5">
            <div></div>
            <div>
               <!-- Card -->
               <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                  <!-- Card image -->
                  <a href="#!">
                  <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                  </a>
                  <!-- Card body -->
                  <div class="p-6">
                     <!-- Title -->
                     <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">
                        Explore the hidden beauty
                     </h5>
                     <!-- Text -->
                     <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                        Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                        shadows.
                     </p>
                     <!-- Button -->
                     <a href="#"
                        class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                     Book now
                     </a>
                  </div>
               </div>
               <!-- Card -->
            </div>
            <div>
               <!-- Card -->
               <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                  <!-- Card image -->
                  <a href="#!">
                  <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                  </a>
                  <!-- Card body -->
                  <div class="p-6">
                     <!-- Title -->
                     <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">
                        Explore the hidden beauty
                     </h5>
                     <!-- Text -->
                     <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                        Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                        shadows.
                     </p>
                     <!-- Button -->
                     <a href="#"
                        class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                     Book now
                     </a>
                  </div>
               </div>
               <!-- Card -->
            </div>
            <div>
               <!-- Card -->
               <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                  <!-- Card image -->
                  <a href="#!">
                  <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                  </a>
                  <!-- Card body -->
                  <div class="p-6">
                     <!-- Title -->
                     <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">
                        Explore the hidden beauty
                     </h5>
                     <!-- Text -->
                     <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                        Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                        shadows.
                     </p>
                     <!-- Button -->
                     <a href="#"
                        class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                     Book now
                     </a>
                  </div>
               </div>
               <!-- Card -->
            </div>
            <div>
               <!-- Card -->
               <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                  <!-- Card image -->
                  <a href="#!">
                  <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                  </a>
                  <!-- Card body -->
                  <div class="p-6">
                     <!-- Title -->
                     <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">
                        Explore the hidden beauty
                     </h5>
                     <!-- Text -->
                     <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                        Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                        shadows.
                     </p>
                     <!-- Button -->
                     <a href="#"
                        class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                     Book now
                     </a>
                  </div>
               </div>
               <!-- Card -->
            </div>
            <div></div>
         </div>
      </div>
   </body>
</html>