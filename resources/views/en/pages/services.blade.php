@extends('en.layout')

@section('title', 'Services')

@section('content')

<style>
    .overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(3, 74, 88, 0.2); 
    }
</style>
<!--pages common section-->
<Div class="h-[50vh] cover w-[100vw] overflow-hidden relative"><img class="w-[100%] h-[100%] mb-[20rem] z-0" src="{{asset('images/z.png')}}" alt="z image">
            <div class=" w-[100%] h-[100px] top-[50%] z-10 absolute text-center text-white">
                    <div class="text-[0.9rem] z-5 flex justify-center items-center gap-5">
                        <img class="h-2" src="{{asset('images/arrowLW.png')}}" alt="arrow left">    
                            Services
                        <img class="h-2" src="{{asset('images/arrowRW.png')}}" alt="arrow right">  
                    </div>
                    <div class="text-[2.7rem] font-extrabold mt-5">Service Overview</div>
            </div>                                                                                                                                               
    </Div>
<!--end pages common section-->

<div class="container mx-auto">
    <div class="w-[40%] mt-[8rem]">
        <div class="font-extrabold text-[2.6rem] text-[#034A58]">Comprehensive Digital <span class="text-[#26A7C0]">Solutions </span>for Business Growth</div>
        <div class="text-[#3B636B]">We offer a variety of integrated digital solutions that ensure all your technical needs are met,
             from designing and developing websites and applications to digital transformation and e-marketing strategies.</div>
    </div>
    <div class="flex items-center gap-5">
        <div class="relative mt-[10rem] ">
            <img class="z-[-1] w-[50%]" src="{{asset('images/service1.png')}}" alt="">
            <!-- <div class="overlay"></div> -->
        </div>
        <div class="border-2 border-[#034A58] w-[70%] p-8">
            <div><img src="{{asset('images/01.png')}}" alt="01number"></div>
            <div class="font-extrabold text-[2.7rem] my-5">APPLICATION DEVELOPMENT </div>
            <div class="text-[#3B636B]">We offer custom application development services to meet various business needs,
                 focusing on performance and user-friendliness.</div>
            </div>
    </div>
    <div class="inline-flex items-end justify-between border-2 border-yellow-500 w-[100%]">
        
        <div class="border-4 border-[#034A58] w-[50%] p-8">
            <div><img src="{{asset('images/02.png')}}" alt="01number"></div>
            <div class="font-extrabold text-[2.7rem] my-5">WEBSITE CREATION </div>
            <div class="text-[#3B636B]">We design and build interactive and responsive websites that reflect our clients' 
                identity and enhance their digital presence.</div>
            </div>
            <div class="relative mt-[10rem] flex w-[40%] border-2 border-red-500">
                <img class="z-[-1] w-[80%]" src="{{asset('images/service2.png')}}" alt="">
            <!-- <div class="overlay"></div> -->
        </div>
    </div>

    <div class="flex items-center gap-5"></div>
    <div class="flex items-center gap-5"></div>
</div>