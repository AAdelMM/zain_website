<style>
    @keyframes float {
        0%, 100% { transform: translateY(10px); }
        50% { transform: translateY(-40px); }
    }
    .float-animation {
        animation: float 3s ease-in-out infinite;
    }
</style>

<div class="relative h-screen w-full">
    <div class="absolute inset-0 bg-cover bg-center bg-no-repeat" style="background-image: url('{{asset('images/herobg.png')}}');">
    </div>
    <div class="relative z-10 flex items-center justify-center h-full ">
        <div class="absolute bottom-0 flex items-center justify-center font-bold leading-[1.2] h-[80%] ">
            <div class="w-[10%]  flex flex-col items-end justify-center h-[12rem] ">
                <div class="border rounded-r-xl h-[80%]flex justify-between bg-[#D9D9D9]">
                    <img class="border rounded-full m-2 p-2 bg-[#005561]" src="{{ asset('images/call.png') }}" alt="phone-icon">
                    <img class="border rounded-full m-2 p-2 bg-[#005561]" src="{{ asset('images/mail.png') }}" alt="mail-icon">
                    <img class="border rounded-full m-2 p-2 bg-[#005561]" src="{{ asset('images/location.png') }}" alt="location-icon">
                    <img class="border rounded-full m-2 p-2 bg-[#005561]" src="{{ asset('images/call.png') }}" alt="">
                </div>
            </div>
            <div class="w-[35%] flex flex-col items-start ml-10 mb-10 " style="font-family:'Open Sans'">
                <h1 class="text-white text-[6rem] ">Home of</h1>
                <h1 class="text-black text-[6rem]">Innovation</h1>
                <h2 class="text-white text-[4rem]">Start Your Dream At</h2>
                <h1 class="text-[#3EF1FF] text-[8rem]">Zain Zwy</h1>
                <p class="text-white text-2xl mt-3">We are leading specializing in providing integrated and innovative technology solutions.
                Our vision is built on innovation, creativity,
                and dedication to providing the best technological solutions that meet market demands.</p>
            </div>
            <div id="hero-image" class="w-[40%] mb-[-5rem] ">
                <div class="relative flex justify-center">
                    <img class="border-[0.5rem] border-[#3EF1FF] rounded-full p-5" src="{{asset('images/heroimg.png')}}" alt="hero image">
                    <div class="absolute left-0 bottom-0 float-animation">
                        <img src="{{asset('images/ball.png')}}" alt="ball">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>