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

    <div id="address-form" class="flex justify-center items-center mt-10" style="margin-bottom: -20px;">
    <div class="container mx-auto px-4 py-8 bg-gray-900 shadow-md rounded-lg max-w-[850px]">
        <button class="btn bg-white text-gray-900 hover:text-white hover:bg-indigo-600" onclick="my_modal_4.showModal()">Input Address</button>
        <dialog id="my_modal_4" class="modal">
        <div class="bg-white modal-box w-5/12 max-w-5xl">
            <h3 class="text-lg font-bold text-gray-900">Silahkan masukan alamat anda!</h3>
            {{-- <p class="py-4 text-lime-400">Click the button below to close</p> --}}
            <div class="flex flex-col mt-5">
                <label for="namaPenerima" class="text-sm font-medium text-gray-700">Nama Penerima</label>
                <input type="namaPenerima" id="namaPenerima" name="namaPenerima" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
            </div>
            <div class="flex flex-col mt-5">
                <label for="namaPenerima" class="text-sm font-medium text-gray-700">No Telepon</label>
                <input type="namaPenerima" id="namaPenerima" name="namaPenerima" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
            </div>
            <div class="flex flex-col mt-5">
                <label for="namaPenerima" class="text-sm font-medium text-gray-700">Alamat</label>
                <input type="namaPenerima" id="namaPenerima" name="namaPenerima" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
            </div>
            <div class="flex flex-col mt-5">
                <label for="namaPenerima" class="text-sm font-medium text-gray-700">Kecamatan</label>
                <input type="namaPenerima" id="namaPenerima" name="namaPenerima" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
            </div>
            <div class="flex flex-col mt-5">
                <label for="namaPenerima" class="text-sm font-medium text-gray-700">Kota</label>
                <input type="namaPenerima" id="namaPenerima" name="namaPenerima" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
            </div>
            <div class="flex flex-col mt-5">
                <label for="namaPenerima" class="text-sm font-medium text-gray-700">Provinsi</label>
                <input type="namaPenerima" id="namaPenerima" name="namaPenerima" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
            </div>
            <div class="flex flex-col mt-5">
                <label for="namaPenerima" class="text-sm font-medium text-gray-700">Kode Pos</label>
                <input type="namaPenerima" id="namaPenerima" name="namaPenerima" class="bg-white text-gray-900 mt-1 px-3 py-2 input input-bordered w-full sm:text-sm">
            </div>
            <div class="modal-action">
            <form method="dialog">
                <!-- if there is a button, it will close the modal -->
                <button class="btn text-white">Kembali</button>
            </form>
            <form method="dialog">
                <!-- if there is a button, it will close the modal -->
                <button class="btn text-white">Simpan</button>
            </form>
            </div>
        </div>
        </dialog>
    </div>
    </div>

    <div class="flex items-center justify-center p-12 drop-shadow-2xl">
        <div class="mx-auto w-full max-w-[850px] bg-gray-900 p-8 rounded-lg text-white">
            <form>
                <p class="text-2xl mb-4 font-bold">Your Address</p>
                <div class="mb-5">
                    <label for="name" class="mb-3 block text-base font-medium">
                        Full Name
                    </label>
                    <input type="text" name="name" id="name" placeholder="Full Name"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-3">
                    <label for="phone" class="mb-3 block text-base font-medium">
                        Phone Number
                    </label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone number"
                        class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                </div>
                <div class="mb-5 pt-3">
                    <label class="mb-5 block text-base font-semibold sm:text-xl">
                        Address Details
                    </label>
                    <div class="-mx-3 flex flex-wrap">
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <input type="text" name="address" id="address" placeholder="Enter area"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <input type="text" name="city" id="city" placeholder="Enter city"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <input type="text" name="provincy" id="provincy" placeholder="Enter provincy"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-1/2">
                            <div class="mb-5">
                                <input type="text" name="postal-code" id="postal-code" placeholder="Post Code"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                        <div class="w-full px-3 sm:w-full">
                            <div class="mb-5">
                                <input type="text" name="country" id="country" placeholder="Enter country"
                                    class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md" />
                            </div>
                        </div>
                    </div>
                </div>
    
                <div>
                    <button
                        class="hover:shadow-form w-full rounded-md bg-indigo-600 py-3 px-8 text-center text-base font-semibold text-white outline-none">
                        Save Now!
                    </button>
                </div>
            </form>
        </div>
    </div>
    @include('components.footer')
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
      document.getElementById('fill-now-btn').addEventListener('click', function(event) {
        event.preventDefault();
        document.getElementById('address-form').scrollIntoView({ behavior: 'smooth' });
      });
   </script>
   </body>
</html>
