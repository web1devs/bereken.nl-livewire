<div>

   
       <!-- Latest News - start -->
       <section class="bg-white w-full p-4 md:p-12">
       
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h2 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-16  sm:pt-4">Latest News</h2>
            </div>
            @foreach ($news as $key => $item )
            @php
                $time;
                $wpm = 200;
                $wordCount = str_word_count(strip_tags($item->content));
                $minutes = (int) floor($wordCount / $wpm);
                $seconds = (int) floor($wordCount % $wpm / ($wpm / 60));

                if($minutes === 0){
                    $time = $seconds.' sec';
                }else{
                    $time = $minutes.'min';
                };

                $category = $item->category_id;

              

              $commaSeperated_category = explode(",",$item->category_name)
             
            
              
            @endphp

            <ul>
               
            
                 
             
                <li>
                    <a href="/news-details/{{$item->slug}}-{{$item->id}}"
                        class="flex my-2 p-4 md:p-6 flex-col transition-all items-center hover:bg-[#EBF1FF] border border-[#F5F8FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-row w-full bg-white">
                        <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg"
                            src="{{$item->thumbnill_image}}" alt="image">

                        <div class="flex flex-col justify-between p-4 leading-normal">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#2B313B]">{{$item->title}}</h5>
                            <p class="mb-3 font-normal text-base text-[#6C7A93] underline">{{$item->short_description}}</p>
                            <span class="publish-date-time  text-[#2B313B] font-normal text-xs">{{ date('F d, Y', strtotime($item->created_at)) }} • Read: {{$time}}</span>

                            <div class="row mt-2">
                              @foreach ($commaSeperated_category as $category )

                            <span
                                class="w-fit bg-[#EBF1FF] text-[#0051FF] text-xs font-semibold mt-2 px-2.5 py-2 rounded ">{{$category}}
                               </span>&nbsp;

                               @endforeach
                            </div>
                        </div>
                    </a>
                </li>

                </ul>
            @if ($key === 2)
            
            <div class="promo-add flex flex-col justify-start lg:flex-row lg:justify-between lg:items-center bg-[#0052FE] p-10 my-4 rounded-xl">
                <div class="text-left">
                    <h5 class="text-2xl text-bold text-white">Don't you want to miss anything anymore?</h5>
                    <p class="font-normal text-base text-white mt-2">And don't worry, we will send you a handy email no
                        more than once a week.</p>
                </div>
                <a href="#"
                    class="outline-btn btn-translate-z w-[170px] mt-4 lg:mt-0 hover:text-[#0052FE] transition-all text-white border bg-white focus:ring-4 focus:outline-none focus:ring-0 font-bold rounded-lg  text-bold px-5 py-2.5 text-center mr-2 mb-2">Subscribe Now</a>
            </div>

            @endif

            @endforeach
    

            <div class="btn-area flex justify-center">
                <a href="/news"
                    class="btn-translate-z bg-[#0052fe] text-white flex text-xs font-semibold text-center justify-center items-center rounded py-4 px-2 my-6 w-28"><span class="flex items-center"> View
                    More <img src="{{asset('frontend/assets/img/icons/arrow-white.svg')}}" class="ml-2 h-2 w-2 float-right" class="ml-2"
                        alt="icon"></span></a>
            </div>
        </div> <!-- container end -->
    </section>
    <!-- Latest News - End -->
</div>
