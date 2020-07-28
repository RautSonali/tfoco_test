<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
        <style type="text/css">
            @font-face {
                font-family: "Gotham SSM";
                src: url('fonts/fa-solid-900.woff2') format("truetype"),
                    url('fonts/GothamSSm-Bold-2.woff2') format("truetype")
                    url('fonts/GothamSSm-Book-2.woff2') format("truetype")
                    url('fonts/GothamSSm-ExtraLight-2.woff2') format("truetype")
                    url('fonts/GothamSSm-Light-2.woff2') format("truetype"),
                    url('fonts/tfo_icons.woff2') format("truetype");
            }
            body, input, button, select, textarea {
                font-family: "Gotham SSM";
            }

            body {
                font-style: normal;
                font-weight: 400;
                color: rgb(255,255,255);
                background-color: rgb(26,26,26);
            }
            .bg-black-900 {
                @apply background-color:#1a1a1a !important;
              }

            .text-orange-200 {
                color: rgb(185,152,85);
            }

            .border-white {
                border-color: rgb(185,152,85);
            }

/*            #welcome-titles .title_item{
                width: 25% !important;
            }
*/        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height bg-black">
            <div class="container mx-auto">
                <header>
                    <nav class="flex items-center justify-between flex-wrap bg-black-500 p-2">
                      <div class="flex items-center flex-shrink-0 text-white mr-6">
                        <!-- <svg class="fill-current h-8 w-8 mr-2" width="54" height="54" viewBox="0 0 54 54" xmlns="http://www.w3.org/2000/svg"><path d="M13.5 22.1c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05zM0 38.3c1.8-7.2 6.3-10.8 13.5-10.8 10.8 0 12.15 8.1 17.55 9.45 3.6.9 6.75-.45 9.45-4.05-1.8 7.2-6.3 10.8-13.5 10.8-10.8 0-12.15-8.1-17.55-9.45-3.6-.9-6.75.45-9.45 4.05z"/></svg>
                        <span class="font-semibold text-xl tracking-tight">Tailwind CSS</span> -->
                        <img src="https://www.tfoco.com/wp-content/uploads/2020/05/tfoco_white_logo.png.webp" height="50"  width="150"  class="" />
                      </div>
                      <div class="block lg:hidden">
                        <button class="flex items-center px-3 py-2 border rounded text-white-200 border-teal-400 hover:text-white hover:border-white">
                          <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
                        </button>
                      </div> 
                      <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
                        <div class="text-sm lg:flex-grow ml-16">
                          <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0  hover:text-orange-200 text-white mr-4 ml-16">
                            WELCOME
                          </a>
                          <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 hover:text-orange-200 text-white mr-4 ml-16">
                            WEALTH PLANNING
                          </a>
                          <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 hover:text-orange-200 text-white ml-16">
                            WHO WE ARE
                          </a>
                          <a href="#responsive-header" class="block mt-4 lg:inline-block lg:mt-0 hover:text-orange-200 text-white ml-16">
                            العربية
                          </a>
                        </div>
                        <div>
                          <a href="#" class="inline-block text-sm px-4 py-2 leading-none border text-orange-200 border-white mt-4 lg:mt-0">LET'S TALK</a>
                        </div>
                      </div>
                    </nav>
                </header>
                <div class="content">
                    <div class="mt-20">
                        <div class="grid-cols-1 border border-white pt-4 pr-3 pb-4 pl-3">
                            <h1 class="text-5xl text-orange-200 p-6">YOUR FAMILY, <br>
                                OUR COMMITMENT
                            </h1>
                            <div class="text-white p-6"> 
                                Is your goal to protect and sustain your wealth for years to come? <br>
                                How can you secure your legacy for future generations in a rapidly changing world?
                            </div>
                            <div class="p-6">
                                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border text-orange-200 border-white mt-4 lg:mt-0">LEARN MORE</a>
                            </div>
                        </div>
                    </div>
                    <div class="mt-10">
                        <div class="block p-6">
                            <h1 class="text-center text-white text-4xl">WEALTH PLANNING</h1>
                        </div>
                        <div class="flex h-40">
                            <div class="flex-1 mr-4" style="background: url('https://www.tfoco.com/wp-content/uploads/2019/10/tile1_FL@2x-11.jpg') center center no-repeat;">
                                <h5 class="text-orange-200 text-center mt-20">FAMILY LEGACY</h5>
                            </div>
                            <div class="flex-1 mr-4" style="background: url('https://www.tfoco.com/wp-content/uploads/2019/10/tile2_PMP@2x1.jpg') center center no-repeat;">
                                <h5 class="text-orange-200 text-center mt-20">PERSONLIZED MASTER PLAN</h5>
                            </div>
                            <div class="flex-1 mr-4" style="background: url('https://www.tfoco.com/wp-content/uploads/2019/10/tile3_TA@2x1.jpg') center center no-repeat;">
                                <h5 class="text-orange-200 text-center mt-20">TRUSTED ADVISOR</h5>
                            </div>
                            <div class="flex-1 mr-4" style="background: url('https://www.tfoco.com/wp-content/uploads/2019/10/tile4_IE@2x1.jpg') center center no-repeat;">
                                <h5 class="text-orange-200 text-center mt-20">INVESTMENT EXCELLENCE</h5>
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-16" style="background-image: url(https://www.tfoco.com/wp-content/uploads/2019/10/home-content-1-1-1024x306.jpg)">
                        <div class="w-1/2  text-white p-6 text-center">
                            Video
                        </div>
                        <div class="w-1/2  p-8">
                            <div class="mt-8">
                                <h3 class="text-white text-4xl">
                                    <p> STAY CONNECTED TO<br>

                                        YOUR PORTFOLIO<br>

                                        WHEREVER YOU ARE
                                    </p>
                                </h3>
                            </div>
                            <div class="text-white">
                                Already a client? Then download The Family Office app on the app <br>store.
                            </div>
                        </div>
                    </div>
                    <div class="flex mt-16">
                        <div class="w-1/2" style="background-color: rgb(34,34,34)">
                            <div class="ml-8 mt-8">
                                <h3 class="text-white text-4xl">
                                    <p> A HISTORY OF SUCCESS<br>

                                        IN PRESERVING FAMILY<br>

                                        LEGACIES
                                    </p>
                                </h3>
                            </div>
                            <div class="text-white ml-8">
                                The Family Office has built a reputation as the GCC’s trusted<br> 
                                independent financial advisor managing a global portfolio.
                            </div>
                            <div class="mt-4 ml-8">
                                <a href="#" class="inline-block text-sm px-4 py-2 leading-none border text-orange-200 border-white mt-4 lg:mt-0">GET TO KNOW US</a>
                            </div>
                        </div>
                        <div class="w-1/2">
                            <img class="w-full" src="https://www.tfoco.com/wp-content/uploads/2019/10/familyLegacy@2x-e1563207834183-1.jpg.webp">
                        </div>
                    </div>
                    <div class="mt-16">
                        <div class="block p-6">
                            <h1 class="text-center text-white text-4xl">INVESTING INSIGHTS</h1>
                            <h3 class="text-white text-center">We keep a close watch on investment trends that matter.</h3>
                        </div>
                        <div class="flex p-16">
                            <div class="max-w-sm rounded overflow-hidden shadow-lg p-4">
                              <img class="w-full" src="https://www.tfoco.com/wp-content/uploads/2019/09/Oil-Update-1-300x199.jpg.webp" alt="Sunset in the mountains">
                              <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-white">U.S. Bank Stocks After <br> The Fed Red Cart </div>
                              </div>
                              <div class="px-6 py-2">
                                <div class="text-white">On 22 Januray, 2020</div>
                              </div>
                            </div>
                            <div class="max-w-sm rounded overflow-hidden shadow-lg p-4">
                              <img class="w-full" src="https://www.tfoco.com/wp-content/uploads/2020/02/REITS-300x220.png.webp" alt="Sunset in the mountains">
                              <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-white">U.S. Bank Stocks After <br> The Fed Red Cart </div>
                              </div>
                              <div class="px-6 py-2">
                                <div class="text-white">On 22 Januray, 2020</div>
                              </div>
                            </div>
                            <div class="max-w-sm rounded overflow-hidden shadow-lg p-4">
                              <img class="w-full" src="https://www.tfoco.com/wp-content/uploads/2020/02/Low-Yield-Environments-cut-300x200.jpg.webp" alt="Sunset in the mountains">
                              <div class="px-6 py-4">
                                <div class="font-bold text-xl mb-2 text-white">U.S. Bank Stocks After <br> The Fed Red Cart </div>
                              </div>
                              <div class="px-6 py-2">
                                <div class="text-white">On 22 Januray, 2020</div>
                              </div>
                            </div>
                        </div>
                    </div>
                    <footer>
                        <div class="flex">
                            <div class="flex-1 text-orange-200 px-4 py-2 m-2">
                                    <img class="w-1/2" src="https://www.tfoco.com/wp-content/uploads/2020/05/tfoco_white_logo.png.webp">
                                    <p class="text-orange-200 mt-2">inquiry@tfoco.com</p>
                                    <p class="text-orange-200 mt-2">+973 17578000</p>
                                    <p class="text-orange-200 mt-2">The  Family  Office</p>
                              </div>
                              <div class="flex-1 text-orange-200 px-4 py-2 m-2">
                                    <p class="text-white mt-16">Welcome</p>
                                    <p class="text-white mt-2">Wealth Planning</p>
                                    <p class="text-white mt-2">Who we are</p>
                              </div>
                              <div class="flex-1 text-orange-200 px-4 py-2 m-2">
                                  <p class="text-white mt-2">Board Of Directors</p>
                                  <p class="text-white mt-2">Terms & Conditions</p>
                                  <p class="text-white mt-2">Data Privacy</p>
                                  <p class="text-white mt-2">Corporate Governance</p>
                                  <p class="text-white mt-2">Compliance</p>
                              </div>
                              <div class="flex-1 text-center px-4 py-2 m-2">
                                <img src="https://www.tfoco.com/wp-content/uploads/2019/10/app-store-img-3x-300x235.png.webp">
                            </div>
                        </div>  
                    </footer>
                </div>
            </div> 
        </div>
    </body>
</html>
