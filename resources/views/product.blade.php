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
    <div class="bg-indigo-600 px-4 py-3 text-white">
        <p class="text-center text-sm font-medium">
           Didn't find the product you were looking for?
           <a href="#" class="inline-block underline">Tell us about it!</a>
        </p>
     </div>
     
     <section class="max-w-screen-xl mx-auto my-4 p-4">
       <div class="bg-gray-900 p-10 rounded-lg shadow-lg flex">
           @foreach($product as $product)
          <img src="{{$product -> url_image_product}}" alt="Product Image" class="w-1/3 h-auto rounded mr-8">
          <div class="w-2/3">
             <h2 class="text-lg font-semibold mb-2">{{$product -> name_product}}</h2>
             <p class="text-neutral-300 mb-4">{{$product -> description_product}}</p>
             <p class="text-xl text-white font-semibold mb-6">Rp {{ number_format($product->price_product, 0, ',', '.') }}</p>
             <button class="bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700" id="add-to-cart-btn">Buy Now!</button>
          </div>
          @endforeach
       </div>
       <div id="popup" class="popup border-2 border-grey-900 rounded-lg bg-white p-8 w-1/4 shadow-xl absolute top-40 left-0 right-0 mx-auto hidden">
        <h2 class="text-lg font-bold text-gray-900">Confirm Your Purchase</h2>
        <p class="mt-2 text-sm text-gray-500">
            Are you sure you want to confirm your purchase?
        </p>
        <div class="mt-4 flex gap-2">
            <button type="button" class="rounded bg-blue-50 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-100">
                Yes, Confirm
            </button>
            <button type="button" class="rounded bg-gray-50 px-4 py-2 text-sm font-medium text-gray-600 hover:bg-slate-100" id="close-popup-btn">
                No, Continue Shopping
            </button>
        </div>
    </div>    
    </section>

    <section class="max-w-screen-xl mx-auto my-8 p-4 bg-gray-900 text-white rounded-lg">
       <div class="px-4 py-8 sm:px-6 sm:py-12 lg:px-8 lg:py-16">
           <div class="max-w-xl">
               <h2 class="text-3xl font-bold sm:text-4xl">What Makes Our Product Unique</h2>
               <p class="mt-4 text-gray-300">
                   Discover the features that set our product apart from the competition. With advanced technology and superior quality, we provide the best value for your investment.
               </p>
           </div>
   
           <div class="mt-8 grid grid-cols-1 gap-8 md:mt-16 md:grid-cols-2 md:gap-12 lg:grid-cols-3">
               <div class="flex items-start gap-4">
                   <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                       <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                           <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                       </svg>
                   </span>
                   <div>
                       <h2 class="text-lg font-bold">{{$product -> judul_1}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product -> desc_1}}
                       </p>
                   </div>
               </div>
   
               <div class="flex items-start gap-4">
                   <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                       <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                           <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                       </svg>
                   </span>
                   <div>
                       <h2 class="text-lg font-bold">{{$product -> judul_2}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product -> desc_2}}
                       </p>
                   </div>
               </div>
   
               <div class="flex items-start gap-4">
                   <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                       <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                           <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                       </svg>
                   </span>
                   <div>
                       <h2 class="text-lg font-bold">{{$product -> judul_3}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product -> desc_3}}
                       </p>
                   </div>
               </div>
   
               <div class="flex items-start gap-4">
                   <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                       <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                           <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                       </svg>
                   </span>
                   <div>
                       <h2 class="text-lg font-bold">{{$product -> judul_4}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product -> desc_4}}
                       </p>
                   </div>
               </div>
   
               <div class="flex items-start gap-4">
                   <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                       <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                           <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                       </svg>
                   </span>
                   <div>
                       <h2 class="text-lg font-bold">{{$product -> judul_5}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product -> desc_5}}
                       </p>
                   </div>
               </div>
   
               <div class="flex items-start gap-4">
                   <span class="shrink-0 rounded-lg bg-gray-800 p-4">
                       <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                           <path d="M12 14l9-5-9-5-9 5 9 5z"></path>
                           <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z"></path>
                           <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222"></path>
                       </svg>
                   </span>
                   <div>
                       <h2 class="text-lg font-bold">{{$product -> judul_6}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product -> desc_6}}
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </section>    
    
    @include('components.footer')
   </body>
   <script>
      document.querySelectorAll('.card').forEach(card => {
          card.addEventListener('click', () => {
              window.location.href = card.getAttribute('data-url');
          });
      });
    document.getElementById('add-to-cart-btn').addEventListener('click', function() {
       document.getElementById('popup').classList.remove('hidden');
    });
    document.getElementById('close-popup-btn').addEventListener('click', function() {
       document.getElementById('popup').classList.add('hidden');
    });
 </script>
</html>
