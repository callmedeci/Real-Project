<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/svg" href="/vite.svg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guess My Number</title>
    @vite('resources/css/app.css')
</head>

<body id="body" class="bg-zinc-800 text-white w-full h-full flex flex-col p-2 font-primary text-2xl">

    <div class="w-full flex justify-between">
        <button id="reset-btn"
            class="bg-white text-slate-950 px-3 py-2 rounded-sm hover:scale-105 transition-transform duration-500">
            Again!
        </button>

        <p>
            (Between <span class="text-rose-500">1</span> and <span class="text-rose-500">20</span>)
        </p>
    </div>


    <h1 id="alaram" class="text-5xl text-center mt-10">
        Guess My Number!
    </h1>

    <div class="w-full h-full flex flex-col items-center justify-center mt-10 relative">
        <div class="w-full h-2 bg-white absolute z-0">
            <div id="warning-bar" class="h-2 w-0 bg-rose-700"> </div>
        </div>
        <div id="number-box"
            class="text-8xl bg-white text-black w-40 h-40 flex flex-col items-center justify-center select-none rounded mt-10 z-10">
            <div class="hover:scale-125 transition-all duration-500 cursor-pointer">
                ?
            </div>
        </div>

        <p id="show-status" class="mt-5 text-center">
            Nothing
        </p>

    </div>

    <div class="w-full items-center justify-center flex flex-col gap-10 mt-12">
        <div class="w-full h-full max-w-xs flex flex-col">
            <input id="input-number"
                class="appearance-none outline-none text-black text-center p-2 focus:ring-4 focus:ring-zinc-500 transition-all duration-700"
                type="number" min="1" max="20">
            <div class="w-full h-fit flex relative mt-2 overflow-hidden">
                <button id="check-btn" type="button"
                    class="bg-white w-full h-full text-black mt-2 text-lg select-none transition-all duration-700 z-0">
                    Check !
                </button>
                <div id="ban"
                    class="w-full h-full flex items-center justify-center bg-white absolute z-20 translate-y-10 transition-all duration-1000 delay-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-8 h-8 text-gray-800">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                    </svg>
                </div>
            </div>

            <div class="mt-8 text-lg text-center flex flex-col items-start justify-center">
                <p>💯 Score : <span id="score" value="20">20</span> </p>
                <p>🥇 High Score : <span id="high-score">0</span> </p>
            </div>

        </div>
    </div>


    <script src="{{asset('js/Play_with_JS/guess.js')}}"></script>

</body>

</html>
