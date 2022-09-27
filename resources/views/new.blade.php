<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
</head>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<body>
<h1 class="text-center text-blue-600 font-bold text-lg mb-5"><a href="/?token={{env('TOKEN')}}">Úložiště VIN</a></h1>
<div class="container w-5/6 mx-auto">
    <form method="post" action="/confirm">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Vlastník auta *</label>
            <input type="text" id="name" name="name" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Martin Dub vole" required>
        </div>
        <div class="mb-6">
            <label for="vin" class="block mb-2 text-sm font-medium text-gray-900">VIN *</label>
            <input type="text" id="vin" name="vin" value="TMBJB7NE7F0082345" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>
        <div class="mb-6">
            <label for="model" class="block mb-2 text-sm font-medium text-gray-900">Model auta (bez výrobce) *</label>
            <input type="text" id="model" name="model" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>
        <div class="mb-6">
            <label for="engine" class="block mb-2 text-sm font-medium text-gray-900">Typ motoru</label>
            <input type="text" id="engine" name="engine" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5">
        </div>
        <div class="mb-6">
            <label for="richtext" class="block mb-2 text-sm font-medium text-gray-900">Poznámky</label>
            <textarea id="richtext" name="richtext" rows="6" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5"></textarea>
        </div>
        <div class="flex items-center h-5">
            <input id="checkVin" type="checkbox" name="checkVin" class="w-4 h-4 bg-gray-50 rounded border border-gray-300" checked>
            <label for="checkVin" class="ml-2 text-sm font-medium text-gray-900 text-red-500">Kontrolovat VIN?</label>
        </div>
        <div class="flex justify-between">
            <button type="submit" class="my-5 text-white bg-green-700 font-bold rounded-lg text-sm px-5 py-2.5 text-center">Přidat do databáze</button>
            <button type="button" class="my-5 text-white bg-orange-700 font-bold rounded-lg text-sm px-5 py-2.5 text-center"><a href="/list">Na seznam</a></button>
        </div>
    </form>
</div>

<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
