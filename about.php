      <?php 
        include('header.php');
      ?>

      <!-- Main -->
      <main class="overflow-hidden">
        <section class="relative z-0 flex w-full items-center justify-center px-6 py-20 md:h-[553px] md:py-0">
          <div class="mx-auto w-full max-w-[647px] text-center text-white">
            <h1 class="mb-2.5 text-5xl font-bold leading-[1.19] md:text-[66px]">About</h1>
            <p class="mb-6 text-xl leading-[30px]">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <ul class="mx-auto flex h-[50px] w-fit items-center justify-center gap-8 rounded-[5px] border border-[#E9E9E9]/60 px-7.5" aria-label="Breadcrumbs">
              <li><a href="index.php" class="text-base leading-7">Home</a></li>
              <li><a href="#" class="text-base leading-7">About</a></li>
            </ul>
          </div>

          <img src="assets/images/about-hero.jpg" alt="bg" class="pointer-events-none absolute inset-0 -z-20 size-full object-cover opacity-90" />
          <div class="pointer-events-none absolute inset-0 -z-10 bg-g1 bg-cover bg-no-repeat opacity-90"></div>
        </section>

        <!-- About Us -->
        <section class="px-6 pb-20 pt-10 md:pb-[146px] fade-in-animation">
          <div class="mx-auto w-full max-w-[1602px]">
            <ul class="flex items-center gap-2 text-xl text-[#6A6A6A]">
              <li><a href="index.php">Home &rsaquo;</a></li>
              <li><a href="about.php">About Us</a></li>
            </ul>
          </div>
          <div class="mx-auto mt-12 grid w-full max-w-[1096px] grid-cols-1 gap-y-16 md:mt-20 md:grid-cols-2">
            <div class="relative z-0 self-center pr-4">
              <img src="assets/images/about-sec-image.jpg" alt="About Us" class="h-auto w-full rounded-[30px] object-cover" />
              <img src="assets/images/home-about-sec-image-shape.png" alt="Shape" class="pointer-events-none absolute -bottom-3 -left-3 -z-10 size-24 object-contain md:-bottom-6 md:-left-4 md:size-[114px]" />
              <img src="assets/images/home-about-sec-image-shape-top.png" alt="Shape" class="pointer-events-none absolute -right-0 -top-4 -z-10 w-1/3 object-contain md:-top-6 md:w-auto" />
            </div>
            <div class="md:pl-15">
              <p class="mb-3 text-xl uppercase md:text-2xl">
                <span class="inline-block bg-g1 bg-cover bg-clip-text bg-center bg-no-repeat text-transparent">ABOUT US</span>
              </p>

              <h2 class="mb-6 text-4xl font-semibold text-black md:text-5xl md:leading-[1.1]">Empowering People By Keeping Them Well</h2>

              <p class="mb-5 text-lg leading-7 text-primary">Repellendus autem ruibusdam et aut officiis debitis aut re necessitatibus saepe eveniet ut et voluptates repudianda sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus.</p>

              <ul class="mb-7 space-y-3.5 md:mb-4.5">
                <li class="flex items-center gap-3.5 text-lg leading-7 text-[#54595F]">
                  <svg width="25" height="26" class="shrink-0" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.4502 0.895508C19.1396 0.895508 24.5596 6.31543 24.5596 13.0049C24.5596 19.6943 19.1396 25.1143 12.4502 25.1143C5.76074 25.1143 0.34082 19.6943 0.34082 13.0049C0.34082 6.31543 5.76074 0.895508 12.4502 0.895508ZM17.9678 12.1748L11.376 5.58301C10.9365 5.14355 10.1553 5.14355 9.71582 5.58301L8.88574 6.41309C8.44629 6.85254 8.44629 7.63379 8.88574 8.07324L13.8662 13.0049L8.88574 17.9854C8.44629 18.4248 8.44629 19.2061 8.88574 19.6455L9.71582 20.4756C10.1553 20.915 10.9365 20.915 11.376 20.4756L17.9678 13.835C18.4561 13.3955 18.4561 12.6631 17.9678 12.1748Z" fill="url(#paint0_linear_105_424)" />
                    <defs>
                      <linearGradient id="paint0_linear_105_424" x1="12.6252" y1="0.379883" x2="27.4324" y2="18.0525" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#144D90" />
                        <stop offset="1" stop-color="#0E3461" />
                      </linearGradient>
                    </defs>
                  </svg>
                  <span>Quis autem vel eum iure reprehenderit aui</span>
                </li>

                <li class="flex items-center gap-3.5 text-lg leading-7 text-[#54595F]">
                  <svg width="25" height="26" class="shrink-0" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.4502 0.895508C19.1396 0.895508 24.5596 6.31543 24.5596 13.0049C24.5596 19.6943 19.1396 25.1143 12.4502 25.1143C5.76074 25.1143 0.34082 19.6943 0.34082 13.0049C0.34082 6.31543 5.76074 0.895508 12.4502 0.895508ZM17.9678 12.1748L11.376 5.58301C10.9365 5.14355 10.1553 5.14355 9.71582 5.58301L8.88574 6.41309C8.44629 6.85254 8.44629 7.63379 8.88574 8.07324L13.8662 13.0049L8.88574 17.9854C8.44629 18.4248 8.44629 19.2061 8.88574 19.6455L9.71582 20.4756C10.1553 20.915 10.9365 20.915 11.376 20.4756L17.9678 13.835C18.4561 13.3955 18.4561 12.6631 17.9678 12.1748Z" fill="url(#paint0_linear_105_424)" />
                    <defs>
                      <linearGradient id="paint0_linear_105_424" x1="12.6252" y1="0.379883" x2="27.4324" y2="18.0525" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#144D90" />
                        <stop offset="1" stop-color="#0E3461" />
                      </linearGradient>
                    </defs>
                  </svg>
                  <span>Suscipit laboriosam nisi rut aliuid eum iure moli</span>
                </li>

                <li class="flex items-center gap-3.5 text-lg leading-7 text-[#54595F]">
                  <svg width="25" height="26" class="shrink-0" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.4502 0.895508C19.1396 0.895508 24.5596 6.31543 24.5596 13.0049C24.5596 19.6943 19.1396 25.1143 12.4502 25.1143C5.76074 25.1143 0.34082 19.6943 0.34082 13.0049C0.34082 6.31543 5.76074 0.895508 12.4502 0.895508ZM17.9678 12.1748L11.376 5.58301C10.9365 5.14355 10.1553 5.14355 9.71582 5.58301L8.88574 6.41309C8.44629 6.85254 8.44629 7.63379 8.88574 8.07324L13.8662 13.0049L8.88574 17.9854C8.44629 18.4248 8.44629 19.2061 8.88574 19.6455L9.71582 20.4756C10.1553 20.915 10.9365 20.915 11.376 20.4756L17.9678 13.835C18.4561 13.3955 18.4561 12.6631 17.9678 12.1748Z" fill="url(#paint0_linear_105_424)" />
                    <defs>
                      <linearGradient id="paint0_linear_105_424" x1="12.6252" y1="0.379883" x2="27.4324" y2="18.0525" gradientUnits="userSpaceOnUse">
                        <stop stop-color="#144D90" />
                        <stop offset="1" stop-color="#0E3461" />
                      </linearGradient>
                    </defs>
                  </svg>
                  <span>Dolor repellendus temporibus autem auibus</span>
                </li>
              </ul>

              <a href="#" class="mx-auto flex h-14 w-[196px] items-center justify-center rounded-full bg-g1 font-primary text-sm font-semibold text-white md:mx-0">Read More</a>
            </div>
          </div>
        </section>

        <!-- Counter -->
        <section class="relative z-0 px-6 pt-24 lg:pt-[134px] fade-in-animation">
          <div class="mx-auto w-full max-w-[1114px]">
            <div class="mb-16 grid grid-cols-1 gap-7.5 sm:grid-cols-2 md:mb-[90px] lg:grid-cols-4">
              <div class="rounded-[30px] border-b-2 border-[#197188] bg-white px-6 py-10 text-center fade-in-animation">
                <div class="mx-auto mb-5 flex size-[115px] items-center justify-center rounded-full bg-[#144D90]/10 p-7">
                  <img src="assets/images/completed-projects.png" alt="Completed Projects" class="size-full object-contain" />
                </div>
                <div>
                  <h3 class="text-4xl font-bold text-black">278+</h3>
                  <p class="text-base leading-[#7A7A7A]">Completed Projects</p>
                </div>
              </div>

              <div class="rounded-[30px] border-b-2 border-[#197188] bg-white px-6 py-10 text-center fade-in-animation">
                <div class="mx-auto mb-5 flex size-[115px] items-center justify-center rounded-full bg-[#144D90]/10 p-7">
                  <img src="assets/images/satisfied-client.png" alt="Satisfied Clients" class="size-full object-contain" />
                </div>
                <div>
                  <h3 class="text-4xl font-bold text-black">84+</h3>
                  <p class="text-base leading-[#7A7A7A]">Satisfied Clients</p>
                </div>
              </div>

              <div class="rounded-[30px] border-b-2 border-[#197188] bg-white px-6 py-10 text-center fade-in-animation">
                <div class="mx-auto mb-5 flex size-[115px] items-center justify-center rounded-full bg-[#144D90]/10 p-7">
                  <img src="assets/images/website-analysis.png" alt="Website Analysis" class="size-full object-contain" />
                </div>
                <div>
                  <h3 class="text-4xl font-bold text-black">60%</h3>
                  <p class="text-base leading-[#7A7A7A]">Website Analysis</p>
                </div>
              </div>

              <div class="rounded-[30px] border-b-2 border-[#197188] bg-white px-6 py-10 text-center fade-in-animation">
                <div class="mx-auto mb-5 flex size-[115px] items-center justify-center rounded-full bg-[#144D90]/10 p-7">
                  <img src="assets/images/support-done.png" alt="Support Done" class="size-full object-contain" />
                </div>
                <div>
                  <h3 class="text-4xl font-bold text-black">167+</h3>
                  <p class="text-base leading-[#7A7A7A]">Support Done</p>
                </div>
              </div>
            </div>

            <div class="relative z-0">
              <img src="assets/images/steel-vid-bg.jpg" alt="Video Thumbnail" class="aspect-video h-auto w-full rounded-2xl object-cover md:aspect-auto md:rounded-[30px]" />
              <button class="absolute left-1/2 top-1/2 z-10 -translate-x-1/2 -translate-y-1/2">
                <svg class="size-14 md:size-auto" width="95" height="97" viewBox="0 0 95 97" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M81.3 14.4799C72.0333 5.34653 60.7667 0.779869 47.5 0.779869C34.5667 0.779869 23.3333 5.34653 13.8 14.4799C4.6 23.6799 0 34.9465 0 48.2799C0 61.6132 4.6 72.8465 13.8 81.9799C18.4 86.6465 23.5167 90.1799 29.15 92.5799C34.7833 94.9799 40.9 96.1799 47.5 96.1799C60.9667 96.1799 72.2333 91.4465 81.3 81.9799C90.4333 72.8465 95 61.6299 95 48.3299C95 35.0299 90.4333 23.7465 81.3 14.4799ZM78.3 17.4799C82.5 21.8132 85.6333 26.5132 87.7 31.5799C89.7667 36.6465 90.8 42.2132 90.8 48.2799C90.8 60.5465 86.6333 70.8132 78.3 79.0799C74.1 83.3465 69.4167 86.5799 64.25 88.7799C59.0833 90.9799 53.4833 92.0799 47.45 92.0799C41.4167 92.0799 35.8833 91.0132 30.85 88.8799C25.8167 86.7465 21.2333 83.4799 17.1 79.0799C12.9 74.8799 9.7 70.1965 7.5 65.0299C5.3 59.8632 4.2 54.2632 4.2 48.2299C4.2 42.1965 5.25 36.6465 7.35 31.5799C9.45 26.5132 12.7 21.8132 17.1 17.4799C21.3 13.2799 25.9667 10.0632 31.1 7.82987C36.2333 5.59653 41.7333 4.47987 47.6 4.47987C53.4667 4.47987 59 5.57987 64.2 7.77987C69.1333 9.97987 73.8333 13.2132 78.3 17.4799ZM41.3 37.4799V62.4799L61.7 49.9799L41.3 37.4799Z" fill="#6EC1E4" />
                </svg>
              </button>
            </div>
          </div>
          <!-- Background -->
          <div class="pointer-events-none absolute inset-x-0 bottom-15 top-0 -z-10 bg-[#0E3461] sm:bottom-[24%]">
            <svg class="pointer-events-none absolute bottom-0 left-0 w-[38%]" viewBox="0 0 724 577" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M724 577L0 0V577H724Z" fill="url(#paint0_linear_171_4)" />
              <defs>
                <linearGradient id="paint0_linear_171_4" x1="362" y1="577" x2="362" y2="0" gradientUnits="userSpaceOnUse">
                  <stop stop-color="#0F508A" />
                  <stop offset="1" stop-color="#03103D" />
                </linearGradient>
              </defs>
            </svg>
          </div>
        </section>

        <?php 
          include('service-section.php');
        ?>

      </main>

      <?php 
        include('footer.php');
      ?>
