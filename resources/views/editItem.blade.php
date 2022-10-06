<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
</head>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="https://cdn.tailwindcss.com/"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"/>
<body>
<div class="container w-5/6 mx-auto">
    <form method="post" action="/update">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Vlastník auta *</label>
            <input type="text" id="name" name="name" value="{{$name}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Martin Dub vole" required>
        </div>
        <div class="mb-6">
            <label for="vin" class="block mb-2 text-sm font-medium text-gray-900">VIN *</label>
            <input type="text" id="vin" name="vin" value="{{$vin}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>
        <input type="hidden" id="manufacturer" name="manufacturer" value="{{$manufacturer}}">
        <div class="mb-6">
            <label for="model" class="block mb-2 text-sm font-medium text-gray-900">Model auta (bez výrobce) *</label>
            <input type="text" id="model" name="model" value="{{$model}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>
        <input type="hidden" id="year" name="year" value="{{$year}}">
        <div class="mb-6">
            <label for="engine" class="block mb-2 text-sm font-medium text-gray-900">Typ motoru</label>
            <input type="text" id="engine" name="engine" value="{{$engine}}" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="mb-6">
            <label for="note" class="block mb-2 text-sm font-medium text-gray-900">Poznámky</label>
            <textarea id="note" name="note" rows="6" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">{{$note}}</textarea>
        </div>
        <div class="flex justify-between">
            <button type="submit" class="my-5 text-white bg-green-700 font-bold rounded-lg text-sm px-5 py-2.5 text-center">Aktualizovat</button>
            <button type="button" class="my-5 text-white bg-orange-700 font-bold rounded-lg text-sm px-5 py-2.5 text-center"><a href="/list">Zrušit změny</a></button>
        </div>
    </form>
</div>

<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>

