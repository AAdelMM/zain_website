<style>
#hero {
    background-image: url('{{ asset('images/mainhero_bg.png') }}');
    background-size: cover;
    background-position: center;
}

</style>

<section id="hero">
    <div class="container mx-auto  h-auto flex flex-col justify-center">
        <div class="flex flex-row justify-between mt-[15rem]">
            <div class=" text-white font-extrabold w-[51%]" >
                <div class="2xl:text-[3.25rem] lg:text-[2rem] text-[1rem]">INNOVATIVE <span class="text-[#26A7C0]">TECHNOLOGICAL</span></div>
                <div class="2xl:text-[3.25rem] lg:text-[2rem] text-[1rem] text-center">SOLUTION FOR THE FUTURE</div>
                <div class="2x:text-[1rem] lg:text-[0.7rem] text-[0.4rem] font-normal text-wrap text-[#C4DEDE]"><p>We provide advanced technologies and customized services to enable your business to grow and develop in a rapidly changing digital world.</p></div>
             </div>
            <div class=" flex flex-col justify-around items-end w-10">
                <div ><img class="w-6" src="{{asset('images/x.png')}}" alt="x icon"></div>
                <div><img class="w-6" src="{{asset('images/facebook.png')}}" alt="facebook icon"></div>
                <div><img class="w-6" src="{{asset('images/instagram.png')}}" alt="instagram icon"></div>
                <div><img class="w-6" src="{{asset('images/snapchat.png')}}" alt="snapchat icon"></div>
            </div>
        </div>
        <div class="flex justify-center items-center ">
             <img src="{{asset('images/heroImg3.png')}}" class="w-[60%] h-auto " alt="">
        </div>
        
    </div>
        <div class="w-[100vw] mx-0 mt-[5rem]">
            <img class="w-[100%] px-10 h-[15rem]" src="{{asset('images/zaingroupe.png')}}" alt="">
        </div>
</section>
