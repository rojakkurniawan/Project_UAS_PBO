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
         <section class="bg-gray-900 text-white">
            <div class="mx-auto max-w-screen-xl px-4 lg:flex py-32 lg:items-center">
               <div class="mx-auto max-w-3xl text-center">
                  <h1 class="bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 bg-clip-text text-3xl font-extrabold text-transparent sm:text-5xl">
                     Hyper Store
                     <span class="sm:block"> Increase Conversion. </span>
                  </h1>
                  <p class="mx-auto mt-4 max-w-xl sm:text-xl/relaxed">
                     Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nesciunt illo tenetur fuga ducimus numquam ea!
                  </p>
                  <div class="mt-8 flex flex-wrap justify-center gap-4">
                     <a class="block w-full rounded border border-blue-600 bg-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-transparent hover:text-white focus:outline-none focus:ring active:text-opacity-75 sm:w-auto" href="#">
                     Get Started
                     </a>
                     <a class="block w-full rounded border border-blue-600 px-12 py-3 text-sm font-medium text-white hover:bg-blue-600 focus:outline-none focus:ring active:bg-blue-500 sm:w-auto" href="#">
                     Learn More
                     </a>
                  </div>
               </div>
            </div>
         </section>
         <div class="bg-indigo-600 px-4 py-3 text-white">
            <p class="text-center text-sm font-medium">
               Didn't find the product you were looking for?
               <a href="#" class="inline-block underline">Tell us about it!</a>
            </p>
         </div>
         <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:gap-8 mb-10">
            <div class="mx-5 h-full mt-5">
               <div class="space-y-2">
                  <details class="rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                     <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                        <span class="text-sm font-medium">Availability</span>
                        <span class="transition group-open:-rotate-180">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                           </svg>
                        </span>
                     </summary>
                     <div class="border-t border-gray-200 bg-white">
                        <header class="flex items-center justify-between p-4">
                           <span class="text-sm text-gray-700">0 Selected</span>
                           <button type="button" class="text-sm text-gray-900 underline underline-offset-4">Reset</button>
                        </header>
                        <ul class="space-y-1 border-t border-gray-200 p-4">
                           <li>
                              <label for="FilterInStock" class="inline-flex items-center gap-2">
                              <input type="checkbox" id="FilterInStock" class="size-5 rounded border-gray-300" />
                              <span class="text-sm font-medium text-gray-700">In Stock (5+)</span>
                              </label>
                           </li>
                           <li>
                              <label for="FilterPreOrder" class="inline-flex items-center gap-2">
                              <input type="checkbox" id="FilterPreOrder" class="size-5 rounded border-gray-300" />
                              <span class="text-sm font-medium text-gray-700">Pre Order (3+)</span>
                              </label>
                           </li>
                           <li>
                              <label for="FilterOutOfStock" class="inline-flex items-center gap-2">
                              <input type="checkbox" id="FilterOutOfStock" class="size-5 rounded border-gray-300" />
                              <span class="text-sm font-medium text-gray-700">Out of Stock (10+)</span>
                              </label>
                           </li>
                        </ul>
                     </div>
                  </details>
                  <details class="rounded border border-gray-300 [&_summary::-webkit-details-marker]:hidden">
                     <summary class="flex cursor-pointer items-center justify-between gap-2 bg-white p-4 text-gray-900 transition">
                        <span class="text-sm font-medium">Price</span>
                        <span class="transition group-open:-rotate-180">
                           <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-4 w-4">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                           </svg>
                        </span>
                     </summary>
                     <div class="border-t border-gray-200 bg-white">
                        <header class="flex items-center justify-between p-4">
                           <span class="text-sm text-gray-700">The highest price is $600</span>
                           <button type="button" class="text-sm text-gray-900 underline underline-offset-4">Reset</button>
                        </header>
                        <div class="border-t border-gray-200 p-4">
                           <div class="flex justify-between gap-4">
                              <label for="FilterPriceFrom" class="flex items-center gap-2">
                                 <span class="text-sm text-gray-600">$</span>
                                 <input type="number" id="FilterPriceFrom" placeholder="From" class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                              </label>
                              <label for="FilterPriceTo" class="flex items-center gap-2">
                                 <span class="text-sm text-gray-600">$</span>
                                 <input type="number" id="FilterPriceTo" placeholder="To" class="w-full rounded-md border-gray-200 shadow-sm sm:text-sm" />
                              </label>
                           </div>
                        </div>
                     </div>
                  </details>
               </div>
            </div>
            <div class="h-full rounded-lg mt-5 lg:col-span-2 lg:mx-5">
               <div class="grid grid-cols-1 lg:grid-cols-3 gap-5">
                  <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                     <a href="#!">
                        <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                     </a>
                     <div class="p-6">
                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">Explore the hidden beauty</h5>
                        <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                           Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                           shadows.
                        </p>
                        <a href="#" class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Book now
                        </a>
                     </div>
                  </div>
                  <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                     <a href="#!">
                        <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                     </a>
                     <div class="p-6">
                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">Explore the hidden beauty</h5>
                        <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                           Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                           shadows.
                        </p>
                        <a href="#" class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Book now
                        </a>
                     </div>
                  </div>
                  <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                     <a href="#!">
                        <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                     </a>
                     <div class="p-6">
                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">Explore the hidden beauty</h5>
                        <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                           Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                           shadows.
                        </p>
                        <a href="#" class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Book now
                        </a>
                     </div>
                  </div>
                  <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                     <a href="#!">
                        <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                     </a>
                     <div class="p-6">
                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">Explore the hidden beauty</h5>
                        <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                           Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                           shadows.
                        </p>
                        <a href="#" class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Book now
                        </a>
                     </div>
                  </div>
                  <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                     <a href="#!">
                        <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                     </a>
                     <div class="p-6">
                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">Explore the hidden beauty</h5>
                        <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                           Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                           shadows.
                        </p>
                        <a href="#" class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Book now
                        </a>
                     </div>
                  </div>
                  <div class="block rounded-xl bg-white shadow-md dark:bg-neutral-700 text-center">
                     <a href="#!">
                        <img class="rounded-t-xl" src="https://tecdn.b-cdn.net/img/new/standard/nature/184.jpg" alt="" />
                     </a>
                     <div class="p-6">
                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">Explore the hidden beauty</h5>
                        <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                           Explore the captivating beauty of Antelope Canyon's red sandstone formations and intricate play of light and
                           shadows.
                        </p>
                        <a href="#" class="mt-3 inline-block rounded bg-blue-500 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-blue-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-blue-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-blue-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
                        Book now
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="mt-10" id="footers">
            <div class="mx-auto max-w-screen-xl px-4 py-12 sm:px-6 md:py-16 lg:px-8">
               <div class="mx-auto max-w-3xl text-center">
                  <h2 class="text-3xl font-bold text-gray-900 sm:text-4xl">Trusted by eCommerce Businesses</h2>
                  <p class="mt-4 text-gray-500 sm:text-xl">
                     Lorem ipsum dolor sit amet consectetur adipisicing elit. Ratione dolores laborum labore
                     provident impedit esse recusandae facere libero harum sequi.
                  </p>
               </div>
               <div class="mt-8 sm:mt-12">
                  <dl class="grid grid-cols-1 gap-4 sm:grid-cols-3">
                     <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">Total Sales</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">$4.8m</dd>
                     </div>
                     <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">Official Addons</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">24</dd>
                     </div>
                     <div class="flex flex-col rounded-lg bg-blue-50 px-4 py-8 text-center">
                        <dt class="order-last text-lg font-medium text-gray-500">Total Addons</dt>
                        <dd class="text-4xl font-extrabold text-blue-600 md:text-5xl">86</dd>
                     </div>
                  </dl>
               </div>
            </div>
         </div>
         <footer class="bg-white lg:grid lg:grid-cols-5 dark:bg-gray-900">
            <div class="relative block h-32 lg:col-span-2 lg:h-full">
              <img
                src="https://images.unsplash.com/photo-1642370324100-324b21fab3a9?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1548&q=80"
                alt=""
                class="absolute inset-0 h-full w-full object-cover"
              />
            </div>
          
            <div class="px-4 py-16 sm:px-6 lg:col-span-3 lg:px-8">
              <div class="grid grid-cols-1 gap-8 sm:grid-cols-2">
                <div>
                  <p>
                    <span class="text-xs uppercase tracking-wide text-gray-500 dark:text-gray-400">
                      Call us
                    </span>
          
                    <a
                      href="#"
                      class="block text-2xl font-medium text-gray-900 hover:opacity-75 sm:text-3xl dark:text-white"
                    >
                      0123456789
                    </a>
                  </p>
          
                  <ul class="mt-8 space-y-1 text-sm text-gray-700 dark:text-gray-200">
                    <li>Monday to Friday: 10am - 5pm</li>
                    <li>Weekend: 10am - 3pm</li>
                  </ul>
          
                  <ul class="mt-8 flex gap-6">
                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                      >
                        <span class="sr-only">Facebook</span>
          
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>
          
                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                      >
                        <span class="sr-only">Instagram</span>
          
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>
          
                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                      >
                        <span class="sr-only">Twitter</span>
          
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"
                          />
                        </svg>
                      </a>
                    </li>
          
                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                      >
                        <span class="sr-only">GitHub</span>
          
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>
          
                    <li>
                      <a
                        href="#"
                        rel="noreferrer"
                        target="_blank"
                        class="text-gray-700 transition hover:opacity-75 dark:text-gray-200"
                      >
                        <span class="sr-only">Dribbble</span>
          
                        <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                          <path
                            fill-rule="evenodd"
                            d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                            clip-rule="evenodd"
                          />
                        </svg>
                      </a>
                    </li>
                  </ul>
                </div>
          
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                  <div>
                    <p class="font-medium text-gray-900 dark:text-white">Services</p>
          
                    <ul class="mt-6 space-y-4 text-sm">
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                          1on1 Coaching
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                          Company Review
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                          Accounts Review
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                          HR Consulting
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                          SEO Optimisation
                        </a>
                      </li>
                    </ul>
                  </div>
          
                  <div>
                    <p class="font-medium text-gray-900 dark:text-white">Company</p>
          
                    <ul class="mt-6 space-y-4 text-sm">
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                          About
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                          Meet the Team
                        </a>
                      </li>
          
                      <li>
                        <a href="#" class="text-gray-700 transition hover:opacity-75 dark:text-gray-200">
                          Accounts Review
                        </a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
          
              <div class="mt-12 border-t border-gray-100 pt-12 dark:border-gray-800">
                <div class="sm:flex sm:items-center sm:justify-between">
                  <ul class="flex flex-wrap gap-4 text-xs">
                    <li>
                      <a href="#" class="text-gray-500 transition hover:opacity-75 dark:text-gray-400">
                        Terms & Conditions
                      </a>
                    </li>
          
                    <li>
                      <a href="#" class="text-gray-500 transition hover:opacity-75 dark:text-gray-400">
                        Privacy Policy
                      </a>
                    </li>
          
                    <li>
                      <a href="#" class="text-gray-500 transition hover:opacity-75 dark:text-gray-400">
                        Cookies
                      </a>
                    </li>
                  </ul>
          
                  <p class="mt-8 text-xs text-gray-500 sm:mt-0 dark:text-gray-400">
                    &copy; 2022. Company Name. All rights reserved.
                  </p>
                </div>
              </div>
            </div>
          </footer>
   </body>
</html>