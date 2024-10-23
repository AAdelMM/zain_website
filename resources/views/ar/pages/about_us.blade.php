@extends('ar.layout')

@section('title', 'من نحن')

@section('content')
<style>
    .cardL p {
        transform: rotate(-90deg);
    }
    .overlay {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
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
            margin-right: 0 !important;
        }
        .mission img{
            width:50%;
            margin-top:2rem;
            margin-right:25%;
        }
        .vision img{
            width:50%;
            margin-top:2rem;
            margin-right:25%;
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
            <img class="h-2" src="{{asset('images/arrowRW.png')}}" alt="arrow right">    
            من نحن
            <img class="h-2" src="{{asset('images/arrowLW.png')}}" alt="arrow left">  
        </div>
        <div class="text-xl md:text-[2.7rem] font-extrabold mt-5 text-center px-4">تعرف علينا</div>
    </div>                                                                                                                                               
</div>

<div class="container mx-auto px-4 mt-10">
    <!-- About Section -->
    <div class="flex flex-col md:flex-row gap-5 justify-between relative">
        <img class="z-[-2] absolute w-full h-full object-cover" src="{{asset('images/overbg.jpg')}}" alt="bg">
        <div class="w-full md:w-auto">
            <img class="w-full h-auto" src="{{asset('images/aboutImg.png')}}" alt="">
        </div>
        <div class="w-full md:w-[40%] mb-8 md:mb-0 about-text" style="direction:rtl;">
            <div class="text-[#26A7C0] text-sm flex items-center gap-3">
                من نحن
                <img src="{{asset('images/arrowR.png')}}" alt="">
            </div>
            <div class="text-[#034A58] text-[2.5rem] md:text-[2.7rem] font-extrabold mb-6 gap-4">حيث تلتقي التكنولوجيا <span class="text-[#26A7C0]">بالإبداع </span>لبناء حلول رقمية مبتكرة</div>
            <div class="text-[#3B636B] text-base gap-4">زين زوي لتقنية المعلومات هي شركة رائدة متخصصة في تقديم حلول تكنولوجية متكاملة ومبتكرة.</div>
        </div>
        
    </div>

    <!-- Vision Section -->
    <div class="vision flex flex-col md:flex-row justify-between mt-20 md:mt-[15rem]">
    <div class="w-full md:w-auto">
            <img class="w-full h-auto" src="{{asset('images/mission.png')}}" alt="">
        </div>
        <div class="w-full md:w-[40%] mb-8 md:mb-0" style="direction:rtl;">
            <div class="text-2xl text-[#034A58] font-extrabold mb-6">رؤيتنا</div>
            <div class="text-base text-[#3B636B]">في زين زوي لتقنية المعلومات، نطمح أن نكون الخيار الأول للشركات والمؤسسات الساعية للتميز والابتكار في مجال التكنولوجيا.</div>
        </div>
        
    </div>
  
    <div class="mission flex flex-col-reverse md:flex-row justify-between mt-20 md:mt-[15rem]">
        
        <div class="w-full md:w-[40%]" style="direction:rtl;">
            <div class="text-2xl text-[#034A58] font-extrabold mb-6">رسالتنا</div>
            <div class="text-base text-[#3B636B]">مهمتنا في زين زوي لتقنية المعلومات هي تقديم حلول تقنية مبتكرة وعالية الجودة تساهم في نجاح عملائنا.</div>
        </div>
        <div class="w-full md:w-auto mb-8 md:mb-0">
            <img class="w-full h-auto" src="{{asset('images/target.png')}}" alt="">
        </div>
    </div>

    <!-- Goals Section -->
    <div class="mt-20 md:mt-[15rem]" style="direction:rtl;">
        <div class="text-2xl text-[#034A58] font-extrabold">أهدافنا</div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mt-7">
            <!-- Goal Card 1 -->
            <div class="card shadow-md p-4 relative">
                <img class="z-[-1] absolute right-0 h-full" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <div class="cardL w-full md:w-[10%] text-center md:h-[80%] mb-4 md:mb-0">
                        <p class="font-bold">هدف <span class="text-[#26A7C0]">٠١</span></p>
                    </div>
                    <div class="cardR w-full md:mr-5">
                        <img src="{{asset('images/card1.png')}}" alt="" class="mb-4">
                        <div class="text-xl font-bold text-[#034A58] mb-2">تحقيق رضا العملاء</div>
                        <div class="text-[#3B636B] text-sm">نسعى لتلبية وتجاوز توقعات عملائنا من خلال تقديم خدمات مخصصة</div>
                    </div>
                </div>
            </div>

            <!-- Goal Card 2 -->
            <div class="card shadow-md p-4 relative">
                <img class="z-[-1] absolute right-0 h-full" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <div class="cardL w-full md:w-[10%] text-center md:h-[80%] mb-4 md:mb-0">
                        <p class="font-bold">هدف <span class="text-[#26A7C0]">٠٢</span></p>
                    </div>
                    <div class="cardR w-full md:mr-5">
                        <img src="{{asset('images/card2.png')}}" alt="" class="mb-4">
                        <div class="text-xl font-bold text-[#034A58] mb-2">الابتكار والجودة</div>
                        <div class="text-[#3B636B] text-sm">نلتزم بتقديم أعلى مستويات الجودة في كل ما نقوم به</div>
                    </div>
                </div>
            </div>

            <!-- Goal Card 3 -->
            <div class="card shadow-md p-4 relative">
                <img class="z-[-1] absolute right-0 h-full" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <div class="cardL w-full md:w-[10%] text-center md:h-[80%] mb-4 md:mb-0">
                        <p class="font-bold">هدف <span class="text-[#26A7C0]">٠٣</span></p>
                    </div>
                    <div class="cardR w-full md:mr-5">
                        <img src="{{asset('images/card3.png')}}" alt="" class="mb-4">
                        <div class="text-xl font-bold text-[#034A58] mb-2">التوسع والنمو</div>
                        <div class="text-[#3B636B] text-sm">نهدف إلى توسيع خدماتنا وزيادة حصتنا السوقية في مجال تقنية المعلومات</div>
                    </div>
                </div>
            </div>

            <!-- Goal Card 4 -->
            <div class="card shadow-md p-4 relative">
                <img class="z-[-1] absolute right-0 h-full" src="{{asset('images/hiddenz.png')}}" alt="hidden bg">
                <div class="flex flex-col md:flex-row items-start md:items-center">
                    <div class="cardL w-full md:w-[10%] text-center md:h-[80%] mb-4 md:mb-0">
                        <p class="font-bold">هدف <span class="text-[#26A7C0]">٠٤</span></p>
                    </div>
                    <div class="cardR w-full md:mr-5">
                        <img src="{{asset('images/card4.png')}}" alt="" class="mb-4">
                        <div class="text-xl font-bold text-[#034A58] mb-2">بناء شراكات استراتيجية</div>
                        <div class="text-[#3B636B] text-sm">نركز على بناء علاقات قوية مع شركائنا في العمل</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection