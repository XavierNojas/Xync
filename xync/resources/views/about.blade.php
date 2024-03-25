<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"/>
    <link rel="stylesheet" href="./css/style.css" />
    <title>Xavier Nojas - Portfolio</title>
  </head>
  <body class="font-nunito">
    <!-- into section -->
    <div
      class="h-1/2 lg:h-screen bg-gradient-to-t from-indigo-200 dark:from-slate-800 dark:to-slate-900 relative overflow-hidden"
    >
@vite('resources/css/app.css')
</head>
@include('header')
<body>
<!-- intro content -->
      <!-- image -->
      <img
        class="absolute bottom-0 right-0 lg:left-0 mx-auto h-5/6 object-cover"
        src="./img/man.png"
        alt=""
      />
      <!-- circle -->
      <div
        class="hidden lg:block absolute -bottom-1/4 right-0 left-0 mx-auto w-big h-big bg-indigo-900 rounded-full -z-10"
      ></div>
      <!-- animated text -->
      <div
        class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-48 xl:text-7xl font-bold"
      >
        <span class="text-gray-600">Freelance</span>
        <p id="text" class="text-red-500"></p>
      </div>
      <!-- texts -->
      <div
        class="hidden lg:flex flex-col gap-5 rounded-md shadow-lg absolute top-0 bottom-0 m-auto right-10 bg-white dark:bg-slate-900 dark:shadow-slate-800 p-6 h-fit w-1/3"
      >
        <h1 class="text-4xl font-bold text-indigo-900">Hi, I'm Xavier Nojas</h1>
        <p class="text-gray-400">
        Xavier Duane C. Nojas, also known as "Xave," hails from the vibrant city of Bacolod 
        and proudly represents BSCS2A. Fueled by a childhood fascination with technology and 
        computers that has only intensified over the years, this individual is a naturally creative
        soul. His interests span a spectrum from photography to filmmaking, with coding holding a 
        special place in his heart. The coding journey for Xavier kicked off during his senior high 
        school years in ITMAWD, and he has set his sights on transforming that passion into a 
        fulfilling career, hence the decision to pursue computer science in college. 
        </p>
        <a
          class="bg-indigo-600 text-white text-xl px-3 py-2 rounded-md font-semibold w-fit"
          href="#contact"
          >Hire Me</a
        >
      </div>
    </div>
    <!-- about -->
    <div id="about" class="px-10 dark:bg-slate-900">
      <div
        class="container mx-auto py-40 flex flex-col-reverse lg:flex-row items-center gap-20"
      >
        <!-- left -->
        <div class="relative">
          <img
            class="h-1/4 absolute top-0 left-0 -z-10"
            src="./img/dots.png"
            alt=""
          />
        </div>
        <!-- right -->
        <div class="my-auto flex flex-col gap-3">
          <h1 class="text-indigo-600 font-bold">ABOUT ME</h1>
          <h1 class="text-3xl font-medium dark:text-white">Filmmaker by Day</h1>
          <h1 class="text-3xl font-medium dark:text-white">
            Programmer by Night
          </h1>
          <p class="text-gray-400">
            I am an aspiring UI/UX developer continuing my studies as a student of Computer Science. I'm also a filmmaker with 6 years of experience just writing and shooting films as a hobby.
          </p>
          <h2 class="text-gray-400 font-medium">HTML</h2>
          <div class="w-full bg-gray-200 h-1.5 rounded-md">
            <div class="w-full bg-indigo-600 h-1.5 rounded-md"></div>
          </div>
          <h2 class="text-gray-400 font-medium">Javascript</h2>
          <div class="w-full bg-gray-200 h-1.5 rounded-md">
            <div class="w-4/6 bg-indigo-600 h-1.5 rounded-md"></div>
          </div>
          <h2 class="text-gray-400 font-medium">React</h2>
          <div class="w-full bg-gray-200 h-1.5 rounded-md">
            <div class="w-5/6 bg-indigo-600 h-1.5 rounded-md"></div>
          </div>
        </div>
      </div>
    </div>
    <!-- services -->
    <div id="services" class="dark:bg-slate-900">
      <div class="container mx-auto">
        <!-- top -->
        <div class="flex flex-col gap-3 items-center">
          <h1 class="text-indigo-600 font-bold">SERVICES</h1>
          <h1 class="text-3xl dark:text-white">What do I offer?</h1>
          <p class="w-1/2 text-center text-gray-400">
            My approach to website design is to create a website that
            captures your brand. Same goes with filmmaking, I capture
            what goes with your vision.
          </p>
        </div>
        <!-- bottom -->
        <div class="p-5 sm:p-0 flex flex-wrap justify-between">
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <img class="w-10" src="./img/icon.png" alt="" />
            <h1 class="font-medium text-lg dark:text-white">UX / UI Design</h1>
            <p class="text-gray-400">
              I specialize in creating interactive websites for individuals and
              small businesses.
            </p>
            <a class="text-indigo-600 font-semibold text-sm" href=""
              >Read More</a
            >
          </div>
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <img class="w-10" src="./img/icon.png" alt="" />
            <h1 class="font-medium text-lg dark:text-white">Directing</h1>
            <p class="text-gray-400">
              I specializing in having an applied practical vision that takes creativity and hard work.
            </p>
            <a class="text-indigo-600 font-semibold text-sm" href=""
              >Read More</a
            >
          </div>
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <img class="w-10" src="./img/icon.png" alt="" />
            <h1 class="font-medium text-lg dark:text-white">Filmmaking</h1>
            <p class="text-gray-400">
              I specialize in creating high quality films that capture the Director's vision.
              ...which is me most of the time.
            </p>
            <a class="text-indigo-600 font-semibold text-sm" href=""
              >Read More</a
            >
          </div>
        </div>
      </div>
    </div>
    <script src="./autotyping.js"></script>
</body>
@include('footer')
</html>

