<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roll Dice Game</title>
    @vite('resources/css/app.css')
</head>

<body
    class="w-full min-h-screen flex fle-xol items-center justify-center bg-gradient-to-br from-zinc-800 to-neutral-700 font-rollFont p-4">

    <section
        class="w-full h-96 max-w-6xl flex items-center justify-center rounded-md p-2 relative bg-gradient-to-br from-black/10 to-slate-950/50">

        <!--Player One Section Begin::-->
        <div id="player-one"
            class="w-full h-full p-4 flex flex-col items-center justify-center rounded-l-lg bg-gradient-to-br from-black/50 to-slate-950/10 transition-all">
            <h2 id="plr-one-name" class="text-5xl text-center text-zinc-400 font-semibold">
                PLAYER 1
            </h2>
            <div id="plr-1-total" class="mt-8 text-4xl text-zinc-100 font-semibold">
                0
            </div>

            <div
                class="flex flex-col items-center justify-center bg-zinc-950/30 shadow-lg text-zinc-100 rounded-lg p-8 mt-8">
                <span>
                    CURRENT
                </span>
                <span id="plr-1-score" class="text-3xl">
                    0
                </span>
            </div>
        </div>
        <!--Player One Section End::-->


        <!--Buttons Begin::-->
        <div class="absolute h-full flex flex-col items-center justify-center p-4">
            <div class="relative h-full w-full flex flex-col items-center justify-between">
                <button id="new-game-btn"
                    class="bg-zinc-950/20 shadow-lg text-zinc-100 font-semibold px-3 py-2 rounded-lg hover:scale-105 transition-all duration-500 z-50">
                    NEW GAME
                </button>

                <div id="random-dice"
                    class="w-24 h-24 flex flex-col items-center justify-center relative text-3xl z-50">
                    <img src="{{asset('img/dice-1.png')}}" alt="" id="dice" class="hidden">
                </div>

                <div class="flex flex-col items-center gap-4">
                    <button id="hold-btn"
                        class="bg-zinc-950/20 shadow-lg text-zinc-100 px-3 py-2 rounded-lg hover:scale-105 transition-all duration-500 font-semibold z-50">
                        HOLD
                    </button>
                    <div class="overflow-hidden relative w-full h-full flex flex-col items-center justify-center p-2">
                        <button id="dice-btn"
                            class="bg-zinc-950/20 shadow-lg text-zinc-100 px-3 py-2 rounded-lg hover:scale-105 transition-all duration-500 flex items-center justify-center relative overflow-hidden font-semibold z-40">
                            ROLL DICE
                        </button>
                        <span id="block"
                            class="absolute bg-gradient-to-tr from-zinc-600 to-black w-28 h-10 rounded-lg translate-y-14 transition-all duration-700 delay-200c z-50"></span>
                    </div>
                </div>

            </div>
        </div>
        <!--Buttons End::-->

        <!--Player One Section Begin::-->
        <div id="player-two"
            class="w-full h-full p-4 flex flex-col items-center justify-center transition-all rounded-r-lg from-black/50 to-slate-950/10">
            <h2 id="plr-two-name" class="text-5xl text-center text-neutral-400 font-semibold">
                PLAYER 2
            </h2>
            <div id="plr-2-total" class="mt-8 text-4xl text-neutral-100 font-semibold">
                0
            </div>

            <div
                class="flex flex-col items-center justify-center bg-neutral-950/30 shadow-lg text-neutral-100 rounded-lg p-8 mt-8">
                <span>
                    CURRENT
                </span>
                <span id="plr-2-score" class="text-3xl">
                    0
                </span>
            </div>
        </div>
        <!--Player two Section Begin::-->

    </section>

    <script src="{{asset('js/Play_with_JS/roll-dice-game.js')}}"></script>

</body>

</html>
