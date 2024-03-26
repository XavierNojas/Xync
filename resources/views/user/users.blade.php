<!doctype html>
<html>
  
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
    @vite('resources/css/app.css')
    <title>
      XYNC - Users
    </title>
  </head>
  @include('header')
  </head>
  
  <body class="font-nunito">
    <!-- into section -->
    <br>
    <br>
    <br>
    <div class="h-1/2 lg:h-screen bg-gradient-to-t from-indigo-200 relative overflow-auto">
      
      <body>
        <!-- intro content -->
        <!-- circle -->
        <div class="hidden lg:block absolute -bottom-1/4 right-0 left-0 mx-auto w-big h-big bg-indigo-900 rounded-full -z-10">
        </div>
        <!-- texts -->
        <div class="flex justify-center h-screen">
          <!-- 2 column setup -->
          <div id="services">
            <div class="container mx-auto w-5/8 p-10">
              <div class="flex flex-wrap justify-between">
                <!-- card -->
                <div class="bg-white w-full md:w-2/5 shadow-xl rounded-lg p-5 my-1 md:my-5 flex flex-col">
                  <h1 class="text-2xl dark:text-white">
                    USERS
                  </h1>
                  <p class="text-gray-400">
                    Transact with confidence. Xync makes your transactions worry-free no matter
                    how big or small! Xync helps your group contribute to shared goals instantly.
                  </p>
                  <a class="text-indigo-600 font-semibold text-sm" href="">
                    Learn More
                  </a>
                  <form class="my-1 p-1 flex flex-col gap-2 items-center">
                    <p class="text-gray-400">
                      Transaction Type
                    </p>
                    <select id="cars" name="cars" class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white">
                      <option value="LOCAL">
                        LOCAL
                      </option>
                      <option value="INTERNATIONAL">
                        INTERNATIONAL
                      </option>
                    </select>
                    <p class="text-gray-400">
                      Sender Name
                    </p>
                    <input class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
                    type="text" placeholder="" />
                    <p class="text-gray-400">
                      Sender Contact Number
                    </p>
                    <input class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
                    type="text" placeholder="" />
                    <p class="text-gray-400">
                      Receiver Name
                    </p>
                    <input class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
                    type="text" placeholder="" />
                    <p class="text-gray-400">
                      Receiver Contact Number
                    </p>
                    <input class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
                    type="text" placeholder="" />
                    <p class="text-gray-400">
                      Amount
                    </p>
                    <input class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
                    type="text" placeholder="" />
                    <p class="text-gray-400">
                      Transaction Status
                    </p>
                    <select id="cars" name="cars" class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white">
                      <option value="PENDING">
                        PENDING
                      </option>
                      <option value="CCOMPLETED">
                        COMPLETED
                      </option>
                      <option value="CCOMPLETED">
                        FAILED
                      </option>
                    </select>
                    <br>
                    <button class="w-1/2 bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer">
                      CONFIRM
                    </button>
                  </form>
                </div>
                <!-- card -->
                <div class="bg-white w-full md:w-2/4 shadow-xl rounded-lg p-5 my-1 md:my-5 flex flex-col">
                  <h1 class="text-2xl dark:text-white">
                    USERS TABLE
                  </h1>
                  <br>
                  <form class="my-1 p-1 flex flex-col gap-2 items-center">
                    <p class="text-gray-400">
                      Search
                    </p>
                    <input class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
                    type="text" placeholder="" />
                    <p class="text-gray-400">
                      Search Type
                    </p>
                    <select id="cars" name="cars" class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white">
                      <option value="PENDING">
                        PENDING
                      </option>
                      <option value="CCOMPLETED">
                        COMPLETED
                      </option>
                      <option value="CCOMPLETED">
                        FAILED
                      </option>
                    </select>
                    <br>
                    <button class="w-1/2 bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer">
                      CONFIRM
                    </button>
                  </form>
                  <!-- table -->
                  <div class="flex items-center justify-center min-h-[450px]">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                      <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                              <th scope="col" class="py-3 px-6">
                                Person
                              </th>
                              <th scope="col" class="py-3 px-6">
                                Bank Account
                              </th>
                              <th scope="col" class="py-3 px-6">
                                Amount
                              </th>
                              <th scope="col" class="py-3 px-6">
                                Approved
                              </th>
                            </tr>
                          </thead>
                          <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                              <td class="py-4 px-6">
                                Alex Johnson
                              </td>
                              <td class="py-4 px-6">
                                82926417
                              </td>
                              <td class="py-4 px-6">
                                $4,500.00
                              </td>
                              <td class="py-4 px-6">
                                Yes
                              </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                              <td class="py-4 px-6">
                                Maria Garcia
                              </td>
                              <td class="py-4 px-6">
                                55387621
                              </td>
                              <td class="py-4 px-6">
                                $3,150.00
                              </td>
                              <td class="py-4 px-6">
                                No
                              </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                              <td class="py-4 px-6">
                                James Smith
                              </td>
                              <td class="py-4 px-6">
                                90817264
                              </td>
                              <td class="py-4 px-6">
                                $7,820.00
                              </td>
                              <td class="py-4 px-6">
                                Yes
                              </td>
                            </tr>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                              <td class="py-4 px-6">
                                Patricia Brown
                              </td>
                              <td class="py-4 px-6">
                                26483910
                              </td>
                              <td class="py-4 px-6">
                                $1,230.00
                              </td>
                              <td class="py-4 px-6">
                                Yes
                              </td>
                            </tr>
                            <tr class="bg-white dark:bg-gray-800">
                              <td class="py-4 px-6">
                                Ethan Davis
                              </td>
                              <td class="py-4 px-6">
                                64738290
                              </td>
                              <td class="py-4 px-6">
                                $865.00
                              </td>
                              <td class="py-4 px-6">
                                No
                              </td>
                            </tr>
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
    </div>
    </body>
    @include('footer')

</html>