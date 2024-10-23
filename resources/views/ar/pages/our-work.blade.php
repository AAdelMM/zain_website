@extends('ar.layout')

@section('title', 'أعمالنا')

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
        right: 0;
        z-index: 50;
    }
    
    .card-body{
        justify-content:space-between;
    }

    .cards-wrapper {
        width: 100%;
        overflow: hidden;
    }

    .cards-group {
        display: flex;
        flex-wrap: wrap;
        min-width: 100%;
    }

    .card {
        width: 33.3%;
        box-sizing: border-box;
        padding: 10px;
        height:35rem;
    }

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
            <img class="h-2" src="{{asset('images/arrowRW.png')}}" alt="arrow right">    
            أعمالنا
            <img class="h-2" src="{{asset('images/arrowLW.png')}}" alt="arrow left">  
        </div>
        <div class="text-xl md:text-[2.7rem] font-extrabold mt-5 text-center px-4">معرض أعمالنا</div>
    </div>                                                                                                                                               
</div>

@php
    // Array of card data in Arabic
    $cards = [
        [
            'logo' => 'card1logo.png',
            'background' => 'card1bg.png',
            'title' => 'منصة لحجز المواعيد بسهولة',
            'description' => 'منصة للحصول على مواعيد مع الأطباء والحصول على استشارات طبية مع مجموعة من المتخصصين في مختلف المجالات الطبية',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card2bg.png',
            'title' => 'تطبيق لطلب المنتجات',
            'description' => 'تطبيق يمكن المستخدم من طلب المنتج وتوصيله إلى أي مكان يريده',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card3bg.png',
            'title' => 'تطبيق للفنادق الفاخرة',
            'description' => 'فنادق فاخرة، استكشف وجهات سياحية مذهلة بالإضافة إلى المشاركة في فعاليات استثنائية',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card4bg.png',
            'title' => 'تطبيق للحصول على أفضل العروض',
            'description' => 'احصل على أفضل العروض والخصومات مع فعاليات خاصة مع نسخة للمستخدم والبائع وعروض وخصومات مميزة',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card5bg.png',
            'title' => 'موقع يقدم خدمات الحلاقة والعناية الشخصية',
            'description' => 'خدمات العناية الشخصية للرجال، مما يتيح للعملاء حجز المواعيد بسهولة واكتشاف الخدمات المتوفرة في الصالون',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card6bg.png',
            'title' => 'تطبيق لإصلاح السيارات وحجز المواعيد',
            'description' => 'يتيح لأصحاب السيارات تحديد الأعطال بسهولة وحجز الصيانة مع تتبع حالة الصيانة وتلقي إشعارات التقدم',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card7bg.png',
            'title' => 'تطبيق تغذية لحجز الاستشارات',
            'description' => 'يتيح للمستخدمين حجز استشارات مع أخصائيي التغذية، مع إمكانية تتبع نظامهم الغذائي وتقييم تقدمهم بانتظام',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card8bg.png',
            'title' => 'موقع يقدم مجموعة متنوعة من الدورات عبر الإنترنت',
            'description' => 'موقع يقدم مجموعة متنوعة من الدورات التعليمية والموارد التعليمية من قبل نخبة من المدربين والخبراء',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card9bg.png',
            'title' => 'تطبيق لحجز ملاعب كرة القدم',
            'description' => 'مع إمكانية تحديد مساحة الملاعب وغيرها. القدرة على حجز الملعب وتحديد مساحته',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card10bg.png',
            'title' => 'تطبيق نظام إدارة متكامل',
            'description' => 'نظام متكامل لإدارة المنتجات ونقاط البيع مصمم لتلبية احتياجات الشركات والمشاريع بجميع أحجامها',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card11bg.png',
            'title' => 'منصة لإدارة المختبرات الطبية',
            'description' => 'وتسهيل تنظيم العمليات في المستشفيات والمراكز الطبية من خلال إدارة المواعيد والملفات الطبية والفواتير',
        ],
        [
            'logo' => 'card1logo.png',
            'background' => 'card12bg.png',
            'title' => 'تطبيق يتيح لك طلب الأطعمة الشرقية',
            'description' => 'تطبيق يتيح لك طلب الأطعمة الشرقية بسهولة عبر الإنترنت مع تتبع الطلبات والعروض الحصرية',
        ],
    ];
@endphp

<div class="container mx-auto px-4 mt-10">
    <!-- Our Work Section -->
    <div class="title-text md:text-[2.5rem] 2xl:text-[2.7rem] font-extrabold text-center">
        <span class="text-[#26A7C0]">أعمالنا</span> التي تجاوزت<br>التوقعات وعززت نمو الأعمال
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
                        <div class="bg-[#26A7C0] text-white w-[80%] text-center py-2 card-button absolute bottom-6">اقرأ المزيد</div>
                    </div>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </div>
    <div class="control-buttons flex justify-center mt-5">
        <button class="prev-button mx-2 bg-[#26A7C0] text-white py-2 px-4 rounded">السابق</button>
        <button class="next-button mx-2 bg-[#26A7C0] text-white py-2 px-4 rounded">التالي</button>
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
            const offset = -currentIndex * 100; // Changed to positive for RTL
            container.style.transform = `translateX(${offset}%)`;
        }
    });
</script>

@endsection