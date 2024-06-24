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
               <a href="/home" class="text-sm font-semibold leading-6 text-gray-900">Home</a>
               <a href="/home" class="text-sm font-semibold leading-6 text-gray-900">Marketplace</a>
               <a href="/about" class="text-sm font-semibold leading-6 text-gray-900">About</a>
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
