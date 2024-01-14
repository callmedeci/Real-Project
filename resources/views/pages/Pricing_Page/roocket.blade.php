<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('images/icons/pricing-64.png') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pricing Page</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-black md:px-10 px-4 scroll-smooth">

<div class="flex justify-center items-center text-white pt-10 relative w-full">

    <div class="absolute left-0 text-indi500 cursor-pointer hover:scale-105 transition-all duration-500">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round"
                  d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
        </svg>

    </div>

    <div
        class="text-white absolute right-0 flex cursor-pointer hover:text-indi500 transition-all ease-out duration-1000">
      <span class="font-bold">
        Log in
      </span>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
             class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
        </svg>
    </div>

    <ul class="md:flex font-bold hidden space-x-16">
        <li class="cursor-pointer hover:text-indi500 transition-all duration-500">
            Product
        </li>
        <li class="cursor-pointer hover:text-indi500 transition-all duration-500">
            Features
        </li>
        <li class="cursor-pointer hover:text-indi500 transition-all duration-500">
            Marketplace
        </li>
        <li class="cursor-pointer hover:text-indi500 transition-all duration-500">
            Company
        </li>
    </ul>
</div>

<div class="text-center flex flex-col justify-center items-center pt-36">
    <h1 class="md:text-6xl text-3xl font-bold text-white">
        Simple pricing, no commitment
    </h1>
    <div class="max-w-3xl leading-relaxed text-center text-zinc-400 pt-10 md:text-lg text-md">

        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Minus
        reprehenderit, nemo aut autem sunt, ullam magnam consequuntur placeat
        officiis sit, similique eos nam corporis. Quisquam doloribus repellat
        quaerat rem perferendis?
    </div>
</div>

<div class="flex flex-col items-center justify-center">
    <div class="lg:grid lg:grid-cols-7 space-y-10 lg:space-y-0 mt-20 relative xl:max-w-7xl w-full">

        <div
            class="bg-sorme flex flex-col p-8 rounded-lg lg:rounded-l-lg lg:rounded-r-none relative z-20 text-white col-start-1 col-end-3 row-start-2 row-end-3 hover:shadow-md hover:shadow-indigo duration-700 transition-all">
        <span class="font-bold">
          Scale
        </span>

            <div class="flex">
          <span class="text-6xl font-bold">
            &dollar;15
          </span>

                <div class="flex flex-col pl-5 items-start justify-center">
            <span>
              USD
            </span>
                    <span>
              Billed monthly
            </span>
                </div>

            </div>

            <button class="bg-indigo p-2 mt-10 font-bold text-white rounded-lg hover:bg-indi500">
                <a href="#" class>Buy this plan</a>
            </button>

            <div class="flex">

                <hr class="h-px mt-8 bg-gray200 border-0 dark:bg-gray-700">
                <ul class="flex flex-col items-start mt-10 w-full">
                    <li class="flex items-center justify-start w-full border-b border-gray100 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>Advanceed invoicing</span>
                    </li>

                    <li class="flex items-center justify-start w-full border-b border-gray100 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Easy to use accounting
                    </li>

                    <li class="flex items-center justify-start w-full border-b border-gray100 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Mutli-accounts
                    </li>
                </ul>
            </div>

        </div>

        <div
            class="bg-white flex flex-col p-8 rounded-lg lg:rounded-lg relative z-30 col-start-3 col-end-6 row-start-1 row-end-4 ring-2 ring-indigo hover:shadow-xl hover:shadow-indigo duration-700 transition-all">

            <div class="w-full flex flex-col items-center">

                <div
                    class="rounded-full w-24 h-10 bg-indi500 text-center flex items-center justify-center absolute -top-5 ring-2 ring-indigo text-white font-bold hover:shadow-md hover:shadow-indigo hover:scale-105 duration-700 transition-all">
                    <a href="#" class="cursor-pointer">Top sells</a>
                </div>
            </div>

            <span class="font-bold">
          Scale
        </span>

            <div class="flex">
          <span class="text-6xl font-bold">
            &dollar;60
          </span>

                <div class="flex flex-col pl-5 items-start justify-center">
            <span class="text-gray">
              USD
            </span>
                    <span class="text-gray">
              Billed monthly
            </span>
                </div>

            </div>

            <button class="bg-indigo p-2 mt-10 font-bold text-white rounded-lg hover:bg-indi500">
                <a href="#" class>Buy this plan</a>
            </button>

            <div class="flex">

                <hr class="h-px mt-8 bg-gray200 border-0 dark:bg-gray-700">
                <ul class="flex flex-col items-start mt-10 w-full">
                    <li class="flex items-center justify-start w-full border-b border-gray200 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>Advanceed invoicing</span>
                    </li>

                    <li class="flex items-center justify-start w-full border-b border-gray200 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Easy to use accounting
                    </li>

                    <li class="flex items-center justify-start w-full border-b border-gray200 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Mutli-accounts
                    </li>

                    <li class="flex items-center justify-start w-full border-b border-gray200 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Tax planning toolkit
                    </li>

                    <li class="flex items-center justify-start w-full border-b border-gray200 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        VAT & VATMOSS filing
                    </li>

                    <li class="flex items-center justify-center py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Free bank transfers
                    </li>
                </ul>
            </div>

        </div>

        <div
            class="bg-sorme flex flex-col p-8 rounded-lg lg:rounded-r-lg lg:rounded-l-none relative z-20 text-white col-start-6 col-end-8 row-start-2 row-end-3 hover:shadow-md hover:shadow-indigo duration-700 transition-all">
        <span class="font-bold">
          Scale
        </span>

            <div class="flex">
          <span class="text-6xl font-bold">
            &dollar;30
          </span>

                <div class="flex flex-col pl-5 items-start justify-center ">
            <span>
              USD
            </span>
                    <span>
              Billed monthly
            </span>
                </div>

            </div>

            <button class="bg-indigo p-2 mt-10 font-bold text-white rounded-lg hover:bg-indi500">
                <a href="#" class>Buy this plan</a>
            </button>

            <div class="flex">

                <hr class="h-px mt-8 bg-gray200 border-0 dark:bg-gray-700">
                <ul class="flex flex-col items-start mt-10 w-full">
                    <li class="flex items-center justify-start w-full border-b border-gray100 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        <span>Basic invoicing</span>
                    </li>

                    <li class="flex items-center justify-start w-full border-b border-gray100 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Easy to use accounting
                    </li>

                    <li class="flex items-center justify-start w-full border-b border-gray100 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Multi-accounts
                    </li>
                    <li class="flex items-center justify-strat w-full border-b border-gray100 py-2">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                             stroke="currentColor" class="w-7 h-5 text-indi500 ">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                        Multi-accounts
                    </li>
                </ul>
            </div>

        </div>

    </div>
</div>

</body>

</html>
