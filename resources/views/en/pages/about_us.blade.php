@extends('en.layout')

@section('title', 'About Us')

@section('content')
<style>
    .cardL p {
        transform: rotate(-90deg);
    }
    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: rgba(255, 255, 255, 0.8);
    }
    .about-text{
        line-height:50px;
    }
    @media (max-width: 768px) {
        .cardL p {
            transform: none;
        }
        .cardL {
            width: 100% !important;
            height: auto !important;
            border: none !important;
            margin-bottom: 1rem;
        }
        .cardR {
            margin-left: 0 !important;
        }
        .mission img{
            width:50%;
            margin-top:2rem;
            margin-left:25%;
        }
        .vision img{
            width:50%;
            margin-top:2rem;
            margin-left:25%;
        }
        .hero{
            height:20rem;
        }
        .z-image{
            over-flow:hidden;        
        }
    }
  
</style>

<!-- Hero Section -->
<div class="min-h-[50vh] w-full overflow-hidden relative hero">
    <img class="w-full h-full md:object-cover z-image" src="{{asset('images/z.png')}}" alt="z image">
    <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
        <div class="text-sm md:text-base flex items-center gap-3">
            <img class="h-2" src="{{asset('images/arrowLW.png')}}" alt="arrow left">    
            About Us
            <img class="h-2" src="{{asset('images/arrowRW.png')}}" alt="arrow right">  
        </div>
        <div class="text-xl md:text-[2.7rem] font-extrabold mt-5 text-center px-4">Get To Know Us</div>
    </div>                                                                                                                                               
</div>

<div class="container mx-auto px-4 mt-10">
    <!-- About Section -->
    <div class="flex flex-col md:flex-row gap-5 justify-between relative">
        <img class="z-[-2] absolute w-full h-full object-cover" src="{{asset('images/overbg.jpg')}}" alt="bg">
        <div class="w-full md:w-[40%] mb-8 md:mb-0 about-text">
            <div class="text-[#26A7C0] text-sm flex items-center gap-3 ">
                About Us
                <img src="{{asset('images/arrowL.png')}}" alt="">
            </div>
            <div class="text-[#034A58] text-[2.5rem] md:text-[2.7rem] font-extrabold mb-6 gap-4">Where Technology Meets <span class="text-[#26A7C0]">Creativity </span>to Build Innovative Digital Solutions</div>
            <div class="text-[#3B636B] text-base gap-4">Zain Zwy Information Technology is a leading company specializing in providing integrated and innovative technology solutions.</div>
        </div>
        <div class="w-full md:w-auto">
            <img class="w-full h-auto" src="{{asset('images/aboutImg.png')}}" alt="">
        </div>
    </div>

    <!-- Vision Section -->
    <div class="vision flex flex-col md:flex-row justify-between mt-20 md:mt-[15rem]">
        <div class="w-full md:w-[40%] mb-8 md:mb-0">
            <div class="text-2xl text-[#034A58] font-extrabold mb-6">OUR VISION</div>
            <div class="text-base text-[#3B636B]">At Zain zoe Information Technology, we aspire to be the first choice for companies and institutions seeking excellence and innovation in the field of technology.</div>
        </div>
        <div class="w-full md:w-auto">
            <img class="w-full h-auto" src="{{asset('images/mission.png')}}" alt="">
        </div>
    </div>
    Route::get('/services', function () {
    return view('en.pages.services');
});
    <div class="mission flex flex-col-reverse md:flex-row justify-between mt-20 md:mt-[15rem]">
        <div class="w-full md:w-auto mb-8 md:mb-0">
            <img class="w-full h-auto" src="{{asset('images/target.png')}}" alt="">
        </div>
        <div class="w-full md:w-[40%]">
            <div class="text-2xl text-[#034A58] font-extrabold mb-6">OUR MISSION</div>
            <div class="text-base text-[#3B636B]">Our mission at Zain zoe Information Technology is to deliver high-quality, innovative tech solutions that contribute to the success of our clients.</div>
        </div>
    </div>

    <!-- Goals Section -->
    <div class="mt-20 md:mt-[15rem]">
        <div class="text-2xl text-[#034A58] font-extrabold">OUR GOALS</div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-7">
            <!-- Goal Card 1 -->
            <div class="card shadow-md p-4 relative">
                <img class="z-[-1] absolute left-0 h-full" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <div class="cardL w-full md:w-[10%] text-center md:h-[80%] mb-4 md:mb-0">
                        <p class="font-bold">Goal <span class="text-[#26A7C0]">01</span></p>
                    </div>
                    <div class="cardR w-full md:ml-5">
                        <img src="{{asset('images/card1.png')}}" alt="" class="mb-4">
                        <div class="text-xl font-bold text-[#034A58] mb-2">Achieving customer satisfaction</div>
                        <div class="text-[#3B636B] text-sm">We strive to meet and exceed our customers' expectations by providing customized services</div>
                    </div>
                </div>
            </div>

            <!-- Goal Card 2 -->
            <div class="card shadow-md p-4 relative">
                <img class="z-[-1] absolute left-0 h-full" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <div class="cardL w-full md:w-[10%] text-center md:h-[80%] mb-4 md:mb-0">
                        <p class="font-bold">Goal <span class="text-[#26A7C0]">02</span></p>
                    </div>
                    <div class="cardR w-full md:ml-5">
                        <img src="{{asset('images/card2.png')}}" alt="" class="mb-4">
                        <div class="text-xl font-bold text-[#034A58] mb-2">Innovation and Quality Goal</div>
                        <div class="text-[#3B636B] text-sm">We are committed to providing the highest levels of quality in everything we do.</div>
                    </div>
                </div>
            </div>

            <!-- Goal Card 3 -->
            <div class="card shadow-md p-4 relative">
                <img class="z-[-1] absolute left-0 h-full" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <div class="cardL w-full md:w-[10%] text-center md:h-[80%] mb-4 md:mb-0">
                        <p class="font-bold">Goal <span class="text-[#26A7C0]">03</span></p>
                    </div>
                    <div class="cardR w-full md:ml-5">
                        <img src="{{asset('images/card3.png')}}" alt="" class="mb-4">
                        <div class="text-xl font-bold text-[#034A58] mb-2">Expansion and Growth Goal</div>
                        <div class="text-[#3B636B] text-sm">We aim to expand our services and increase our market share in the field of IT</div>
                    </div>
                </div>
            </div>

            <!-- Goal Card 4 -->
            <div class="card shadow-md p-4 relative">
                <img class="z-[-1] absolute left-0 h-full" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <div class="cardL w-full md:w-[10%] text-center md:h-[80%] mb-4 md:mb-0">
                        <p class="font-bold">Goal <span class="text-[#26A7C0]">04</span></p>
                    </div>
                    <div class="cardR w-full md:ml-5">
                        <img src="{{asset('images/card4.png')}}" alt="" class="mb-4">
                        <div class="text-xl font-bold text-[#034A58] mb-2">Building Strategic Partnerships</div>
                        <div class="text-[#3B636B] text-sm">We focus on building strong relationships with our business partners</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection