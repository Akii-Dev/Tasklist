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
    {{-- <p>(@dump($task))</p> --}}
    <div
        class="bg-white/[.75] py-8 mx-auto  sm:rounded-lg backdrop-blur-[1px] shadow-2xl shadow-white/50 p-8 w-2/3 my-48">
        <h1 class="text-3xl pb-8">Edit Task</h1>
        <form action="/update/{{ $task['id'] }}" method="POST">
            @csrf
            <div class="mt-2 flex w-full mx-auto mb-12">
                <input id="description" name="description" type="text" placeholder="Add a new task"
                    value="{{ $task['description'] }}"class="h-12 block w-full rounded-l text-xl outline outline-1 py-1.5 px-1 text-gray-900 shadow-sm  sm:leading-6" required>
                <button class="bg-lime-300 rounded-r outline outline-1 outline-lime-600 max-h-16 px-4">
                    <img class="h-10" src="/images/submit.svg" alt="">
                </button>
            </div>
            <div class="mt-4">
        </form>
        <a href="/" class="mt-16 p-2 bg-rose-300 rounded-sm m-1 text-white shadow-xl">Back</a>
    </div>
    </div>
    </div>

</body>

</html>
