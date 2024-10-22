<style>
    .swiper {
        width: 100%;
        padding-top: 50px;
        padding-bottom: 50px;
    }

    .swiper-slide {
        background-position: center;
        background-size: cover;
        width: 400px;
        height: 600px;
        background: white;
        border: 2px solid #eee;
        border-radius: 8px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
        transition: all 0.3s ease;
    }

    .swiper-slide-active {
        transform: scale(1.05);
    }

    .cardLogo {
        position: relative;
        padding: 20px;
    }

    .card-content {
        display: flex;
        flex-direction: column;
        align-items: center;
        height: 100%;
        text-align: right; /* Right-align text for Arabic */
    }

    .card-bottom {
        margin-top: auto;
        padding: 20px;
        width: 100%;
    }

    .read-more-btn {
        background-color: #26A7C0;
        color: white;
        padding: 12px;
        text-align: center;
        font-weight: bold;
        margin: 16px auto;
        width: 80%;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .read-more-btn:hover {
        background-color: #034A58;
    }

    .swiper-slide:hover {
        background-color: #034A58;
        color: white;
    }

    .swiper-slide:hover * {
        color: white !important;
    }

    .swiper-slide:hover .cardLogo img {
        opacity: 0;
    }

    .swiper-slide:hover .cardLogo::after {
        content: url('{{asset('images/logohover.png')}}');
        position: absolute;
        top: 20px;
        left: 20px;
    }

    .swiper-button-next, .swiper-button-prev {
        color: #26A7C0;
    }

    .swiper-pagination-bullet-active {
        background-color: #26A7C0;
    }

    .card-image {
        width: 100%;
        height: auto;
        max-width: 300px;
    }

    @media (max-width: 768px) {
        .swiper-slide {
            width: 300px;
            height: 500px;
        }

        .ourworkframe {
            display: none;
        }
    }

    @media (max-width: 600px) {
        .swiper-pagination {
            margin-top: 15rem;
        }

        .swiper {
            height: 50rem;
        }

        .swiper-slide {
            height: 40rem;
        }
    }

    /* RTL Support */
    body {
        direction: rtl;
    }

    .swiper-button-next {
        right: auto;
        left: 10px;
    }

    .swiper-button-prev {
        left: auto;
        right: 10px;
    }
</style>

<section id="ourwork">
    <div class="title text-center text-[#26A7C0] mt-[5rem]">عملنا</div>
    <div class="mt-5 relative">
        <img class="w-[100%] absolute z-[-2] top-10 ourworkframe" src="{{asset('images/ourworkbg.png')}}" alt="">
        <div class="text-center lg:text-[2.7rem] md:text-[1.8rem] text-[1.2rem] text-[#034A58] font-extrabold">
            <span class="text-[#26A7C0]">عملنا </span>الذي تجاوز التوقعات
        </div>
        <div class="text-center lg:text-[2.7rem] md:text-[1.8rem] text-[1.2rem] text-[#034A58] font-extrabold">
            وقاد إلى نمو الأعمال
        </div>

        <!-- Swiper -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <!-- Card 1 -->
                <div class="swiper-slide">
                    <div class="card-content">
                        <div class="cardLogo">
                            <img src="{{asset('images/card1logo.png')}}" alt="">
                        </div>
                        <div class="mt-10">
                            <img src="{{asset('images/card1bg.png')}}" alt="" class="card-image">
                        </div>
                        <div class="card-bottom">
                            <div class="text-[1.6rem] text-[#034A58] font-bold">منصة للحصول على المواعيد بسهولة</div>
                            <div class="text-[#034A58]">منصة للحصول على المواعيد مع الأطباء والحصول على الاستشارات الطبية مع مجموعة من المتخصصين في مختلف المجالات الطبية</div>
                            <div class="read-more-btn">اقرأ المزيد</div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="swiper-slide">
                    <div class="card-content">
                        <div class="cardLogo">
                            <img src="{{asset('images/card1logo.png')}}" alt="">
                        </div>
                        <div class="mt-10">
                            <img src="{{asset('images/card2bg.png')}}" alt="" class="card-image">
                        </div>
                        <div class="card-bottom">
                            <div class="text-[1.6rem] text-[#034A58] font-bold">تطبيق لطلب المنتجات</div>
                            <div class="text-[#034A58]">تطبيق يمكّن المستخدم من طلب المنتجات وتسليمها إلى أي مكان يريده.</div>
                            <div class="read-more-btn">اقرأ المزيد</div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="swiper-slide">
                    <div class="card-content">
                        <div class="cardLogo">
                            <img src="{{asset('images/card1logo.png')}}" alt="">
                        </div>
                        <div class="mt-10">
                            <img src="{{asset('images/card3bg.png')}}" alt="" class="card-image">
                        </div>
                        <div class="card-bottom">
                            <div class="text-[1.6rem] text-[#034A58] font-bold">تطبيق للفنادق الفاخرة</div>
                            <div class="text-[#034A58]">اكتشف الوجهات السياحية المدهشة وشارك في الفعاليات الاستثنائية في الفنادق الفاخرة.</div>
                            <div class="read-more-btn">اقرأ المزيد</div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="swiper-slide">
                    <div class="card-content">
                        <div class="cardLogo">
                            <img src="{{asset('images/card1logo.png')}}" alt="">
                        </div>
                        <div class="mt-10">
                            <img src="{{asset('images/card4bg.png')}}" alt="" class="card-image">
                        </div>
                        <div class="card-bottom">
                            <div class="text-[1.6rem] text-[#034A58] font-bold">تطبيق للحصول على أفضل العروض</div>
                            <div class="text-[#034A58]">احصل على أفضل العروض والخصومات مع فعاليات خاصة ونسخ للمستخدم والبائع.</div>
                            <div class="read-more-btn">اقرأ المزيد</div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="swiper-slide">
                    <div class="card-content">
                        <div class="cardLogo">
                            <img src="{{asset('images/card1logo.png')}}" alt="">
                        </div>
                        <div class="mt-10">
                            <img src="{{asset('images/card5bg.png')}}" alt="" class="card-image">
                        </div>
                        <div class="card-bottom">
                            <div class="text-[1rem] sm:text-[1.6rem] text-[#034A58] font-bold">موقع يوفر خدمات الحلاقة والعناية الشخصية</div>
                            <div class="text-[#034A58]">خدمات العناية الشخصية للرجال، مما يتيح للعملاء حجز المواعيد بسهولة واكتشاف الخدمات المتاحة في الصالون.</div>
                            <div class="read-more-btn">اقرأ المزيد</div>
                        </div>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="swiper-slide">
                    <div class="card-content">
                        <div class="cardLogo">
                            <img src="{{asset('images/card1logo.png')}}" alt="">
                        </div>
                        <div class="mt-10">
                            <img src="{{asset('images/card4bg.png')}}" alt="" class="card-image">
                        </div>
                        <div class="card-bottom">
                            <div class="text-[1.6rem] text-[#034A58] font-bold">تطبيق للحصول على أفضل العروض</div>
                            <div class="text-[#034A58]">احصل على أفضل العروض والخصومات مع فعاليات خاصة ونسخ للمستخدم والبائع.</div>
                            <div class="read-more-btn">اقرأ المزيد</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper(".mySwiper", {
        effect: "coverflow",
        grabCursor: true,
        centeredSlides: true,
        slidesPerView: "auto",
        initialSlide: 2,
        coverflowEffect: {
            rotate: 0,
            stretch: 0,
            depth: 100,
            modifier: 2,
            slideShadows: true,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        loop: true,
        autoplay: {
            delay: 3000,
            disableOnInteraction: false,
        },
    });
</script>
