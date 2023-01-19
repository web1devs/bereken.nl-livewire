    <!-- header start -->
    <header>

        <div class="w-full z-40 top-0 absolute md:relative text-gray-700 bg-white">
            <div x-data="{ open: false }"
                class="flex flex-col max-w-screen-xl px-2 mx-auto md:items-center md:justify-between md:flex-row md:px-0 ">
                <div class="py-4 flex flex-row items-center justify-between">
                    <a href="/" class="flex items-center">
                        <img src="{{ asset('/frontend/assets/img/full-logo.svg') }}" class="mr-3 h-6 sm:h-9"
                            alt="Flowbite Logo" />
                    </a>
                    <button class="md:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                        <div id="nav-icon">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </button>
                    </button>
                </div>
                <nav :class="{ 'flex': open, 'hidden': !open }"
                    class="flex-col flex-grow pb-4 md:pb-0 hidden md:flex md:justify-end md:flex-row">
                    <a class="active-link py-2 mx-2 text-sm font-semibold text-[#2B313B] hover:text-[#0052fe] bg-white md:mt-0 hover:text-blue-500 "
                        href="/">Home</a>

                   
                    <div x-on:mouseover="open = true" x-on:mouseleave="open = false" class=""
                        x-data="{ open: false }">
                        <button x-on:mouseover="open = true" x-on:mouseleave="open = false"
                            class="flex flex-row items-center justify-between w-full py-2 my-2 mx-2 text-sm font-semibold text-left text-[#2B313B] bg-transparent md:w-auto md:inline md:mt-0 md:ml-4 hover:text-[#0052fe] ">
                            <span><a href="/calculations">Calculations</a></span>
                            <svg fill="currentColor" viewBox="0 0 20 20"
                                :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                class="inline w-4 h-4 mt-1 mr-2 transition-transform duration-200 transform md:-mt-1">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 w-full origin-top-right rounded-md shadow-lg border-t border-[#F5F8FF]">

                            <div :class="{ 'grid': open, 'hidden': !open }"
                                class="hidden grid inset-x-0 top-0 absolute z-40 grid-cols-1 w-full text-sm bg-white shadow-md">
                                <button class="absolute right-2 top-2 md:hidden" @click="open = false"><img
                                        src="{{ asset('frontend/assets/img/close.svg') }}" alt="icon"></button>
                                <div
                                    class="grid py-5 px-4 md:mx-auto max-w-screen-xl gap-4 grid-cols-2 sm:grid-cols-3 md:grid-cols-6 md:px-4">

                                    @php
                                        $title1 = DB::table('dropdown_categories')
                                            ->where('id', '=', 1)
                                            ->get();
                                        $links1 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 1)
                                            ->get();
                                    @endphp
                                    @if ($title1[0]->status == 1)
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    {{ $title1[0]->name }}
                                                </div>

                                            </li>
                                            @foreach ($links1 as $item)
                                                <li class="mb-2">
                                                    <a href="{{ $item->url }}"
                                                        class="block text-xs font-normal text-[#6B6C6F]">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    @endif

                                    @php
                                        $title2 = DB::table('dropdown_categories')
                                            ->where('id', '=', 2)
                                            ->get();
                                        $links2 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 2)
                                            ->get();
                                    @endphp
                                    @if ($title2[0]->status == 1)
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    {{ $title2[0]->name }}
                                                </div>

                                            </li>
                                            @foreach ($links2 as $item)
                                                <li class="mb-2">
                                                    <a href="{{ $item->url }}"
                                                        class="block text-xs font-normal text-[#6B6C6F]">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    @endif


                                    @php
                                        $title3 = DB::table('dropdown_categories')
                                            ->where('id', '=', 3)
                                            ->get();
                                        $links3 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 3)
                                            ->get();
                                    @endphp
                                    @if ($title3[0]->status == 1)
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    {{ $title3[0]->name }}
                                                </div>

                                            </li>
                                            @foreach ($links3 as $item)
                                                <li class="mb-2">
                                                    <a href="{{ $item->url }}"
                                                        class="block text-xs font-normal text-[#6B6C6F]">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    @endif

                                    @php
                                        $title4 = DB::table('dropdown_categories')
                                            ->where('id', '=', 4)
                                            ->get();
                                        $links4 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 4)
                                            ->get();
                                    @endphp
                                    @if ($title4[0]->status == 1)
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    {{ $title4[0]->name }}
                                                </div>

                                            </li>
                                            @foreach ($links4 as $item)
                                                <li class="mb-2">
                                                    <a href="{{ $item->url }}"
                                                        class="block text-xs font-normal text-[#6B6C6F]">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    @endif

                                    @php
                                        $title5 = DB::table('dropdown_categories')
                                            ->where('id', '=', 5)
                                            ->get();
                                        $links5 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 5)
                                            ->get();
                                    @endphp
                                    @if ($title5[0]->status == 1)
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    {{ $title5[0]->name }}
                                                </div>

                                            </li>
                                            @foreach ($links5 as $item)
                                                <li class="mb-2">
                                                    <a href="{{ $item->url }}"
                                                        class="block text-xs font-normal text-[#6B6C6F]">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    @endif

                                    @php
                                        $title6 = DB::table('dropdown_categories')
                                            ->where('id', '=', 6)
                                            ->get();
                                        $links6 = DB::table('dropdown_menus')
                                            ->where('cat_id', '=', 6)
                                            ->get();
                                    @endphp
                                    @if ($title6[0]->status == 1)
                                        <ul aria-labelledby="mega-menu-full-dropdown-button leading-7">



                                            <li class="mb-2">
                                                <div class="font-semibold text-black text-base mb-4">
                                                    {{ $title6[0]->name }}
                                                </div>

                                            </li>
                                            @foreach ($links6 as $item)
                                                <li class="mb-2">
                                                    <a href="{{ $item->url }}"
                                                        class="block text-xs font-normal text-[#6B6C6F]">{{ $item->name }}</a>
                                                </li>
                                            @endforeach

                                        </ul>
                                    @endif


                                </div>
                            </div>

                        </div>
                    </div>

                    <a class="py-2 my-2 mx-2 text-sm font-semibold text-[#2B313B] bg-white rounded-lg md:mt-0 hover:text-[#0052fe] "
                    href="/knowledge">Knowledge</a>
                <a class="py-2 my-2 mx-2 text-sm font-semibold text-[#2B313B] bg-white rounded-lg md:mt-0 hover:text-[#0052fe] "
                    href="/compares">Compares</a>

                    <a class="py-2 my-2 ml-4 text-sm font-semibold text-[#2B313B] bg-white rounded-lg md:mt-0 hover:text-[#0052fe] "
                        href="/news">News</a>
                </nav>
            </div>
        </div>

    </header>
    <!-- header end -->
