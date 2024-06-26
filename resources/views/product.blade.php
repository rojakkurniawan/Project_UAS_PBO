<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home</title>
      @vite('resources/css/app.css')
      <link rel="icon" href="https://i.ibb.co/D8DDFFN/1719337919935.png">
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
            <div class="flex flex-col md:flex-row md:items-center">
            <img src="{{$product->url_image_product}}" alt="Product Image" class="md:w-1/3 md:h-auto w-full h-auto rounded mr-8">
            <div class="w-full">
                <h2 class="text-lg font-semibold text-white mb-2 mt-5">{{$product->name_product}}</h2>
                <p class="text-neutral-300 mb-4">{{$product->description_product}}</p>
                <p class="text-xl text-white font-semibold mb-6">Rp {{ number_format($product->price_product, 0, ',', '.') }}</p>
                <div class="flex flex-col md:flex-row md:items-center">
                    <button class="btn bg-blue-900 text-white px-4 py-2 rounded hover:bg-blue-700 w-full md:w-auto border-0" 
                            onclick="showModal({{ $product->id_product }}, '{{ $product->name_product }}', '{{ $product->url_image_product }}', '{{ $product->description_product }}', {{ $product->price_product }})">Buy Now</button>
                </div>
            </div>
        </div>
            @endforeach
        </div>
        
        <dialog id="my_modal_4" class="modal">
            <div class="modal-box w-11/12 max-w-5xl">
              <h3 class="text-lg font-bold">Confirm Your Purchase</h3>
              <p class="py-4">Are you sure you want to confirm your purchase?</p>
              <div class="modal-action">
                <form method="dialog">
                  <button class="btn bg-blue-900 text-white hover:bg-blue-700" type="button" id="confirm-purchase-btn">Confirm</button>
                  <button class="btn">Close</button>
                </form>
              </div>
            </div>
        </dialog>
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
                       <h2 class="text-lg font-bold">{{$product->judul_1}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product->desc_1}}
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
                       <h2 class="text-lg font-bold">{{$product->judul_2}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product->desc_2}}
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
                       <h2 class="text-lg font-bold">{{$product->judul_3}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product->desc_3}}
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
                       <h2 class="text-lg font-bold">{{$product->judul_4}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product->desc_4}}
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
                       <h2 class="text-lg font-bold">{{$product->judul_5}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product->desc_5}}
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
                       <h2 class="text-lg font-bold">{{$product->judul_6}}</h2>
                       <p class="mt-1 text-sm text-gray-300">
                        {{$product->desc_6}}
                       </p>
                   </div>
               </div>
           </div>
       </div>
   </section>    
    
    @include('components.footer')
   </body>
   <script>
    function showModal(id, name, urlImage, description, price) {
        document.getElementById('confirm-purchase-btn').setAttribute('data-id', id);
        document.getElementById('confirm-purchase-btn').setAttribute('data-name', name);
        document.getElementById('confirm-purchase-btn').setAttribute('data-url-image', urlImage);
        document.getElementById('confirm-purchase-btn').setAttribute('data-description', description);
        document.getElementById('confirm-purchase-btn').setAttribute('data-price', price);
        document.getElementById('my_modal_4').showModal();
    }

    document.getElementById('confirm-purchase-btn').addEventListener('click', function() {
        const id = this.getAttribute('data-id');
        const name = this.getAttribute('data-name');
        const urlImage = this.getAttribute('data-url-image');
        const description = this.getAttribute('data-description');
        const price = this.getAttribute('data-price');
        
        const url = new URL(window.location.origin + '/checkout');
        url.searchParams.set('id', id);
        url.searchParams.set('name', name);
        url.searchParams.set('url_image', urlImage);
        url.searchParams.set('description', description);
        url.searchParams.set('price', price);

        window.location.href = url.toString();
    });
 </script>
</html>
