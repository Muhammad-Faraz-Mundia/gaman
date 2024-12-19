
      <?php 
        include('header.php');
      ?>
      <!-- Main -->
      <main class="overflow-hidden home-main-container">
        <section class="relative z-0 w-full px-6 xl:h-[1040px] xl:px-12 home-hero-banner">
          <div class="mx-auto flex max-w-[1517px] flex-col xl:flex-row">
       
            <div class="w-full max-w-[600px] pr-12 pt-12 text-white md:pr-0 xl:pt-[298px]" style="z-index: 99;">
              <h1 class="mb-2 font-primary text-5xl font-semibold leading-[1.1] md:text-6xl mainHeading">Your Trusted Partner in Steel Trading: Reliable, Durable, and Efficient Solutions</h1>
              <p class="mb-5 text-base font-medium leading-[1.875]">Delivering High-Quality Steel Products with Unmatched Expertise, Tailored Solutions, and a Commitment to Excellence in Every Deal.</p>

              
            </div>
          </div>



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
              <a href="about.php" class="flex h-[60px] w-fit items-center justify-center rounded-full bg-g1 bg-cover bg-no-repeat px-11 font-primary text-sm font-semibold text-white">More About</a>
            </div>
          </div>
        </section>

        <?php 
          include('service-section.php');
        ?>
        
      </main>

      <?php 
        include('footer.php');
      ?>