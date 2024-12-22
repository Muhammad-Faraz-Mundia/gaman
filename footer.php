  <footer class="pt-25 relative z-0 bg-g1 bg-cover bg-no-repeat px-6 pb-7 font-primary text-white">
        <div class="mx-auto w-full max-w-[1320px]">
            <div class="flex flex-wrap items-start justify-between gap-10 pb-12 sm:pb-20 lg:pb-[170px] xl:flex-nowrap">
              <div class="w-full xl:max-w-[320px]">
                <a href="index.php" class="mb-3 inline-block"><img src="assets/images/logonew-trans.png" alt="Logo" class="w-[119px] object-contain brightness-0 invert" /></a>
                <p class="mb-4 max-w-[350px] font-primary text-base leading-[1.875]">We cater to enterprises seeking innovative solutions for their steel needs. From advanced supply chain analysis to streamlined procurement processes, our services are designed and drive success in the steel industry.</p>
                <ul class="flex items-center gap-2.5" aria-label="Social List">
                  <li>
                    <a href="#" class="flex size-7.5 items-center justify-center rounded-full border border-[#C0BFC1]">
                      <svg width="14" height="14" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" /></svg>
                    </a>
                  </li>
                </ul>
              </div>

              <div class="w-full xl:max-w-[320px]">
                <h3 class="mb-7.5 font-primary text-2xl font-semibold"> <a href="services.php">  Services </a> </h3>
                <ul class="space-y-2.5 services_list">
                  <li>
                    <a href="#" class="flex items-center gap-5 font-primary text-base leading-[1.875] before:block before:size-1.5 before:shrink-0 before:bg-[#00BAFF] before:content-['']">Building Materials & Equipment</a>
                  </li>
                  <li>
                    <a href="#" class="flex items-center gap-5 font-primary text-base leading-[1.875] before:block before:size-1.5 before:shrink-0 before:bg-[#00BAFF] before:content-['']">Piping & Accessories</a>
                  </li>
                  <li>
                    <a href="#" class="flex items-center gap-5 font-primary text-base leading-[1.875] before:block before:size-1.5 before:shrink-0 before:bg-[#00BAFF] before:content-['']">Steel & Alloys</a>
                  </li>
                  <li>
                    <a href="#" class="flex items-center gap-5 font-primary text-base leading-[1.875] before:block before:size-1.5 before:shrink-0 before:bg-[#00BAFF] before:content-['']">Mechanical Equipment</a>
                  </li>
                  <li>
                    <a href="#" class="flex items-center gap-5 font-primary text-base leading-[1.875] before:block before:size-1.5 before:shrink-0 before:bg-[#00BAFF] before:content-['']">Service coming soon</a>
                  </li>
                </ul>

              </div>

              <div class="w-full xl:max-w-[320px]">
                <h3 class="mb-7.5 font-primary text-2xl font-semibold"> <a href="contact.php"> Contact Us </a></h3>
                <p class="font-primary text-base leading-[1.875]">
                  Rwaq Building, <br> Office No. 208, <br> Doha, Qatar


                  E-mail:
                  <a href="mailto:info@gaman.com">info@gaman.com</a>
                  <br />

                  phone: <a href="tel:+974 4444 0655">(+974) 4444 0655</a>
                </p>
              </div>
            </div>

            <div class="flex flex-col items-center justify-between gap-x-5 gap-y-2 text-center text-base md:flex-row md:text-left">
              <p class="order-last md:order-none">&copy; Copyright <script> document.write(new Date().getFullYear()); </script> GAMAN - All right reserved</p>
              <ul class="flex items-center gap-12" style="display:none">
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Terms</a></li>
                <li><a href="#">Cookies</a></li>
              </ul>
            </div>

            <img src="assets/images/footer-lines.png" alt="Lines" class="pointer-events-none absolute bottom-0 left-0 -z-10 w-full object-cover" />
          </div>
  </footer>
</div>

    <?php
      include('popup-content.php');
    ?>

    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
      const clientSwiper = new Swiper(".client-swipe", {
        slidesPerView: 1,
        spaceBetween: 20,
        pagination: {
          el: ".client-dots",
          clickable: true,
          bulletClass: "client-dot",
          bulletActiveClass: "active",
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
          },
          1024: {
            slidesPerView: 3,
          },
          1280: {
            slidesPerView: 3,
            spaceBetween: 90,
          },
        },
      });
    </script>
  </body>


  </html>


