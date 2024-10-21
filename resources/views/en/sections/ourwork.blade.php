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
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
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
        @media (max-width: 600px){
            .swiper-pagination{
                margin-top:15rem;
            }
            .swiper{
                height:50rem;
            }
            .swiper-slide{
                height:40rem;
            }
        }
    </style>

    <section id="ourwork">
        <div class="title text-center text-[#26A7C0] mt-[5rem]">our work</div>
        <div class="mt-5 relative">
            <img class="w-[100%] absolute z-[-2] top-10 ourworkframe" src="{{asset('images/ourworkbg.png')}}" alt="">
            <div class="text-center lg:text-[2.7rem] md:text-[1.8rem] text-[1.2rem] text-[#034A58] font-extrabold">
                <span class="text-[#26A7C0]">Our Work </span>That Exceeded
            </div>
            <div class="text-center lg:text-[2.7rem] md:text-[1.8rem] text-[1.2rem] text-[#034A58] font-extrabold">
                Expectations And Drove Business Growth
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
                                <div class="text-[1.6rem] text-[#034A58] font-bold">A platform to easily get appointments</div>
                                <div class="text-[#034A58]">A platform to get appointments with doctors and obtain medical consultations with a group of specialists in various medical fields</div>
                                <div class="read-more-btn">READ MORE</div>
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
                                <div class="text-[1.6rem] text-[#034A58] font-bold">An application for order the product</div>
                                <div class="text-[#034A58]">An application that enables the user to order the product and have it delivered to any place he wants.</div>
                                <div class="read-more-btn">READ MORE</div>
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
                                <div class="text-[1.6rem] text-[#034A58] font-bold">An application for Luxury hotels</div>
                                <div class="text-[#034A58]">Luxury hotels, explore amazing tourist destinations In addition to participating in exceptional events.</div>
                                <div class="read-more-btn">READ MORE</div>
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
                                <div class="text-[1.6rem] text-[#034A58] font-bold">Application to get the best Offers</div>
                                <div class="text-[#034A58]">Get the best Offers and discounts with special events with User & seller version and Distinctive offers and discounts</div>
                                <div class="read-more-btn">READ MORE</div>
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
                                <div class="text-[1rem] sm:text-[1.6rem] text-[#034A58] font-bold">A site that provides barbering and personal care services</div>
                                <div class="text-[#034A58]">Personal care services for men, allowing customers to easily book appointments and discover the services available in the salon</div>
                                <div class="read-more-btn">READ MORE</div>
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
                                <div class="text-[1.6rem] text-[#034A58] font-bold">Application to get the best Offers</div>
                                <div class="text-[#034A58]">Get the best Offers and discounts with special events with User & seller version and Distinctive offers and discounts</div>
                                <div class="read-more-btn">READ MORE</div>
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

    <!-- Include Swiper JS -->
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