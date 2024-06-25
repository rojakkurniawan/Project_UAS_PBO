<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Landing Page</title>
      @vite('resources/css/app.css')
      <style>
         .cursor-pointer {
            cursor: pointer;
         }
      </style>
   </head>
   <body class="bg-white">
        <section
            class="relative overflow-hidden bg-gradient-to-b from-blue-50 via-transparent to-transparent pb-12 pt-20 sm:pb-16 sm:pt-32 lg:pb-24 xl:pb-32 xl:pt-40">
            <div class="relative z-10">
                <div
                    class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]">
                    <svg class="h-[60rem] w-[100rem] flex-none stroke-blue-600 opacity-20" aria-hidden="true">
                        <defs>
                            <pattern id="e9033f3e-f665-41a6-84ef-756f6778e6fe" width="200" height="200" x="50%" y="50%"
                                patternUnits="userSpaceOnUse" patternTransform="translate(-100 0)">
                                <path d="M.5 200V.5H200" fill="none"></path>
                            </pattern>
                        </defs>
                        <svg x="50%" y="50%" class="overflow-visible fill-blue-50">
                            <path d="M-300 0h201v201h-201Z M300 200h201v201h-201Z" stroke-width="0"></path>
                        </svg>
                        <rect width="100%" height="100%" stroke-width="0" fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)">
                        </rect>
                    </svg>
                </div>
            </div>
            <div class="relative z-20 mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl text-center">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                        Welcome to
                        <span class="text-blue-600">FutureTech Store!</span>
                    </h1>
                    <h2 class="mt-6 text-lg leading-8 text-gray-600">
                        We offer a wide selection of electronic products to meet your needs. Browse our collection and easily find the product you are looking for.
                    </h2>
                    <div class="mt-10 flex items-center justify-center gap-x-6">
                        <a class="isomorphic-link isomorphic-link--internal inline-flex items-center justify-center gap-2 rounded-xl bg-blue-600 px-4 py-3 text-sm font-semibold text-white shadow-sm transition-all duration-150 hover:bg-blue-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600"
                            href="/home">Shop Now
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                <div class="relative mx-auto mt-10 max-w-lg">
                    <img class="w-full rounded-2xl border border-gray-100 shadow" src="https://images.samsung.com/id/smartphones/galaxy-s23-ultra/images/galaxy-s23-ultra-highlights-kv.jpg" alt="">
                </div>
            </div>
        </section>

        <section>
            <div class="relative z-10">
                <div
                    class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]">
                    <svg class="h-[60rem] w-[100rem] flex-none stroke-blue-600 opacity-20" aria-hidden="true">
                        <defs>
                            <pattern id="e9033f3e-f665-41a6-84ef-756f6778e6fe" width="200" height="200" x="50%" y="50%"
                                patternUnits="userSpaceOnUse" patternTransform="translate(-100 0)">
                                <path d="M.5 200V.5H200" fill="none"></path>
                            </pattern>
                        </defs>
                        <svg x="50%" y="50%" class="overflow-visible fill-blue-50">
                            <path d="M-300 0h201v201h-201Z M300 200h201v201h-201Z" stroke-width="0"></path>
                        </svg>
                        <rect width="100%" height="100%" stroke-width="0" fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)">
                        </rect>
                    </svg>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Another Product
                    <span class="text-blue-600"> Another Happiness</span>
                </h1>
                <h2 class="mt-6 text-lg leading-8 text-gray-600">
                    please see other available products.
                </h2>
            </div>
            <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
              <div class="grid grid-cols-1 gap-4 lg:grid-cols-3 lg:items-stretch">
                <div class="grid place-content-center rounded bg-gray-100 p-6 sm:p-8 rounded-lg">
                  <div class="mx-auto max-w-md text-center lg:text-left">
                    <header>
                      <h2 class="text-xl font-bold text-gray-900 sm:text-3xl">Another Products</h2>
          
                      <p class="mt-4 text-gray-500">
                        Don't stop here! Visit our store to explore a wide selection of electronics from various renowned brands that will surely fulfill all your needs.
                      </p>
                    </header>
          
                    <a
                      href="/home"
                      class="mt-8 inline-block rounded-lg border border-gray-900 bg-gray-900 px-12 py-3 text-sm font-medium text-white transition hover:shadow focus:outline-none focus:ring"
                    >
                      See another products
                    </a>
                  </div>
                </div>
          
                <div class="lg:col-span-2 lg:py-8">
                  <ul class="grid grid-cols-2 gap-4">
                    <li>
                      <a href="#" class="group block">
                        <img
                          src="https://static.promediateknologi.id/crop/0x0:0x0/750x500/webp/photo/p1/900/2023/12/29/ASUS-Vivobook-Pro-16X-OLED-K6604-101-2441151266.jpg"
                          alt=""
                          class="aspect-square w-full rounded-lg object-cover"
                        />
          
                        <div class="mt-3">
                          <h3
                            class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4"
                          >
                          Asus Vivobook Pro 16X
                          </h3>
                        </div>
                      </a>
                    </li>
          
                    <li>
                      <a href="#" class="group block">
                        <img
                          src="https://cybershack.com.au/wp-content/uploads/2023/10/OPPO-FN3F-header.jpg"
                          alt=""
                          class="aspect-square w-full rounded object-cover"
                        />
          
                        <div class="mt-3">
                          <h3
                            class="font-medium text-gray-900 group-hover:underline group-hover:underline-offset-4"
                          >
                          OPPO Find N3
                          </h3>
                        </div>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </section>

          <section>
            <div class="relative z-10">
                <div
                    class="absolute inset-x-0 top-1/2 -z-10 flex -translate-y-1/2 justify-center overflow-hidden [mask-image:radial-gradient(50%_45%_at_50%_55%,white,transparent)]">
                    <svg class="h-[60rem] w-[100rem] flex-none stroke-blue-600 opacity-20" aria-hidden="true">
                        <defs>
                            <pattern id="e9033f3e-f665-41a6-84ef-756f6778e6fe" width="200" height="200" x="50%" y="50%"
                                patternUnits="userSpaceOnUse" patternTransform="translate(-100 0)">
                                <path d="M.5 200V.5H200" fill="none"></path>
                            </pattern>
                        </defs>
                        <svg x="50%" y="50%" class="overflow-visible fill-blue-50">
                            <path d="M-300 0h201v201h-201Z M300 200h201v201h-201Z" stroke-width="0"></path>
                        </svg>
                        <rect width="100%" height="100%" stroke-width="0" fill="url(#e9033f3e-f665-41a6-84ef-756f6778e6fe)">
                        </rect>
                    </svg>
                </div>
            </div>
            <div class="mx-auto max-w-screen-2xl mt-16 px-4 py-8 sm:px-6 lg:px-8">
              <div class="grid grid-cols-1 gap-4 md:grid-cols-2">
                <div class="bg-blue-600 p-8 md:p-12 lg:px-16 lg:py-24 rounded-lg">
                  <div class="mx-auto max-w-xl text-center">
                    <h2 class="text-2xl font-bold text-white md:text-3xl">
                        Can't find the product you're looking for?
                    </h2>
          
                    <p class="hidden text-white/90 sm:mt-4 sm:block">
                        Don't worry! We've got you covered. Our friendly and experienced customer service team will be happy to help you find the products you want. We also offer a customized search service to ensure you get exactly what you need.
                    </p>
          
                    <div class="mt-4 md:mt-8">
                      <a
                        href="#"
                        class="inline-block rounded border border-white bg-white px-12 py-3 text-sm font-medium text-blue-500 transition hover:bg-transparent hover:text-white focus:outline-none focus:ring focus:ring-yellow-400"
                      >
                        Contact us
                      </a>
                    </div>
                  </div>
                </div>
          
                <div class="grid grid-cols-2 gap-4 md:grid-cols-1 lg:grid-cols-2">
                  <img
                    alt=""
                    src="https://images.unsplash.com/photo-1621274790572-7c32596bc67f?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=654&q=80"
                    class="h-40 w-full object-cover sm:h-56 md:h-full rounded-lg"
                  />
          
                  <img
                    alt=""
                    src="https://images.unsplash.com/photo-1567168544813-cc03465b4fa8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=774&q=80"
                    class="h-40 w-full object-cover sm:h-56 md:h-full rounded-lg"
                  />
                </div>
              </div>
            </div>
          </section>

    </body>
</html>