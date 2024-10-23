<style>
    /* RTL specific styles */
    .rtl {
        direction: rtl;
        text-align: right;
    }

    /* Responsive Styles */
    @media (max-width: 800px) {
        .contactus-image {
            width: 60%;
        }
        .contact-card {
            width: 80%;
        }
        #contactus {
            margin-bottom: 5rem;
        }
        .contactImage {
            gap: 3rem;
        }
    }
    @media (max-width: 800px) {
        section .formandimg {
            flex-direction: column;
        }
        .contact-card {
            width: 100%;
        }
    }

    /* RTL form input styles */
    .rtl input::placeholder,
    .rtl textarea::placeholder {
        text-align: right;
    }
</style>

<section id="contactus" class="mt-[10rem] bg-white rtl">
    <div class="container formandimg mx-auto flex justify-center">
        <div class="contactImage flex flex-col items-center">
            <div class="text-[#26A7C0] text-[0.9rem] flex items-center gap-2 w-[100%] justify-center">
                <img class="h-2 transform rotate-180" src="{{asset('images/arrowL.png')}}" alt="سهم">
                <p>تواصل معنا</p>
                <img class="h-2 transform rotate-180" src="{{asset('images/arrowR.png')}}" alt="سهم">
            </div>
            <div class="text-[#034A58] font-bold lg:text-[2.625rem] text-[1.5rem] text-center">نحن هنا للإجابة<br>
            على جميع استفساراتكم</div>
            <div class="contactus-image"><img src="{{asset('images/contactusbg.png')}}" alt="صورة اتصل بنا"></div>
        </div>
        <div class="contact-card w-[50%]">
            <div class="container mx-auto w-[80%] p-8 shadow-xl">
                <div class="text-[#034A58] font-bold text-[1.25rem]">املأ النموذج أدناه....</div>
                <div class="text-[#3B636B] text-[0.9rem]">املأ المعلومات في النموذج أدناه وسنتواصل معك في أقرب وقت ممكن</div>
                <div class="mt-6">
                    <div class="mb-8">
                        <label for="fullName" class="block text-sm text-cyan-500 mb-2 font-bold">الاسم الكامل</label>
                        <input type="text" id="fullName" placeholder="اكتب اسمك هنا" class="w-full shadow-xl px-3 py-2 placeholder-gray-300 border border-cyan-300 rounded-md focus:outline-none focus:ring focus:ring-cyan-100 focus:border-cyan-300">
                    </div>
                </div>
                <div>
                    <div class="mb-8">
                        <label for="email" class="block text-sm font-bold text-[#3B636B] mb-2">البريد الإلكتروني</label>
                        <input type="email" id="email" placeholder="اكتب بريدك الإلكتروني هنا" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:ring focus:ring-cyan-100 focus:border-cyan-300">
                    </div>
                </div>
                <div>
                    <div class="mb-8">
                        <label for="message" class="block text-sm font-bold text-[#3B636B] mb-2">الرسالة</label>
                        <textarea id="message" rows="6" placeholder="اكتب رسالتك هنا" class="w-full px-3 py-2 placeholder-gray-300 border border-gray-200 rounded-md bg-gray-50 focus:outline-none focus:ring focus:ring-cyan-100 focus:border-cyan-300"></textarea>
                    </div>
                </div>
                <div class="w-[100%] bg-[#26A7C0] text-white font-bold text-center py-2">إرسال</div>
            </div>
        </div>
    </div>
</section>