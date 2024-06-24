<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home</title>
      @vite('resources/css/app.css')
      <style>
         .cursor-pointer {
            cursor: pointer;
         }
      </style>
   </head>
   <body>
    @include('components.navbar')
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
                  
                  @foreach($product as $product)
                  <div class="card block rounded-xl bg-white shadow-md dark:bg-neutral-700 hover:scale-105 text-center" data-url="/product/{{$product -> id_product}}">
                     <a href="#!">
                        <img class="rounded-t-xl" src="{{$product -> url_image_product}}" alt="{{$product -> name_product}}" />
                     </a>
                     <div class="p-6 cursor-pointer">
                        <h5 class="mb-2 text-xl font-bold tracking-wide text-neutral-800 dark:text-neutral-50">{{$product -> name_product}}</h5>
                        <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300">
                           {{$product -> description_product}}
                        </p>
                        <p class="mb-2 text-base text-neutral-500 dark:text-neutral-300 font-bold">
                           Price: Rp {{ number_format($product->price_product, 0, ',', '.') }}
                        </p>
                     </div>
                  </div>
                  @endforeach
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
         @include('components.footer')
   </body>

   <script>
      document.querySelectorAll('.card').forEach(card => {
          card.addEventListener('click', () => {
              window.location.href = card.getAttribute('data-url');
          });
      });
  </script>
</html>