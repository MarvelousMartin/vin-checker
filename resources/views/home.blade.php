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
    <div class="container mx-auto mt-3">
        <a href="/new" class="flex">
            <button type="button" class="w-3/4 mx-auto text-black bg-yellow-500 hover:bg-yellow-400 font-medium rounded-xl text-sm px-5 py-2.5 text-center mb-2">
                Přidat položku
            </button>
        </a>
        <br>
        <a href="/list" class="flex">
            <button type="button" class="w-3/4 mx-auto text-white bg-purple-700 hover:bg-purple-800 font-medium rounded-xl text-sm px-5 py-2.5 text-center mb-2">
                Zobrazit databázi
                <span class="inline-flex justify-center items-center ml-2 w-4 h-4 text-xs font-semibold text-blue-800 bg-blue-200 rounded-full">
                {{count($owners)}}
              </span>
            </button>
        </a>
    </div>
</body>
