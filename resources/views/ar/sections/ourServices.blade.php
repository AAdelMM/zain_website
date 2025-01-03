<style>
     @media (max-width: 800px) {
        .contentL .line1,.line2{
            font-size:20px;
        }
        .contentL p{
            width: 60%;
        }
        .contentL .button{
            width: 40%;
        }
    }
    @media (max-width: 600px) {
        #service{
            height: 90rem;
        }
        .bg1{
            display:none;
        }
        .contentL .line1,.line2{
            justify-items:center;
        }
        .contentL p{
            width: 100%;
        }
        .contentL .cardbody .space{
            margin-bottom: 50px !important;
        }
    }
    @media (max-width: 400px) {
        #service{
            height: 85rem;
        }
    }
</style>

<section id="service" class="overflow-hidden" dir="rtl">
    <div class="container-fluid mx-auto h-auto md:h-[80rem] mt-[5rem] md:mt-[10rem] relative">
        <!-- Background images -->
        <img class="z-1 w-full md:w-[80%] bg1" src="{{asset('images/ourworkar.png')}}" alt="rectangle1">
        <img class="absolute z-4 bottom-0 w-full h-[50%] md:h-[70%] bg2" src="{{asset('images/ourworkar2.png')}}" alt="rectangle2">
        <img class="absolute left-0 top-[-20px] z-[-3] opacity-80 hidden md:block bg3" src="{{asset('images/servicebg3.png')}}" alt="rectangle3">
        <img class="absolute left-0 top-[-20px] z-[-1] hidden md:block" src="{{asset('images/cover.png')}}" alt="white cover">
        
        <!-- Content -->
        <div class="content absolute top-[5rem] right-0 w-full flex flex-col items-center justify-between">
            <div class="container contentL mx-auto flex flex-col md:flex-row items-center justify-between mt-[2rem] px-5">
                <div class="w-full md:w-[46%] mr-0 md:mr-[4rem] text-center md:text-right">
                    <div class="flex text-[#26A7C0] w-full items-center justify-start md:justify-end mb-5">
                        <img class="h-2 w-[5%] ml-4 rotate-180" src="{{asset('images/arrowL.png')}}" alt=""> خدماتنا
                    </div>
                    <div class="text-[1.8rem] line1 sm:text-[2.4rem] md:text-[2.6rem] font-extrabold text-[#3B636B]">
                        حلول رقمية شاملة
                    </div>
                    <div class="line2 text-[1.8rem] sm:text-[2.4rem] md:text-[2.6rem] font-extrabold text-[#3B636B]">
                        <span class="text-[#26A7C0]">حلول</span> لنمو الأعمال
                    </div>
                    <div class="mt-5 line3 text-[#3B636B] text-sm sm:text-base">
                        <p>نقدم مجموعة متنوعة من الحلول الرقمية المتكاملة التي تضمن تلبية جميع احتياجاتك التقنية، من تصميم وتطوير المواقع والتطبيقات إلى التحول الرقمي واستراتيجيات التسويق الإلكتروني.</p>
                    </div>
                </div>
                <div class="button w-[50%] md:w-[10%] py-2 bg-[#26A7C0] text-center text-white font-bold mt-5 md:mt-0">
                  <a href="/ar.services"> اكتشف المزيد
                  </a> </div>
            </div>
            
            <!-- Card layout for mobile -->
            <div class="cardbody flex flex-col md:flex-row justify-center md:justify-between w-full md:w-[80%] mt-[5rem] md:mt-[10rem] px-5">
                <div class="w-full space md:w-[50%] flex flex-col justify-end items-center md:mb-[-2rem]">
                    <div class="text-center"><img class="w-full md:w-auto" src="{{asset('images/serviceimage.png')}}" alt="service image"></div>
                    <div class="mt-5"><img class="w-full md:w-auto scroll-button" src="{{asset('images/servicebutton.png')}}" alt="buttons"></div>
                </div>
                <div class="cardcontent w-full md:w-[50%] lg:w-[35%] mt-5 md:mt-0">
                    <div class="border-4 border-[#034A58] flex flex-col bg-white p-[2rem] md:p-[3rem]">
                        <div class="text-center md:text-right"><img src="{{asset('images/01.png')}}" alt=""></div>
                        <div class="text-[1.5rem] md:text-[2rem] font-bold mt-5 text-center md:text-right">
                            خدمات تطوير <br> التطبيقات
                        </div>
                        <div class="text-[#3B636B] mt-5 text-sm md:text-base text-center md:text-right">
                            نقدم خدمات تطوير تطبيقات مخصصة لتلبية احتياجات الأعمال المختلفة، مع التركيز على الأداء وسهولة الاستخدام.
                        </div>
                        <div class="button bg-[#26A7C0] w-full mt-3 py-3 text-center text-white">
                            اقرأ المزيد
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>