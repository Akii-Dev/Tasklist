<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}">
    @vite('resources/css/app.css')
    <title>Document</title>
    <script src="../js/script.js" defer></script>
</head>

<body class="bg-gradient-to-br from-lime-300 to-rose-300 bg-cover bg-no-repeat h-max">
    <p>(@dump($tasks))</p>
    {{-- <body class="bg-gradient-to-br from-lime-600 to-rose-600 bg-cover bg-no-repeat h-max"> --}}
    <div class="mt-8 sm:mx-auto w-full sm:w-3/5 p-12">

        <div class="bg-white/[.75] py-8 rounded px-10 backdrop-blur-[1px] shadow-2xl">
            <H1 class="text-3xl font-medium">Todo list</H1>
            <form class="space-y-6" method="POST" action="create">
                @csrf <!-- {{ csrf_field() }} -->
                <div>
                    <div class="mt-2">
                        <input id="description" name="description" type="text" placeholder="Add a new task"
                            value="" required
                            class="h-16 block w-full rounded text-xl border-0 py-1.5 px-1 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-900 sm:leading-6">
                    </div>
                </div>

            </form>
            {{-- gebruik js voor de checkbox items  --}}
            @foreach ($tasks as $task)
                <div class="p-1 flex justify-between px-4 mx-4 py-2 my-4 bg-red bg-red-100 rounded shadow-sm">
                    <div class="flex">
                        <input class="accent-pink-500 p-4 m-2" type="checkbox" name="{{$task["id"]}}" id="{{$task["id"]}}">
                        @if ($task['is_completed'] == 1)
                            <p class="line-through">
                            @else
                            <p>
                        @endif
                        {{ $task['description'] }}</p>
                    </div>
                    <div class="flex items-center justify-between py-auto">
                        <a href="edit/{{ $task['id'] }}">
                            <img class="h-full w-6 p-auto mr-2" src="/images/edit.svg" alt="">
                        </a>
                        <form action="destroy/{{ $task['id'] }}" method="POST">
                            @csrf
                            <button>
                                <img class="h-6 w-6 p-auto pointer-events-none" src="/images/trash.png" alt="">

                            </button>


                        </form>

                        {{-- </button> --}}
                    </div>
                </div>
            @endforeach
            <div class="flex">
            <button class="bg-rose-400 hover:bg-rose-600 text-white font-bold py-2 px-4 rounded mx-4">
                Clear completed
              </button>
              <button class="bg-lime-500 hover:bg-lime-600 text-white font-bold py-2 px-4 rounded mx-4" id="deleteButton" onclick="deleteSelected()">
                Delete selected 
              </button>
            </div>
        </div>
    </div>
</body>

</html>
