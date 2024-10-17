<style>
    .carousel-container {
        overflow: hidden;
        position: relative;
    }

    .cards {
        display: flex;
        transition: transform 0.5s ease;
    }

    .card {
        flex: 0 0 calc(33.333% - 20px);
        margin: 0 10px;
        transition: background-color 1s, color 1s;
        min-width: calc(33.333% - 20px);
    }

    .card:hover {
        background-color: #034A58;
        color: white;
    }

    .card:hover .text-[#034A58] {
        color: white;
    }

    .cardLogo img {
        transition: opacity 0.3s;
    }

    .card:hover .cardLogo img {
        opacity: 0;
    }

    .card:hover * {
        color: white;
    }

    .card:hover .cardLogo::after {
        content: url('{{asset('images/logohover.png')}}');
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
    }

    /* Responsive adjustments */
    @media (max-width: 1024px) {
        .card {
            flex: 0 0 calc(50% - 20px);
            min-width: calc(50% - 20px);
        }
    }
    @media (max-width: 800px) {
        .ourworkframe{
            display:none;
        }
    }

    @media (max-width: 768px) {
        .card {
            flex: 0 0 calc(100% - 20px);
            min-width: calc(100% - 20px);
        }
        .ourworkframe{
            display:none;
        }
    }

    .carousel-navigation {
        display: flex;
        justify-content: center;
        gap: 10px;
        margin-top: 10px;
    }
</style>


<section id="ourwork">
    <div class="title  text-center text-[#26A7C0] mt-[5rem]">our work</div>
    <div class="mt-5 relative">
        <img class="w-[100%] absolute z-[-2] top-10 ourworkframe" src="{{asset('images/ourworkbg.png')}}" alt="">
        <div class="text-center lg:text-[2.7rem] md:text-[1.8rem] text-[1.2rem] text-[#034A58] font-extrabold  "><span class="text-[#26A7C0]">Our Work </span>That Exceeded</div>
        <div class="text-center lg:text-[2.7rem] md:text-[1.8rem] text-[1.2rem] text-[#034A58] font-extrabold">Expectations And Drove Business Growth</div>
        <div class="carousel-container w-[80%] mx-auto">
        <div class="text-center cards container flex mt-[10rem] mx-auto w-[80%]">
        <div class="card mx-2 border-2 shadow-2xl w-[20%] h-[40rem] relative">
                <div class="cardLogo">
                     <img src="{{asset('images/card1logo.png')}}" alt="" class="cardLogo" id="logoImage">
                     
                </div>
                <div class="container mx-auto flex flex-col items-center mt-10">
                <div class="mx-auto text-center w-[80%]"><img src="{{asset('images/card1bg.png')}}" alt=""></div>
                <div class="container absolute bottom-3">
                    <div class="text-[1.6rem] text-[#034A58] px-4 font-bold">A platform to easily  get appointments</div>
                    <div class="text-[#034A58] px-4">A platform to get appointments with doctors and  obtain medical consultations with a group of specialists in various medical  fields</div>
                    <div class="w-[80%] py-3 mx-auto bg-[#26A7C0] text-white font-bold my-4">READ MORE</div>
                </div>
                </div>
            </div>
            <div class="card mx-2 border-2 shadow-2xl w-[20%] h-[auto] relative">
                <div class="cardLogo">
                     <img src="{{asset('images/card1logo.png')}}" alt="" class="cardLogo" id="logoImage">
                     
                </div>
                <div class="container mx-auto flex flex-col items-center mt-10">
                <div class="mx-auto text-center "><img src="{{asset('images/card2bg.png')}}" alt=""></div>
                <div class="container absolute bottom-3">
                    <div class="text-[1.6rem] text-[#034A58] px-4 font-bold">An application 
                    for order the product</div>
                    <div class="text-[#034A58] px-4">An application that enables the user 
                                                        to order the product and have it 
                                                        delivered to  any place he wants.</div>
                    <div class="w-[80%] py-3 mx-auto bg-[#26A7C0] text-white font-bold my-4">READ MORE</div>
                </div>
                </div>
            </div>
            <div class="card mx-2 border-2 shadow-2xl w-[20%] h-[auto] relative">
                <div class="cardLogo">
                     <img src="{{asset('images/card1logo.png')}}" alt="" class="cardLogo" id="logoImage">
                     
                </div>
                <div class="container mx-auto flex flex-col items-center mt-10">
                <div class="mx-auto text-center"><img src="{{asset('images/card3bg.png')}}" alt=""></div>
                <div class="container absolute bottom-3">
                    <div class="text-[1.6rem] text-[#034A58] px-4 font-bold">An application 
                    for  Luxury hotels</div>
                    <div class="text-[#034A58] px-4">Luxury hotels, explore amazing tourist  destinations In addition to participating in  exceptional events.</div>
                    <div class="w-[80%] py-3 mx-auto bg-[#26A7C0] text-white font-bold my-4">READ MORE</div>
                </div>
                </div>
            </div>
            <div class="card mx-2 border-2 shadow-2xl w-[20%] h-[auto] relative">
                <div class="cardLogo">
                     <img src="{{asset('images/card1logo.png')}}" alt="" class="cardLogo" id="logoImage">
                     
                </div>
                <div class="container mx-auto flex flex-col items-center mt-10">
                <div class="mx-auto text-center"><img src="{{asset('images/card4bg.png')}}" alt=""></div>
                <div class="container absolute bottom-3">
                    <div class="text-[1.6rem] text-[#034A58] px-4 font-bold"> Application to
                    get the best Offers </div>
                    <div class="text-[#034A58] px-4"> get the best Offers and discounts with special events with User & seller version and Distinctive offers and discounts</div>
                    <div class="w-[80%] py-3 mx-auto bg-[#26A7C0] text-white font-bold my-4">READ MORE</div>
                    </div>
                </div>
            </div>
            <div class="card mx-2 border-2 shadow-2xl w-[20%] h-[auto] relative">
                <div class="cardLogo">
                     <img src="{{asset('images/card1logo.png')}}" alt="" class="cardLogo" id="logoImage">
                     
                </div>
                <div class="container mx-auto flex flex-col items-center mt-10">
                <div class="mx-auto text-center"><img src="{{asset('images/card5bg.png')}}" alt=""></div>
                    <div class="container absolute bottom-3">
                    <div class="text-[1.6rem] text-[#034A58] px-2 font-bold">A site that provides
                         barbering and personal care services</div>
                    <div class="text-[#034A58] px-4">personal care services for men, allowing customers to easily book appointments and discover the services available in the salon</div>
                    <div class="w-[80%] py-3 mx-auto bg-[#26A7C0] text-white font-bold my-4">READ MORE</div>
                </div>
            </div>
            
</div>
<div class="card mx-2 border-2 shadow-2xl w-[20%] h-[auto] relative">
                <div class="cardLogo">
                     <img src="{{asset('images/card1logo.png')}}" alt="" class="cardLogo" id="logoImage">
                     
                </div>
                <div class="container mx-auto flex flex-col items-center mt-10">
                <div class="mx-auto text-center"><img src="{{asset('images/card4bg.png')}}" alt=""></div>
                <div class="container absolute bottom-3">
                    <div class="text-[1.6rem] text-[#034A58] px-4 font-bold"> Application to
                    get the best Offers </div>
                    <div class="text-[#034A58] px-4"> get the best Offers and discounts with special events with User & seller version and Distinctive offers and discounts</div>
                    <div class="w-[80%] py-3 mx-auto bg-[#26A7C0] text-white font-bold my-4">READ MORE</div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="carousel-navigation  flex justify-center gap-10 mt-10">
        <button class="prev">Previous</button>
        <button class="next">Next</button>
    </div>
</section>

<script>
    const carouselContainer = document.querySelector('.carousel-container');
    const cardsContainer = document.querySelector('.cards');
    const cards = document.querySelectorAll('.card');
    const prevButton = document.querySelector('.prev');
    const nextButton = document.querySelector('.next');

    let currentIndex = 0;
    const totalCards = cards.length;
    let visibleCards = getVisibleCards();

    function getVisibleCards() {
        const containerWidth = carouselContainer.offsetWidth;
        if (containerWidth <= 768) {
            return 1; // Show 1 card on small screens
        } else if (containerWidth <= 1024) {
            return 2; // Show 2 cards on medium screens
        } else {
            return 3; // Show 3 cards on large screens
        }
    }

    function updateCarousel() {
        const cardWidth = cards[0].offsetWidth + 20; // Including margin
        const offset = -currentIndex * cardWidth;
        cardsContainer.style.transform = `translateX(${offset}px)`;
    }

    function moveCarousel(direction) {
        currentIndex = (currentIndex + direction + totalCards) % totalCards;
        updateCarousel();
    }

    prevButton.addEventListener('click', () => moveCarousel(-visibleCards));
    nextButton.addEventListener('click', () => moveCarousel(visibleCards));

    // Recalculate visible cards on window resize
    window.addEventListener('resize', () => {
        visibleCards = getVisibleCards();
        updateCarousel();
    });

    // Initialize the carousel
    updateCarousel();
</script>
