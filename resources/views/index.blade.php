<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body class="bg-gradient-to-br from-lime-300 to-rose-300 bg-cover bg-no-repeat h-max">
    <p>(@dump($tasks))</p>
    {{-- <body class="bg-gradient-to-br from-lime-600 to-rose-600 bg-cover bg-no-repeat h-max"> --}}
    <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md mt-12">

        <div class="bg-white/[.75] px-4 py-8 sm:rounded-lg sm:px-10 backdrop-blur-[1px] shadow-2xl shadow-white/50">
            <H1 class="text-2xl">Todo list</H1>
            <form class="space-y-6" method="POST" action="../user/login">
                <div>
                    <div class="mt-2">
                        <input id="name" name="name" type="text" placeholder="Add a new task" value="" required class="block w-full rounded-md border-0 py-1.5 px-1 text-gray-100 shadow-sm ring-1 ring-inset ring-gray-900 placeholder:text-gray-300 bg-gray-500/[.25] focus:ring-2 focus:ring-inset focus:ring-purple-600 sm:text-sm sm:leading-6">
                    </div>
                </div>

            </form>
            @foreach ($tasks as $task)
            <div class="p-1 flex content-around px-4 mx-4 py-2 my-2 bg-red">
                <input type="checkbox" name="" id="">
                    @if ($task["is_completed"] == 1)
                    <p class="line-through">
                    @else
                    <p>
                    @endif
                {{$task["description"]}}</p>

                <a href="edit?id=">
                    <img class="h-full w-6 p-auto mr-2" src="/images/edit.svg" alt="">
                </a>
                <button id="delete-knop" class="mx-2">
                    <img class="h-6 w-6 p-auto pointer-events-none" src="/images/trash.png" alt="">

                </button>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>