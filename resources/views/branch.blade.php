<!doctype html>
<html>
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"/>
    <title>XYNC - Branch</title>
  </head>
  @include('header')
  </head>
  <body class="font-nunito">
    <!-- into section -->
    <br>
    <br>
    <br>
    <div
      class="h-1/2 lg:h-screen bg-gradient-to-t from-indigo-200 dark:from-slate-800 dark:to-slate-900 relative overflow-auto">
@vite('resources/css/app.css')
<body>
<!-- intro content -->
      <!-- circle -->
      <div
        class="hidden lg:block absolute -bottom-1/4 right-0 left-0 mx-auto w-big h-big bg-indigo-900 rounded-full -z-10"
      ></div>
      <!-- texts -->
      <div class="flex justify-center h-screen">

      <div class="hidden lg:flex flex-col gap-5 rounded-md shadow-lg absolute top-0 bottom-0 m-auto bg-white dark:bg-slate-900 dark:shadow-slate-800 p-6 h-fit w-1/3">
        <h1 class="text-4xl font-bold text-indigo-900">BRANCH MANAGEMENT</h1>
        <form class="my-1 p-1 flex flex-col gap-2 items-center">
        <p class="text-gray-400">Branch Name</p>
          <input
            class="p-1 w-full md:w-5/7 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
            type="text"
            placeholder="Pera Padala BRANCH"
          />
          <p class="text-gray-400">Branch Code</p>
          <input
            class="p-1 w-full md:w-5/7 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
            type="text"
            placeholder="COUNTRY-CITY"
          />
          <p class="text-gray-400">Country ISO Code</p>
          <input
            class="p-1 w-full md:w-5/7 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
            type="text"
            placeholder="Ex. 'PH'"
          />
          <p class="text-gray-400">User</p>
          <select id="cars" name="cars"
          class="p-1 w-full md:w-5/7 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white">
          <option value="volvo">Username 1</option>
          <option value="saab">Username 2</option>
          </select>
          <p class="text-gray-400">Assigned Branch</p>
          <select id="cars" name="cars"
          class="p-1 w-full md:w-5/7 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white">
          <option value="volvo">Branch 1</option>
          <option value="saab">Branch 2</option>
          </select>
          <br>
          <button
            class="w-1/2 bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer"
          >
            CONFIRM
          </button>
        </form>
      </div>
    </div>
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
</body>
@include('footer')
</html>

