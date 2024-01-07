<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Cards</title>
    @vite('resources/css/app.css')
</head>

<body id="body"
    class="bg-gradient-to-br from-teal-400 to-lime-300 w-full h-screen flex flex-col items-center justify-center p-10">

    <section id="model-section" class="flex gap-10">
        <button model="1" id="btn-1" type="button"
            class="bg-white px-6 py-3 rounded-lg font-semibold hover:scale-105 transition-transform duration-700 z-20 modelOpener">
            Show Model 1
        </button>

        <button model="2" id="btn-2" type="button"
            class="bg-white px-6 py-3 rounded-lg font-semibold hover:scale-105 transition-transform duration-700 z-20 modelOpener">
            Show Model 2
        </button>

        <button model="3" id="btn-3" type="button"
            class="bg-white px-6 py-3 rounded-lg font-semibold hover:scale-105 transition-transform duration-700 z-20 modelOpener">
            Show Model 3
        </button>
    </section>

    <section class="w-full h-full flex items-center justify-center absolute">
        <div id="model-1"
            class="bg-white w-96 h-max rounded-xl text-slate-950 p-8 absolute hidden translate-y-0 transition-all duration-700 models">
            <div class="flex flex-row-reverse w-full items-center justify-between">
                <svg closeBtn="1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 close cursor-pointer text-rose-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                <span class="text-xl font-semibold">Model 1</span>
            </div>
            <p class="mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus quidem nulla minima nemo laboriosam,
                explicabo dolores dolorum ipsam beatae id nostrum animi suscipit pariatur ex, consectetur architecto
                voluptate, quisquam ad.
            </p>
        </div>

        <div id="model-2"
            class="bg-white w-96 h-max rounded-xl text-slate-950 p-8 absolute hidden translate-y-0 transition-all duration-700 models">
            <div class="flex flex-row-reverse w-full items-center justify-between">
                <svg closeBtn="2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 close cursor-pointer text-rose-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                <span class="text-xl font-semibold">Model 2</span>
            </div>
            <p class="mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus quidem nulla minima nemo laboriosam,
                explicabo dolores dolorum ipsam beatae id nostrum animi suscipit pariatur ex, consectetur architecto
                voluptate, quisquam ad.
            </p>
        </div>

        <div id="model-3"
            class="bg-white w-96 h-max rounded-xl text-slate-950 p-8 absolute hidden translate-y-0 transition-all duration-700 models">
            <div class="flex flex-row-reverse w-full items-center justify-between">
                <svg closeBtn="3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-8 h-8 close cursor-pointer text-rose-500">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
                <span class="text-xl font-semibold">Model 3</span>
            </div>
            <p class="mt-4">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Possimus quidem nulla minima nemo laboriosam,
                explicabo dolores dolorum ipsam beatae id nostrum animi suscipit pariatur ex, consectetur architecto
                voluptate, quisquam ad.
            </p>
        </div>
    </section>

    <script src="{{asset('js/Play_with_JS/showCards.js')}}"></script>


</body>

</html>
