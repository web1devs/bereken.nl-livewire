<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- Calculations Start -->
            <div class="services-area w-full py-8">

                <div class="flex justify-center">
                    <div class="w-full md:w-[580px]">
                        <h1 class="text-[#2B313B] text-2xl text-center font-semibold mb-3">Select your car</h1>
                        <div class="p-5 rounded-2xl bg-white">
                            <form action="">
                                <div class="grid gap-2 grid-cols-1 md:grid-cols-2 md:gap-4">
                                    <div class="mb-3">
                                        <label for="" class="block mb-2 text-xs font-normal text-[#2B313B]">License plate number</label>
                                        
                                        <div class="flex">
                                            <span 
                                                class="inline-flex items-center px-1 bg-[#294394] text-white font-semibold text-xs border-white border focus:ring-none rounded-l-lg">
                                                <img src="{{asset('/frontend/assets/img/eur.svg')}}" alt="icon" class="h-6 w-6">
                                            </span>
                                            <input type="text"                                             class="rounded-none rounded-r-lg bg-[#EFBC21] border-white text-[#2B313B] font-semibold text-xs border focus:ring-none focus:outline-none  flex-1 min-w-0 w-full p-2.5"
                                                placeholder="">
                                        </div>
                                    </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-xs font-normal text-[#2B313B]">Construction month</label>
                                    
                                    <div class="t-select no-label">
                                            <select id="gender"
                                                class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="January" selected>January</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="February">February</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="March">March</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="April">April</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="May">May</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="June">June</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="July">July</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="August">August</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="September">September</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="October">October</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="November">November</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="December">December</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="mb-3">                                    
                                    <label for="" class="block mb-2 text-xs font-normal text-[#2B313B]">Model</label>
                                    
                                    <div class="t-select no-label">
                                            <select id="gender"
                                                class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="January" selected>AC 3000</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="February">AC 4000</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="March">AC 5000</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-xs font-normal text-[#2B313B]">Fuel</label>
                                    
                                    <div class="t-select no-label">
                                            <select id="gender"
                                                class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="Petrol" selected>Petrol</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="Diesel">Diesel</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="Octan">Octan</option>
                                            </select>
                                        </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-xs font-normal text-[#2B313B]">Transmission</label>
                                    <div class="flex flex-row items-center justify-between">
                                        <div class="flex justify-center">
                                            <input id="inline-radio" checked type="radio" value="" name="inline-radio-group"
                                                class="hidden text-blue-600 bg-gray-100 border-gray-300 focus:ring-none focus:none radio-btn">
                                            <label for="inline-radio"  class="outline-btn btn-translate-z flex justify-center w-28 bg-[#0052fe] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer">Manual</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="inline-2-radio" type="radio" value="" name="inline-radio-group"
                                                class="hidden text-blue-600 bg-gray-100 border-gray-300 focus:ring-none focus:none radio-btn">
                                                <label for="inline-2-radio" class="outline-btn btn-translate-z flex w-fit bg-[#0052fe] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer">Automation</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="block mb-2 text-xs font-normal text-[#2B313B]">Year</label>
                                    
                                    <div class="t-select no-label">
                                            <select id="gender"
                                                class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5">
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="Petrol" selected>1981</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="Diesel">1981</option>
                                                <option class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base" value="Octan">1981</option>
                                            </select>
                                        </div>
                                 </div>
                              </div>
                                <table class="divide-right table-auto text-left w-full mt-6">
                                    <thead>
                                      <tr>
                                        <th class="pb-2 border-b border-[#0052FE] text-[#2B313B] font-normal text-xs">Type</th>
                                        <th class="border-b border-[#0052FE] text-[#2B313B] font-normal text-xs">Doors</th>
                                        <th class="border-b border-[#0052FE] text-[#2B313B] font-normal text-xs">Execution</th>
                                        <th class="border-b border-[#0052FE] text-[#2B313B] font-normal text-xs">Ability</th>
                                        <th class="border-b border-[#0052FE] text-[#2B313B] font-normal text-xs">Weight</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                      <tr>
                                        <td class="py-2">
                                            <div class="flex items-center mr-4 radio-cu">
                                                <input id="inline-radio-a" checked type="radio" value="" name="inline-radio-group-b" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                <label for="inline-radio-a" class="ml-5 text-[#2B313B] font-normal text-xs">3.0 United States</label>
                                            </div>
                                        </td>
                                        <td class="text-[#2B313B] font-normal text-xs">2-doors</td>
                                        <td class="text-[#2B313B] font-normal text-xs">Coupe</td>
                                        <td class="text-[#2B313B] font-normal text-xs">101 KW</td>
                                        <td class="text-[#2B313B] font-normal text-xs">860 kg</td>
                                      </tr>
                                      <tr>
                                        <td class="py-2">
                                            <div class="flex items-center mr-4 radio-cu">
                                                <input id="inline-radio-2" type="radio" value="" name="inline-radio-group-b" class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                                <label for="inline-radio-2" class="ml-5 text-[#2B313B] font-normal text-xs">4.0 Nether</label>
                                            </div>
                                        </td>
                                        <td class="text-[#2B313B] font-normal text-xs">4-doors</td>
                                        <td class="text-[#2B313B] font-normal text-xs">Coupe</td>
                                        <td class="text-[#2B313B] font-normal text-xs">105 KW</td>
                                        <td class="text-[#2B313B] font-normal text-xs">990 kg</td>
                                      </tr>
                                    </tbody>
                                  </table>
                            </form>
                        </div>
                        <div class="button-area flex justify-between md:justify-end mt-14">
                            <a href="#" class="gray-btn outline-btn btn-translate-z flex bg-[#0052fe] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer  text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 my-6 w-fit mr-3"><span class="flex items-center"><img src="{{asset('/frontend/assets/img/arrow-white.svg')}}" class="mr-2 h-2 w-2 rotate-180 float-left" alt="icon"> Go Back </span></a>

                            <a href="#" class="next-btn outline-btn btn-translate-z flex bg-[#112954] text-white text-xs font-bold py-2.5 px-6 rounded transition-all cursor-pointer text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 my-6 w-28"><span class="flex items-center"> Next <img src="{{asset('/frontend/assets/img/arrow-white.svg')}}" class="ml-2 h-2 w-2 float-right" alt="icon"></span></a>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Calculations End -->

        </div>
        <!-- container end -->
    </section>
</div>
