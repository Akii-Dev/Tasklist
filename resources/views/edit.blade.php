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
    <div class="w-96 flex mx-auto my-32 mb-96">
    <div class="bg-white/[.75] py-8 mx-auto  sm:rounded-lg backdrop-blur-[1px] shadow-2xl shadow-white/50 p-8">
        <h1 class="text-3xl">Edit Task</h1>
        <form action="/update/{{$task["id"]}}" method="POST">
            @csrf
            <div class="flex"> 
        <input id="description" name="description" type="text" placeholder="Add a new task" value="{{$task["description"]}}"class="">
        <input class="bg-red-500" type="button" value="submit">
    </div>
    </form>
        <a href="/" class="mt-12 bg-rose-300 rounded-sm p-1 m-1 text-white shadow-xl">Back</a>
    </div>
</div>

</body>
</html>