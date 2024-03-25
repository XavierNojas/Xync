<nav class="w-full fixed top-0 bg-white z-10 dark:bg-slate-900">
        <div class="container mx-auto py-5 flex items-center justify-between">
          <div class="flex items-center gap-2">
            <img class="w-8" src="./img/logo.png" alt="" />
            <span class="text-2xl font-bold text-indigo-900 dark:text-white"
              >XYNC</span
            >
          </div>
          <ul
            class="hidden md:flex space-x-10 text-gray-600 dark:text-gray-100 font-bold text-sm uppercase"
          >
            <li class="hover:text-gray-500">
              <a href="/home">Home</a>
            </li>
            
            <li class="hover:text-gray-500">
              <a href="/users">Users</a>
            </li>

            <li class="hover:text-gray-500">
              <a href="/transfer">Transfers</a>
            </li>

            <li class="hover:text-gray-500">
              <a href="/branch">Branch</a>
            </li>

          </ul>

          <button
            class="w-1/8 bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer"
            >
            <a href="/login">LOGIN</a>
          </button>

            <div id="hamburger" class="space-y-1 md:hidden cursor-pointer z-20">
            <div class="w-6 h-0.5 bg-black"></div>
            <div class="w-6 h-0.5 bg-black"></div>
            <div class="w-6 h-0.5 bg-black"></div>
          </div>
          <ul
            id="menu"
            class="hidden bg-indigo-900 absolute left-0 top-0 w-full p-10 rounded-b-3xl space-y-10 text-white text-center"
          >
            <li>
              <a id="hLink" href="/home">home</a>
            </li>
            <li>
              <a id="hLink" href="#about">about me</a>
            </li>
            <li>
              <a id="hLink" href="#services">services</a>
            </li>
            <li>
              <a id="hLink" href="#works">works</a>
            </li>
            <li>
              <a id="hLink" href="#contact">contact</a>
            </li>
          </ul>
        </div>
      </nav>