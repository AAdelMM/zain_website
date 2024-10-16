<style>
    /* Responsive Styles */
    @media (max-width: 1024px) {
        footer .flex-col {
            flex-direction: column;
            align-items: center;
        }
        footer .w-full {
            width: 100%;
        }
        footer .lg\\:w-\\[50%\\] {
            width: 100%;
        }
        footer .lg\\:w-\\[20%\\] {
            width: 100%;
            text-align: center;
        }
        footer .lg\\:justify-between {
            justify-content: center;
        }
        footer .contactus, footer .main-menu, footer .social {
            text-align: center;
        }
    }

    @media (max-width: 768px) {
        .text-[1.5rem] {
            font-size: 1.2rem;
        }
        .mb-[15rem] {
            margin-bottom: 4rem;
        }
        footer .social div {
            margin-top: 0.5rem;
        }
    }

    @media (max-width: 640px) {
        .text-[1.5rem] {
            font-size: 1rem;
        }
        .text-[0.9rem] {
            font-size: 0.8rem;
        }
        .mb-[1rem] {
            margin-bottom: 0.5rem;
        }
        .newsletter input {
            width: 100%;
        }
        footer .newsletter .flex {
            flex-direction: column;
            align-items: flex-start;
        }
        footer .container {
            padding: 0 1rem;
        }
    }

    @media (max-width: 400px) {
        .text-[1.2rem] {
            font-size: 1rem;
        }
        .text-[0.8rem] {
            font-size: 0.8rem;
        }
        .mb-[1rem] {
            margin-bottom: 0.5rem;
        }
        .newsletter input {
            width: 100%;
        }
        footer .newsletter .flex {
            flex-direction: column;
            align-items: flex-start;
        }
        footer .container {
            padding: 0 1rem;
        }
        #blue_bg{
            height:70rem;
            width: 190rem;     
            object-fit:contain;
            
        }
        #trianglebg{
            height:40rem;
            width: 60rem;
        }
    }
    /* Footer background images styling */
    /* footer img.w-full {
        width: 100%;
        height: auto;
        object-fit: cover;
    } */
</style>

<footer class="relative desktop-footer">
    <img class="w-full" src="{{asset('images/footerrect.png')}}" id="trianglebg" alt="Footer Background">
    <img class="w-[80%] absolute right-0 bottom-0" src="{{asset('images/footerrect2.png')}}" id="blue_bg" alt="Footer Overlay">

    <div class="w-full flex absolute bottom-0">
        <div class="container mx-auto flex flex-col lg:flex-row justify-between">
            <!-- Company Info -->
            <div class="w-full lg:w-[20%] mb-[15rem] flex flex-col items-center">
                <div class="mb-[1rem]"><img src="{{asset('images/footerlogo.png')}}" alt="Logo"></div>
                <div class="text-[#3B636B] text-center px-5 text-[0.9rem] font-bold">
                    <p>Zain Zwy Information Technology is a leading company specializing in providing integrated and innovative technology solutions. Founded at the beginning of this year.</p>
                </div>
            </div>

            <!-- Newsletter -->
            <div class="w-full lg:w-[50%] flex flex-col items-center">
                <div class="newsletter flex flex-col items-center">
                    <h2 class="text-2xl font-semibold text-white mb-4">Newsletter</h2>
                    <p class="text-teal-100 mb-6">Subscribe to our newsletter to receive all new updates</p>

                    <div class="flex items-center border-b-2 border-teal-500 py-2 bg-white px-5 mb-10">
                        <div class="mr-3"><img src="{{asset('images/email.png')}}" alt="Email Icon" class="h-6 w-6"></div>
                        <input class="appearance-none bg-transparent border-none w-full text-black py-1 px-2 leading-tight focus:outline-none" type="email" placeholder="Enter Your Email Here" aria-label="Email">
                        <div><img src="{{asset('images/send.png')}}" alt="Send Icon" class="h-6 w-6"></div>
                    </div>
                </div>

                <!-- Contact & Menu -->
                <div class="w-full flex flex-col lg:flex-row lg:justify-between">
                    <!-- Contact Us -->
                    <div class="contactus text-white font-bold mb-8 lg:mb-0">
                        <div class="mb-5 text-[1.5rem] font-extrabold">Contact Us</div>
                        <a href="tel:00966508950527" class="flex gap-3 mb-2"><img class="h-5" src="{{asset('images/call.png')}}" alt=""> +966-508950527</a>
                        <a href="https://wa.me/966508950527" class="flex gap-3 mb-2"><img class="h-5" src="{{asset('images/whatsapp.png')}}" alt=""> +966-508950527</a>
                        <a href="mailto:info@zainzoe.com" class="flex gap-3 mb-2"><img class="h-5" src="{{asset('images/email.png')}}" alt=""> info@zainzoe.com</a>
                        <a href="https://maps.app.goo.gl/GyZYX7QoHNMzL7bT6" class="flex gap-3"><img class="h-5" src="{{asset('images/pin.png')}}" alt=""> Saudi Arabia, Riyadh, Prince Faisal Street</a>
                    </div>

                    <!-- Main Menu -->
                    <div class="main-menu flex flex-col text-white font-bold">
                        <div class="mb-5 text-[1.5rem] font-extrabold">ZAIN ZWY</div>
                        <div class="pt-2">Home</div>
                        <div class="pt-2">About Us</div>
                        <div class="pt-2">Services</div>
                        <div class="pt-2">Our Work</div>
                        <div class="pt-2">Contact Us</div>
                    </div>

                    <!-- Social Links -->
                    <div class="social flex justify-center items-center">
                        <div class="flex flex-col justify-around items-end w-10 h-[80%]">
                            <a href="https://x.com/zainzwy?s=11"><img class="w-6 opacity-80" src="{{asset('images/x1.png')}}" alt="X icon"></a>
                            <a href="https://www.tiktok.com/@zainzwy?_t=8qKzVK801up&_r=1"><img class="w-6 opacity-80" src="{{asset('images/tiktok.png')}}" alt="TikTok icon"></a>
                            <a href="https://www.instagram.com/zainzwy/profilecard/?igsh=MWdsdDF4Z2kxNmI1dw=="><img class="w-6 opacity-80" src="{{asset('images/insta.png')}}" alt="Instagram icon"></a>
                            <a href="https://wa.me/966508950527"><img class="w-6 opacity-80" src="{{asset('images/whats1.png')}}" alt="WhatsApp icon"></a>
                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div class="border-t-2 border-[#8EC5D0] w-full text-right mt-8 pt-8 pb-4 text-[#C4DEDE]">
                    All rights reserved to <span class="text-[#26A7C0]">ZAIN ZWY</span> - 2024
                </div>
            </div>
        </div>
    </div>
</footer>

<footer class="mobile-footer flex flex-col" style="display: none;">
    <div class="upper-div h-[25rem] relative flex  ">
        <img class="absolute h-full bottom-0 object-cover w-full z-[-2]" src="{{asset('images/mobile-footerbg1.png')}}" alt="triangle image">
        <img class="absolute h-[80%] bottom-0 object-cover w-full z-[-1]" src="{{asset('images/mobile-footerbg2.png')}}" alt="second footer image">
        <div class="flex justify-between items-center p-4 ">
            <div class="fur w-[20%] mb-[3rem]">
                <img src="{{asset('images/footerlogo.png')}}" alt="">
            </div>
            <div class="ful w-[50%] text-white text-sm font-bold">
                Zain Zwy Information Technology is a leading company specializing in providing integrated and innovative technology solutions. Founded at the beginning of this year.
            </div>
        </div>
        <div class="newsletter-container w-full flex justify-center absolute bottom-[-10rem]">
            <div class="newsletter flex flex-col items-center">
                <h2 class="text-2xl font-semibold text-white mb-4">Newsletter</h2>
                <p class="text-teal-100 mb-6 text-center">Subscribe to our newsletter to receive all new updates</p>
                <div class="inline-flex items-center border-b-2 border-teal-500 py-2 bg-white px-5 mb-10">
                    <div class="mr-3">
                        <img src="{{asset('images/email.png')}}" alt="Email Icon" class="h-6 w-6">
                    </div>
                    <input class="appearance-none bg-transparent border-none w-full text-black py-1 px-2 leading-tight focus:outline-none" type="email" placeholder="Enter Your Email Here" aria-label="Email">
                    <div>
                        <img src="{{asset('images/send.png')}}" alt="Send Icon" class="h-6 w-6">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom-div relative w-full h-[auto]">
        <img class="absolute w-full bottom-0 h-full object-cover z-[-2]" src="{{asset('images/footer-mobilebg3.png')}}" alt="third footer image">
        <!-- Main Menu -->
        <div class="main-menu flex flex-col text-white font-bold mt-[10rem] px-4">
            <div class="mb-5 text-[1.5rem] font-extrabold">ZAIN ZWY</div>
            <div class="pt-2">Home</div>
            <div class="pt-2">About Us</div>
            <div class="pt-2">Services</div>
            <div class="pt-2">Our Work</div>
            <div class="pt-2">Contact Us</div>
        </div>
         <!-- Contact Us -->
         <div class="contactus text-white font-bold px-4 mt-8 flex flex-col items-center">
            <div class="mb-5 text-[1.5rem] font-extrabold">Contact Us</div>
            <a href="tel:00966508950527" class="flex gap-3 mb-2">
                <img class="h-5" src="{{asset('images/call.png')}}" alt=""> +966-508950527
            </a>
            <a href="https://wa.me/966508950527" class="flex gap-3 mb-2">
                <img class="h-5" src="{{asset('images/whatsapp.png')}}" alt=""> +966-508950527
            </a>
            <a href="mailto:info@zainzoe.com" class="flex gap-3 mb-2">
                <img class="h-5" src="{{asset('images/email.png')}}" alt=""> info@zainzoe.com
            </a>
            <a href="https://maps.app.goo.gl/GyZYX7QoHNMzL7bT6" class="flex gap-3">
                <img class="h-5" src="{{asset('images/pin.png')}}" alt="">Our Location
            </a>
        </div>
        <div class="social-media">
                                <!-- Social Links -->
                    <div class="social flex justify-center items-center my-10">
                                <div class="inline-flex justify-around items-end w-[80%] h-[80%]">
                                    <a href="https://x.com/zainzwy?s=11"><img class="w-6 opacity-80" src="{{asset('images/x1.png')}}" alt="X icon"></a>
                                    <a href="https://www.tiktok.com/@zainzwy?_t=8qKzVK801up&_r=1"><img class="w-6 opacity-80" src="{{asset('images/tiktok.png')}}" alt="TikTok icon"></a>
                                    <a href="https://www.instagram.com/zainzwy/profilecard/?igsh=MWdsdDF4Z2kxNmI1dw=="><img class="w-6 opacity-80" src="{{asset('images/insta.png')}}" alt="Instagram icon"></a>
                                    <a href="https://wa.me/966508950527"><img class="w-6 opacity-80" src="{{asset('images/whats1.png')}}" alt="WhatsApp icon"></a>
                                </div>
                    </div>
        </div>
        <div class="copyrights text-[#C4DEDE] text-center pb-2 pt-10 border-t-2 border-[#8EC5D0]">
            All copy rights reserved to <span class="font-bold text-[#26A7C0]">ZAIN ZWY</span> -2024
        </div>
    </div>
</footer>


<script>
    function toggleFooter() {
        const isMobile = window.innerWidth <= 600;
        const desktopFooter = document.querySelector('.desktop-footer');
        const mobileFooter = document.querySelector('.mobile-footer');

        if (desktopFooter && mobileFooter) {
            desktopFooter.style.display = isMobile ? 'none' : 'flex';
            mobileFooter.style.display = isMobile ? 'flex' : 'none';
        }
    }

    // Run the function on initial load
    toggleFooter();

    // Add event listener for window resize
    window.addEventListener('resize', toggleFooter);
</script>
