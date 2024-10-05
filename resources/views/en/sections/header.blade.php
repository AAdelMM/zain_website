<style>
header{
    background-image: url('{{ asset('images/headerbg.png') }}');
    background-size: contain;
  
    background-position:absolute;
    top:0;
}

</style>
<header class="absolute top-0 left-0 h-[7rem] w-full z-10 flex items-end">
   <div class="container m-auto flex flex-row justify-between ">
    
        <div class=""><img src="{{asset('images/headerLogo.png')}}" alt="main background"></div>
        <div class=" text-white w-[25%] flex items-center">
         <ul class="flex flex-row  w-[100%] justify-between ">
            <li>Home</li>
            <li>About Us</li>
            <li>Services</li>
            <li>Our Work</li>
         </ul>
      </div>
        <div class="flex flex-row w-[25%] justify-between">
            <div class="flex items-center justify-center text-white"><img src="{{asset('images/world.png')}}" alt=""><span class="mx-2" style=" font-family: 'Cairo', sans-serif;">العربية</span></div>
            <div class="flex items-center justify-center"><img src="{{asset('images/search.png')}}" alt="search icon"></div>
            <div class="bg-[#26A7C0] hover:bg-[#29636e] w-[55%] text-white font-bold flex items-center justify-center">Contact Us</div>
        </div>
   
   </div>
</header>