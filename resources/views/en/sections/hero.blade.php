<style>
#hero {
    background-image: url('{{ asset('images/mainhero_bg.png') }}');
    background-size: cover;
    background-position: center;
}
</style>

<section id="hero" class="py-8">
    <div class="container mx-auto h-auto flex flex-col justify-center px-4">
        <!-- Main Content Row -->
        <div class="flex flex-col lg:flex-row justify-between mt-24 lg:mt-[15rem] space-y-8 lg:space-y-0">
            <!-- Text Content -->
            <div class="text-white font-extrabold w-full lg:w-[51%] space-y-4">
                <div class="text-center lg:text-left 2xl:text-[3.25rem] lg:text-[2rem] text-[1.5rem]">
                    INNOVATIVE <span class="text-[#26A7C0]">TECHNOLOGICAL</span>
                </div>
                <div class="text-center lg:text-left 2xl:text-[3.25rem] lg:text-[2rem] text-[1.5rem]">
                    SOLUTION FOR THE FUTURE
                </div>
                <div class="2xl:text-[1rem] lg:text-[0.9rem] text-[0.75rem] font-normal text-[#C4DEDE] leading-relaxed">
                    <p>We provide advanced technologies and customized services to enable your business to grow and develop in a rapidly changing digital world.</p>
                </div>
            </div>
            <!-- Social Media Links -->
            <div class="flex flex-row lg:flex-col justify-around items-center lg:items-end space-x-4 lg:space-x-0 lg:space-y-4">
                <div><a href="https://x.com/zainzwy?s=11"><img class="w-6 opacity-80" src="{{asset('images/x1.png')}}" alt="x icon"></a></div>
                <div><a href="https://www.tiktok.com/@zainzwy?_t=8qKzVK801up&_r=1"><img class="w-6 opacity-80" src="{{asset('images/tiktok.png')}}" alt="tiktok icon"></a></div>
                <div><a href="https://www.instagram.com/zainzwy/profilecard/?igsh=MWdsdDF4Z2kxNmI1dw=="><img class="w-6 opacity-80" src="{{asset('images/insta.png')}}" alt="instagram icon"></a></div>
                <div><a href="https://wa.me/966508950527"><img class="w-6 opacity-80" src="{{asset('images/whats1.png')}}" alt="whatsapp icon"></a></div>
            </div>
        </div>
        <!-- Hero Image -->
        <div class="flex justify-center items-center mt-12">
            <img src="{{asset('images/heroImg3.png')}}" class="w-full lg:w-[60%] h-auto" alt="">
        </div>
        <!-- Additional Image -->
        <div class="w-full mt-12">
            <img class="w-[100%] h-auto px-4 lg:px-10" src="{{asset('images/zaingroupe.png')}}" alt="">
        </div>
    </div>
</section>
