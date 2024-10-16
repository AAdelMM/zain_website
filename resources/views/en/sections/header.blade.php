<style>
header {
    background-image: url('{{ asset('images/headerbg.png') }}');
    background-size: contain;
    background-position: center;
}

/* Additional custom styles for responsiveness */
@media (max-width: 768px) {
   header{
      background-size: cover;
   }
    .header-menu {
        flex-direction: column;
        text-align: center;
    }

    .header-menu ul {
        flex-direction: column;
        gap: 0.5rem;
    }

    .header-right {
        flex-direction: column;
    }
}
</style>

<header class="absolute top-0 left-0 h-[7rem] w-full z-10 flex sm:items-end items-center">
   <div class="container m-auto flex flex-row justify-between items-center px-4">
        <!-- Logo -->
        <div class="flex-shrink-0">
            <img src="{{ asset('images/headerLogo.png') }}" alt="main background" class="w-[120px] sm:w-[150px]">
        </div>
        <!-- Navigation Menu -->
        <div class="text-white w-auto header-menu hidden md:flex items-center">
            <ul class="flex flex-row gap-6">
                <li><a href="/" class="hover:text-[#26A7C0]">Home</a></li>
                <li><a href="/about" class="hover:text-[#26A7C0]">About Us</a></li>
                <li><a href="/services" class="hover:text-[#26A7C0]">Services</a></li>
                <li><a href="/work" class="hover:text-[#26A7C0]">Our Work</a></li>
            </ul>
        </div>
        <!-- Right Section -->
        <div class="flex flex-row w-auto gap-4 header-right">
            <div class="hidden sm:flex items-center text-white">
                <img src="{{ asset('images/world.png') }}" alt="">
                <span class="mx-2 font-[Cairo]">العربية</span>
            </div>
            <div class="hidden sm:flex items-center">
                <img src="{{ asset('images/search.png') }}" alt="search icon">
            </div>
            <div class="hidden sm:flex bg-[#26A7C0] hover:bg-[#29636e] px-4 py-2 text-white font-bold items-center justify-center">
                Contact Us
            </div>
        </div>
   </div>
   <!-- Mobile Menu Button -->
   <div class="md:hidden flex items-center justify-end w-full px-4">
       <button id="menu-toggle" class="text-white">
           <!-- Menu icon (Hamburger) -->
           <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
               <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
           </svg>
       </button>
   </div>
</header>
<!-- Mobile Menu -->
<div id="mobile-menu" class="hidden md:hidden bg-[#29636e] text-white w-full absolute top-[5rem] opacity-90">
   <ul class="flex flex-col items-center py-4">
       <li><a href="/" class="py-2 hover:text-[#26A7C0]">Home</a></li>
       <li><a href="/about" class="py-2 hover:text-[#26A7C0]">About Us</a></li>
       <li><a href="/services" class="py-2 hover:text-[#26A7C0]">Services</a></li>
       <li><a href="/work" class="py-2 hover:text-[#26A7C0]">Our Work</a></li>
       <li class="flex items-center py-2 hover:text-[#26A7C0]">
           <img src="{{ asset('images/world.png') }}" alt="" class="mr-2">
           <span>العربية</span>
       </li>
   </ul>
</div>

<script>
// JavaScript to toggle the mobile menu visibility
document.getElementById('menu-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});
</script>
