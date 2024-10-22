<style>
    .cardL {
        transform: rotate(90deg); /* Changed rotation for RTL */
    }

    /* RTL specific styles */
    .rtl {
        direction: rtl;
        text-align: right;
    }

    /* Responsive Styles */
    @media (max-width: 1024px) {
        #aboutUs .flex-col {
            flex-direction: column;
        }
        #aboutUs .w-full {
            width: 100%;
        }
        #aboutUs .lg\\:w-\\[50%\\] {
            width: 100%;
        }
        #aboutUs .lg\\:w-\\[45%\\] {
            width: 100%;
        }
        #aboutUs .lg\\:flex-row {
            flex-direction: column;
        }
    }

    @media (max-width: 768px) {
        .text-[1.8rem], .text-[1.7rem], .text-[2.6rem] {
            font-size: 1.5rem;
        }
        .text-[0.9rem] {
            font-size: 0.8rem;
        }
        .cardR .text-[1rem], .cardR .text-[1.25rem] {
            font-size: 0.9rem;
        }
        .text-center {
            text-align: center;
        }
        .mt-10 {
            margin-top: 2rem;
        }
    }

    @media (max-width: 640px) {
        .text-[2.6rem] {
            font-size: 1.8rem;
        }
        .text-[1.8rem], .text-[1.7rem] {
            font-size: 1.4rem;
        }
        .text-[0.9rem] {
            font-size: 0.7rem;
        }
        .card {
            width: 100%;
            margin-bottom: 1rem;
        }
        .cardL {
            width: 30%;
        }
        .cardL p {
            font-size: 0.8rem;
        }
        .cardR {
            margin-right: 1rem; /* Changed from margin-left for RTL */
        }
        .w-40 {
            width: 100%;
        }
    }
    @media (max-width: 500px){
        .cardL{
            width: 70%;
        }
    }

    #aboutUs img.absolute {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
</style>

<section id="aboutUs" class="relative py-10 rtl">
    <img class="absolute z-[-5] w-full h-auto right-0 opacity-50 object-cover" src="{{asset('images/aboutbg.png')}}" alt="خلفية من نحن">
    <img class="absolute right-0 z-[-3] w-full h-full opacity-98 object-cover" src="{{asset('images/aboutcover.png')}}" alt="غطاء">

    <div class="container mx-auto mt-20 px-4">
        <div class="text-[#26A7C0] flex items-center gap-2 text-[0.9rem]">
            <img class="w-6 h-2 transform rotate-180" src="{{asset('images/arrowL.png')}}" alt=""> من نحن
        </div>

        <div class="flex flex-col lg:flex-row justify-between gap-10 mt-5">
            <!-- Text Content -->
            <div class="flex flex-col font-extrabold w-full lg:w-[50%] my-5">
                <div class="text-[1.8rem] sm:text-[2.6rem] text-[#034A58]">حيث تلتقي التكنولوجيا</div>
                <div class="text-[1.7rem] sm:text-[2.6rem] text-[#034A58]">مع <span class="text-[#26A7C0]">الإبداع</span> لبناء</div>
                <div class="text-[1.8rem] sm:text-[2.6rem] text-[#034A58]">حلول رقمية مبتكرة</div>
                <div class="text-[#3B636B] font-normal my-7 text-[0.9rem] leading-relaxed">
                    زين زوي لتقنية المعلومات هي شركة رائدة متخصصة في تقديم حلول تكنولوجية متكاملة ومبتكرة. تأسست في بداية هذا العام، ونهدف إلى ترك بصمتنا في عالم التكنولوجيا سريع التطور. نقدم مجموعة متنوعة من الخدمات التقنية التي تلبي احتياجات عملائنا وتساعدهم في تحقيق أهدافهم من خلال التكنولوجيا الحديثة.
                </div>
                <div class="w-40 bg-[#26A7C0] text-white text-center py-3 cursor-pointer">اقرأ المزيد</div>
            </div>
            <!-- Image -->
            <div class="w-full lg:w-[45%]">
                <img class="w-full h-auto" src="{{asset('images/aboutImg.png')}}" alt="صورة من نحن">
            </div>
        </div>

        <!-- Goals Section -->
        <div class="flex flex-col mt-10 gap-10">
            <div class="flex flex-wrap justify-around gap-10">
                <!-- Goal Card 1 -->
                <div class="card shadow-md px-4 py-5 w-full sm:w-[45%] lg:w-[25%] flex items-center">
                    <div class="cardL w-[70%] h-[20%] border-l-4 border-black border-b-4 border-r-4 flex justify-center items-center font-bold">
                        <p class="flex justify-between">الهدف<span class="mr-1 text-[#26A7C0]">١</span></p>
                    </div>
                    <div class="cardR mr-5">
                        <div><img src="{{asset('images/card1.png')}}" alt="الهدف ١"></div>
                        <div class="text-[1rem] sm:text-[1.25rem] font-bold text-[#034A58]">تحقيق رضا العملاء</div>
                        <div class="text-[#3B636B] text-[0.8rem]">نسعى لتلبية وتجاوز توقعات عملائنا من خلال تقديم خدمات مخصصة.</div>
                    </div>
                </div>

                <!-- Goal Card 2 -->
                <div class="card shadow-md px-4 py-5 w-full sm:w-[45%] lg:w-[25%] flex items-center">
                    <div class="cardL w-[70%] h-[20%] border-l-4 border-black border-b-4 border-r-4 flex justify-center items-center font-bold">
                        <p class="flex justify-between">الهدف<span class="mr-1 text-[#26A7C0]">٣</span></p>
                    </div>
                    <div class="cardR mr-5">
                        <div><img src="{{asset('images/card2.png')}}" alt="الهدف ٢"></div>
                        <div class="text-[1rem] sm:text-[1.25rem] font-bold text-[#034A58]">التوسع والنمو</div>
                        <div class="text-[#3B636B] text-[0.8rem]">نهدف إلى توسيع خدماتنا وزيادة حصتنا السوقية في مجال تقنية المعلومات.</div>
                    </div>
                </div>

                <!-- Goal Card 3 -->
                <div class="card shadow-md px-4 py-5 w-full sm:w-[45%] lg:w-[25%] flex items-center">
                    <div class="cardL w-[70%] h-[20%] border-l-4 border-black border-b-4 border-r-4 flex justify-center items-center font-bold">
                        <p class="flex justify-between">الهدف<span class="mr-1 text-[#26A7C0]">٢</span></p>
                    </div>
                    <div class="cardR mr-5">
                        <div><img src="{{asset('images/card3.png')}}" alt="الهدف ٣"></div>
                        <div class="text-[1rem] sm:text-[1.25rem] font-bold text-[#034A58]">الابتكار والجودة</div>
                        <div class="text-[#3B636B] text-[0.8rem]">نلتزم بتقديم أعلى مستويات الجودة في كل ما نقوم به.</div>
                    </div>
                </div>

                <!-- Goal Card 4 -->
                <div class="card shadow-md px-4 py-5 w-full sm:w-[45%] lg:w-[25%] flex items-center">
                    <div class="cardL w-[70%] h-[20%] border-l-4 border-black border-b-4 border-r-4 flex justify-center items-center font-bold">
                        <p class="flex justify-between">الهدف<span class="mr-1 text-[#26A7C0]">٤</span></p>
                    </div>
                    <div class="cardR mr-5">
                        <div><img src="{{asset('images/card4.png')}}" alt="الهدف ٤"></div>
                        <div class="text-[1rem] sm:text-[1.25rem] font-bold text-[#034A58]">بناء شراكات استراتيجية</div>
                        <div class="text-[#3B636B] text-[0.8rem]">نركز على بناء علاقات قوية مع شركائنا في العمل.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Decorative Image -->
        <img class="absolute left-0 top-1/2 transform -translate-y-1/2 w-20 opacity-75" src="{{asset('images/aboutz.png')}}" alt="صورة تزيينية">
    </div>
</section>