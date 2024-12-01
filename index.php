
      <?php 
        include('header.php');
      ?>
      <!-- Main -->
      <main class="overflow-hidden">
        <section class="relative z-0 w-full px-6 xl:h-[1040px] xl:px-12 home-hero-banner">
          <div class="mx-auto flex max-w-[1517px] flex-col xl:flex-row">
       
            <div class="w-full max-w-[483px] pr-12 pt-12 text-white md:pr-0 xl:pt-[298px]">
              <h1 class="mb-2 font-primary text-5xl font-semibold leading-[1.1] md:text-6xl fade-in-animation">Your Trusted Partner in Steel Trading: Reliable, Durable, and Efficient Solutions</h1>
              <p class="mb-5 text-base font-medium leading-[1.875] fade-in-animation">Delivering High-Quality Steel Products with Unmatched Expertise, Tailored Solutions, and a Commitment to Excellence in Every Deal.</p>

              
            </div>
          </div>

          <!-- Social Nav -->
          <ul aria-label="social navbar" class="absolute right-4.5 top-[293px] space-y-2.5 text-white">
            <li>
              <a href="#" class="flex size-10 items-center justify-center rounded-full border border-[#C0C1C1]">
                <svg xmlns="http://www.w3.org/2000/svg" heigh="16" width="9" fill="currentColor" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z" /></svg>
              </a>
            </li>
            <li>
              <a href="#" class="flex size-10 items-center justify-center rounded-full border border-[#C0C1C1]">
                <svg width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" /></svg>
              </a>
            </li>
          </ul>

          <img src="assets/images/home-hero.jpg" alt="hero background" class="pointer-events-none absolute left-0 right-0 top-0 -z-20 w-full object-cover object-bottom" />
        </section>

        <!-- About -->
        <section class="px-6 pb-16 pt-12 md:pb-28 md:pt-[76px] fade-in-animation">
          <div class="mx-auto flex w-full max-w-[1000px] flex-col items-center gap-12 md:flex-row lg:gap-[76px]">
            <div class="w-full max-w-[px]">
              <img src="assets/images/banner1.jpg" alt="About Us" class="w-full rounded-[10px] object-cover" />
            </div>
            <div class="order-first w-full max-w-[485px] md:order-none">
              <h2 class="mb-5 font-primary text-4xl font-semibold text-[#222222] md:text-5xl fade-in-animation">About us</h2>
              <p class="mb-8 pl-1 text-lg leading-8 text-primary md:text-xl fade-in-animation">Unlock the strength of steel with our innovative solutions. At Gaman, we combine industry expertise with a commitment to quality, ensuring reliable sourcing, seamless logistics, and tailored services to meet all your steel trading needs.</p>
              <a href="about.html" class="flex h-[60px] w-fit items-center justify-center rounded-full bg-g1 bg-cover bg-no-repeat px-11 font-primary text-sm font-semibold text-white">More About</a>
            </div>
          </div>
        </section>

        <?php 
          include('service-section.php');
        ?>

        <?php 
          include('case-study-section.php');
        ?>

        <?php 
          include('testimonial-section.php');
        ?>

        <?php 
          include('contact-section.php');
        ?>
      </main>

      <?php 
        include('footer.php');
      ?>