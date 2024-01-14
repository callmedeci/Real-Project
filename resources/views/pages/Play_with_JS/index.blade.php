<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
    <link rel="icon" type="image/svg" href="{{  asset('svgs/game.svg') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome Page</title>
   @vite('resources/css/app.css')
</head>

<body class="bg-zinc-800 w-full min-h-screen flex flex-col items-center justify-center">




  <ul class="flex flex-col gap-2 bg-zinc-700/50 rounded-lg p-4">
    <li>
      <a href="{{route('guessGame')}}"
        class="text-lime-400 hover:text-lime-300 font-semibold transition-all duration-500">
        1. Guess Number Game (There is no way back)
      </a>
    </li>
    <li>
      <a href="{{route('showCards')}}"
        class="text-rose-400 hover:text-rose-300 font-semibold transition-all duration-500">
        2. showCards (There is no way back)
      </a>
    </li>
    <li>
      <a href="{{route('roll-dice-game')}}"
        class="text-amber-400 hover:text-amber-300 font-semibold transition-all duration-500">
        3. Roll Dice Game (There is no way back)
      </a>
    </li>
  </ul>
</body>

</html>
