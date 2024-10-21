@extends('en.layout')

@section('title', 'Our Work')

@section('content')

<style>
    /* Hover effect for the card */
    .card:hover {
        background-color: #034A58;
       
        transition: background-color 1s, color 1s;
    }
    .card:hover * {
        color: white;
    }
    .card:hover .cardLogo img {
        opacity: 0;
    }
    .card:hover .cardLogo::after {
        content: url('{{asset('images/logohover.png')}}');
        position: absolute;
        top: 0;
        left: 0;
        z-index: 50;
    }
    
    .card-body{
        justify-content:space-between;
    }
    /* Hover effect for the card logo */
   /*  .cardLogo:hover {
        content: url('{{asset('images/logohover.png')}}');
    } */

    /* CSS for scrolling the cards container */
    .cards-wrapper {
        width: 100%;
        overflow: hidden;
    }

    /* Ensuring each group is 100% of the container width */
    .cards-group {
        display: flex;
        flex-wrap: wrap;
        min-width: 100%;
    }

    /* Card styling */
    .card {
        width: 33.3%;
        box-sizing: border-box;
        padding: 10px;
        height:35rem;
    }

    /* Mobile styles */
    @media (max-width: 800px) {
        .card {
            width: 100% !important;
        }
        .hero{
            height:20rem;
            
        }
        .z-image{
            over-flow:hidden;        
        }
        
        .cards-group {
            flex-direction: column;
            align-items: center;
        }
    }
</style>

<!-- Hero Section -->
<div class="min-h-[50vh] w-full overflow-hidden relative hero">
    <img class="w-full h-full md:object-cover z-image" src="{{asset('images/z.png')}}" alt="z image">
    <div class="absolute inset-0 flex flex-col justify-center items-center text-white">
        <div class="text-sm md:text-base flex items-center gap-3">
            <img class="h-2" src="{{asset('images/arrowLW.png')}}" alt="arrow left">    
            Our Work
            <img class="h-2" src="{{asset('images/arrowRW.png')}}" alt="arrow right">  
        </div>
        <div class="text-xl md:text-[2.7rem] font-extrabold mt-5 text-center px-4">Showcase of Our Work</div>
    </div>                                                                                                                                               
</div>

@php
    // Array of card data
    $cards = [
        [
            'logo' => 'card1logo.png',
            'background' => 'card1bg.png',
            'title' => 'A platform to easily  get appointments',
            'description' => 'A platform to get appointments with doctors and  obtain medical consultations with a group of specialists in various medical  fields',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card2bg.png',
            'title' => 'An application 
            for order the product',
            'description' => 'An application that enables the user 
to order the product and have it 
delivered to  any place he wants.',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card3bg.png',
            'title' => 'An application 
            for  Luxury hotels',
            'description' => 'Luxury hotels, explore amazing tourist  destinations In addition to participating in  exceptional events.',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card4bg.png',
            'title' => ' Application to
            get the best Offers ',
            'description' => ' get the best Offers and discounts with special events with User & seller version and Distinctive offers and discounts',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card5bg.png',
            'title' => 'A site that provides barbering and personal care services',
            'description' => 'personal care services for men, allowing customers to easily book appointments and discover the services available in the salon',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card6bg.png',
            'title' => 'An application for car repair and appointment booking',
            'description' => ' allows car owners to easily identify faults and book maintenance while tracking maintenance status and receiving progress notifications',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card7bg.png',
            'title' => 'A nutrition application 
            to book consultations',
            'description' => 'that allows users to book consultations with nutritionists, with the ability to track their diet and evaluate their progress regularly.',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card8bg.png',
            'title' => 'A site that offers a 
            variety of online courses',
            'description' => 'A site that offers a variety of online courses and educational resources by elite trainers and experts',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card9bg.png',
            'title' => 'Application for
            booking football fields',
            'description' => ' with The ability to specify the area of the fields and others. The ability to book the field and specify its area',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card10bg.png',
            'title' => ' Application of an integrated of management System',
            'description' => ' integrated  system for managing products  and points of sale designed to  meet the needs of companies  and projects of a l sizes',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card11bg.png',
            'title' => ' A platform for managing medical  laboratories',
            'description' => ' and facilitating the  organization of operations in  hospitals and medical centers by  managing appointments, medical  files, bi ls, ',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card12bg.png',
            'title' => 'An application that a lows  you to order Oriental foods',
            'description' => 'An application that a lows  you to order Oriental foods  easily online with tracking  Orders and exclusive offers.',
        ],
        // Add more card data as needed
    ];
@endphp

<div class="container mx-auto px-4 mt-10">
    <!-- Our Work Section -->
    <div class="title-text md:text-[2.5rem] 2xl:text-[2.7rem] font-extrabold text-center">
        <span class="text-[#26A7C0]">Our Work</span> That Exceeded<br>Expectations and Drove Business Growth
    </div>
    <div class="cards-wrapper overflow-hidden mt-10 relative">
        <div class="cards-container flex transition-transform duration-300">
            @foreach (array_chunk($cards, 6) as $group)
            <div class="cards-group">
                @foreach ($group as $card)
                <div class="card shadow-xl relative mt-10">
                <div class="cardLogo">
                     <img src="{{asset('images/card1logo.png')}}" alt="" class="cardLogo" id="logoImage">
                     
                </div>
                    <div class="container m-auto px-10 py-5 flex flex-col items-center card-body">
                        <div><img src="{{asset('images/' . $card['background'])}}" alt="{{ $card['title'] }} Background"></div>
                        <div class="text-[1.5rem] font-extrabold text-[#034A58] text-center">{{ $card['title'] }}</div>
                        <div class="text-[#3B636B] text-center">{{ $card['description'] }}</div>
                        <div class="bg-[#26A7C0] text-white w-[80%] text-center py-2 card-button absolute bottom-6 ">READ MORE</div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    <div class="control-buttons flex justify-center mt-5">
        <button class="prev-button mx-2 bg-[#26A7C0] text-white py-2 px-4 rounded">Previous</button>
        <button class="next-button mx-2 bg-[#26A7C0] text-white py-2 px-4 rounded">Next</button>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        let currentIndex = 0;
        const groups = document.querySelectorAll('.cards-group');
        const totalGroups = groups.length;
        const container = document.querySelector('.cards-container');
        
        document.querySelector('.next-button').addEventListener('click', function () {
            if (currentIndex < totalGroups - 1) {
                currentIndex++;
                updateCarousel();
            }
        });

        document.querySelector('.prev-button').addEventListener('click', function () {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        function updateCarousel() {
            const offset = -currentIndex * 100;
            container.style.transform = `translateX(${offset}%)`;
        }
    });
</script>

@endsection
