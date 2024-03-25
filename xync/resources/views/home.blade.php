<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"/>
      @vite('resources/css/app.css')
  <title>XYNC</title>
  </head>
  @include('header')
  </head>
  <body class="font-nunito">
    <!-- into section -->
    <div
      class="h-1/2 lg:h-screen bg-gradient-to-t from-indigo-200 dark:from-slate-800 dark:to-slate-900 relative overflow-hidden">
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
        class="lg:block absolute -bottom-1/4 right-0 left-0 mx-auto w-big h-big bg-indigo-900 rounded-full -z-10"
      ></div>
      <!-- animated text -->
      <div
        class="absolute top-1/3 left-5 text-xl sm:left-10 sm:text-4xl md:left-1/4 md:text-6xl lg:left-5 xl:left-48 xl:text-7xl font-bold"
      >
        <p id="text" class="text-red-500"></p>
      </div>
      <!-- texts -->
      <div
        class="lg:flex flex-col gap-5 rounded-md shadow-lg absolute top-0 bottom-0 m-auto right-10 bg-white dark:bg-slate-900 dark:shadow-slate-800 p-6 h-fit w-1/3"
      >
        <h1 class="text-4xl font-bold text-indigo-900">Hi, it's <span id="currentTime"></span>! </h1>
        <p class="text-gray-400">
        Xync is your financial collaboration app made for everyone.
        Save together, set goals, track spending,
        and collaborate financially!
        </p>
        <a
          class="bg-indigo-600 text-white text-xl px-3 py-2 rounded-md font-semibold w-fit"
          href="/register"
          >REGISTER</a
        >
      </div>
    </div>
    <!-- about -->
    <div id="about" class="px-10 dark:bg-slate-900">
      <div
        class="container mx-auto py-5 flex flex-col-reverse lg:flex-row items-center gap-10"
      >
        <!-- left -->
        </div>
      </div>
    </div>
    <!-- services -->
    <div id="services" class="dark:bg-slate-900">
      <div class="container mx-auto">
        <!-- top -->
        <div class="flex flex-col gap-3 items-center">
          <h1 class="text-3xl text-indigo-600 font-bold">What does XYNC have to offer?</h1>
          <p class="w-1/2 text-center text-gray-400">
            XYNC is your platform for collaborative financing.
          </p>
        </div>
        <!-- bottom -->
        <div class="p-5 sm:p-0 flex flex-wrap justify-between">
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <h1 class="text-2xl dark:text-white">SEND</h1>
            <p class="text-gray-400">
            Send with confidence. Xync makes your transactions worry-free no matter how big or small!
            Xync helps your group contribute to shared goals instantly.</p>
            <a class="text-indigo-600 font-semibold text-sm" href=""
              >Learn More</a
            >
          </div>
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <h1 class="text-2xl dark:text-white">SAVE</h1>
            <p class="text-gray-400">
            Save for the things that matter. Xync helps your group build towards a brighter future.
            Save as a team, grow as a team.</p>
            <a class="text-indigo-600 font-semibold text-sm" href=""
              >Learn More</a
            >
          </div>
          <!-- card -->
          <div
            class="w-full md:w-4/12 shadow-xl rounded-lg p-5 my-3 md:my-10 flex flex-col gap-3"
          >
            <h1 class="text-2xl dark:text-white">XYNC</h1>
            <p class="text-gray-400">
            Forget the typical bank! Xync makes sharing money with your group a breeze.
            With Xync, your money flows freely between friends, family, and teammates at a touch away.
            </p>
            <a class="text-indigo-600 font-semibold text-sm" href=""
              >Learn More</a
            >
          </div>
        </div>
      </div>
    </div>
    <script src="./autotyping.js"></script>
    <script>
        // Function to update greeting with current time
        function updateTime() {
            const now = new Date();
            const hours = now.getHours();
            const minutes = now.getMinutes();
            const timeString = `${hours}:${minutes < 10 ? '0' + minutes : minutes}`;
            document.getElementById('currentTime').textContent = timeString;
        }

        // Update time initially
        updateTime();

        // Update time every minute
        setInterval(updateTime, 60000);
    </script>
</body>
@include('footer')
</html>

