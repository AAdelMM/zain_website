<style>
    .cardL p {
        transform: rotate(-90deg);
    }
</style>

<section id="aboutUs" class="relative py-10">
    <img class="absolute z-[-5] w-full h-auto left-0 opacity-80 object-cover" src="{{asset('images/aboutbg.png')}}" alt="about bg">
    <img class="absolute left-0 z-[-3] w-full h-full opacity-95 object-cover" src="{{asset('images/aboutcover.png')}}" alt="cover">

    <div class="container mx-auto mt-20 px-4">
        <div class="text-[#26A7C0] flex items-center gap-2 text-[0.9rem]">
            About Us <img class="w-6 h-2" src="{{asset('images/arrowL.png')}}" alt="">
        </div>
        
        <div class="flex flex-col lg:flex-row justify-between gap-10 mt-5">
            <!-- Text Content -->
            <div class="flex flex-col font-extrabold w-full lg:w-[50%] my-5">
                <div class="text-[1.8rem] sm:text-[2.6rem] text-[#034A58]">Where Technology</div>
                <div class="text-[1.7rem] sm:text-[2.6rem] text-[#034A58]">Meets <span class="text-[#26A7C0]">Creativity</span> to Build</div>
                <div class="text-[1.8rem] sm:text-[2.6rem] text-[#034A58]">Innovative Digital Solutions</div>
                <div class="text-[#3B636B] font-normal my-7 text-[0.9rem] leading-relaxed">
                    Zain Zwy Information Technology is a leading company specializing in providing integrated and innovative technology solutions. Founded at the beginning of this year, we aim to make our mark in the fast-paced world of technology. We offer a diverse range of tech services that meet our clients' needs and help them achieve their goals through modern technology.
                </div>
                <div class="w-40 bg-[#26A7C0] text-white text-center py-3 cursor-pointer">READ MORE</div>
            </div>
            <!-- Image -->
            <div class="w-full lg:w-[45%]">
                <img class="w-full h-auto" src="{{asset('images/aboutImg.png')}}" alt="About Image">
            </div>
        </div>

        <!-- Goals Section -->
        <div class="flex flex-col mt-10 gap-10">
            <div class="flex flex-wrap justify-center gap-10">
                <!-- Goal Card 1 -->
                <div class="card shadow-md px-4 py-5 w-full sm:w-[45%] lg:w-[25%] flex items-center">
                    <div class="cardL w-[15%] h-[80%] border-t-4 border-black border-b-4 border-r-4 flex justify-center items-center font-bold">
                        <p class="flex justify-between">Goal<span class="ml-1 text-[#26A7C0]">01</span></p>
                    </div>
                    <div class="cardR ml-5">
                        <div><img src="{{asset('images/card1.png')}}" alt="Goal 1"></div>
                        <div class="text-[1rem] sm:text-[1.25rem] font-bold text-[#034A58]">Achieving Customer Satisfaction</div>
                        <div class="text-[#3B636B] text-[0.8rem]">We strive to meet and exceed our customers’ expectations by providing customized services.</div>
                    </div>
                </div>

                <!-- Goal Card 2 -->
                <div class="card shadow-md px-4 py-5 w-full sm:w-[45%] lg:w-[25%] flex items-center">
                    <div class="cardL w-[15%] h-[80%] border-t-4 border-black border-b-4 border-r-4 flex justify-center items-center font-bold">
                        <p class="flex justify-between">Goal<span class="ml-1 text-[#26A7C0]">03</span></p>
                    </div>
                    <div class="cardR ml-5">
                        <div><img src="{{asset('images/card2.png')}}" alt="Goal 2"></div>
                        <div class="text-[1rem] sm:text-[1.25rem] font-bold text-[#034A58]">Expansion and Growth</div>
                        <div class="text-[#3B636B] text-[0.8rem]">We aim to expand our services and increase our market share in the field of IT.</div>
                    </div>
                </div>

                <!-- Goal Card 3 -->
                <div class="card shadow-md px-4 py-5 w-full sm:w-[45%] lg:w-[25%] flex items-center">
                    <div class="cardL w-[15%] h-[80%] border-t-4 border-black border-b-4 border-r-4 flex justify-center items-center font-bold">
                        <p class="flex justify-between">Goal<span class="ml-1 text-[#26A7C0]">02</span></p>
                    </div>
                    <div class="cardR ml-5">
                        <div><img src="{{asset('images/card3.png')}}" alt="Goal 3"></div>
                        <div class="text-[1rem] sm:text-[1.25rem] font-bold text-[#034A58]">Innovation and Quality</div>
                        <div class="text-[#3B636B] text-[0.8rem]">We are committed to providing the highest levels of quality in everything we do.</div>
                    </div>
                </div>

                <!-- Goal Card 4 -->
                <div class="card shadow-md px-4 py-5 w-full sm:w-[45%] lg:w-[25%] flex items-center">
                    <div class="cardL w-[15%] h-[80%] border-t-4 border-black border-b-4 border-r-4 flex justify-center items-center font-bold">
                        <p class="flex justify-between">Goal<span class="ml-1 text-[#26A7C0]">04</span></p>
                    </div>
                    <div class="cardR ml-5">
                        <div><img src="{{asset('images/card4.png')}}" alt="Goal 4"></div>
                        <div class="text-[1rem] sm:text-[1.25rem] font-bold text-[#034A58]">Building Strategic Partnerships</div>
                        <div class="text-[#3B636B] text-[0.8rem]">We focus on building strong relationships with our business partners.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Image -->
        <img class="absolute right-0 top-1/2 transform -translate-y-1/2 w-20 opacity-75" src="{{asset('images/aboutz.png')}}" alt="Decorative Image">
    </div>
</section>
