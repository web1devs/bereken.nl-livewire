<div>
    <section class="hero bg-white pt-20 p-4 md:pt-12 md:p-12 w-full items-center mx-auto">
        <div class="container mx-auto max-w-screen-xl">
            <!-- container start -->
            <div class="section-title text-center ">
                <h1 class="text-[32px] font-semibold text-[#2B313B] p-4 sm:pb-6  sm:pt-4">
                    {{ $categoryName[0]->category_name }}</h1>
            </div>
        </div>
        <!-- container end -->
    </section>

    <section class="more-article-section">
        <div class="container mx-auto max-w-screen-xl">
            <h3 class="mb-3 text-2xl font-semibold">More Knowledges</h3>
            <ul class="grid grid-cols-1 sm:grid-cols-3 lg:grid-cols-4 gap-4">

                @foreach ($filterKnowledge as $row)
                    @php
                        $time;
                        $wpm = 200;
                        $wordCount = str_word_count(strip_tags($row->content));
                        $minutes = (int) floor($wordCount / $wpm);
                        $seconds = (int) floor(($wordCount % $wpm) / ($wpm / 60));
                        
                        if ($minutes === 0) {
                            $time = $seconds . ' sec';
                        } else {
                            $time = $minutes . 'min';
                        }
                    @endphp
                    <li>
                        <a href="/knowledge-details/{{$row->slug}}-{{$row->id}}"
                            class="flex  mb-3 p-2 flex-col transition-all hover:bg-[#EBF1FF] border border-[#EBF1FF] hover:border-[#EBF1FF] rounded-lg hover:shadow md:flex-col  bg-white">
                            <img class="object-cover w-full rounded-t-lg h-auto md:rounded-none md:rounded-l-lg"
                                src="{{ url($row->thumbnill_image) }}" alt="image">

                            <div class="flex flex-col justify-between px-2 leading-normal">
                                <h5 class="mb-2 text-base font-semibold tracking-tight text-[#2B313B]">
                                    {{ $row->title }}</h5>
                                <p class="mb-3 font-normal text-xs text-[#6C7A93] underline">
                                    {{ Str::limit($row->short_description, 100) }}</p>
                                <span class="publish-date-time  text-[#2B313B] font-normal text-xs">{{ date('F d, Y', strtotime($row->created_at)) }} • Read: {{$time}}</span>


                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>

            {{-- <nav aria-label="Page navigation example" class="my-6 text-center">
                <ul class="inline-flex items-center -space-x-px">
                  <li>
                    <a href="#" class="block px-3 py-2 ml-0 leading-tight text-gray-500 bg-white hover:text-gray-700">
                      <span class="sr-only">Previous</span>
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                  </li>
                  <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700">1</a>
                  </li>
                  <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700">2</a>
                  </li>
                  <li>
                    <a href="#" aria-current="page" class="z-10 px-3 py-2 bg-[#0052FE] leading-tight transition-all text-white rounded-lg hover:bg-[#0052FE] hover:text-white">3</a>
                  </li>
                  <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700">4</a>
                  </li>
                  <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700">5</a>
                  </li>
                  </li>
                  <li>
                    <a href="#" class=""px-3 py-2 leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700">6</a>
                  </li>
                  <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white px-3 py-2 leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700">7</a>
                  </li>
                  </li>
                  <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700">...</a>
                  </li>
                  <li>
                    <a href="#" class="px-3 py-2 leading-tight text-gray-500 bg-white hover:bg-gray-100 hover:text-gray-700">100</a>
                  </li>
                  <li>
                    <a href="#" class="block px-3 py-2 leading-tight text-gray-500 bg-white 700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                      <span class="sr-only">Next</span>
                      <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    </a>
                  </li>
                </ul>
              </nav> --}}
        </div>
    </section>

</div>
