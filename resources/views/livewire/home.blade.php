@section('meta')
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bereken.nl</title>
@endsection

<div>

    <section class="hero bg-[#F9FBFF] pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <div class="sm:w-[610px] w-full mx-auto px-4">
                <div class="flex items-center">
                    <div class="hidden sm:flex sm:flex-none w-14">
                        <img src="{{ asset('frontend/assets/img/Calculator.svg') }}" alt="icon">
                    </div>
                    <div class="grow text-center">
                        <h1
                            class="text-[#2B313B] font-semibold text-[24px] sm:text-[28px] md:text-[32px] leading-[1.1]">
                            Search in more then 350 Calculations and Compares</h1>
                    </div>
                    <div class="sm:flex sm:flex-none w-14 hidden">
                        <img src="{{ asset('frontend/assets/img/hero-arrow.svg') }}" alt="icon">
                    </div>
                </div>
            </div>
            <!-- search  -->
            <div class="search-area w-full my-6">
                <div class="sm:w-3/4 w-full z-20 relative mx-auto bg-white rounded-2xl shadow">
                    <div class="p-3">
                        <div class="flex justify-between items-center search-top">
                            <h2 class="text-base font-semibold text-[#2B313B]">Search Calculator</h2>

                            <div class="save-search p-2 relative">
                                <a onclick="showSearch()"
                                    class="flex justify-between transition-all opacity-100 hover:opacity-90"><img
                                        src="{{ asset('/frontend/assets/img/save-icon.svg') }}" alt="icon">
                                    <span class="text-[#26BA65] text-sm font-semibold ml-1 cursor-pointer"> Save Search</span> </a>
                                <div
                                    class="show-search hidden saved-search bg-white h-auto p-4 rounded-xl shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)]">
                                    <h3 class="color-[#2B313B] font-semibold text-base mb-2">Saved searches</h3>
                                    <ul id="show-save-list">

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="flex">
                            <div class="relative w-full">
                                <input type="search" id="search"
                                    class="block p-2.5 w-full z-20 text-sm text-[#2B313B] bg-white transition-all rounded-md shadow-none outline-none ring-0 border-4 border-[#EFF4FF] focus:ring-[#EFF4FF] focus:outline-none focus:shadow-[#EFF4FF] focus:border-[#EFF4FF] focus:shadow-md"
                                    placeholder="find your calculation" autocomplete="off" onkeyup="SearchCalculator()" required>




                                <button type="submit"
                                    class="absolute p-3 top-0 z-20 right-0 border-[#EFF4FF] border-2 text-sm font-bold text-[#0052FE] bg-[#EFF4FF] rounded-r-md hover:bg-[#EFF4FF] focus:outline-none hover:text-[#0052FE] focus:ring-[#EFF4FF]">
                                    <svg aria-hidden="true" class="w-5 h-5" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="3"
                                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                    </svg>
                                    <span class="sr-only">Search</span>
                                </button>
                            </div>
                        </div>

                        <p class="text-gray-600 text-[10px] font-normal my-2">Ex: Calculate BMI, Calculate inches to cm,
                            Calculate BPM, Calculate VAT, Calculate road tax, Calculate financial</p>
                    </div>
                    <ul id="search_by"
                        class="cursor-pointer hidden absolute z-10 px-3 bottom-[-5px] c bg-white left-4 pb-3 h-auto w-[95%] text-sm rounded-xl shadow-md shadow-[0px 2px 20px rgba(69, 130, 220, 0.1)] text-[#2B313B]"
                        aria-labelledby="dropdownSearchButton">

                    </ul>
                </div>
            </div>
            <!-- search-end -->

            <livewire:components.service />

        </div>
        <!-- container end -->



    </section>

    <livewire:components.populer-calculator />
    <livewire:components.review-strategy />
    <livewire:components.lattest-news />
    <livewire:components.contact-us />
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script>
        function SearchCalculator() {
            let data = {
                keywords: document.getElementById('search').value
            }
            axios.post('/api/search-calculator', data)
                .then((response) => {
                    document.getElementById('search_by').classList.remove('hidden');
                    if (response.data.length == 0) {
                        document.getElementById('search_by').classList.add('hidden');
                    }
                    document.getElementById('search_by').innerHTML = response.data;

                })
                .catch((error) => {
                    console.log(error);
                })
        }

        function save_search(item) {
            let saved_search = JSON.parse(localStorage["saved_search"] || "[]");
            if (saved_search.includes(item.getAttribute('data-name'))) {
                location.href = item.getAttribute('data-href')
            } else {
                saved_search.push(item.getAttribute('data-name'));
                localStorage["saved_search"] = JSON.stringify(saved_search);
                location.href = item.getAttribute('data-href')
                console.log(localStorage["saved_search"]);
            }

        }

        let show  = false;
        function showSearch() {
            show = !show;
            let showElement = document.getElementsByClassName('show-search');
          if(show === true){
            
            showElement[0].classList.remove('hidden');

            let saved_search = JSON.parse(localStorage["saved_search"]);
                let li='' ;
            saved_search.map((item, i) => {
    
                   li +='<li class="color-[#2B313B] font-normal text-base"><span>' + item +
                    ' <button onclick="removeItem(' + i +
                    ')"> <img src="{{ asset('/frontend/assets/img/close-white.svg') }}" alt="icon"></button></span></li>'
            })
            document.getElementById('show-save-list').innerHTML = li

          }else{
            showElement[0].classList.add('hidden');
          }
        }

        function removeItem(index) {
                let showElement = document.getElementsByClassName('show-search');

                let saved_item = JSON.parse(localStorage["saved_search"]);
                saved_item.splice(i,1);
                localStorage.setItem('saved_search',JSON.stringify(saved_item));
               if(JSON.parse(localStorage["saved_search"]).length === 0){
                showElement[0].classList.add('hidden');
               };

            var lis = document.querySelectorAll('#show-save-list li');
            for (var i = 0; li = lis[i]; i++) {
               // li.parentNode.removeChild(li);
               if( i === index){
                li.parentNode.removeChild(li)
                console.log(true);
               }

               
            }

        }
    </script>

</div>
