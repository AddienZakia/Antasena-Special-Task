<section class="min-h-screen flex justify-center items-center py-20">
    <div
        class="bg-blackLight px-8 py-16 rounded-xl flex justify-between items-center w-[90%] lg:w-[70%] flex-col xl:flex-row space-y-5 md:space-y-10 xl:space-y-0 xl:space-x-10 xl:w-[80%] xl:rounded-2xl xl:px-14 2xl:w-[70%]">
        {{-- what they said --}}
        <div class="w-full space-y-8">
            <h1 class="text-whiteCustom text-2xl text-center font-semibold lg:text-3xl xl:text-4xl">What
                <span class="text-transparent bg-clip-text bg-gradient-to-r from-purpleCustom to-blueCustom">
                    They Said
                </span> About Antasena ITS Team
            </h1>

            <x-codicon-quote class="text-whiteCustom w-[50px] h-auto mx-auto" />

            <div class="space-y-8">
                <p class="text-whiteCustom text-justify">
                    Antasena has proven successful in developing hydrogen-based vehicles, which of course, in addition
                    to
                    making Indonesia proud, also has a better impact on the environment and public health.
                    Internationally,
                    the products of this nation‘s children have been able to compete at the global level.
                    Congratulations to
                    all members of the Antasena team.
                </p>

                <div class="flex items-center space-x-5">
                    <div class="bg-white w-[40px] h-[40px] rounded-full"></div>
                    <div class="w-[80%] break-words text-whiteCustom text-justify">
                        <h3 class="font-bold">Prof. Dr. rer. nat. Evvy Kartini</h3>
                        <h5 class="opacity-80">Founder National Battery Research Institute (NBRI)</h5>
                    </div>
                </div>
            </div>

        </div>

        {{-- Form --}}
        <form action=""
            class="bg-gradient-to-br from-orangeCustom to-purpleCustom rounded-xl px-5 py-6 text-whiteCustom xl:px-8 py:-7">
            <h1 class="text-2xl font-bold lg:text-3xl md">Get Closer with Us</h1>
            <p class="mt-2 text-base text-justify font-regular opacity-80 md:w-[70%] xl:w-full">If you have questions,
                you can
                fill in the
                fields
                below. We
                will be happy
                to answer
                your questions
            </p>

            <div class="space-y-5 mt-5 w-full">
                <div class="space-y-3">
                    <div class="space-y-2">
                        <p class="text-xl font-semibold">Email</p>
                        <input type="text" name="" id=""
                            class="px-3 py-2 rounded-lg opacity-90 w-full" placeholder="Email">
                    </div>

                    <div class="space-y-2">
                        <p class="text-xl font-semibold">Message</p>
                        <input type="text" name="" id=""
                            class="px-3 py-2 rounded-lg opacity-90 w-full" placeholder="Write your message here">
                    </div>
                </div>

                <div class="bg-blackLight rounded-xl text-white font-semibold text-center py-3 text-xl">
                    Submit
                </div>
            </div>
        </form>
    </div>
</section>
