<!doctype html>
<html id="html" lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="image/svg+xml" href="./public/a-man.jpeg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>{{$title}}</title>
    @vite('resources/css/app.css')
</head>

<body id="body" class="h-full relative  flex scroll-smooth z-0">

<div class="w-full h-full flex justify-center bg-zinc-50 dark:bg-black relative">
    <div class="flex flex-col w-full h-full max-w-4xl lg:max-w-6xl xl:max-w-7xl bg-white dark:bg-zinc-900 ">

        <div class="max-[280px]:px-3 px-9 md:px-32">
            <div class="">

                <x-layouts.headr>

                </x-layouts.headr>

                <div id="slot">
                    {{$slot}}
                </div>

            </div>

            <div id="additionalSlot">
                {{$additionalSlot}}
            </div>

        </div>

        <x-layouts.footer>

        </x-layouts.footer>

    </div>
</div>



@vite('resources/js/app.js')
</body>

</html>
