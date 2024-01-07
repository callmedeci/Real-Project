<header class="flex p-7 relative">

    <div class="w-full flex justify-end space-x-4">

        <div class="block md:hidden">
            <button id="index-btn-menu"
                    class="flex px-4 py-2 items-center justify-center bg-zinc-50 dark:bg-zinc-800 shadow-md shadow-slate-300 dark:shadow-zinc-800/70 dark:text-white rounded-full">
                Menu
                <svg viewBox="0 0 8 6" aria-hidden="true"
                     class="ml-2 h-auto w-3 stroke-zinc-500 group-hover:stroke-zinc-700 dark:group-hover:stroke-zinc-400">
                    <path d="M1.75 1.75 4 4.25l2.25-2.5" fill="none" stroke-width="1.5" stroke-linecap="round"
                          stroke-linejoin="round">
                    </path>
                </svg>
            </button>
        </div>

        <div id="index-menu-navigation-bar" class="w-full justify-center hidden transition-all duration-700 z-50">
            <div class="fixed inset-x-4 top-8 z-50 origin-top rounded-3xl
                   bg-white p-8 ring-1 ring-zinc-900/5
                    dark:bg-zinc-900 dark:ring-zinc-800
                   opacity-100 scale-100">
                <div class="flex flex-row-reverse items-center justify-between">

                    <button id="index-btn-close-menu" class="-m-1 p-1" type="button">
                        <svg class="h-6 w-6 text-zinc-500 dark:text-zinc-400">
                            <path d="m17.25 6.75-10.5 10.5M6.75 6.75l10.5 10.5" fill="none" stroke="currentColor"
                                  stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>

                    <h2 class="text-sm font-medium text-zinc-600 dark:text-zinc-400">
                        Navigation
                    </h2>
                </div>
                <div class="mt-6">
                    <ul class="-my-2 divide-y divide-zinc-100 text-base text-zinc-800
                       dark:divide-zinc-100/5 dark:text-zinc-300">
                        <li>
                            <a class="block py-2" href="{{route('home')}}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a class="block py-2" href="{{route('about')}}">
                                About
                            </a>
                        </li>
                        <li>
                            <a class="block py-2" href="{{route('articles')}}">
                                Articles
                            </a>
                        </li>
                        <li>
                            <a class="block py-2" href="{{route('projects')}}">
                                Projects
                            </a>
                        </li>
                        <li>
                            <a class="block py-2" href="/">
                                Panel
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <nav class="md:flex hidden w-full items-center justify-center">
            <div
                class="rounded-full shadow-md shadow-zinc-300 border border-zinc-200 bg-white dark:bg-zinc-800 dark:shadow-zinc-800 dark:border-zinc-700 px-8 py-3">
                <ul class="text-zinc-700 dark:text-zinc-100 text-sm font-semibold flex space-x-8">
                    <li class="hover:text-teal-300 focus:text-teal-500 transition-all duration-300 cursor-pointer">
                        <a href="{{route('home')}}">
                            Home
                        </a>
                    </li>
                    <li class="hover:text-teal-300 focus:text-teal-500 transition-all duration-300 cursor-pointer">
                        <a href="{{route('about')}}">
                            About
                        </a>
                    </li>
                    <li class="hover:text-teal-300 focus:text-teal-500 transition-all duration-300 cursor-pointer">
                        <a href="{{route('articles')}}">
                            Articles
                        </a>
                    </li>
                    <li class="hover:text-teal-300 focus:text-teal-500 transition-all duration-300 cursor-pointer">
                        <a href="{{route('projects')}}">
                            Projects
                        </a>
                    </li>
                    <li class="hover:text-teal-300 focus:text-teal-500 transition-all duration-300 cursor-pointer">
                        <a href="/">
                            Panel
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div id="index-turn-on"
             class="px-3 py-2 bg-zinc-50 dark:bg-zinc-800 dark:shadow-sm dark:shadow-zinc-800 dark:border-zinc-700 shadow-lg shadow-slate-300 border border-zinc-200 rounded-full cursor-pointer">
            <div class="w-full h-full flex justify-center items-center">
                <svg id="index-svg-turn-on-darkmode" viewBox="0 0 24 24" stroke-width="1.5" stroke-linecap="round"
                     stroke-linejoin="round" aria-hidden="true"
                     class="h-6 w-6 text-teal-500 stroke-teal-500 fill-zinc-100 dark:hidden">
                    <path
                        d="M8 12.25A4.25 4.25 0 0 1 12.25 8v0a4.25 4.25 0 0 1 4.25 4.25v0a4.25 4.25 0 0 1-4.25 4.25v0A4.25 4.25 0 0 1 8 12.25v0Z">
                    </path>
                    <path
                        d="M12.25 3v1.5M21.5 12.25H20M18.791 18.791l-1.06-1.06M18.791 5.709l-1.06 1.06M12.25 20v1.5M4.5 12.25H3M6.77 6.77 5.709 5.709M6.77 17.73l-1.061 1.061"
                        fill="none"></path>
                </svg>

                <svg id="index-svg-turn-off-darkmode" viewBox="0 0 24 24" aria-hidden="true" class="hidden h-6 w-6 fill-zinc-700 stroke-zinc-500
                      transition dark:block
                      [@media(prefers-color-scheme:dark)]:group-hover:stroke-zinc-400
                      [@media_not_(prefers-color-scheme:dark)]:fill-teal-400/10
                      [@media_not_(prefers-color-scheme:dark)]:stroke-teal-500">
                    <path
                        d="M17.25 16.22a6.937 6.937 0 0 1-9.47-9.47 7.451 7.451 0 1 0 9.47 9.47ZM12.75 7C17 7 17 2.75 17 2.75S17 7 21.25 7C17 7 17 11.25 17 11.25S17 7 12.75 7Z"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                </svg>

            </div>
        </div>

    </div>

</header>
