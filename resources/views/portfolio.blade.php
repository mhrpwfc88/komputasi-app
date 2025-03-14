  <!DOCTYPE html>
  <html lang="en" class="scroll-smooth">
    <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0, Maximum-scale=1," />
      <link href="css/portfolio.css" rel="stylesheet" />
      <link
        rel="shortcut icon"
        href="../assets/favicon.ico"
        type="image/x-icon" />
      <title>portfolio</title>
      <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    </head>
    <body>
      <!-- header start -->
      <header
        class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent"
      >
        <div class="container">
          <div class="relative flex items-center justify-between">
            <div class="px-4">
              <a href="#home" class="block py-6 text-lg font-bold text-primary"
                >Mh_ProCode</a
              >
            </div>
            <div class="flex items-center px-4">
              <button
                id="hamburger"
                name="hamburger"
                type="button"
                class="absolute right-4 block lg:hidden"
              >
                <span
                  class="hamburger-line origin-top-left transition duration-300 ease-in-out"
                ></span>
                <span
                  class="hamburger-line transition duration-300 ease-in-out"
                ></span>
                <span
                  class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"
                ></span>
              </button>
              <nav
                id="nav-menu"
                class="absolute right-4 top-full hidden w-full max-w-[250px] rounded-lg bg-white py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none"
              >
                <ul class="block lg:flex">
                  <li class="group">
                    <a
                      href="#home"
                      class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                      >beranda</a
                    >
                  </li>
                  <li class="group">
                    <a
                      href="#about"
                      class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                      >Tentang kami</a
                    >
                  </li>
                  <li class="group">
                    <a
                      href="#portfolio"
                      class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                      >Portfolio</a
                    >
                  </li>
                  <li class="group">
                    <a
                      href="#clients"
                      class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                      >Informasi</a
                    >
                  </li>
                  <li class="group">
                    <a
                      href="#blog"
                      class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                      >blog</a
                    >
                  </li>
                  <li class="group">
                    <a
                      href="#contact"
                      class="mx-8 flex py-2 text-base text-dark group-hover:text-primary"
                      >contact</a
                    >
                  </li>
                  
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </header>
      <!-- header End -->

      <!-- hero section start -->
      <section id="home" class="pt-36">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="w-full self-center px-4 lg:w-1/2">
              <h1 class="text-base font-semibold text-primary md:text-xl">
                Hai Braderr 👋🤚, saya <span class="mt-1 block text-4xl font-bold text-dark  lg:text-5xl">Muhammad Urip</span></h1>

              <h2 class="mb-5 text-lg font-medium text-secondary  lg:text-2xl">
                Programming & <span class="runningtext1 "></span>
              </h2>
              <p class="mb-10 font-medium leading-relaxed text-secondary ">
                Saya seorang web developer yang berfokus pada pembuatan aplikasi web, saya juga seorang yang suka belajar hal baru, dan saya juga suka berbagi ilmu kepada orang lain
              </p>

              <!-- <a
                href="#contact"
                class="border-2 border-white rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-300 ease-in-out hover:opacity-80 hover:shadow-lg"
                >Hubungi Kami</a
              > -->
            </div>

            <div class="w-full self-end px-4 lg:w-1/2">
              <div class="relative mt-10 lg:right-0 lg:mt-9">
                <img
                  src="dist/img/logo1.png"
                  alt="muhammad urip"
                  class="mx-auto wit max-w-full"
                />
                <span
                  class="absolute bottom-0 left-1/2 -z-10 -translate-x-1/2 md:scale-125"
                >
                  <!-- <svg
                    widht="350"
                    height="350"
                    viewBox="0 0 200 200"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <path
                      fill="#14b8a6"
                      d="M55.1,-43.5C70.3,-24.9,80.6,-2.1,76.1,17.3C71.7,36.7,52.3,52.6,31.4,61.2C10.5,69.7,-12.1,70.8,-32.6,62.8C-53.2,54.8,-71.7,37.7,-76.1,17.6C-80.6,-2.6,-71,-25.8,-55.9,-44.3C-40.9,-62.9,-20.5,-76.9,-0.2,-76.7C20,-76.5,39.9,-62.1,55.1,-43.5Z"
                      transform="translate(100 100) scale(1.1)"
                    />
                  </svg> -->
                </span>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- hero section End -->

      <!-- About section Start -->

      <section id="about" class="pt-36 pb-32">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="mb-10 w-full px-4 lg:w-1/2">
              <h4 class="mb-3 text-lg font-bold uppercase text-primary">
                Tentang Saya
              </h4>
              <h2 class="mb-5 max-w-md text-3xl font-bold text-dark lg:text-4xl">
            <span class="runningtext3"></span>
              </h2>
              <p class="max-w-xl text-base font-medium text-secondary lg:text-lg">
              apa itu Mh MhCode?
              <br>
              kenapa saya berinama MhCode?
              <br>
              MhCode singkatan dari Muhammad Code wkwkwk
              itu saya menemukan nama itu ketika saya sedang belajar pemograman, dan saya ingin membuat nama yang unik dan mudah di ingat oleh orang lain, dan akhirnya saya menemukan nama itu.
              </p>
            </div>
            <div class="w-full px-4 lg:w-1/2">
              <h3
                class="mb-4 text-2xl font-semibold text-dark lg:pt-10 lg:text-3xl"
              >
                Ayo berteman
              </h3>
              <p class="mb-6 text-base font-medium text-secondary lg:text-lg">
                saya suka sekali berteman dan bersilatuhrahmi dengan orang lain, dan saya juga suka berbagi ilmu kepada orang lain, dan saya juga suka belajar hal baru.
                <br>
                jadi ayooo kita berteman...
                <br>
                Dibawah ini adalah semua link sosial media yang Kami miliki
                seperti Git Hub yang berguna untuk menyimpan repositori atau
                kodingan yang saya buat
              </p>

              <div class="flex items-center">
                <!-- youtube -->
                <a
                  href="https://www.youtube.com/channel/UCOvhaCTftojD9M2u1AAkAnw"
                  target="_blank"
                  class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                >
                  <svg
                    role="img"
                    width="20"
                    class="fill-current"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <title>YouTube</title>
                    <path
                      d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                    />
                  </svg>
                </a>
                <!-- instagram -->

                <a
                  href="https://www.instagram.com/nata_wfc/"
                  target="_blank"
                  class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                >
                  <svg
                    role="img"
                    width="20"
                    class="fill-current"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <title>Instagram</title>
                    <path
                      d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                    />
                  </svg>
                </a>
                <!-- Github -->
                <a
                  href="https://github.com/mhrpwfc88"
                  target="_blank"
                  class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                >
                  <svg
                    role="img"
                    width="20"
                    class="fill-current"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <title>GitHub</title>
                    <path
                      d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                    />
                  </svg>
                </a>
                <!-- Facebook -->
            
                <!-- link tree -->
                <a
                  href="https://mhcode.my.id"
                  target="_blank"
                  class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
                >
                  <svg
                    role="img"
                    width="20"
                    class="fill-current"
                    viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg"
                  >
                    <title>Linktree</title>
                    <path
                      d="M7.953 15.066c-.08.163-.08.324-.08.486.08.517.528.897 1.052.89h1.294v4.776c0 .486-.404.89-.89.89H6.577a.898.898 0 0 1-.889-.891v-4.774H.992c-.728 0-1.214-.729-.89-1.377l6.96-12.627a1.065 1.065 0 0 1 1.863 0l2.913 5.585-3.885 7.042zm15.945 0l-6.96-12.627a1.065 1.065 0 0 0-1.862 0l-2.995 5.586 3.885 7.04c.081.164.081.326.081.487-.08.517-.529.897-1.052.89h-1.296v4.776c.005.49.4.887.89.89h2.914a.9.9 0 0 0 .892-.89v-4.775h4.612c.73 0 1.214-.729.89-1.377Z"
                    />
                  </svg>
                </a>
                <!-- link web ngoding yuk -->
            
              </div>
            </div>
          </div>
        </div>
      </section>

      <!-- About section End -->

      <!-- portfolio start -->
      <section id="portfolio" class="bg-slate-100 pt-36 pb-16">
        <div class="container">
          <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-xl text-center">
              <h4 class="mb-2 text-lg font-semibold text-primary">Portfolio</h4>
              <h2
                class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl"
              >
                Project Terbaru
              </h2>
              <p class="text-md font-medium text-secondary md:text-lg">
                ini adalah salah satu hasil project yang pernah Kami buat!,
                menggunakan html,css,javascript,tailwindcss,php, dan banyak bahasa
                pemograman yg lain.
              </p>
            </div>
          </div>

          <div
            class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12"
          >
            <div class="mb-12 p-4 md:w-1/2">
              <div
                class="overflow-hidden rounded-md shadow-md border-2 border-primary"
              >
                <img
                  src="dist/img/portfolio/lokacakti.PNG"
                  alt="Homepage"
                  width="w-full"
                />
              </div>
              <h3 class="mt-5 text-xl font-semibold text-dark">PT LOKA CAKTI iNDONESIA</h3>
              <p class="text-base font-medium text-secondary">
                Divisi Penempuhan Tanda Keahlian Atau kualifikasi 
                <br>
                adalah Pusat Pendidikan dan Pelatihan berpayung hukum PT yang berdiri secara independent bertujuan memberi motivasi dan keahlian tambahan hingga merubah pribadi dengan gaya hidup disiplin serta semangat positif.
              </p>
            </div>
          <div
            class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12"
          >
            <div class="mb-12 p-4 md:w-1/2">
              <div
                class="overflow-hidden rounded-md shadow-md border-2 border-primary"
              >
                <img
                  src="dist/img/portfolio/mh.PNG"
                  alt="landing page"
                  width="w-full"
                />
              </div>
              <h3 class="mt-5 text-xl font-semibold text-dark">Mh_ProCode</h3>
              <p class="text-base font-medium text-secondary">
              Web yang saya buat untuk memperkenalkan diri saya kepada orang lain,serta agar orang lain bisa mengenal saya lebih dekat.
              dan web ini akan bermanfaat bagi saya untuk menambah pengalaman dalam membuat web. 
              <br>
              web yang saya buat akan di update terus menerus agar bisa menjadi web yang lebih baik lagi.
              <br>
              semua project yang saya buat akan di simpan di web ini.
              
              </p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
              <div
                class="overflow-hidden rounded-md shadow-md border-2 border-primary"
              >
                <img
                  src="dist/img/portfolio/daporaksan.png"
                  alt="programmer"
                  width="w-full"
                />
              </div>
              <h3 class="mt-5 text-xl font-semibold text-dark">Daporaksan</h3>
              <p class="text-base font-medium text-secondary">
                aplikasi website yang di gunakan untuk mengelola data potensi pramuka kwaran kraksaan, dan ada dua user level untuk kwaran dan gugus depan
              </p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
              <div
                class="overflow-hidden rounded-md shadow-md border-2 border-primary"
              >
                <img
                  src="dist/img/portfolio/link.PNG"
                  alt="programmer"
                  width="w-full"
                />
              </div>
              <h3 class="mt-5 text-xl font-semibold text-dark">link Tree</h3>
              <p class="text-base font-medium text-secondary">
                website link tree ini saya buka open source di youtube saya dan saya juga memberikan tutorial cara membuat web link tree ini, dan web ini bisa di gunakan untuk menyimpan semua project yang kita miliki.
              </p>
            </div>
          
            <div class="mb-12 p-4 md:w-1/2">
              <div
                class="overflow-hidden rounded-md shadow-md border-2 border-primary"
              >
                <img
                  src="dist/img/portfolio/raya.PNG"
                  alt="programmer"
                  width="w-full"
                />
              </div>
              <h3 class="mt-5 text-xl font-semibold text-dark">web Coming soon</h3>
              <p class="text-base font-medium text-secondary">
              web coming soon ini saya buat untuk bisa tau kapan hari hari besar di indonesia
              </p>
            </div>
            <div class="mb-12 p-4 md:w-1/2">
              <div
                class="overflow-hidden rounded-md shadow-md border-2 border-primary"
              >
                <img
                  src="dist/img/portfolio/makowfc.png"
                  alt="programmer"
                  width="w-full"
                />
              </div>
              <h3 class="mt-5 text-xl font-semibold text-dark">Mako Wfc</h3>
              <p class="text-base font-medium text-secondary">
              Request Dari Mako Wfc
              </p>
            </div>


          </div>
        </div>
      </section>
      <!-- galery End -->

      <!-- clients start -->
      <section id="clients" class="bg-slate-700 pt-36 pb-32">
        <div class="container">
          <div class="w-full px-4">
            <div class="mx-auto mb-16 text-center">
              <h4 class="mb-2 text-lg font-semibold text-primary">Informasi</h4>
              <h2
                class="mb-4 text-3xl font-bold text-white sm:text-4xl lg:text-5xl"
              >
                About
              </h2>
              <p class="text-md font-medium text-white md:text-lg">
                
                <br>
                Informasi tidak tersedia
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- clients End -->

      <!-- blog start -->
      <section id="blog" class="bg-slate-100 pt-36 pb-32">
        <div class="container">
          <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-xl text-center">
              <h4 class="mb-2 text-lg font-semibold text-primary">Blog</h4>
              <h2
                class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl"
              >
                Website
              </h2>
              <p class="text-md font-medium text-secondary md:text-lg">
                Beberapa website yang Bisa Anda di kunjungi
              </p>
            </div>
          </div>

          <div class="flex flex-wrap justify-center">
          

            <div class="xl-1/6 w-full px-4 lg:w-1/4">
              <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg">
                <img
                  src="dist/img/portfolio/daporaksan.png"
                  alt="programmer"
                  class="w-full"
                />
                <div class="py-8 px-6">
                  <h3>
                    <a
                      href="https://daporaksan.web.id"
                      class="mb-3 block truncate text-xl font-semibold text-dark hover:text-primary"
                      >Daporaksan</a
                    >
                  </h3>
                  <p class="mb-6 text-base font-medium text-secondary">
                    Data Potensi Kwaran Kraksaan
                  </p>
                  <a
                    href="https://daporaksan.web.id"
                    class="rounded-lg bg-primary py-2 px-4 text-sm font-medium text-white hover:opacity-80"
                    >kunjungi situsnya.</a
                  >
                </div>
              </div>
            </div>
            <div class="xl-1/6 w-full px-4 lg:w-1/4">
              <div class="mb-10 overflow-hidden rounded-xl bg-white shadow-lg">
                <img
                  src="dist/img/portfolio/lokacakti.PNG"
                  alt="programmer"
                  class="w-full"
                />
                <div class="py-8 px-6">
                  <h3>
                    <a
                      href="https://lokacakti.com"
                      class="mb-3 block truncate text-xl font-semibold text-dark hover:text-primary"
                      >PT Loka Cakti indonesia</a
                    >
                  </h3>
                  <p class="mb-6 text-base font-medium text-secondary">
                    website pendidikan dan pelitihan skill
                  </p>
                  <a
                    href="https://lokacakti.com"
                    class="rounded-lg bg-primary py-2 px-4 text-sm font-medium text-white hover:opacity-80"
                    >kunjungi situsnya.</a
                  >
                </div>
              </div>
            </div>


            

          

          </div>
        </div>
      </section>
      <!-- blog End -->

      <!-- contact start -->
      <section id="contact" class="pt-36 pb-32">
        <div class="container">
          <div class="w-full px-4">
            <div class="mx-auto mb-16 max-w-xl text-center">
              <h4 class="mb-2 text-lg font-semibold text-primary">Contact</h4>
              <h2
                class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl"
              >
                Hubungi Kami!!
              </h2>
              <p class="text-md font-medium text-secondary md:text-lg">
                untuk fitur contact masih maintenance (501)
              </p>
            </div>
          </div>
          <form action="">
            <div class="w-full lg:m-auto lg:w-2/3">
              <div class="mb-8 w-full px-4">
                <label for="name" class="text-base font-bold text-primary"
                  >Nama</label
                >
                <input
                  type="text"
                  id="name"
                  class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"
                />
              </div>
              <div class="mb-8 w-full px-4">
                <label for="email" class="text-base font-bold text-primary"
                  >Email</label
                >
                <input
                  type="email"
                  id="name"
                  class="w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"
                />
              </div>
              <div class="mb-8 w-full px-4">
                <label for="message" class="text-base font-bold text-primary"
                  >Pesan</label
                >
                <textarea
                  type="text"
                  id="name"
                  class="h-32 w-full rounded-md bg-slate-200 p-3 text-dark focus:border-primary focus:outline-none focus:ring-1 focus:ring-primary"
                ></textarea>
              </div>
              <div class="w-full px-4">
                <button
                  class="w-full rounded-full bg-primary py-3 px-8 text-base font-semibold text-white transition duration-500 hover:opacity-80 hover:shadow-lg"
                >
                  Kirim
                </button>
              </div>
            </div>
          </form>
        </div>
      </section>
      <!-- contact End -->

      <!-- footer start -->
      <footer class="bg-dark pt-24 pb-12">
        <div class="container">
          <div class="flex flex-wrap">
            <div class="mb-12 w-full px-4 font-medium text-slate-300 md:w-1/3">
              <h2 class="text-4xl font-bold text-white">Mh_ProCode.</h2>
              <h3 class="mb-2 text-2xl font-bold">Hubungi Saya</h3>
              <p>Mh17pwfc@gmail.com</p>
              <p>Jl. sidomukti no.05</p>
              <p>probolinggo</p>
              <p>(67282)</p>
            </div>
            <div class="mb-12 w-full px-4 md:w-1/3">
              <h3 class="mb-5 text-xl font-semibold text-white">
                Kategori Tulisan
              </h3>
              <ul class="text-slate-300">
                <li>
                  <a
                    href="#"
                    class="mb-3 inline-block text-base hover:text-primary"
                    >Programming</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="mb-3 inline-block text-base hover:text-primary"
                    >teknologi</a
                  >
                </li>
                <li>
                  <a
                    href="#"
                    class="mb-3 inline-block text-base hover:text-primary"
                    >web developer</a
                  >
                </li>
              </ul>
            </div>
            <div class="mb-12 w-full px-4 md:w-1/3">
              <h3 class="mb-5 text-xl font-semibold text-white">Tautan</h3>
              <ul class="text-slate-300">
                <li>
                  <a
                    href="#"
                    class="mb-3 inline-block text-base hover:text-primary"
                    >Beranda</a
                  >
                </li>
                <li>
                  <a
                    href="#about"
                    class="mb-3 inline-block text-base hover:text-primary"
                    >Tentang kami</a
                  >
                </li>
                <li>
                  <a
                    href="#portfolio"
                    class="mb-3 inline-block text-base hover:text-primary"
                    >Portfolio</a
                  >
                </li>
                <li>
                  <a
                    href="#clients"
                    class="mb-3 inline-block text-base hover:text-primary"
                    >Informasi</a
                  >
                </li>
                <li>
                  <a
                    href="#blog"
                    class="mb-3 inline-block text-base hover:text-primary"
                    >blog</a
                  >
                </li>
                <li>
                  <a
                    href="#contact"
                    class="mb-3 inline-block text-base hover:text-primary"
                    >contact</a
                  >
                </li>
              </ul>
            </div>
          </div>

          <div class="w-full border-t border-slate-700 pt-10">
            <div class="mb-5 flex items-center justify-center">
              <!-- youtube -->
              <a
                href="https://www.youtube.com/channel/UCOvhaCTftojD9M2u1AAkAnw"
                target="_blank"
                class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-current"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>YouTube</title>
                  <path
                    d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"
                  />
                </svg>
              </a>
              <!-- instagram -->
              <a
                href="https://www.instagram.com/nata_wfc/"
                target="_blank"
                class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-current"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>Instagram</title>
                  <path
                    d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"
                  />
                </svg>
              </a>
              <!-- Github -->
              <a
                href="https://github.com/mhrpwfc88"
                target="_blank"
                class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-current"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>GitHub</title>
                  <path
                    d="M12 .297c-6.63 0-12 5.373-12 12 0 5.303 3.438 9.8 8.205 11.385.6.113.82-.258.82-.577 0-.285-.01-1.04-.015-2.04-3.338.724-4.042-1.61-4.042-1.61C4.422 18.07 3.633 17.7 3.633 17.7c-1.087-.744.084-.729.084-.729 1.205.084 1.838 1.236 1.838 1.236 1.07 1.835 2.809 1.305 3.495.998.108-.776.417-1.305.76-1.605-2.665-.3-5.466-1.332-5.466-5.93 0-1.31.465-2.38 1.235-3.22-.135-.303-.54-1.523.105-3.176 0 0 1.005-.322 3.3 1.23.96-.267 1.98-.399 3-.405 1.02.006 2.04.138 3 .405 2.28-1.552 3.285-1.23 3.285-1.23.645 1.653.24 2.873.12 3.176.765.84 1.23 1.91 1.23 3.22 0 4.61-2.805 5.625-5.475 5.92.42.36.81 1.096.81 2.22 0 1.606-.015 2.896-.015 3.286 0 .315.21.69.825.57C20.565 22.092 24 17.592 24 12.297c0-6.627-5.373-12-12-12"
                  />
                </svg>
              </a>
              <!-- Facebook -->
              <a
                href="#"
                target="_blank"
                class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-current"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>Facebook</title>
                  <path
                    d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"
                  />
                </svg>
              </a>
              <!-- link tree -->
              <a
                href="https://mhcode.my.id/"
                target="_blank"
                class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-current"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>Linktree</title>
                  <path
                    d="M7.953 15.066c-.08.163-.08.324-.08.486.08.517.528.897 1.052.89h1.294v4.776c0 .486-.404.89-.89.89H6.577a.898.898 0 0 1-.889-.891v-4.774H.992c-.728 0-1.214-.729-.89-1.377l6.96-12.627a1.065 1.065 0 0 1 1.863 0l2.913 5.585-3.885 7.042zm15.945 0l-6.96-12.627a1.065 1.065 0 0 0-1.862 0l-2.995 5.586 3.885 7.04c.081.164.081.326.081.487-.08.517-.529.897-1.052.89h-1.296v4.776c.005.49.4.887.89.89h2.914a.9.9 0 0 0 .892-.89v-4.775h4.612c.73 0 1.214-.729.89-1.377Z"
                  />
                </svg>
              </a>
              <!-- link web ngoding yuk -->
              <a
                href="https://mhcode.my.id/"
                target="_blank"
                class="text-sl mr-3 flex h-9 w-9 items-center justify-center rounded-full border border-slate-300 hover:border-primary hover:bg-primary hover:text-white"
              >
                <svg
                  role="img"
                  width="20"
                  class="fill-current"
                  viewBox="0 0 24 24"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <title>Wolfram Language</title>
                  <path
                    d="M14.335 12.431c-.552.15-.615.18-1.164.337-.589-.337-1.107-.526-1.595-.463.057-.306.151-.525.245-.8 1.036-.15 1.805.4 2.514.926zm5.308 7.201a10.795 10.795 0 0 1-1.907 1.52h-.006l-3.702-4.613 3.07.336s1.47.151 1.807 0c.308-.117 1.963-2.449 1.963-2.449s-4.76-3.009-6.384-4.666c.188-2.793-.213-6.508-.213-6.478-1.193 1.195-1.35 1.383-2.544 2.489-.52-1.688-.769-2.27-1.289-3.958-1.568 1.289-2.763 3.464-3.62 6.016a12.29 12.29 0 0 0-.55.656c-.113.157-.23.313-.345.475a16.126 16.126 0 0 0-1.101 1.819c-.063.112-.125.231-.188.35-.913 1.788-1.676 3.79-2.338 5.604A10.824 10.824 0 0 1 1.205 12c0-2.862 1.138-5.613 3.163-7.64A10.785 10.785 0 0 1 12 1.202a10.8 10.8 0 0 1 7.642 3.158A10.83 10.83 0 0 1 22.797 12a10.813 10.813 0 0 1-3.154 7.633M12 6.691c.832-.801.951-.92 1.75-1.69.064 1.533.032 2.334-.062 4.204-.463-.458-1.381-1.044-1.381-1.044S12.126 7.09 12 6.69m3.834 15.463C9.218 24.547 4.436 20.14 3.417 18.602c.006-.014.006-.027.006-.039.92-3.889 2.058-8.535 3.884-9.91.955-1.655 1.231-4.113 2.943-5.401.432 1.288 1.107 3.958 1.57 5.246 2.025 2.025 5.087 4.545 7.146 5.59.212.12.489.98.489.98l-.825 1.038-8.835-.887c-.2-.02-.394-.028-.594-.028-.569 0-1.15.073-1.833.18.432-1.07 1.35-1.936 1.35-1.936s-.855-.519-1.505-.605c.187-.432.681-.989.8-1.138-.244.087-2.026.888-2.208 1.563.857.214 1.47.487 1.47.487s-.95.957-1.132 2.612c0 0 2.82-.43 4.939-.153.063.03.094.03.125.03l1.102.031 3.509 5.84.027.046a.012.012 0 0 1-.011.006m4.652-18.64A12.02 12.02 0 0 0 12 0C8.818 0 5.768 1.27 3.516 3.515a12.025 12.025 0 0 0-3.513 8.484c0 3.183 1.27 6.235 3.512 8.478a11.98 11.98 0 0 0 16.97 0 11.966 11.966 0 0 0 3.512-8.478c0-3.181-1.26-6.233-3.511-8.484z"
                  />
                </svg>
              </a>
            </div>
            <p class="text-center text-xs font-medium text-slate-500">
              Dibuat oleh
              <a
                href="https://www.instagram.com/nata_wfc/"
                target="_blank"
                class="font-bold text-primary"
              >
                Muhammad Urip</a
              >, Menggunakan
              <a
                href="https://tailwindcss.com"
                target="_blank"
                class="font-bold text-sky-500"
              >
                Tailwindcss</a
              >
            </p>
          </div>
        </div>
      </footer>
      <!-- footer End -->

      <!-- back too start -->
      <a
        href="#"
        id="to-top"
        class="z- fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse"
      >
        <span class="mt-2 block h-5 w-5 rotate-45 border-t-2 border-l-2"></span>
      </a>
      <!-- back too End -->

      <script src="dist/js/script.js"></script>
    </body>
  </html>