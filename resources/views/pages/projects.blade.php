<x-layouts.Body>

    <x-slot name="title">
        Projects Page
    </x-slot>

    <main class=" mt-24 px-4 sm:px-8 lg:px-12">
        <header class="max-w-2xl">
            <h1 class="text-4xl font-bold tracking-tight text-zinc-800 dark:text-zinc-100 sm:text-5xl">
                Things
                I’ve made trying to put my dent in the universe.
            </h1>
            <p class="mt-6 text-base text-zinc-600 dark:text-zinc-400">I’ve worked on tons of little
                projects
                over the years but these are the ones that I’m most proud of. Many of them are open-source,
                so
                if you see something that piques your interest, check out the code and contribute if you
                have
                ideas for how it can be improved.
            </p>
        </header>
    </main>

    <x-slot name="additionalSlot">

        <article>
            <ul class="grid sm:grid-cols-2 lg:grid-cols-3 mt-24">

                <li class="hover:bg-zinc-200/20 transition-all cursor-pointer p-4 rounded-lg">
                    <div class="relative overflow-hidden z-10 h-12 w-12 p-2 flex items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                        <div class="overflow-hidden bg-white h-full w-full flex items-center justify-center bg-gradient-to-tl from-fuchsia-600 to-white rounded-full">
                        </div>
                    </div>
                    <div class="font-medium text-zinc-500 dark:text-white mt-5">
                        Twitch
                    </div>
                    <p class="text-sm text-zinc-600 dark:text-zinc-500 mt-2">
                        Creating technology to empower civilians to explore
                        space on their own terms.
                    </p>

                    <p class="relative z-10 mt-10 flex text-sm font-medium text-zinc-400 transition group-hover:text-teal-500 dark:text-zinc-200">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none">
                            <path d="M15.712 11.823a.75.75 0 1 0 1.06 1.06l-1.06-1.06Zm-4.95 1.768a.75.75 0 0 0 1.06-1.06l-1.06 1.06Zm-2.475-1.414a.75.75 0 1 0-1.06-1.06l1.06 1.06Zm4.95-1.768a.75.75 0 1 0-1.06 1.06l1.06-1.06Zm3.359.53-.884.884 1.06 1.06.885-.883-1.061-1.06Zm-4.95-2.12 1.414-1.415L12 6.344l-1.415 1.413 1.061 1.061Zm0 3.535a2.5 2.5 0 0 1 0-3.536l-1.06-1.06a4 4 0 0 0 0 5.656l1.06-1.06Zm4.95-4.95a2.5 2.5 0 0 1 0 3.535L17.656 12a4 4 0 0 0 0-5.657l-1.06 1.06Zm1.06-1.06a4 4 0 0 0-5.656 0l1.06 1.06a2.5 2.5 0 0 1 3.536 0l1.06-1.06Zm-7.07 7.07.176.177 1.06-1.06-.176-.177-1.06 1.06Zm-3.183-.353.884-.884-1.06-1.06-.884.883 1.06 1.06Zm4.95 2.121-1.414 1.414 1.06 1.06 1.415-1.413-1.06-1.061Zm0-3.536a2.5 2.5 0 0 1 0 3.536l1.06 1.06a4 4 0 0 0 0-5.656l-1.06 1.06Zm-4.95 4.95a2.5 2.5 0 0 1 0-3.535L6.344 12a4 4 0 0 0 0 5.656l1.06-1.06Zm-1.06 1.06a4 4 0 0 0 5.657 0l-1.061-1.06a2.5 2.5 0 0 1-3.535 0l-1.061 1.06Zm7.07-7.07-.176-.177-1.06 1.06.176.178 1.06-1.061Z" fill="currentColor"></path>
                        </svg>
                        <span class="ml-2">
                            <a href="https://www.twitch.tv/" class="hover:text-teal-300 transition-all">
                                twitch.tv
                            </a>
                        </span>
                    </p>
                </li>

                <li class="hover:bg-zinc-200/20 transition-all cursor-pointer p-4 rounded-lg">
                    <div class="relative overflow-hidden z-10 h-12 w-12 p-2 flex items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                        <div class="overflow-hidden bg-white h-full w-full flex items-center justify-center bg-gradient-to-tl from-slate-900 to-white rounded-full">
                        </div>
                    </div>
                    <div class="font-medium text-zinc-500 dark:text-white mt-5">
                        GitHub
                    </div>
                    <p class="text-sm text-zinc-600 dark:text-zinc-500 mt-2">
                        High performance web animation library,
                        hand-written in optimized WASM.

                    </p>

                    <p class="relative z-10 mt-10 flex text-sm font-medium text-zinc-400 transition group-hover:text-teal-500 dark:text-zinc-200">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none">
                            <path d="M15.712 11.823a.75.75 0 1 0 1.06 1.06l-1.06-1.06Zm-4.95 1.768a.75.75 0 0 0 1.06-1.06l-1.06 1.06Zm-2.475-1.414a.75.75 0 1 0-1.06-1.06l1.06 1.06Zm4.95-1.768a.75.75 0 1 0-1.06 1.06l1.06-1.06Zm3.359.53-.884.884 1.06 1.06.885-.883-1.061-1.06Zm-4.95-2.12 1.414-1.415L12 6.344l-1.415 1.413 1.061 1.061Zm0 3.535a2.5 2.5 0 0 1 0-3.536l-1.06-1.06a4 4 0 0 0 0 5.656l1.06-1.06Zm4.95-4.95a2.5 2.5 0 0 1 0 3.535L17.656 12a4 4 0 0 0 0-5.657l-1.06 1.06Zm1.06-1.06a4 4 0 0 0-5.656 0l1.06 1.06a2.5 2.5 0 0 1 3.536 0l1.06-1.06Zm-7.07 7.07.176.177 1.06-1.06-.176-.177-1.06 1.06Zm-3.183-.353.884-.884-1.06-1.06-.884.883 1.06 1.06Zm4.95 2.121-1.414 1.414 1.06 1.06 1.415-1.413-1.06-1.061Zm0-3.536a2.5 2.5 0 0 1 0 3.536l1.06 1.06a4 4 0 0 0 0-5.656l-1.06 1.06Zm-4.95 4.95a2.5 2.5 0 0 1 0-3.535L6.344 12a4 4 0 0 0 0 5.656l1.06-1.06Zm-1.06 1.06a4 4 0 0 0 5.657 0l-1.061-1.06a2.5 2.5 0 0 1-3.535 0l-1.061 1.06Zm7.07-7.07-.176-.177-1.06 1.06.176.178 1.06-1.061Z" fill="currentColor"></path>
                        </svg>
                        <span class="ml-2">
                            <a href="https://github.com/callmedeci" class="hover:text-teal-300 transition-all">
                                github.com
                            </a>
                        </span>
                    </p>
                </li>

                <li class="hover:bg-zinc-200/20 transition-all cursor-pointer p-4 rounded-lg">
                    <div class="relative overflow-hidden z-10 h-12 w-12 p-2 flex items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                        <div class="overflow-hidden bg-white h-full w-full flex items-center justify-center bg-gradient-to-tl from-red-500 to-white rounded-full">
                        </div>
                    </div>
                    <div class="font-medium text-zinc-500 dark:text-white mt-5">
                        Youtube
                    </div>
                    <p class="text-sm text-zinc-600 mt-2">
                        Real-time video streaming library, optimized
                        for interstellar transmission.
                    </p>

                    <p class="relative z-10 mt-10 flex text-sm font-medium text-zinc-400 transition group-hover:text-teal-500 dark:text-zinc-200">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none">
                            <path d="M15.712 11.823a.75.75 0 1 0 1.06 1.06l-1.06-1.06Zm-4.95 1.768a.75.75 0 0 0 1.06-1.06l-1.06 1.06Zm-2.475-1.414a.75.75 0 1 0-1.06-1.06l1.06 1.06Zm4.95-1.768a.75.75 0 1 0-1.06 1.06l1.06-1.06Zm3.359.53-.884.884 1.06 1.06.885-.883-1.061-1.06Zm-4.95-2.12 1.414-1.415L12 6.344l-1.415 1.413 1.061 1.061Zm0 3.535a2.5 2.5 0 0 1 0-3.536l-1.06-1.06a4 4 0 0 0 0 5.656l1.06-1.06Zm4.95-4.95a2.5 2.5 0 0 1 0 3.535L17.656 12a4 4 0 0 0 0-5.657l-1.06 1.06Zm1.06-1.06a4 4 0 0 0-5.656 0l1.06 1.06a2.5 2.5 0 0 1 3.536 0l1.06-1.06Zm-7.07 7.07.176.177 1.06-1.06-.176-.177-1.06 1.06Zm-3.183-.353.884-.884-1.06-1.06-.884.883 1.06 1.06Zm4.95 2.121-1.414 1.414 1.06 1.06 1.415-1.413-1.06-1.061Zm0-3.536a2.5 2.5 0 0 1 0 3.536l1.06 1.06a4 4 0 0 0 0-5.656l-1.06 1.06Zm-4.95 4.95a2.5 2.5 0 0 1 0-3.535L6.344 12a4 4 0 0 0 0 5.656l1.06-1.06Zm-1.06 1.06a4 4 0 0 0 5.657 0l-1.061-1.06a2.5 2.5 0 0 1-3.535 0l-1.061 1.06Zm7.07-7.07-.176-.177-1.06 1.06.176.178 1.06-1.061Z" fill="currentColor"></path>
                        </svg>
                        <span class="ml-2">
                            <a href="youtube.com" class="hover:text-teal-300 transition-all">
                                youtube.com
                            </a>
                        </span>
                    </p>
                </li>

                <li class="hover:bg-zinc-200/20 transition-all cursor-pointer p-4 rounded-lg">
                    <div class="relative overflow-hidden z-10 h-12 w-12 p-2 flex items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                        <div class="overflow-hidden bg-white h-full w-full flex items-center justify-center bg-gradient-to-tl from-blue-500 to-white rounded-full">
                        </div>
                    </div>
                    <div class="font-medium dark:text-white text-zinc-500 mt-5">
                        FaceBook
                    </div>
                    <p class="text-sm text-zinc-600 dark:text-zinc-500 mt-2">
                        The operating system that powers our
                        Planetaria space shuttles.
                    </p>

                    <p class="relative z-10 mt-10 flex text-sm font-medium text-zinc-400 transition group-hover:text-teal-500 dark:text-zinc-200">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none">
                            <path d="M15.712 11.823a.75.75 0 1 0 1.06 1.06l-1.06-1.06Zm-4.95 1.768a.75.75 0 0 0 1.06-1.06l-1.06 1.06Zm-2.475-1.414a.75.75 0 1 0-1.06-1.06l1.06 1.06Zm4.95-1.768a.75.75 0 1 0-1.06 1.06l1.06-1.06Zm3.359.53-.884.884 1.06 1.06.885-.883-1.061-1.06Zm-4.95-2.12 1.414-1.415L12 6.344l-1.415 1.413 1.061 1.061Zm0 3.535a2.5 2.5 0 0 1 0-3.536l-1.06-1.06a4 4 0 0 0 0 5.656l1.06-1.06Zm4.95-4.95a2.5 2.5 0 0 1 0 3.535L17.656 12a4 4 0 0 0 0-5.657l-1.06 1.06Zm1.06-1.06a4 4 0 0 0-5.656 0l1.06 1.06a2.5 2.5 0 0 1 3.536 0l1.06-1.06Zm-7.07 7.07.176.177 1.06-1.06-.176-.177-1.06 1.06Zm-3.183-.353.884-.884-1.06-1.06-.884.883 1.06 1.06Zm4.95 2.121-1.414 1.414 1.06 1.06 1.415-1.413-1.06-1.061Zm0-3.536a2.5 2.5 0 0 1 0 3.536l1.06 1.06a4 4 0 0 0 0-5.656l-1.06 1.06Zm-4.95 4.95a2.5 2.5 0 0 1 0-3.535L6.344 12a4 4 0 0 0 0 5.656l1.06-1.06Zm-1.06 1.06a4 4 0 0 0 5.657 0l-1.061-1.06a2.5 2.5 0 0 1-3.535 0l-1.061 1.06Zm7.07-7.07-.176-.177-1.06 1.06.176.178 1.06-1.061Z" fill="currentColor"></path>
                        </svg>
                        <span class="ml-2">
                            <a href="facebook.com" class="hover:text-teal-300 transition-all">
                                facebook.tech
                            </a>
                        </span>
                    </p>
                </li>

                <li class="hover:bg-zinc-200/20 transition-all cursor-pointer p-4 rounded-lg">
                    <div class="relative overflow-hidden z-10 h-12 w-12 p-2 flex items-center justify-center rounded-full bg-white shadow-md shadow-zinc-800/5 ring-1 ring-zinc-900/5 dark:border dark:border-zinc-700/50 dark:bg-zinc-800 dark:ring-0">
                        <div class="overflow-hidden bg-white h-full w-full flex items-center justify-center bg-gradient-to-tl from-indigo to-white rounded-full">
                        </div>
                    </div>
                    <div class="font-medium dark:text-white text-zinc-500 mt-5">
                        Discord
                    </div>
                    <p class="text-sm text-zinc-600 dark:text-zinc-500 mt-2">
                        The schematics for the first rocket I
                        designed that successfully made it to orbit.
                    </p>

                    <p class="relative z-10 mt-10 flex text-sm font-medium text-zinc-400 transition group-hover:text-teal-500 dark:text-zinc-200">
                        <svg viewBox="0 0 24 24" aria-hidden="true" class="h-6 w-6 flex-none">
                            <path d="M15.712 11.823a.75.75 0 1 0 1.06 1.06l-1.06-1.06Zm-4.95 1.768a.75.75 0 0 0 1.06-1.06l-1.06 1.06Zm-2.475-1.414a.75.75 0 1 0-1.06-1.06l1.06 1.06Zm4.95-1.768a.75.75 0 1 0-1.06 1.06l1.06-1.06Zm3.359.53-.884.884 1.06 1.06.885-.883-1.061-1.06Zm-4.95-2.12 1.414-1.415L12 6.344l-1.415 1.413 1.061 1.061Zm0 3.535a2.5 2.5 0 0 1 0-3.536l-1.06-1.06a4 4 0 0 0 0 5.656l1.06-1.06Zm4.95-4.95a2.5 2.5 0 0 1 0 3.535L17.656 12a4 4 0 0 0 0-5.657l-1.06 1.06Zm1.06-1.06a4 4 0 0 0-5.656 0l1.06 1.06a2.5 2.5 0 0 1 3.536 0l1.06-1.06Zm-7.07 7.07.176.177 1.06-1.06-.176-.177-1.06 1.06Zm-3.183-.353.884-.884-1.06-1.06-.884.883 1.06 1.06Zm4.95 2.121-1.414 1.414 1.06 1.06 1.415-1.413-1.06-1.061Zm0-3.536a2.5 2.5 0 0 1 0 3.536l1.06 1.06a4 4 0 0 0 0-5.656l-1.06 1.06Zm-4.95 4.95a2.5 2.5 0 0 1 0-3.535L6.344 12a4 4 0 0 0 0 5.656l1.06-1.06Zm-1.06 1.06a4 4 0 0 0 5.657 0l-1.061-1.06a2.5 2.5 0 0 1-3.535 0l-1.061 1.06Zm7.07-7.07-.176-.177-1.06 1.06.176.178 1.06-1.061Z" fill="currentColor">
                            </path>
                        </svg>
                        <span class="ml-2">
                            <a href="discord.com" class="hover:text-teal-300 transition-all">
                                discord.com
                            </a>
                        </span>
                    </p>
                </li>
            </ul>
        </article>

    </x-slot>

</x-layouts.Body>