<nav class="bg-[#F06292]" x-data="{ isOpen: false }"> 
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
          
         
          <div class="hidden md:block ml-auto"> 
              <div class="ml-10 flex items-baseline space-x-4">
                  <x-nav-link href="/home" :active="request()->is('/home')">Home</x-nav-link>
                  <x-nav-link href="/pelanggan" :active="request()->is('/pelanggan')">Pelanggan</x-nav-link>
                  <x-nav-link href="/golongan" :active="request()->is('/golongan')">Kategori</x-nav-link>
              </div>
          </div>
      </div>
  </div>

  <!-- Mobile menu, show/hide based on menu state -->
  <div x-show="isOpen" class="md:hidden" id="mobile-menu">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <a href="/home" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white" aria-current="page">Beranda</a>
          <a href="/about" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Tentang</a>
          <a href="/category" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Kategori</a>
          <a href="/product" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-gray-700 hover:text-white">Produk</a>
      </div>
      
      <div class="border-t border-gray-700 pb-3 pt-4">
          <div class="flex items-center px-5">
              <div class="ml-3">
                  <div class="text-base font-medium text-white">Tom Cook</div>
                  <div class="text-sm font-medium text-gray-400">tom@example.com</div>
              </div>
          </div>
          <div class="mt-3 space-y-1 px-2">
              <a href="/" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Profil</a>
              <a href="/Pelanggan" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Pengaturan</a>
              <a href="/Golongan" class="block rounded-md px-3 py-2 text-base font-medium text-gray-400 hover:bg-gray-700 hover:text-white">Log Out</a>
          </div>
      </div>
  </div>
</nav>
