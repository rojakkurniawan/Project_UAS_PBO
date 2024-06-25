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

    <div class="relative isolate h-3/4 overflow-hidden bg-gray-900">
        <svg
          class="absolute inset-0 -z-10 h-full w-full stroke-white/10 [mask-image:radial-gradient(100%_100%_at_top_right,white,transparent)]"
          aria-hidden="true">
          <defs>
            <pattern id="983e3e4c-de6d-4c3f-8d64-b9761d1534cc" width="200" height="200" x="100%" y="-1"
              patternUnits="userSpaceOnUse">
              <path d="M.5 200V.5H200" fill="none"></path>
            </pattern>
          </defs>
          <svg x="50%" y="-1" class="overflow-visible fill-gray-800/20">
            <path d="M-200 0h201v201h-201Z M600 0h201v201h-201Z M-400 600h201v201h-201Z M200 800h201v201h-201Z"
              stroke-width="0"></path>
          </svg>
          <rect width="100%" height="100%" stroke-width="0" fill="url(#983e3e4c-de6d-4c3f-8d64-b9761d1534cc)"></rect>
        </svg>
        <div
          class="absolute left-[calc(50%-4rem)] top-10 -z-10 transform-gpu blur-3xl sm:left-[calc(50%-18rem)] lg:left-48 lg:top-[calc(50%-30rem)] xl:left-[calc(50%-24rem)]"
          aria-hidden="true">
          <div class="aspect-[1108/632] w-[69.25rem] bg-gradient-to-r from-[#80caff] to-[#4f46e5] opacity-20"
            style="clip-path:polygon(73.6% 51.7%, 91.7% 11.8%, 100% 46.4%, 97.4% 82.2%, 92.5% 84.9%, 75.7% 64%, 55.3% 47.5%, 46.5% 49.4%, 45% 62.9%, 50.3% 87.2%, 21.3% 64.1%, 0.1% 100%, 5.4% 51.1%, 21.4% 63.9%, 58.9% 0.2%, 73.6% 51.7%)">
          </div>
        </div>
        <div class="mt-[-50px] flex h-screen items-center justify-center">
          <div class="max-w-full flex-shrink-0 px-4 text-center lg:mx-0 lg:max-w-3xl lg:pt-8">
            <h1 class="mt-10 text-5xl font-bold tracking-tight text-sky-500 sm:text-6xl">
                Thank you 
              <span class="text-white">for your enthusiastic</span> 
              <span class="text-sky-500"> purchase</span>
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-300">Please fill in your address below</p>
            <div class="mt-5 flex items-center justify-center gap-x-6">
                <a href="#address-form"
                   id="fill-now-btn"
                   class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-900 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-sky-400"
                   rel="noreferrer">Fill Now →</a>
            </div>            
          </div>
        </div>
    </div>

    <div class="bg-indigo-600 px-4 py-3 text-white">
        <p class="text-center text-sm font-medium">
            Having trouble adding an address? 
          <a href="#" class="inline-block underline">Click here</a>
        </p>
      </div>

      
      <div id="address-form" class="flex justify-center items-center mt-10 drop-shadow-2xl" style="margin-bottom: -20px;">
        <div class="container mx-auto px-4 py-8 bg-gray-900 shadow-md rounded-lg max-w-[850px]">
            @if($there_has_address == 0)
            <h3 class="text-lg font-bold text-white mb-4">It looks like you haven't entered your address, please enter it first!</h3>
            <button class="btn bg-white text-gray-900 hover:text-white hover:bg-indigo-600" onclick="my_modal_4.showModal()">Input Address</button>
            <dialog id="my_modal_4" class="modal">
                <div class="bg-white modal-box w-5/12 max-w-5xl">
                    <h3 class="text-lg font-bold text-gray-900">Fill your address!</h3>
                    <form id="address-form-save" method="POST">
                        @csrf
                        <div class="flex flex-col mt-5">
                            <label for="name" class="text-sm font-medium text-gray-700">Name</label>
                            <input type="text" id="name" name="name" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="phone" class="text-sm font-medium text-gray-700">Phone</label>
                            <input type="text" id="phone" name="phone" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="address" class="text-sm font-medium text-gray-700">Address</label>
                            <input type="text" id="address" name="address" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="city" class="text-sm font-medium text-gray-700">City</label>
                            <input type="text" id="city" name="city" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="provincy" class="text-sm font-medium text-gray-700">Provincy</label>
                            <input type="text" id="provincy" name="provincy" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="country" class="text-sm font-medium text-gray-700">Country</label>
                            <input type="text" id="country" name="country" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
                        </div>
                        <div class="flex flex-col mt-5">
                            <label for="postal_code" class="text-sm font-medium text-gray-700">Postal Code</label>
                            <input type="text" id="postal_code" name="postal_code" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
                        </div>
                        <div class="modal-action">
                            <button type="button" class="btn text-white" onclick="my_modal_4.close()">Close</button>
                            <button type="button" class="btn bg-indigo-600 text-white hover:bg-indigo-900" onclick="saveAddress()">Save</button>
                        </div>
                    </form>
                    <div id="notification" class="hidden bg-green-500 text-white p-4 rounded mt-4"></div>
                </div>
            </dialog>
            @else
            @foreach ($addresses as $address)
            <h3 class="text-lg font-bold text-white mb-4">It looks like you have entered your address, lets go buy!</h3>
            <p class="text-medium text-white">{{$address -> name}} | {{$address -> phone}}</p>
            <p class="text-medium text-white">{{$address -> address}}, {{$address -> postal_code}}</p>
            <p class="text-medium text-white">{{$address -> city}}, {{$address -> provincy}}, {{$address -> country}}</p>
            @endforeach
            @endif
        </div>
    </div>
    
    <div class="flex items-center justify-center p-12 drop-shadow-2xl">
        <div class="mx-auto w-full max-w-[850px] bg-gray-900 p-8 rounded-lg text-white">
            <section>
                <div class="mx-auto max-w-screen-xl px-4 py-8 sm:px-6 sm:py-12 lg:px-8">
                  <div class="mx-auto max-w-3xl">
                    <header class="text-center">
                      <h1 class="text-xl font-bold text-white sm:text-3xl">Your Cart</h1>
                    </header>
              
                    <div class="mt-8">
                      <ul class="space-y-4">
                        <li class="flex gap-4">
                          <img
                            src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=830&q=80"
                            alt=""
                            class="size-32 rounded object-cover"
                          />
              
                          <div>
                            <h3 class="text-sm text-white">Basic Tee 6-Pack</h3>
              
                            <dl class="mt-0.5 space-y-px text-[10px] text-gray-300">
                              <div>
                                <dt class="inline">Size:</dt>
                                <dd class="inline">XXS</dd>
                              </div>
              
                              <div>
                                <dt class="inline">Color:</dt>
                                <dd class="inline">White</dd>
                              </div>
                            </dl>
                          </div>
                        </li>
                      </ul>
              
                      <div class="mt-8 flex justify-end border-t border-gray-100 pt-8">
                        <div class="w-screen max-w-lg space-y-4">
                          <dl class="space-y-0.5 text-sm text-white">
                            <div class="flex justify-between">
                              <dt>Subtotal</dt>
                              <dd>£250</dd>
                            </div>
              
                            <div class="flex justify-between">
                              <dt>VAT</dt>
                              <dd>£25</dd>
                            </div>
              
                            <div class="flex justify-between !text-base font-medium">
                              <dt>Total</dt>
                              <dd>£275</dd>
                            </div>
                          </dl>
              
                          <div class="flex justify-end">
                            <a
                              href="#"
                              class="block rounded bg-gray-700 px-5 py-3 text-sm text-gray-100 transition hover:bg-gray-600"
                            >
                              Checkout
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
        </div>
    </div>
    @include('components.footer')
    <script>
        function saveAddress() {
            var form = document.getElementById('address-form-save');
            var formData = new FormData(form);
            var xhr = new XMLHttpRequest();
            xhr.open('POST', '{{ route('checkout.store') }}', true);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
    
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('notification').innerText = 'Alamat sudah dimasukkan.';
                    document.getElementById('notification').classList.remove('hidden');
                    setTimeout(function() {
                        document.getElementById('notification').classList.add('hidden');
                        my_modal_4.close();
                    }, 3000);
                    window.location.reload();
                } else {
                    console.error('Error saving address.');
                }
            };
    
            xhr.send(formData);
        }
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
      document.getElementById('fill-now-btn').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('address-form').scrollIntoView({ behavior: 'smooth' });
      });
   </script>
   </body>
</html>
