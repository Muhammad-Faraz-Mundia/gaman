<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/images/logonew.png" type="image/x-icon" />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/theme/theme.css" />
    <link rel="stylesheet" href="assets/css/custom.css" />

      <!-- JQuery CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <title> Gaman Trading WLL </title>
  </head>
  <body>
    <!-- Wrapper -->
    <div class="">
      <!-- Header -->
      <header class="sticky top-0 z-50 bg-white px-6">
        <div class="mx-auto flex w-full max-w-[1598px] items-center justify-between gap-5 py-4 lg:h-20 lg:py-0">
          <div>
            <a href="index.php" class="inline-block">
              <img src="assets/images/logonew.png" alt="Data Minq" class="inline-block w-20 object-contain lg:w-[120px]" width="119" height="65" />
            </a>
          </div>
          <nav class="navbar absolute left-0 top-full h-0 w-full overflow-hidden bg-white shadow-md transition-all duration-300 lg:static lg:!h-auto lg:w-auto lg:bg-transparent lg:shadow-none">
            <ul aria-label="nav-list" class="flex w-full flex-col gap-10 px-8 py-10 font-primary text-lg text-[#555555] lg:flex-row lg:items-center lg:justify-between lg:p-0 lg:text-2xl">
                <li><a href="index.php" class="text-current hover:underline <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : '' ?>">Home</a></li>
                <li><a href="about.php" class="text-current hover:underline <?= basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : '' ?>">About</a></li>
                <li><a href="services.php" class="text-current hover:underline <?= basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : '' ?>">Services</a></li>
                <li><a href="contact.php" class="text-current hover:underline <?= basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : '' ?>">Contact Us</a></li>
            </ul>
        </nav>
        <!-- Social Nav -->
          <ul aria-label="social navbar" class="space-y-2.5 text-white">
            <li>
              <a href="https://www.linkedin.com/company/gaman-trading-wll/" class="flex size-10 items-center justify-center rounded-full border border-[#C0C1C1]" style="color:#002f99">
                <svg width="16" height="16" fill="currentColor" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.3 448H7.4V148.9h92.9zM53.8 108.1C24.1 108.1 0 83.5 0 53.8a53.8 53.8 0 0 1 107.6 0c0 29.7-24.1 54.3-53.8 54.3zM447.9 448h-92.7V302.4c0-34.7-.7-79.2-48.3-79.2-48.3 0-55.7 37.7-55.7 76.7V448h-92.8V148.9h89.1v40.8h1.3c12.4-23.5 42.7-48.3 87.9-48.3 94 0 111.3 61.9 111.3 142.3V448z" /></svg>
              </a>
            </li>
          </ul>
          <button class="btn-navtoggle flex size-10 items-center justify-center rounded border-2 border-primary lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-8 w-8">
              <path stroke-linecap="round" stroke-linejoin="round" class="transition-all duration-200" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
          </button>
        </div>
      </header>