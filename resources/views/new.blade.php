<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>My Blog</title>
</head>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
<script src="https://cdn.tailwindcss.com"></script>
<body>
<h1 class="text-center text-bold text-lg">Nove VIN</h1>
<div class="container w-5/6 mx-auto">
    <form method="post" action="/fetch">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="mb-6">
            <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Vlastnik auta</label>
            <input type="text" id="name" name="name" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" placeholder="Martin Dub vole" required>
        </div>
        <div class="mb-6">
            <label for="vin" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">VIN</label>
            <input type="text" id="vin" name="vin" value="TMBJB7NE7F0082345" class="border border-gray-300 text-gray-900 text-sm rounded-lg block w-full p-2.5" required>
        </div>
        <div class="flex items-center h-5">
            <input id="nocheck" type="checkbox" name="nocheck" class="w-4 h-4 bg-gray-50 rounded border border-gray-300">
        </div>
        <label for="nocheck" class="ml-2 text-sm font-medium text-gray-900 text-red-500">NEkontrolovat VIN</label>
        <button type="submit" class="text-white bg-blue-700 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
    </form>
</div>

<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
</body>
