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
        gap: 0.8rem;
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
            <li><a href="/ar.work" class="hover:text-[#26A7C0]">اعمالنا</a></li>
            <li><a href="/ar.services" class="hover:text-[#26A7C0]">خدماتنا</a></li>
            <li><a href="/ar.about" class="hover:text-[#26A7C0]">من نحن</a></li>
            <li><a href="/ar" class="hover:text-[#26A7C0]">الرئيسية</a></li>
           
            </ul>
        </div>
        <!-- Right Section -->
        <div class="flex flex-row w-auto gap-4 header-right">
        <a href="/"> <div class="hidden sm:flex items-center text-white">
                <img src="{{ asset('images/world.png') }}" alt="">
                <span class="mx-2 font-[Cairo]">English</span>
            </div></a>
            <div class="hidden sm:flex items-center">
                <img src="{{ asset('images/search.png') }}" alt="search icon">
            </div>
           <a href="/contact-us"> <div class="hidden sm:flex bg-[#26A7C0] hover:bg-[#29636e] px-4 py-2 text-white font-bold items-center justify-center">
                اتصل بنا
            </div></a>
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
<div id="mobile-menu" class="hidden md:hidden bg-[#29636e] h-[15rem] text-white w-full absolute top-[5rem] opacity-90 z-[100]">
   <ul class="flex flex-col items-center py-4">
       <li><a href="/ar" class="py-2 hover:text-[#26A7C0]">الرئيسية</a></li>
       <li><a href="/ar.about" class="py-2 hover:text-[#26A7C0]">من نحن</a></li>
       <li><a href="/ar.services" class="py-2 hover:text-[#26A7C0]">خدماتنا</a></li>
       <li><a href="/ar.work" class="py-2 hover:text-[#26A7C0]">اعمالنا</a></li>
       <a href="/">  <li class="flex items-center py-2 hover:text-[#26A7C0]">
          <img src="{{ asset('images/world.png') }}" alt="" class="mr-2">
           <span>English</span>
       </li></a>
       <a href="/contact-us"><li><div class=" sm:flex bg-[#26A7C0] hover:bg-[#29636e] px-4 py-2 text-white font-bold items-center justify-center">
                اتصل بنا
            </div></li></a>
      
   </ul>
</div>

<script>
// JavaScript to toggle the mobile menu visibility
document.getElementById('menu-toggle').addEventListener('click', function() {
    const mobileMenu = document.getElementById('mobile-menu');
    mobileMenu.classList.toggle('hidden');
});
</script>
