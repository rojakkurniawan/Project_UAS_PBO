<style>
  :root{
    background-color: white;
    color: white;
  }
</style>

<header class="bg-white">
   <nav class="mx-auto flex max-w-7xl items-center justify-between p-6 lg:px-8" aria-label="Global">
     <div class="flex lg:flex-1">
       <a href="/home" class="-m-1.5 p-1.5">
         <span class="sr-only">FutureTech Store</span>
         <img class="h-12 w-auto" src="https://i.ibb.co/D8DDFFN/1719337919935.png" alt="">
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
       <a href="/profile" class="text-sm font-semibold leading-6 text-gray-900">Profile</a>
     </div>
     <div class="flex flex-1 justify-end px-2">
       <div class="flex items-stretch">
         <a href="/profile" class="mr-2">
           <div class="avatar placeholder">
             <div class="bg-neutral w-12 rounded-full">
              <span><?php
                $name = Auth::user()->name;
                $initials = '';
                $words = explode(' ', $name);
                foreach ($words as $word) {
                    $initials .= strtoupper($word[0]);
                }
                echo substr($initials, 0, 2);
              ?></span>
             </div>
           </div>
         </a>
         <form action=" {{ route('logout') }}" method="POST"> @csrf @method('DELETE') <button type="submit" class="btn btn-neutral rounded-btn text-white">Logout<span aria-hidden="true">&rarr;</span></button>
         </form>
       </div>
     </div>
   </nav>
 </header>