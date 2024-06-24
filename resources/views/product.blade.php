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
      
      <section class="max-w-screen-xl mx-auto my-8 p-4">
        <div class="bg-white p-10 rounded-lg shadow-lg flex">
            @foreach($product as $product)
           <img src="{{$product -> url_image_product}}" alt="Product Image" class="w-1/3 h-auto rounded mr-8">
           <div class="w-2/3">
              <h2 class="text-lg font-semibold mb-2">{{$product -> name_product}}</h2>
              <p class="text-gray-700 mb-4">{{$product -> description_product}}</p>
              <p class="text-xl text-gray-700 font-semibold mb-6">Rp {{ number_format($product->price_product, 0, ',', '.') }}</p>
              <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700" id="add-to-cart-btn">Buy now!</button>
           </div>
           @endforeach
        </div>
        <div id="popup" class="popup rounded-lg bg-white p-8 w-1/4 shadow-2xl absolute top-40 left-0 right-0 mx-auto hidden">
            <h2 class="text-lg font-bold">Product added to cart!</h2>
            <p class="mt-2 text-sm text-gray-500">
               You have successfully added the product to your cart.
            </p>
            <div class="mt-4 flex gap-2">
               <button type="button" class="rounded bg-blue-50 px-4 py-2 text-sm font-medium text-blue-600 hover:bg-blue-100">
                  Go to Cart
               </button>
               <button type="button" class="rounded bg-gray-50 px-4 py-2 text-sm font-medium text-gray-600 hover:bg-slate-100" id="close-popup-btn">
                  Continue Shopping
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
                        <h2 class="text-lg font-bold">Advanced Technology</h2>
                        <p class="mt-1 text-sm text-gray-300">
                            Our product is equipped with the latest technology to ensure high performance and reliability in all conditions.
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
                        <h2 class="text-lg font-bold">Superior Quality</h2>
                        <p class="mt-1 text-sm text-gray-300">
                            We use only the highest quality materials to ensure durability and longevity of our product.
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
                        <h2 class="text-lg font-bold">Customer Satisfaction</h2>
                        <p class="mt-1 text-sm text-gray-300">
                            Our top priority is ensuring our customers are completely satisfied with their purchase.
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
                        <h2 class="text-lg font-bold">Eco-Friendly</h2>
                        <p class="mt-1 text-sm text-gray-300">
                            Our product is designed with sustainability in mind, using eco-friendly materials and processes.
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
                        <h2 class="text-lg font-bold">Affordable Pricing</h2>
                        <p class="mt-1 text-sm text-gray-300">
                            We offer competitive pricing without compromising on quality, ensuring you get the best value for your money.
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
                        <h2 class="text-lg font-bold">Excellent Support</h2>
                        <p class="mt-1 text-sm text-gray-300">
                            Our dedicated support team is available 24/7 to assist you with any questions or issues you may have.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>    

     <section class="max-w-screen-xl mx-auto my-8 p-8 bg-gray-900 text-white rounded-lg ">
        <div class="space-y-4">
            <details class="group border-s-4 border-grey-50 p-6 rounded-lg [&_summary::-webkit-details-marker]:hidden" open>
                <summary class="flex cursor-pointer items-center justify-between gap-1.5">
                    <h2 class="text-lg font-medium text-white">
                        Product Features and Specifications
                    </h2>
                    <span class="shrink-0 rounded-full bg-gray-900 text-white p-1.5 sm:p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>
                <p class="mt-4 leading-relaxed text-white">
                    This product is designed with the latest technology, ensuring high performance and reliability. It includes various features such as high-speed connectivity, long-lasting battery life, and a sleek, modern design. The specifications are tailored to meet the needs of both professionals and casual users, offering a versatile and efficient solution for everyday use.
                </p>
            </details>
    
            <details class="group border-s-4 border-grey-50 p-6 rounded-lg [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between gap-1.5">
                    <h2 class="text-lg font-medium text-white">
                        Customer Reviews and Feedback
                    </h2>
                    <span class="shrink-0 rounded-full bg-gray-900 text-white p-1.5 sm:p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>
                <p class="mt-4 leading-relaxed text-white">
                    Our customers love this product! It has received numerous positive reviews for its performance, durability, and stylish design. Many users have praised its ease of use and the value it provides for its price. We always welcome feedback from our customers to continuously improve and deliver the best products in the market.
                </p>
            </details>
    
            <details class="group border-s-4 border-grey-50 p-6 rounded-lg [&_summary::-webkit-details-marker]:hidden">
                <summary class="flex cursor-pointer items-center justify-between gap-1.5">
                    <h2 class="text-lg font-medium text-white">
                        Warranty and Support Information
                    </h2>
                    <span class="shrink-0 rounded-full bg-gray-900 text-white p-1.5 sm:p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5 shrink-0 transition duration-300 group-open:-rotate-45" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a 1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a 1 1 0 011-1z" clip-rule="evenodd" />
                        </svg>
                    </span>
                </summary>
                <p class="mt-4 leading-relaxed text-white">
                    We stand behind the quality of our products and offer a comprehensive warranty to ensure your satisfaction. This product comes with a one-year warranty that covers any manufacturing defects. Additionally, our customer support team is available 24/7 to assist you with any questions or issues you may encounter. Your satisfaction is our top priority.
                </p>
            </details>
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
