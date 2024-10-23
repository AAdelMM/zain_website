@extends('ar.layout')

@section('title', 'الخدمات')

@section('content')

<style>
    .overlay {
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    background-color: rgba(3, 74, 88, 0.2); 
    }
    @media (max-width: 800px) {
        .row{
            flex-direction: column;
            align-items: center !important;
        }
        .row img{
            width: 60%;
        }
        .rowr img{
            width: 60%;
        }
        .rowr{
            flex-direction: column-reverse;
            align-items: center !important;
        }
        .container{
            align-items: center !important;
        }
    }
    @media (max-width: 1280px){
        .service-title{
            width: 80% !important;
            text-align: center;
            margin: auto;
        }
    }
</style>

<!--pages common section-->
<Div class="h-[50vh] cover w-[100vw] overflow-hidden relative"><img class="w-[100%] h-[100%] mb-[20rem] z-0" src="{{asset('images/z.png')}}" alt="z image">
            <div class="w-[100%] h-[100px] top-[50%] z-10 absolute text-center text-white">
                    <div class="text-[0.9rem] z-5 flex justify-center items-center gap-5">
                        <img class="h-2" src="{{asset('images/arrowRW.png')}}" alt="arrow right">    
                            الخدمات
                        <img class="h-2" src="{{asset('images/arrowLW.png')}}" alt="arrow left">  
                    </div>
                    <div class="text-[1.5rem] sm:text-[2.7rem] font-extrabold mt-5">نظرة عامة على خدماتنا</div>
            </div>                                                                                                                                               
    </Div>
<!--end pages common section-->

<div class="container mx-auto" style="direction:rtl;">
    <div class="w-[40%] mt-[8rem] service-title" style="direction:rtl;">
        <div class="font-extrabold text-[2.6rem] text-[#034A58]">حلول رقمية <span class="text-[#26A7C0]">شاملة </span>لنمو الأعمال</div>
        <div class="text-[#3B636B]">نقدم مجموعة متنوعة من الحلول الرقمية المتكاملة التي تضمن تلبية جميع احتياجاتك التقنية، من تصميم وتطوير المواقع والتطبيقات إلى التحول الرقمي واستراتيجيات التسويق الإلكتروني.</div>
    </div>

<!--Row1-->
    <div class="inline-flex items-end justify-between row w-[100%]">
        <div class="relative mt-[10rem] flex w-[100%] md:w-[40%] justify-center">
                <img class="z-[-1] w-[80%]" src="{{asset('images/service1.png')}}" alt="">
        </div>
        <div class="border-4 border-[#034A58] w-[80%] md:w-[50%] p-8" style="direction:rtl;" >
            <div><img src="{{asset('images/01.png')}}" alt="01number"></div>
            <div class="font-extrabold text-[1.2rem] md:text-[2.7rem] my-5">تطوير التطبيقات</div>
            <div class="text-[#3B636B]">نقدم خدمات تطوير التطبيقات المخصصة لتلبية احتياجات الأعمال المختلفة، مع التركيز على الأداء وسهولة الاستخدام.</div>
        </div>
    </div>

<!--Row2-->
    <div class="inline-flex items-end justify-between rowr w-[100%]" >
        <div class="border-4 border-[#034A58] w-[80%] md:w-[50%] p-8" style="direction:rtl;">
            <div><img src="{{asset('images/02.png')}}" alt="02number"></div>
            <div class="font-extrabold text-[1.2rem] md:text-[2.7rem] my-5">إنشاء المواقع الإلكترونية</div>
            <div class="text-[#3B636B]">نقوم بتصميم وبناء مواقع تفاعلية ومتجاوبة تعكس هوية عملائنا وتعزز حضورهم الرقمي.</div>
        </div>
        <div class="relative mt-[10rem] flex w-[100%] md:w-[40%] justify-center">
                <img class="z-[-1] w-[80%]" src="{{asset('images/service2.png')}}" alt="">
        </div>
    </div>

<!--Row3-->
    <div class="inline-flex items-end justify-between row w-[100%]">
        <div class="relative mt-[10rem] flex w-[100%] md:w-[40%] justify-center">
                <img class="z-[-1] w-[80%]" src="{{asset('images/service3.png')}}" alt="">
        </div>
        <div class="border-4 border-[#034A58] w-[80%] md:w-[50%] p-8" style="direction:rtl;">
            <div><img src="{{asset('images/03.png')}}" alt="03number"></div>
            <div class="font-extrabold text-[1.2rem] md:text-[2.7rem] my-5">خدمات التصميم</div>
            <div class="text-[#3B636B]">نقدم خدمات تصميم شاملة، من تصميم الشعارات والهوية البصرية إلى تصاميم وسائل التواصل الاجتماعي والإعلانات.</div>
        </div>
    </div>

<!--Row4-->    
    <div class="inline-flex items-end justify-between rowr w-[100%]">
        <div class="border-4 border-[#034A58] w-[80%] md:w-[50%] p-8" style="direction:rtl;">
            <div><img src="{{asset('images/04.png')}}" alt="04number"></div>
            <div class="font-extrabold text-[1.2rem] md:text-[2.7rem] my-5">التسويق الرقمي</div>
            <div class="text-[#3B636B]">نقدم حلول التسويق الرقمي المتكاملة، بما في ذلك إدارة حسابات وسائل التواصل الاجتماعي والحملات الإعلانية</div>
        </div>
        <div class="relative mt-[10rem] flex w-[100%] md:w-[40%] justify-center">
                <img class="z-[-1] w-[80%]" src="{{asset('images/service4.png')}}" alt="">
        </div>
    </div>
</div>
@endsection