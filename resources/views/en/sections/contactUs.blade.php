<section id="contactus" class="mt-[10rem] bg-white">
    <div class="container mx-auto flex justify-center ">
        <div class="contact-card  w-[50%] ">
            <div class="container mx-auto w-[80%] p-8  shadow-xl">
                <div class="text-[#034A58] font-bold text-[1.25rem]">Fill The Form Below....</div>
                <div class="text-[#3B636B] text-[0.9rem]">Fill Cut The Information In The Form Below And We Will Contact You As Soon As Possible</div>
                <div class="mt-6 ">
                     <div class="mb-8">
                        <label for="fullName" class="block text-sm  text-cyan-500 mb-2 font-bold">Full Name</label>
                        <input type="text" id="fullName" placeholder="Write Your Name Here" class="w-full shadow-xl px-3 py-2 placeholder-gray-300 border border-cyan-300 rounded-md focus:outline-none focus:ring focus:ring-cyan-100 focus:border-cyan-300">
                    </div>
                </div>
                <div>
                    <div class="mb-8">
                        <label for="email" class="block text-sm font-bold text-[#3B636B] mb-2 ">Email</label>
                        <input type="email" id="email" placeholder="Write Your Email Here" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:ring focus:ring-cyan-100 focus:border-cyan-300">
                    </div>
                </div>
                <div>
                    <div class="mb-8">
                        <label for="message" class="block text-sm font-bold text-[#3B636B] mb-2">Message</label>
                        <textarea id="message" rows="6" placeholder="Write Your Message Here" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:ring focus:ring-cyan-100 focus:border-cyan-300"></textarea>
                    </div>
                </div>
                <div class="w-[100%] bg-[#26A7C0] text-white font-bold text-center py-2">SEND</div>
            </div>
        </div>
        <div class="contactImage flex flex-col items-center">
            <div class="text-[#26A7C0] text-[0.9rem] flex items-center gap-2 w-[100%] justify-center ">
                <img class="h-2" src="{{asset('images/arrowR.png')}}" alt="arrow">
                <p>Contact Us</p>
                <img class="h-2" src="{{asset('images/arrowL.png')}}" alt="arrow">
            </div>
            <div class="text-[#034A58] font-bold text-[2.625rem] text-center">We Are Here To<br>
            Answer All Your Inquiries</div>
            <div><img src="{{asset('images/contactusbg.png')}}" alt="contact us image"></div>
        </div>
    </div>
</section>