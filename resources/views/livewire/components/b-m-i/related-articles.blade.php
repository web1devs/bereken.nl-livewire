<div>
    <div class="articles mb-3 border-l border-t rounded-t-2xl border-r border-[#F5F8FF]">
        <h3
        
            class="mx-3 py-5 border-t border-b border-[#F5F8FF] mx-auto md:text-base lg:text-2xl text-2xl font-semibold">
            Related Articles</h3>

           @foreach ($articles as $item )
               
           

        <a href="/news-details/{{$item->slug}}-{{$item->id}}"
            class="flex px-3 items-center transition-all opacity-100 border-b border-[#F5F8FF] hover:opacity-90 bg-white py-2.5 my-2">
           
            <img class="w-auto h-16 sm:w-auto sm:h-10 lg:w-auto lg:h-16 rounded w-full mb-0 sm:w-auto"
                src="{{url($item->banner_image)}}" alt="icon" />
            <div
                class="ml-3 text-base text-sm sm:text-xs lg:text-sm w-10/12 inline-block font-semibold">
                Clear, transparent and affordable for more than 20y
            </div>
        </a>
        @endforeach
        
        
        <div class="px-3 items-center bg-white transition-all  py-4 my-2 text-center">
            <a href="#"
                class="shadow-btn arrow-white inline-flex text-[10px] font-semibold text-center text-[#0052FE]  hover:text-white ">
                Read Details <img src="{{asset('frontend/assets/img/icons/arrow-right-blue.svg')}}" class="ml-2"
                    alt="arrow-icon">
            </a>
        </div>
    </div>
</div>
