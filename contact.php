
      <?php 
        include('header.php');
      ?>
      <!-- Main -->
      <main>
        <!-- Hero -->
        <section class="relative z-0 flex w-full items-center justify-center px-6 py-20 md:h-[553px] md:py-0 ">
          <div class="mx-auto w-full max-w-[647px] text-center text-white">
            <h1 class="mb-2.5 text-5xl font-bold leading-[1.19] md:text-[66px] fade-in-animation">Contact</h1>
            <p class="mb-6 text-xl leading-[30px] fade-in-animation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul class="mx-auto flex h-[50px] w-fit items-center justify-center gap-8 rounded-[5px] border border-[#E9E9E9]/60 px-7.5" aria-label="Breadcrumbs">
              <li><a href="index.html" class="text-base leading-7">Home</a></li>
              <li><a href="#" class="text-base leading-7">Contact</a></li>
            </ul>
          </div>

          <img src="assets/images/contact-bg.jpg" alt="bg" class="pointer-events-none absolute inset-0 -z-20 size-full object-cover opacity-90" />
          <div class="pointer-events-none absolute inset-0 -z-10 bg-g1 bg-cover bg-no-repeat opacity-90"></div>
        </section>

        <?php 
          include('contact-section.php');
        ?>

        <?php 
          include('google-map-section.php');
        ?>
      </main>

      <?php 
        include('footer.php');
      ?>