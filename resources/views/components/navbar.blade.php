<section class="mx-6 md:my-6 lg:mx-16 my-10 bg-blackLight rounded-full shadow-lg fixed top-0 inset-x-0 z-50">

    <div id="navAll" class="fixed inset-0 z-50 hidden lg:hidden">
        <div id="navbar"
            class="fixed top-0 bottom-0 -left-96 bg-blackLight w-[75%] z-40 flex flex-col justify-between items-start py-8 text-whiteCustom transition duration-200">
            <div class="flex flex-col items-start justify-start mx-10 space-y-3">
                <li class="list-none">
                    <a href="#" class="text-xl font-bold md:text-lg transition duration-100 hover:text-slate-200"
                        onclick="clickNav()">Team</a>
                </li>
                <li class="list-none">
                    <div href="#"
                        class="text-xl font-bold md:text-lg transition duration-100 hover:text-slate-200"
                        onclick="clickNav()">
                        Cars
                    </div>
                </li>
                <li class="list-none">
                    <a href="#" class="text-xl font-bold md:text-lg transition duration-100 hover:text-slate-200"
                        onclick="clickNav()">Partners</a>
                </li>
                <li class="list-none">
                    <a href="#" class="text-xl font-bold md:text-lg transition duration-100 hover:text-slate-200"
                        onclick="clickNav()">Contact</a>
                </li>
                <li class="list-none">
                    <a href="#" class="text-xl font-bold md:text-lg transition duration-100 hover:text-slate-200"
                        onclick="clickNav()">News</a>
                </li>
            </div>

        </div>
        <div id="black" class="fixed inset-0 z-30 hidden transition duration-200 bg-black/50" onclick="clickNav()">
        </div>
    </div>

    <div
        class="relative w-full h-full px-8 py-2 lg:px-14 lg:py-0 overflow-hidden bg-cover rounded-full text-whiteCustom">

        <div class="flex items-center justify-between">
            <img src="{{ asset('images/antasena.png') }}" alt="logo"
                class="w-[20%] md:w-[15%] lg:w-[7%] relative z-20" />

            <div class="hidden space-x-8 lg:flex lg:items-center lg:justify-center">
                <li class="list-none">
                    <a href="/#tentang"
                        class="font-bold md:text-lg transition duration-100 hover:text-slate-200">Team</a>
                </li>
                <li class="list-none">
                    <div data-dropdown-toggle="dropdownMenu" href="#"
                        class="font-bold md:text-lg transition duration-100 hover:text-slate-200 cursor-pointer">
                        Cars
                    </div>
                </li>
                <li class="list-none">
                    <a href="/merchandise"
                        class="font-bold md:text-lg transition duration-100 hover:text-slate-200">Partners</a>
                </li>
                <li class="list-none">
                    <a href="/merchandise"
                        class="font-bold md:text-lg transition duration-100 hover:text-slate-200">Contact</a>
                </li>
                <li class="list-none">
                    <a href="/merchandise"
                        class="font-bold md:text-lg transition duration-100 hover:text-slate-200">News</a>
                </li>
            </div>

            <div class="relative z-20 cursor-pointer lg:hidden">
                <x-fas-bars class="w-[20px] h-auto text-white" onclick="clickNav()" />
            </div>
        </div>
    </div>

    <script>
        function clickNav() {
            document.getElementById("navAll").classList.toggle("hidden");
            document.getElementById("black").classList.toggle("hidden");
            document.getElementById("navbar").classList.toggle("-left-96");
            document.getElementById("navbar").classList.toggle("left-0");
        }
    </script>
</section>
