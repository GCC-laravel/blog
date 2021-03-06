@extends('layouts.dashboard')

@section('content')
      <div
        class="w-full mx-autp items-center flex justify-between md:flex-no-wrap flex-wrap md:px-10 px-4"
      >
        <a
          class="text-white text-sm uppercase hidden lg:inline-block font-semibold"
          href="./index.html"
          >Dashboard</a
        >
        <form
          class="md:flex hidden flex-row flex-wrap items-center lg:ml-auto mr-3"
        >
          <div class="relative flex w-full flex-wrap items-stretch">
            <span
              class="z-10 h-full leading-snug font-normal absolute text-center text-gray-400 absolute bg-transparent rounded text-base items-center justify-center w-8 pl-3 py-3"
              ><i class="fas fa-search"></i
            ></span>
            <input
              type="text"
              placeholder="Search here..."
              class="px-3 py-3 placeholder-gray-400 text-gray-700 relative bg-white bg-white rounded text-sm shadow outline-none focus:outline-none focus:shadow-outline w-full pl-10"
            />
          </div>
        </form>
        <ul
          class="flex-col md:flex-row list-none items-center hidden md:flex"
        >
          <a class="text-gray-600 block" href="#pablo" onclick="openDropdown(event,'user-dropdown')">
            <div class="items-center flex">
              <span
                class="w-12 h-12 text-sm text-white bg-gray-300 inline-flex items-center justify-center rounded-full"
                ><img
                  alt="..."
                  class="w-full rounded-full align-middle border-none shadow-lg"
                  src="./assets/img/team-1-800x800.jpg"
              /></span>
            </div>
          </a>
          <div
            class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg mt-1"
            style="min-width: 12rem;"
            id="user-dropdown"
          >
            <a
              href="#pablo"
              class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
              >Action</a
            ><a
              href="#pablo"
              class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
              >Another action</a
            ><a
              href="#pablo"
              class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
              >Something else here</a
            >
            <div class="h-0 my-2 border border-solid border-gray-200"></div>
            <a
              href="#pablo"
              class="text-sm py-2 px-4 font-normal block w-full whitespace-no-wrap bg-transparent text-gray-800"
              >Seprated link</a
            >
          </div>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="relative bg-pink-600 md:pt-32 pb-32 pt-12">
      <div class="px-4 md:px-10 mx-auto w-full">
        <div>
          <!-- Card stats -->
          <div class="flex flex-wrap">
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                        Traffic
                      </h5>
                      <span class="font-semibold text-xl text-gray-800">
                        350,897
                      </span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-red-500">
                        <i class="far fa-chart-bar"></i>
                      </div>
                    </div>
                  </div>
                    <p class="text-sm text-gray-500 mt-4">
                    <span class="text-green-500 mr-2">
                      <i class="fas fa-arrow-up"></i> 3.48%
                    </span>
                    <span class="whitespace-no-wrap">
                      Since last month
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                        New users
                      </h5>
                      <span class="font-semibold text-xl text-gray-800">
                        2,356
                      </span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-orange-500">
                        <i class="fas fa-chart-pie"></i>
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500 mt-4">
                    <span class="text-red-500 mr-2">
                      <i class="fas fa-arrow-down"></i> 3.48%
                    </span>
                    <span class="whitespace-no-wrap">
                      Since last week
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                        Sales
                      </h5>
                      <span class="font-semibold text-xl text-gray-800">
                        924
                      </span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-pink-500">
                        <i class="fas fa-users"></i>
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500 mt-4">
                    <span class="text-orange-500 mr-2">
                      <i class="fas fa-arrow-down"></i> 1.10%
                    </span>
                    <span class="whitespace-no-wrap">
                      Since yesterday
                    </span>
                  </p>
                </div>
              </div>
            </div>
            <div class="w-full lg:w-6/12 xl:w-3/12 px-4">
              <div class="relative flex flex-col min-w-0 break-words bg-white rounded mb-6 xl:mb-0 shadow-lg">
                <div class="flex-auto p-4">
                  <div class="flex flex-wrap">
                    <div class="relative w-full pr-4 max-w-full flex-grow flex-1">
                      <h5 class="text-gray-500 uppercase font-bold text-xs">
                        Performance
                      </h5>
                      <span class="font-semibold text-xl text-gray-800">
                        49,65%
                      </span>
                    </div>
                    <div class="relative w-auto pl-4 flex-initial">
                      <div class="text-white p-3 text-center inline-flex items-center justify-center w-12 h-12 shadow-lg rounded-full bg-blue-500">
                        <i class="fas fa-percent"></i>
                      </div>
                    </div>
                  </div>
                  <p class="text-sm text-gray-500 mt-4">
                    <span class="text-green-500 mr-2">
                      <i class="fas fa-arrow-up"></i> 12%
                    </span>
                    <span class="whitespace-no-wrap">
                      Since last month
                    </span>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="px-4 md:px-10 mx-auto w-full -m-24">
      <div class="flex flex-wrap">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
          <div
            class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-gray-900"
          >
            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
              <div class="flex flex-wrap items-center">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h6
                    class="uppercase text-gray-200 mb-1 text-xs font-semibold"
                  >
                    Overview
                  </h6>
                  <h2 class="text-white text-xl font-semibold">
                    Sales value
                  </h2>
                </div>
              </div>
            </div>
            <div class="p-4 flex-auto">
              <!-- Chart -->
              <div class="relative" style="height:350px">
                <canvas id="line-chart"></canvas>
              </div>
            </div>
          </div>
        </div>
        <div class="w-full xl:w-4/12 px-4">
          <div
            class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded"
          >
            <div class="rounded-t mb-0 px-4 py-3 bg-transparent">
              <div class="flex flex-wrap items-center">
                <div class="relative w-full max-w-full flex-grow flex-1">
                  <h6
                    class="uppercase text-gray-500 mb-1 text-xs font-semibold"
                  >
                    Performance
                  </h6>
                  <h2 class="text-gray-800 text-xl font-semibold">
                    Total orders
                  </h2>
                </div>
              </div>
            </div>
            <div class="p-4 flex-auto">
              <!-- Chart -->
              <div class="relative" style="height:350px">
                <canvas id="bar-chart"></canvas>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex flex-wrap mt-4">
        <div class="w-full xl:w-8/12 mb-12 xl:mb-0 px-4">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
              <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-800">
                    Page visits
                  </h3>
                </div>
                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                  <button
                    class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                    type="button"
                    style="transition:all .15s ease"
                  >
                    See all
                  </button>
                </div>
              </div>
            </div>
            <div class="block w-full overflow-x-auto">
              <!-- Projects table -->
              <table class="items-center w-full bg-transparent border-collapse">
                <thead>
                  <tr>
                    <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                      Page name
                    </th>
                    <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                      Visitors
                    </th>
                    <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                      Unique users
                    </th>
                    <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                      Bounce rate
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      /argon/
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      4,569
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      340
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                      46,53%
                    </td>
                  </tr>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      /argon/index.html
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      3,985
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      319
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                      46,53%
                    </td>
                  </tr>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      /argon/charts.html
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      3,513
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      294
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <i class="fas fa-arrow-down text-orange-500 mr-4"></i>
                      36,49%
                    </td>
                  </tr>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      /argon/tables.html
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      2,050
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      147
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <i class="fas fa-arrow-up text-green-500 mr-4"></i>
                      50,87%
                    </td>
                  </tr>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      /argon/profile.html
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      1,795
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      190
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                      46,53%
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="w-full xl:w-4/12 px-4">
          <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
              <div class="flex flex-wrap items-center">
                <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                  <h3 class="font-semibold text-base text-gray-800">
                    Social traffic
                  </h3>
                </div>
                <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                  <button
                    class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1"
                    type="button"
                    style="transition:all .15s ease"
                  >
                    See all
                  </button>
                </div>
              </div>
            </div>
            <div class="block w-full overflow-x-auto">
              <!-- Projects table -->
              <table class="items-center w-full bg-transparent border-collapse">
                <thead class="thead-light">
                  <tr>
                    <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                      Referral
                    </th>
                    <th class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left">
                      Visitors
                    </th>
                    <th
                      class="px-6 bg-gray-100 text-gray-600 align-middle border border-solid border-gray-200 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-no-wrap font-semibold text-left"
                      style="min-width:140px"
                    ></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      Facebook
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      1,480
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <div class="flex items-center">
                        <span class="mr-2">60%</span>
                        <div class="relative w-full">
                          <div class="overflow-hidden h-2 text-xs flex rounded bg-red-200">
                            <div
                              style="width:60%"
                              class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-red-500"
                            ></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      Facebook
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      5,480
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <div class="flex items-center">
                        <span class="mr-2">70%</span>
                        <div class="relative w-full">
                          <div class="overflow-hidden h-2 text-xs flex rounded bg-green-200">
                            <div
                              style="width:70%"
                              class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"
                            ></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      Google
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      4,807
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <div class="flex items-center">
                        <span class="mr-2">80%</span>
                        <div class="relative w-full">
                          <div class="overflow-hidden h-2 text-xs flex rounded bg-purple-200">
                            <div
                              style="width:80%"
                              class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-purple-500"
                            ></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      Instagram
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      3,678
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <div class="flex items-center">
                        <span class="mr-2">75%</span>
                        <div class="relative w-full">
                          <div class="overflow-hidden h-2 text-xs flex rounded bg-blue-200">
                            <div
                              style="width:75%"
                              class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-blue-500"
                            ></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4 text-left">
                      twitter
                    </th>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      2,645
                    </td>
                    <td class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-no-wrap p-4">
                      <div class="flex items-center">
                        <span class="mr-2">30%</span>
                        <div class="relative w-full">
                          <div class="overflow-hidden h-2 text-xs flex rounded bg-orange-200">
                            <div
                              style="width:30%"
                              class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-green-500"
                            ></div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <footer class="block py-4">
        <div class="container mx-auto px-4">
          <hr class="mb-4 border-b-1 border-gray-300" />
          <div class="flex flex-wrap items-center md:justify-between justify-center">
            <div class="w-full md:w-4/12 px-4">
              <div class="text-sm text-gray-600 font-semibold py-1">
                Copyright ?? <span id="javascript-date"></span>
                <a
                  href="https://www.creative-tim.com"
                  class="text-gray-600 hover:text-gray-800 text-sm font-semibold py-1"
                >
                  Creative Tim
                </a>
              </div>
            </div>
            <div class="w-full md:w-8/12 px-4">
              <ul class="flex flex-wrap list-none md:justify-end  justify-center">
                <li>
                  <a
                    href="https://www.creative-tim.com"
                    class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                  >
                    Creative Tim
                  </a>
                </li>
                <li>
                  <a
                    href="https://www.creative-tim.com/presentation"
                    class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                  >
                    About Us
                  </a>
                </li>
                <li>
                  <a
                    href="http://blog.creative-tim.com"
                    class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                  >
                    Blog
                  </a>
                </li>
                <li>
                  <a
                    href="https://github.com/creativetimofficial/tailwind-starter-kit/blob/master/LICENSE.md"
                    class="text-gray-700 hover:text-gray-900 text-sm font-semibold block py-1 px-3"
                  >
                    MIT License
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </footer>
    </div>
@endsection