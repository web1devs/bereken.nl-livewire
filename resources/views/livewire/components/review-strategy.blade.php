<div>
    <!-- Accurate & Strategic - start -->
    <section class="bg-white w-full p-4 md:p-12">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h2 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-16  sm:pt-4">Accurate & Strategic</h2>
            </div>
            <div class="grid gap-2 grid-cols-1 sm:gap-4 sm:grid-cols-2">
              
               @foreach ($strategies as $row )
                   
              
              
                <div class="content text-center sm:text-left flex-none sm:flex sm:justify-center sm:items-center">
                    <div class="img-box w-full sm:w-auto">
                        <img src="{{url($row->images)}}" class="mx-auto sm:mx-0" alt="image">
                    </div>
                    <div class="text-content text-center sm:text-left">
                        <h3 class="text-2xl sm:text-xl lg:text-2xl font-semibold mb-2 text-[#2B313B]">{{$row->title}}</h3>
                        <p class="text-sm font-normal text-[#6C7A93] mx-auto sm:mx-0 w-52">{{$row->short_description}}</p>
                    </div>
                </div>

                @endforeach


            </div>
        </div> <!-- container end -->
    </section>
    <!-- Accurate & Strategic - end -->

    @php
        $stars = round($reviews[0]->ratings / 2);
        $rates = '';
        for($i = 1; $i <= 5; $i++){
            
              if($i <= $stars){
                $rates .= '<svg aria-hidden="true" class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fourth star</title>
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>';
              }else{
                $rates .='<svg aria-hidden="true" class="w-5 h-5 text-gray-300 dark:text-gray-500" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <title>Fifth star</title>
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z">
                                        </path>
                                    </svg>';
              }
          
        }
    @endphp

    <!-- review area - start -->
    @if($reviews[0]->active_status == 1)
    <section class="bg-[#112954] w-full p-4 md:p-12">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="review-area flex justify-around items-center">
                <div class="rating text-center w-72">
                    <div class="top-part text-center">
                        <span class="text-7xl font-bold text-white">{{$reviews[0]->ratings}}</span><span
                            class="text-[#A4BCE6] text-[32px] font-bold">/10</span>
                       <div class="flex justify-center items-center">
                        {!! html_entity_decode($rates)!!}
                       </div>
                    </div>
                    <p class="font-normal text-sm text-white">Based on 397,508 customer reviews</p>
                </div>
                <div class="review-text w-6/12">
                    <h4 class="font-bold text-2xl text-white">{{$reviews[0]->review_title}}
                    </h4>
                    <p class="text-white text-sm font-normal my-4">{{$reviews[0]->short_description}}.</p>
                    <a href=""
                        class="shadow-btn
                     mt-4 flex items-center font-semibold text-xs text-white ">Customer
                        Review <img class="ml-4  " src="{{asset('frontend/assets/img/arrow-white.svg')}}" alt="arrow-icon"></a>
                </div>
            </div>
        </div> <!-- container end -->
    </section>
    @endif
    <!-- review area - start -->
</div>
