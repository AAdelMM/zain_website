@extends('en.layout')

@section('title', 'About Us')

@section('content')
<style>
    .cardL p{
        transform: rotate(-90deg);
    }
    .section-body{
        
        
    }
    .overlay {
        
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: rgba(255, 255, 255, 0.8); /* Adjust opacity as needed */
}

</style>
<!--pages common section-->
    <Div class="h-[50vh] cover w-[100vw] overflow-hidden relative"><img class="w-[100%] h-[100%] mb-[20rem] z-0" src="{{asset('images/z.png')}}" alt="z image">
            <div class=" w-[100%] h-[100px] top-[50%] z-10 absolute text-center text-white">
                    <div class="text-[0.9rem] z-5 flex justify-center items-center gap-5">
                        <img class="h-2" src="{{asset('images/arrowLW.png')}}" alt="arrow left">    
                            About Us
                        <img class="h-2" src="{{asset('images/arrowRW.png')}}" alt="arrow right">  
                    </div>
                    <div class="text-[2.7rem] font-extrabold mt-5">Get To Know Us</div>
            </div>                                                                                                                                               
    </Div>
<!--end pages common section-->
<div class="container section-body mx-auto mt-10 ">
       
    
    <div class="flex gap-5 justify-between z-5 relative">
    <img class="z-[-2] absolute w-[100%] " src="{{asset('images/overbg.jpg')}}" alt="bg">
    <!-- <div class="overlay z-[-1]"></div> -->
        <div class="w-[40%]">
            <div class="text-[#26A7C0] text-[0.7rem] flex items-center gap-3">
                About Us
                <img src="{{asset('images/arrowL.png')}}" alt="">
            </div>
            <div class="text-[#034A58] text-[2.7rem] font-extrabold mb-10">Where Technology Meets <span class="text-[#26A7C0]">Creativity </span>to Build Innovative Digital Solutions</div>
            <div class="text-[#3B636B] text-[0.9rem]">Zain Zwy Information Technology is a leading company specializing in providing integrated and innovative technology solutions.
                 Founded at the beginning of this year, we aim to make our mark in the fast-paced world of technology.
                  We offer a diverse range of tech services that meet our clients' needs and help them achieve their goals through modern technology. Our vision is built on innovation, creativity, and dedication to providing the best technological solutions that meet market demands.</div>
        </div>
        <div><img src="{{asset('images/aboutImg.png')}}" alt=""></div>
    </div>
    <div class="flex justify-between mt-[15rem]">
        <div class="w-[40%]">
            <div class="text-[2rem] text-[#034A58] font-extrabold mb-10">OUR VISION</div>
            <div class="text-[0.9rem] text-[#3B636B]">At Zain zoe Information Technology, we aspire to be the first choice for companies and institutions seeking excellence and innovation in the field of technology. We believe that the future demands smart solutions, and we strive to be leaders in this field by providing innovative and advanced tech services that enhance efficiency and enable sustainable growth for our clients.</div>
        </div>
        <div><img src="{{asset('images/mission.png')}}" alt=""></div>
    </div>
    <div class="flex justify-between mt-[15rem]">
        <div><img src="{{asset('images/target.png')}}" alt=""></div>
        <div class="w-[40%]">
            <div class="text-[2rem] text-[#034A58] font-extrabold mb-10">OUR MISSION</div>
            <div class="text-[0.9rem] text-[#3B636B]">Our mission at Zain zoe Information Technology is to deliver high-quality,
                 innovative tech solutions that contribute to the success of our clients.
                 We are committed to providing exceptional and tailored services that meet the unique needs of our customers,
                 helping them achieve their goals efficiently and effectively.</div>
        </div>
    </div>
    <div class="ourgoal-cards mt-[15rem]">
        <div class=" text-[2rem] text-[#034A58] font-extrabold">OUR GOALS</div>
    <div class="flex flex-col mt-7 mx-10">
            <div class="flex justify-start mb-5">
                <div class="flex justify-between w-[80%]">
                    <div class="card shadow-md pr-2 py-5  w-[25%] flex items-center relative">
                        <img class="z-[-1] absolute left-10 h-[100%]" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
                        <div class="cardL w-[10%] h-[80%] border-t-4 border-black border-b-4 border-l-0 border-r-4 flex justify-center items-center font-bold"><p class="text-center w-[450%] flex justify-between">Goal<span class="ml-1 text-[#26A7C0]"> 01</span></p></div>
                        <div class="cardR ml-5">
                            <div><img src="{{asset('images/card1.png')}}" alt=""></div>
                            <div class="text-[1.25rem] font-bold text-[#034A58]"> Achieving 
                            customer satisfaction</div>
                            <div class="text-[#3B636B] text-[0.9rem]">We strive to  meet and exceed our customers’ expectations by  providing customized services</div>
                        </div>
                    </div>
                    <div class="card shadow-md pr-2 py-5  w-[25%] flex items-center relative">
                    <img class="z-[-1] absolute left-10 h-[100%]" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
    
                    <div class="cardL w-[10%] h-[80%] border-t-4 border-black border-b-4 border-l-0 border-r-4 flex justify-center items-center font-bold"><p class="text-center w-[450%] flex justify-between">Goal<span class="ml-1 text-[#26A7C0]"> 03</span></p></div>
                        <div class="cardR ml-5">
                            <div><img src="{{asset('images/card2.png')}}" alt="card2"></div>
                            <div class="text-[1.25rem] font-bold text-[#034A58]">Expansion and Growth Goal</div>
                            <div class="text-[#3B636B] text-[0.9rem]">We aim to expand our  services and increase our market share in the field  of  IT</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="flex justify-end">
            <div class="flex justify-between w-[80%]">
            <div class="card shadow-md pr-2 py-5  w-[25%]  flex items-center relative">
            <img class="z-[-1] absolute left-10 h-[100%]" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">

            <div class="cardL w-[10%] h-[80%] border-t-4 border-black border-b-4 border-l-0 border-r-4 flex justify-center items-center font-bold"><p class="text-center w-[450%] flex justify-between">Goal<span class="ml-1 text-[#26A7C0]"> 02</span></p></div>
                        <div class="cardR ml-5">
                            <div><img src="{{asset('images/card3.png')}}" alt="card3"></div>
                            <div class="text-[1.25rem] font-bold text-[#034A58]"> Innovation and Quality Goal</div>
                            <div class="text-[#3B636B] text-[0.9rem]">We are committed to  providing the highest levels of quality in everything  we do.</div>
                        </div>
                    </div>
                    <div class="card shadow-md pr-2 py-5  w-[25%] flex items-center relative">
                    <img class="z-[-1] absolute left-10 h-[100%]" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">

                    <div class="cardL w-[10%] h-[80%] border-t-4 border-black border-b-4 border-l-0 border-r-4 flex justify-center items-center font-bold"><p class="text-center w-[450%] flex justify-between">Goal<span class="ml-1 text-[#26A7C0]"> 04</span></p></div>
                        <div class="cardR ml-5 ">
                            <div><img src="{{asset('images/card4.png')}}" alt=""></div>
                            <div class="text-[1.25rem] font-bold text-[#034A58]">Building Strategic Partnerships</div>
                            <div class="text-[#3B636B] text-[0.9rem]"> We focus on  building strong relationships with our business  partners</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- Add more sections as needed -->
@endsection