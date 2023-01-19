@section('meta')
    <title>{{ $details[0]->seo_title }}</title>
    <meta name="description" content="{{ $details[0]->seo_meta }}">
    <meta name="keywords" content="{{ $details[0]->seo_keywords }}">
@endsection
<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">BMI Calculator</h1>
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
                                class="ml-1 text-sm font-normal text-[#0052FE] md:ml-2">BMI</span>
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
                    <form action="{{ url('/calculate-bmi') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <!-- form start -->
                        <div class="grid gap-6 mb-6 md:grid-cols-2">
                            <div class="t-select">
                                <span class="flex  justify-between">
                                    <label for="gender"
                                        class="block mb-2 text-xs font-normal text-[#000000]">{{ $details[0]->gender_label }}</label>


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
                                                        {!! $details[0]->gender_caption !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <select id="gender" name="gender"
                                    class="bg-white border border-[#F5F8FF] text-[#2B313B] font-semibold text-xs rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-3.5">
                                    <option
                                        class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base"
                                        value="Male" selected>Male</option>
                                    <option
                                        class="p-3 bg-white border-b border border-[#cccccc] text-xs rounded-lg font-base"
                                        value="Female">Female</option>
                                </select>

                                @error('gender')
                                    <span>{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <span class="flex justify-between">
                                    <label for="age"
                                        class="block mb-2  text-xs font-normal text-[#000000]">{{ $details[0]->age_label }}</label>

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
                                                        {!! $details[0]->age_caption !!}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </span>
                                <div class="flex">
                                    <input type="text" name="age" id="age"
                                        class="rounded-none rounded-l-lg bg-white border border-r-0 border-[#A4BCE6] text-[#6C7A93] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3.5"
                                        placeholder="">
                                    <span
                                        class="inline-flex items-center px-3 bg-white text-[#000] font-semibold text-xs focus:ring-[3b82f6] border-[#A4BCE6] border rounded-r-md">
                                        Year
                                    </span>
                                </div>
                                @error('age')
                                    <span style="color:red">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div>
                                <label for="weight"
                                    class="block mb-2  text-xs font-normal text-[#000000]">{{ $details[0]->weight_label }}</label>
                                <div class="flex">
                                    <input type="text" name="weight" id="weight"
                                        class="rounded-none rounded-l-lg bg-white border border-r-0 border-[#A4BCE6] text-[#6C7A93] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3.5"
                                        placeholder="">
                                    <span
                                        class="inline-flex items-center px-3 bg-white text-[#000] font-semibold text-xs focus:ring-[3b82f6] border-[#A4BCE6] border rounded-r-md">
                                        Kg
                                    </span>
                                </div>
                                @error('weight')
                                    <span style="color:red">*{{ $message }}</span>
                                @enderror
                            </div>
                            <div> <span class="flex justify-between">
                                    <label for="height"
                                        class="block mb-2  text-xs font-normal text-[#000000]">{{ $details[0]->height_label }}</label>

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
                                                        {!! html_entity_decode($details[0]->height_caption) !!}

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--Code Block for white tooltip ends-->
                                </span>
                                <div class="flex">
                                    <input type="text" name="height" id="height"
                                        class="rounded-none rounded-l-lg bg-white border border-r-0 border-[#A4BCE6] text-[#6C7A93] font-normal text-xs focus:ring-[#3b82f6] focus:outline-none focus:border-[#3b82f6] block flex-1 min-w-0 w-full p-3.5"
                                        placeholder="">
                                    <span
                                        class="inline-flex items-center px-3 bg-white text-[#000] font-semibold text-xs focus:ring-[3b82f6] border-[#A4BCE6] border rounded-r-md">
                                        Cm
                                    </span>
                                </div>
                                @error('height')
                                    <span style="color:red">*{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="sm:flex my-8">
                            <div class="sm:flex sm:items-center">
                                <button type="submit"
                                    class="outline-btn btn-translate-z flex bg-[#112954] justify-center text-white font-bold rounded-lg text-xs w-full sm:w-72 px-5 py-4"><span>{{ $details[0]->button_text }}</span></button>
                                <p class="my-4 sm:ml-6 text-[10px] text-[#6C7A93] font-nomrmal">
                                    <i>*{!! html_entity_decode($details[0]->button_details) !!} </i>
                                </p>
                            </div>
                        </div>
                    </form> <!-- form end -->
                    <div class="info-area py-4">
                        <!-- info area start -->

                        <!-- hidden-start -->

                        <livewire:components.b-m-i.bmi-details :details="$details[0]->content" />


                        <!-- hidden-element end -->

                        <div class="bottom-part flex-none lg:flex lg:justify-between">
                            <div class="w-full lg:w-auto more-links">
                                <h5 class=" font-bold text-xs text-black mb-2">Other visitors also calculated</h5>
                                <div class="flex-wrap flex md:flex-none">
                                    <a href="/vat-calculator"
                                        class="text-[#0052FE] bg-white border border-[#0052FE] font-normal rounded-md transition-all text-[10px] px-2.5 py-1 text-center mr-2 mb-2">Vat calculator</a>
                                   
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

                    <livewire:components.b-m-i.featured-calculators />
                    <livewire:components.b-m-i.related-articles />
                    <livewire:components.b-m-i.bmi-faq />
                    <livewire:components.b-m-i.bmi-ratings />
                   
                </div>
            </div>
            <!-- right-side-area-end -->
        </div><!-- container end -->
    </section>
    <script src="https://unpkg.com/flowbite@1.6.1/dist/flowbite.min.js"></script>
    <!-- page-layout-end -->
    <script>
        // accordion start
        document.addEventListener('alpine:init', () => {
            Alpine.store('accordion', {
                tab: 0
            });

            Alpine.data('accordion', (idx) => ({
                init() {
                    this.idx = idx;
                },
                idx: -1,
                handleClick() {
                    this.$store.accordion.tab = this.$store.accordion.tab === this.idx ? 0 : this.idx;
                },
                handleRotate() {
                    return this.$store.accordion.tab === this.idx ? 'rotate-0' : '';
                },
                handleToggle() {
                    return this.$store.accordion.tab === this.idx ?
                        `max-height: ${this.$refs.tab.scrollHeight}px` : '';
                }
            }));
        })
    </script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>

   


</div>
