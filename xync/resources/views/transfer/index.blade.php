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
      XYNC - Transfers
    </title>
  </head>
  @include('header')
  </head>
  
  <body class="font-nunito">
  <script>
    // Function to generate reference number
    function generateReferenceNumber() {
      var systemCode = 'PP'; // System code
      var currentDate = new Date();
      var formattedDate = currentDate.toISOString().slice(0,10).replace(/-/g,""); // Format: YYYYMMDD
      var currentTime = currentDate.toTimeString().slice(0,8).replace(/:/g,""); // Format: HHMMSS
      var transactionId = '1'; // Sample transaction ID
      var randomValue = Math.floor(Math.random() * 10); // Random value between 0 to 9
      var referenceNumber = systemCode + '-' + formattedDate + '-' + currentTime + '-' + transactionId + '-' + randomValue;

      return referenceNumber;
    }

    // Set reference number to input field on page load
    window.onload = function() {
      var referenceNumberInput = document.getElementById('reference_number');
      if (referenceNumberInput) {
        referenceNumberInput.value = generateReferenceNumber();
      }
    };
  </script>
  <br>
  <br>
  <br>
  <br>
  
  <div class="h-1/2 lg:h-screen bg-gradient-to-t from-indigo-200 relative overflow-auto">
                <!-- table -->
                  <div class="flex items-center justify-center">
                    <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                      <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
                        <table class="table-auto w text-sm text-left text-gray-500 dark:text-gray-400">
                          <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                              <th scope="col" class="py-3 px-6">
                              Reference Number
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Sender Name
                              </th>
                              <div class="row">
                              <th scope="col" class="py-3 px-6">
                              Sender Contact
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Recipient Name
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Recipient Contact
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Transaction Type
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Local Amount
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Conversion Code
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Converted Amount
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Transaction Status
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Branch Sent
                              </th>
                              <th scope="col" class="py-3 px-6">
                              Branch Recieved
                              </th>
                              <th scope="col" class="py-3 px-6">
                              </th>
                              <th scope="col" class="py-3 px-6">
                              </th>

                            </tr>
                          </thead>
                          <tbody>
                          @if (count($transfer) > 0)
                          @foreach ($transfer as $cont)
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                              <td class="py-4 px-6">
                              {{ $cont->reference_number }}
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->sender_name }}
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->sender_contact }}
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->recipient_name}}
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->recipient_contact}}
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->transaction_type}}
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->amount_local_currency}}
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->currency_conversion_code}}
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->amount_converted}}                              
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->transaction_status}}                              
                              </td>
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->branch_sent}}                              
                              </td>
                              <td class="py-4 px-6">
                              {{ $cont->branch_recieved}}                              
                              </td>
                            <td class="py-4 px-6">
                                                    <a href="{{ route('transfer.edit', ['id' => $cont->id] ) }}"
                                                        class="text-indigo-600 hover:text-indigo-900">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                        </svg>
                                                    </a>
                                                </td>
                                                
                                                <td class="py-4 px-6">

                                                <form action="{{ route('transfer.delete',$cont->id) }}" method="GET" onsubmit="return confirm('{{ ('Are you sure you want to delete this? ') }}');">
                                                        <button type="submit" class="flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            class="w-6 h-6 text-red-600 hover:text-red-800 cursor-pointer" fill="none"
                                                            viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                                        </svg>
                                                    </button>
                                                    </form>
                                                </td>
                              @endforeach
                                    @else
                                        <tr>
                                            <th>No Data</th>
                                        </tr>
                                    @endif
                          </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
    <!-- into section -->      
      <body>
        <!-- intro content -->
        <!-- circle -->
        <div class="hidden lg:block absolute -bottom-1/4 right-0 left-0 mx-auto w-big h-big bg-indigo-900 rounded-full -z-10">
        </div>
        <!-- texts -->
        <div class="flex justify-center h-screen">
          <!-- 2 column setup -->
          <div id="services">
            <div class="container my-auto w-5/8 p-10">
              <div class="flex flex-wrap justify-between">
                <!-- card -->
                <div class="bg-white w-full md:w-2/3 shadow-xl rounded-lg p-5 my-1 md:my-5 flex flex-col">
                  <h1 class="text-2xl dark:text-white">
                    TRANSACT
                  </h1>
                  <p class="text-gray-400">
                    Transact with confidence. Xync makes your transactions worry-free no matter
                    how big or small! Xync helps your group contribute to shared goals instantly.
                  </p>
                  <a class="text-indigo-600 font-semibold text-sm" href="">
                    Learn More
                  </a>
<form method="POST" action="{{ route('transfer.store') }}" class="my-1 p-1 flex flex-col gap-4">
    @csrf
    <div class="flex flex-col md:flex-row gap-4">
        <div class="flex flex-col w-full md:w-1/2">
            <label for="reference_number" class="text-gray-400">Reference Number</label>
            <input id="reference_number" name="reference_number" class="ring-1 ring-indigo-300" type="text" placeholder="" readonly>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-4">
        <div class="flex flex-col w-full md:w-1/2">
            <label for="sender_name" class="text-gray-400">Sender Name</label>
            <input id="sender_name" name="sender_name" class="ring-1 ring-indigo-300 " type="text" placeholder="">
        </div>
        <div class="flex flex-col w-full md:w-1/2">
            <label for="sender_contact" class="text-gray-400">Sender Number</label>
            <input id="sender_contact" name="sender_contact" class="ring-1 ring-indigo-300 " type="text" placeholder="">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-4">
        <div class="flex flex-col w-full md:w-1/2">
            <label for="recipient_name" class="text-gray-400">Recipient Name</label>
            <input id="recipient_name" name="recipient_name" class="ring-1 ring-indigo-300 " type="text" placeholder="">
        </div>
        <div class="flex flex-col w-full md:w-1/2">
            <label for="recipient_contact" class="text-gray-400">Recipient Number</label>
            <input id="recipient_contact" name="recipient_contact" class="ring-1 ring-indigo-300 " type="text" placeholder="">
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-4">
        <div class="flex flex-col w-full md:w-1/2">
            <label for="transaction_type" class="text-gray-400">Transaction Type</label>
            <select id="transaction_type" name="transaction_type" class="ring-1 ring-indigo-300 ">
                <option value="LOCAL">LOCAL</option>
                <option value="INTERNATIONAL">INTERNATIONAL</option>
            </select>
        </div>

        <div class="flex flex-col w-full md:w-1/2">
            <label for="transaction_status" class="text-gray-400">Transaction Status</label>
            <select id="transaction_status" name="transaction_status" class="ring-1 ring-indigo-300 ">
                <option value="PENDING">PENDING</option>
                <option value="COMPLETED">COMPLETED</option>
                <option value="FAILED">FAILED</option>
            </select>
        </div>
    </div>

    <div class="flex flex-col md:flex-row gap-4">
        <div class="flex flex-col w-full md:w-1/2">
            <label for="currency_conversion_code" class="text-gray-400">Conversion Code</label>
            <select id="currency_conversion_code" name="currency_conversion_code" class="ring-1 ring-indigo-300 ">
                <option value="PH">PH</option>
                <option value="US">US</option>
            </select>
            </div>

          <div class="flex flex-col w-full md:w-1/2">
            <label for="amount_local_currency" class="text-gray-400">Amount (Local Currency)</label>
            <input id="amount_local_currency" name="amount_local_currency" class="ring-1 ring-indigo-300 " type="text" placeholder="">
        </div>
    </div>
<br>
    <button class="w-full bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer">
        CONFIRM
    </button>
</form>

                </div>
                <!-- card -->
                <div class="bg-white h-2/3 w-full md:w-1/4 shadow-xl rounded-lg p-5 my-1 md:my-5 flex flex-col">
                  <h1 class="text-2xl dark:text-white">
                    SEARCH
                  </h1>
                  <br>
                  <form class="my-1 p-1 flex flex-col gap-1 items-center" method="POST">
                    @csrf <!-- {{ csrf_field() }} -->
                    @method('PUT')
                    <p class="text-gray-400">
                      Item
                    </p>
                    <input class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm dark:bg-slate-800 dark:ring-0 dark:text-white"
                    type="text" placeholder="" />
                    <p class="text-gray-400">
                      Search Type
                    </p>
                    <select id="cars" name="cars" class="p-1 w-full md:w-1/2 ring-1 ring-indigo-300 rounded-sm">
                      <option value="PENDING">
                        PENDING
                      </option>
                      <option value="COMPLETED">
                        COMPLETED
                      </option>
                      <option value="FAILED"> 
                        FAILED
                      </option>
                    </select>
                    <br>
                    <button class="w-1/2 bg-indigo-600 text-white font-medium px-3 py-2 rounded-md cursor-pointer">
                      CONFIRM
                    </button>
                  </form>
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