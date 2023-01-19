@section('meta')
    <title>Vat calculator - Bereken.nl</title>
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
                    <h3 class="my-5 text-2xl font-semibold">Result</h3>
                    <div class="flex-col sm:flex-row flex items-start sm:items-center justify-between">

                        <span class="bg-[#FFF4E6] text-[#FF7800]  text-base font-normal mr-2 px-3 py-3 rounded-lg">THE RESULT IS: <strong>US€{{ $amount + $vat }}</strong> </span>

                        <a href="/vat-calculator"
                            class="recalculate-btn text-white mt-6 sm:mt-0  bg-[#6C7A93] transition-all opacity-100 hover:opacity-90 font-bold rounded-lg text-xs px-5 py-2.5 text-center mr-2 inline-flex items-center">
                            <svg role="status" class="inline mr-3 text-white  hover:animate-anti-spin" width="21"
                                height="20" viewBox="0 0 21 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M4.5 2C5.05228 2 5.5 2.44772 5.5 3V5.10125C6.77009 3.80489 8.54052 3 10.5 3C13.5494 3 16.141 4.94932 17.1014 7.66675C17.2855 8.18747 17.0126 8.75879 16.4918 8.94284C15.9711 9.12689 15.3998 8.85396 15.2157 8.33325C14.5289 6.38991 12.6755 5 10.5 5C8.86507 5 7.41204 5.78502 6.49935 7H9.5C10.0523 7 10.5 7.44772 10.5 8C10.5 8.55228 10.0523 9 9.5 9H4.5C3.94772 9 3.5 8.55228 3.5 8V3C3.5 2.44772 3.94772 2 4.5 2ZM4.50817 11.0572C5.02888 10.8731 5.6002 11.146 5.78425 11.6668C6.47112 13.6101 8.32453 15 10.5 15C12.1349 15 13.588 14.215 14.5006 13L11.5 13C10.9477 13 10.5 12.5523 10.5 12C10.5 11.4477 10.9477 11 11.5 11H16.5C16.7652 11 17.0196 11.1054 17.2071 11.2929C17.3946 11.4804 17.5 11.7348 17.5 12V17C17.5 17.5523 17.0523 18 16.5 18C15.9477 18 15.5 17.5523 15.5 17V14.8987C14.2299 16.1951 12.4595 17 10.5 17C7.45059 17 4.85905 15.0507 3.89857 12.3332C3.71452 11.8125 3.98745 11.2412 4.50817 11.0572Z"
                                    fill="white" />
                            </svg>
                            Recalculate
                        </a>
                    </div>

                    @if ($method == 'exclude')
                        <div class="my-6 border border-[#F5F8FF] rounded-2xl text-[#2B313B] font-normal text-xs ">
                            <table class="table-auto w-full">
                                <tr class="border-b border-[#F5F8FF]">
                                    <td colspan="3" class="py-6 px-4 my-4">
                                        <p class="text-base font-normal text-[#26BA65]">Specification: Amount Excluding
                                            VAT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4">Amount</td>
                                    <td class="text-right">€{{ $amount }}</td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4">VAT</td>
                                    <td class="border-b-2 border-[#A4BCE6] text-right">
                                        <span>€{{ $vat }}</span>
                                    </td>
                                    <td class="text-right pr-6">{{ $rate }}% VAT</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4"><strong>Amount including VAT</strong></td>
                                    <td class="text-right"><strong>€{{ $amount + $vat }}</strong></td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    @elseif ($method == 'include')
                        <div class="my-6 border border-[#F5F8FF] rounded-2xl text-[#2B313B] font-normal text-xs ">
                            <table class="table-auto w-full">
                                <tr class="border-b border-[#F5F8FF]">
                                    <td colspan="3" class="py-6 px-4 my-4">
                                        <p class="text-base font-normal text-[#26BA65]">Specification: Amount Including
                                            VAT</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4">Amount</td>
                                    <td class="text-right">€{{ $amount }}</td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4">VAT</td>
                                    <td class="border-b-2 border-[#A4BCE6] text-right">
                                        <span>€{{ $vat }}</span>
                                    </td>
                                    <td class="text-right pr-6">{{ $rate }}% VAT</td>
                                    <td> </td>
                                </tr>
                                <tr>
                                    <td class="p-4 m-4"><strong>Amount excluding VAT</strong></td>
                                    <td class="text-right"><strong>€{{ $amount - $vat }}</strong></td>
                                    <td></td>
                                    <td> </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        @else
                        <script>window.location = "/vat-calculator";</script>
                    @endif



                    <div class="info-area py-4">

                        <!-- info area start -->
                        <div class="single-info">
                            <h2 class="text-[#2B313B] text-base font-semibold mb-3">WHAT IS VAT?</h2>
                            <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">Do you want to calculate the
                                VAT to check what a purchase costs you as a consumer, or do you want to determine as an
                                entrepreneur what prices you should use to be able to make a good margin? Calculate the
                                VAT preferably in both directions, to build in your own control. You can do this in the
                                following steps.</p>

                            <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6"> 1. Determine in advance
                                whether you have to make the VAT amount inclusive or exclusive.
                                2. With exclusive you take the VAT off, with including you add the VAT.
                                3. If you want to calculate the amount incl. VAT, multiply the "net" amount by 1.21 in
                                the case of 21% VAT. You can calculate the day excluding VAT by dividing the amount by
                                1.21.</p>


                        </div>

                        <div class="single-info">
                            <h2 class="text-[#2B313B] text-base font-semibold mb-3">HIGH AND LOW RATE</h2>
                            <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">You can calculate the VAT on
                                the basis of the high and low rate. The high VAT rate has been 21% since October 2012,
                                the low rate is 9%. The low VAT rate applies to basic necessities of life, such as
                                certain food. Almost everything else is eligible for the high VAT rate, so you can best
                                count with it.

                            </p>


                        </div>
                        <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline"> - Calculate
                            9% VAT</a>
                        <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline"> - Calculate
                            21% VAT. </a>
                    </div>

                    <div class="info-area py-4">

                        <table class="my-6 table-fixed border-collapse border border-[#F5F8FF] rounded-lg">
                            <thead>
                                <tr>
                                    <th class="p-4 border border-[#F5F8FF] rounded-t-lg">Rate</th>
                                    <th class="p-4 border border-[#F5F8FF]">When much % VAT</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-4 border border-[#F5F8FF]">0%</td>
                                    <td class="p-4 border border-[#F5F8FF]">Export of goods, fishing, excise goods</td>
                                </tr>
                                <tr>
                                    <td class="p-4 border border-[#F5F8FF]">9%</td>
                                    <td class="p-4 border border-[#F5F8FF]">Foodstuffs, water, agricultural goods,
                                        medicines and aids, art, collector's items and antiques, books and periodicals
                                    </td>

                                </tr>
                                <tr>
                                    <td class="p-4 border border-[#F5F8FF] rounded-b-lg">21%</td>
                                    <td class="p-4 border border-[#F5F8FF] ">The 21% VAT rate applies to all goods and
                                        services that are not exempt from VAT and that do not fall under the 0% or 9%
                                        VAT rate</td>

                                </tr>
                            </tbody>
                        </table>

                        <!-- info area start -->
                        <div class="single-info">
                            <h2 class="text-[#2B313B] text-base font-semibold mb-3">You are too heavy for your height
                            </h2>
                            <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">With a lower, healthy weight,
                                you have a smaller chance of certain diseases. In any case, make sure that you do not
                                gain any further weight and try to lose some weight. Do you also have too much belly
                                fat?. Then it is extra important to lose weight because with a large belly size your
                                risk of certain diseases is increased. Adjusting your eating habits is now an important
                                step. Contact the dietitian or general practitioner. They will help you with this. With
                                a lower, healthy weight, you have a smaller chance of certain diseases. In any case,
                                make sure that you do not gain any further weight and try to lose some weight. Do you
                                also have too much belly fat?. Then it is extra important to lose weight because with a
                                large belly size your risk of certain diseases is increased. Adjusting your eating
                                habits is now an important step. Contact the dietitian or general practitioner.</p>


                        </div>

                        <!-- info area start -->
                        <div class="single-info">
                            <h2 class="text-[#2B313B] text-base font-semibold mb-3">WHAT IS MY BMI?</h2>
                            <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">calculate BMI? You can easily
                                do this online, we calculate the formula based on your height and weight. This has never
                                been easier.</p>
                        </div>
                        <div class="single-info">
                            <h2 class="text-[#2B313B] text-base font-semibold mb-3">HOW DO YOU CALCULATE YOUR BMI?</h2>

                            <ol class="mt-2 ml-3 space-y-1 leading-6 list-decimal text-[#6C7A93] font-normal text-xs">
                                <li>Enter your gender, age, weight and height to get the most accurate BMI possible.
                                </li>
                                <li>Check whether your BMI is a healthy BMI or whether you are under or overweight. Your
                                    ideal weight based on your age and height is also indicated.</li>
                                <li>Don't have a healthy BMI? Then take action to lose weight, gain weight or just go
                                    for a healthier lifestyle!</li>
                            </ol>

                            <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6 ">It is important to indicate
                                your gender because of course different BMI values ​​apply for adults than for children
                                and there is also a difference between men and women.</p>

                            <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline"> -
                                Calculate BMI
                                woman</a>
                            <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline"> -
                                Calculate BMI
                                man</a>
                            <a href="#" class="text-[#0052FE] font-normal text-xs block mb-2 underline"> -
                                Calculate BMI
                                child</a>

                            <p class="text-[#6C7A93] font-normal text-xs my-6 leading-6 ">BMI stands for Body Mass
                                Index, it is an alternative name for the quetelet index (QI). It is about the ratio
                                between your height and your weight, on the basis of which you can determine whether you
                                are overweight or underweight. Of course, with a few kilos too much you do not
                                immediately suffer from obesity and being underweight does not immediately lead to
                                annorexia, although it is important to keep an eye on the limits.</p>
                            <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6 ">
                                Curious about your BMI when you are pregnant or do you want to regularly make sure that
                                you can make a calculation based on the formula? Your BMI is a snapshot, it is important
                                to interpret it based on, for example, your current stage of life. Are you seriously
                                overweight or severely underweight? In those cases, it is wise to inform a doctor or a
                                specialist in the field of nutrition and/or sports about your weight and height. There
                                is a chance that you will have to take immediate action to do something about this and
                                to bring your health to safety.</p>
                        </div>
                        <!-- hidden-start -->

                        <button id="load-more-btn" type="button"
                            class="load-btn-area w-full inline-block  mb-4 text-center md:hidden text-[10px] font-semibold text-center text-[#0052FE] hover:text-blue-700  ">
                            View More <img src="{{asset('frontend/assets/img/icons/arrow-right-blue.svg')}}" class="ml-2 inline-block"
                                alt="arrow-icon">
                        </button>

                        <div id="load-more" class="hidden md:block transition-all">
                            <div class="single-info">
                                <h2 class="text-[#2B313B] text-base font-semibold mb-3">UNDERWEIHT OR OVERWEIGHT
                                    (ANNOREXIA
                                    OR OBESITY)</h2>
                                <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">Do you have a BMI much
                                    lower
                                    than 18 and do you not immediately see opportunities to do something about it? In
                                    that
                                    case, you are seriously underweight, it is important to seek help immediately. A
                                    weight
                                    that is too low is just as unhealthy as a weight that is too high. In addition,
                                    there is
                                    a chance that someone with a body mass index much lower than 18 will suffer from
                                    psychological and physical complaints. You can help someone by discussing it, in the
                                    end
                                    we all want to arrive at a healthy weight.</p>
                                <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">
                                    Do you have a BMI over 40? A BMI higher than 40 means sickly overweight, so it is
                                    important to contact a doctor immediately. Only in this way is it possible to take
                                    action in time and do something about it. Such a degree of overweight can indicate
                                    morbid obesity, which goes one step further than if someone has a BMI between 30 and
                                    40.
                                    Would you even reach a BMI of 50 or higher? Then there is super obesity and the
                                    weight
                                    can have direct harmful effects on health.</p>
                            </div>

                            <div class="single-info">
                                <h2 class="text-[#2B313B] text-base font-semibold mb-3">BMI WHEN YOU ARE PREGNANT</h2>
                                <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">Calculate your BMI during
                                    your
                                    pregnancy? Of course you will gain weight during pregnancy, something that you
                                    should
                                    take into account when calculating your BMI. However, some women gain weight much
                                    more
                                    than others, which is why it is definitely worth calculating your BMI when you are
                                    pregnant. You can then continue to fill in your height and weight, just like the
                                    weight
                                    you had before you became pregnant. Therefore, calculate it regularly, so that you
                                    can
                                    fall back on that data before you become pregnant and you gain more weight.</p>
                                <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">
                                    Do you want to calculate your index while you are pregnant? Then it is also
                                    important to
                                    indicate when you are due. Based on this, it is possible to apply the Rosso curve,
                                    on
                                    the basis of which you can clearly see where the weight gain during pregnancy comes
                                    from. In this way you can also calculate your BMI during pregnancy and you are well
                                    aware of your weight in relation to your height.</p>
                            </div>

                            <div class="single-info">
                                <h2 class="text-[#2B313B] text-base font-semibold mb-3">BMI FORMULA</h2>
                                <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">
                                    Curious about the formula? It is originally the QI formula, which we have come to
                                    know
                                    as the formula for calculating BMI. We calculate the Quetelet Index in kilograms
                                    divided
                                    by the height squared. The formula is not difficult in that regard:
                                </p>
                                <p class="text-[#6C7A93] font-bold text-xs mb-6 leading-6">
                                    BMI = mass in kilograms / height in meters squared</p>
                                <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">
                                    Suppose you want to calculate the BMI of someone who weighs 90 kilograms and is 175
                                    centimeters tall. In that case you can fill in the formula as follows:
                                    BMI = 90 kilograms / (1.75m x 1.75m) = 90 kilograms / 3.0625 = 29.39
                                </p>
                                <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">
                                    As you can see from the calculation, this person is actually overweight. The
                                    calculation
                                    yields a BMI of 29, which puts the person close to being seriously overweight. There
                                    is
                                    still only talk of 'overweight', but in this case it is important to be careful.
                                </p>
                                <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">
                                    Do you regularly want to know the BMI and are you curious how this changes based on
                                    your
                                    height or weight? As you get taller you can gain weight, which is no problem for
                                    your
                                    body mass index. The moment your weight would remain the same and you increase in
                                    height, you ensure that your BMI will decrease. Do you want to calculate the BMI
                                    when
                                    your height has remained the same and you have gained weight? You then divide your
                                    higher weight by a height that has remained the same, so that you will notice that a
                                    higher score comes out.
                                </p>
                                <p class="text-[#6C7A93] font-normal text-xs mb-6 leading-6">
                                    You can determine your BMI to see how you are currently doing, by doing this
                                    regularly
                                    you can map a trend and see how your weight and height are developing over time.
                                    That's
                                    especially interesting when you start to grow, just like when your body stops. You
                                    can
                                    calculate your BMI before you hit the growth spurt, then calculate your BMI during
                                    the
                                    growth spurt, and finally calculate your BMI when you reach your final height. From
                                    that
                                    moment on, based on your index, it is important to maintain a healthy weight for
                                    your
                                    height.</p>
                            </div>
                        </div>
                        <!-- hidden-element end -->

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
                                <ul class="flex flex-row justify-end">
                                    <li class="flex ml-2"> <a href="#" class=" ml-2"><span
                                                class="flex relative">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                    class=" h-5 w-5" src="{{asset('/frontend/assets/img/social/facebook.svg')}}"
                                                    alt=""> </span></a></li>
                                    <li class="flex ml-2"><a href="#" class=" ml-2"><img
                                                class="blob infinity rounded-full h-5 w-5"
                                                src="{{asset('/frontend/assets/img/social/twitter.svg')}}" alt=""> </a></li>
                                    <li class="flex ml-2"> <a href="#" class=" ml-2"><span
                                                class="flex relative">
                                                <span
                                                    class="animate-ping absolute inline-flex h-full w-full rounded-full bg-sky-400 opacity-75"></span><img
                                                    class="h-5 w-5" src="{{asset('/frontend/assets/img/social/instagram.svg')}}"
                                                    alt=""></span> </a></li>
                                    <li class="flex ml-2"><a href="#" class=" ml-2"><img
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
