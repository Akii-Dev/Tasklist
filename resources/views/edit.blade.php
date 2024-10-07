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
    <p>(@dump($task))</p>
    <div class="w-96 flex mx-auto">
    <div class="bg-white/[.75] px-4 py-8 sm:rounded-lg sm:px-10 backdrop-blur-[1px] shadow-2xl shadow-white/50 p-8">
        <h1 class="text-3xl">Edit Task</h1>
        <form action="POST" action="update" >
        <input id="description" name="description" type="text" placeholder="Add a new task" value="{{$task["description"]}}"class="">
    </form>
        <a href="/" class="bg-rose-300 rounded-sm p-1 m-1 text-white shadow-xl">Back</a>
    </div>
</div>
</body>
</html>