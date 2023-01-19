@section('meta')
    <title>{{$details[0]->seo_title}}</title>
    <meta name="description" content="{{$details[0]->seo_meta}}">
    <meta name="keywords" content="{{$details[0]->seo_keywords}}">
@endsection
<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">VAT Calculator</h1>
            </div>
            <nav class="flex justify-center" aria-label="Breadcrumb">
                <ol class="inline-flex items-center space-x-1 md:space-x-3">
                    <li class="inline-flex items-center">
                        <a href="/"
                            class="inline-flex items-center text-sm font-normal  text-[#2B313B] hover:text-gray-900">Home</a>
                    </li>
                    <li>
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> / </span><a
                                href="/calculations"
                                class="ml-1 text-sm font-normal text-[#2B313B] hover:text-gray-900 md:ml-2">Calculations</a>
                        </div>
                    </li>
                    <li aria-current="page">
                        <div class="flex items-center"><span class="text-[#D3D7DE] font-normal text-xs"> / </span><span
                                class="ml-1 text-sm font-normal text-[#0052FE] md:ml-2">VAT</span>
                        </div>
                    </li>
                </ol>
            </nav>

        </div>
        <!-- container end -->
    </section>

    <section class="content-area">
        <div class="container mx-auto max-w-screen-xl flex-none md:flex md:flex-row">
            <!-- container start -->
            <div class="main-area basis-full p-2 md:p-0 md:basis-8/12">
                <!-- left-side-area start -->
                <div class="main-inner p-5 border border-[#F5F8FF] rounded-t-2xl">
                    <form id="vat_form" method="post" data-parsley-validate="" action="{{url('/calculate-vat')}}" enctype="multipart/form-data">
                        @csrf
                        <!-- form start -->
                        <div class="grid gap-4 mb-4 md:mb-6 md:grid-cols-2">
                            <div class="order-1"> <span class="flex justify-between">
                                    <label for="amount"
                                        class="block mb-2  text-xs font-normal text-[#2B313B]">{{$details[0]->amount_label}}</label>

                                    <!--Code Block for white tooltip starts-->

                                    <div class="flex items-center justify-center">
                                        <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                class="cursor-pointer">
                                                <img src="{{ asset('frontend/assets/img/icons/info-icon.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                :class="{ 'flex': tooltip = true, 'hidden': tooltip = false }"
                                                class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                                <div
                                                    class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                    <div class="">
                                                        <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto"
                                                            width="9px" height="16px" viewBox="0 0 9 16"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Page-1" stroke="none" stroke-width="1"
                                                                fill="none" fill-rule="evenodd">
                                                                <g id="Tooltips-"
                                                                    transform="translate(-874.000000, -1029.000000)"
                                                                    fill="#FFFFFF">
                                                                    <g id="Group-3-Copy-16"
                                                                        transform="translate(850.000000, 975.000000)">
                                                                        <g id="Group-2"
                                                                            transform="translate(24.000000, 0.000000)">
                                                                            <polygon id="Triangle"
                                                                                transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                                                points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                                            </polygon>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                       {!!html_entity_decode($details[0]->amount_tooltip)!!}
                                                        <div class="flex justify-between">
                                                            <div class="flex items-center">
                                                                <span class="text-xs font-bold text-indigo-700">Step 1
                                                                    of 4</span>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <button
                                                                    class="focus:outline-none  focus:text-gray-400 text-xs text-gray-600 underline mr-2 cursor-pointer">Skip
                                                                    Tour</button>
                                                                <button onblur="hideTooltip(1)"
                                                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-xs">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <div class="flex">
                                    <span
                                        class="parent-span inline-flex items-center px-3 bg-white text-[#000] font-semibold text-xs border-[#A4BCE6] border focus:ring-none rounded-l-lg">
                                        €
                                    </span>
                                    <input type="text" id="amount" name="amount"
                                        class="label-span rounded-none rounded-r-lg bg-white border-[#A4BCE6] text-[#6C7A93] font-normal text-xs border focus:ring-none focus:outline-none focus:border-[#3b82f6] flex-1 min-w-0 w-full p-3.5"
                                        placeholder="" data-parsley-type='digits' required>
                                </div>
                            </div>
                            <div  class="order-3 md:order-2">
                                <span class="flex justify-between">
                                    <label for="weight" class="block mb-2  text-xs font-normal text-[#2B313B]">{{$details[0]->convert_label}}</label>

                                    <!--Code Block for white tooltip starts-->

                                    <div class="flex items-center justify-center">
                                        <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                class="cursor-pointer">
                                                <img src="{{ asset('/frontend/assets/img/icons/info-icon.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                :class="{ 'flex': tooltip = true, 'hidden': tooltip = false }"
                                                class="relative hidden" x-cloak x-show.transition.origin.top="tooltip">
                                                <div
                                                    class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                    <div class="">
                                                        <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto"
                                                            width="9px" height="16px" viewBox="0 0 9 16"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Page-1" stroke="none" stroke-width="1"
                                                                fill="none" fill-rule="evenodd">
                                                                <g id="Tooltips-"
                                                                    transform="translate(-874.000000, -1029.000000)"
                                                                    fill="#FFFFFF">
                                                                    <g id="Group-3-Copy-16"
                                                                        transform="translate(850.000000, 975.000000)">
                                                                        <g id="Group-2"
                                                                            transform="translate(24.000000, 0.000000)">
                                                                            <polygon id="Triangle"
                                                                                transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                                                points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                                            </polygon>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                       {!!html_entity_decode($details[0]->convert_tooltip)!!}
                                                        <div class="flex justify-between">
                                                            <div class="flex items-center">
                                                                <span class="text-xs font-bold text-indigo-700">Step 1
                                                                    of 4</span>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <button
                                                                    class="focus:outline-none  focus:text-gray-400 text-xs text-gray-600 underline mr-2 cursor-pointer">Skip
                                                                    Tour</button>
                                                                <button onblur="hideTooltip(1)"
                                                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-xs">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <div class="grid gap-2 grid-cols-2 mt-0 md:mt-1 md:grid-cols-1 h-8 items-center">
                                    <div class="flex items-center radio-cu">
                                        <input id="inline-radio" checked type="radio" value="include"
                                            name="vatStatus"
                                            class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500 focus:ring-2 ">
                                        <label for="inline-radio"
                                            class="ml-5 text-[#2B313B] font-normal text-xs">Amount
                                            including VAT</label>
                                    </div>
                                    <div class="flex items-center radio-cu">
                                        <input id="inline-2-radio" type="radio" value="exclude"
                                            name="vatStatus"
                                            class="w-3 h-3 text-blue-600 bg-gray-100 border-gray-300 focus:ring-blue-500  focus:ring-2">
                                        <label for="inline-2-radio"
                                            class="ml-5 text-[#2B313B] font-normal text-xs">Amount excluding
                                            VAT</label>
                                    </div>
                                </div>

                            </div>

                            <div class="t-select order-2 md:order-3">
                                <span class="flex justify-between">
                                    <label for="rate" class="block mb-2 text-xs font-normal text-[#2B313B]">{{$details[0]->rate_label}}</label>
                                    <!--Code Block for white tooltip starts-->

                                    <div class="flex items-center justify-center">
                                        <div x-data="{ tooltip: false }" class="relative z-30 inline-flex">
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                class="cursor-pointer">
                                                <img src="{{ asset('frontend/assets/img/icons/info-icon.svg') }}"
                                                    alt="icon">
                                            </div>
                                            <div x-on:mouseover="tooltip = true" x-on:mouseleave="tooltip = false"
                                                :class="{ 'flex': tooltip = true, 'hidden': tooltip = false }"
                                                class="relative hidden" x-cloak
                                                x-show.transition.origin.top="tooltip">
                                                <div
                                                    class="absolute -top-2 z-10 w-64 absolute transition-all duration-150 ease-in-out left-1/2 -ml-20 md:ml-9 shadow-lg bg-white p-4 rounded transform -translate-x-2/3 -translate-y-full">
                                                    <div class="">
                                                        <svg class="absolute -ml-2 rotate-[270deg] top-auto right-4 md:inset-x-1/2 bottom-[-12px] h-5 w-auto"
                                                            width="9px" height="16px" viewBox="0 0 9 16"
                                                            version="1.1" xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink">
                                                            <g id="Page-1" stroke="none" stroke-width="1"
                                                                fill="none" fill-rule="evenodd">
                                                                <g id="Tooltips-"
                                                                    transform="translate(-874.000000, -1029.000000)"
                                                                    fill="#FFFFFF">
                                                                    <g id="Group-3-Copy-16"
                                                                        transform="translate(850.000000, 975.000000)">
                                                                        <g id="Group-2"
                                                                            transform="translate(24.000000, 0.000000)">
                                                                            <polygon id="Triangle"
                                                                                transform="translate(4.500000, 62.000000) rotate(-90.000000) translate(-4.500000, -62.000000) "
                                                                                points="4.5 57.5 12.5 66.5 -3.5 66.5">
                                                                            </polygon>
                                                                        </g>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </svg>
                                                        {!! html_entity_decode($details[0]->rate_tooltip) !!}
                                                        <div class="flex justify-between">
                                                            <div class="flex items-center">
                                                                <span class="text-xs font-bold text-indigo-700">Step 1
                                                                    of 4</span>
                                                            </div>
                                                            <div class="flex items-center">
                                                                <button
                                                                    class="focus:outline-none  focus:text-gray-400 text-xs text-gray-600 underline mr-2 cursor-pointer">Skip
                                                                    Tour</button>
                                                                <button onblur="hideTooltip(1)"
                                                                    class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-700 focus:bg-indigo-400 focus:outline-none bg-indigo-700 transition duration-150 ease-in-out hover:bg-indigo-600 rounded text-white px-5 py-1 text-xs">Next</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <select  id="rate" name="vat_rate"
                                    class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" required="">
                                    <option  value="">Select Vat Parcentage</option>
                                    <option  value="21">21% NL high rate</option>
                                    <option value="9">9%% NL Reduced rate</option>
                                </select>
                            </div>
                            <div class="block md:flex md:items-end order-4">
                                <button type="submit"
                                    class="outline-btn btn-translate-z flex bg-[#112954] justify-center text-white font-bold rounded-lg text-xs w-full px-5 py-4 text-center">{{$details[0]->button_text}}</button>
                                    <p class="my-4 block md:hidden sm:ml-6 text-[10px] text-[#6C7A93] font-normal">
                                    <i>*The body mass index (BMI) calculator estimates the amount of body fat a person has in relation to age, height, and weight. </i>
                                </p>
                            </div>
                        </div>
                    </form>

                    <!-- form end -->
                    <div class="info-area py-4">
                        <!-- info area start -->
                       {!! html_entity_decode($details[0]->content) !!}

                       <div class="bottom-part flex-none lg:flex lg:justify-between">
                        <div class="w-full lg:w-auto more-links">
                            <h5 class=" font-bold text-xs text-black mb-2">Other visitors also calculated</h5>
                            <div class="tag-area flex-wrap flex md:flex-none">
                               
                                <a href="/bmi-calculator"
                                    class="btn-tag outline-btn btn-translate-z text-[#0052FE] bg-[#0052FE] hover:text-white border border-[#0052FE] focus:outline-none focus:ring-none font-normal rounded-md transition-all text-[10px] px-2.5 py-1 text-center mr-2 mb-2">Bmi Calculator</a>
                               
                            </div>
                        </div>
                        <div class="w-full mt-4 lg:mt-0 lg:w-auto social-links text-left lg:text-right">
                            <h5 class="font-bold text-xs text-black mb-2">Share this Calculation</h5>
                            <ul class="flex flex-row justify-start md:justify-end">
                                <li class="flex ml-0 md:ml-2"> <a href="#" class="  ml-0 md:ml-2"><span
                                            class="flex relative">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                class=" h-5 w-5" src="{{asset('/frontend/assets/img/social/facebook.svg')}}"
                                                alt=""> </span></a></li>
                                <li class="flex  ml-0 md:ml-2"><a href="#" class=" ml-2"><img
                                            class="blob infinity rounded-full h-5 w-5"
                                            src="{{asset('/frontend/assets/img/social/twitter.svg')}}" alt=""> </a></li>
                                <li class="flex  ml-0 md:ml-2"> <a href="#" class=" ml-2"><span
                                            class="flex relative">
                                            <span
                                                class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                class="h-5 w-5" src="{{asset('/frontend/assets/img/social/instagram.svg')}}"
                                                alt=""></span> </a></li>
                                <li class="flex  ml-0 md:ml-2"><a href="#" class=" ml-2"><img
                                            class="blob infinity rounded-full h-5 w-5"
                                            src="{{asset('/frontend/assets/img/social/youtube.svg')}}" alt=""> </a></li>
                            </ul>
                        </div>
                    </div>
                    </div> <!-- info area end -->
                </div> <!-- main-inner-area end -->
            </div>
            <!-- left-side-area end -->
            <!-- right-side-area-start -->
            <div class="side-bar basis-full md:basis-4/12">
                <div class="inner-area ml-1 lg:ml-4 p-2 md:p-0">
                    <livewire:components.vats.featured-calculators />     
                    <livewire:components.vats.related-news />   

                    <livewire:components.vats.faq-section />
                   
                    <livewire:components.vats.vat-ratings />
                </div>
            </div>
            <!-- right-side-area-end -->
        </div><!-- container end -->
    </section>
    
    
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js" ></script>
<script>
    $('#vat_form').parsley();
</script>

