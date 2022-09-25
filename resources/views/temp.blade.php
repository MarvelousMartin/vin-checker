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
<ul class="container mx-auto text-sm font-medium text-gray-900 bg-white rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white">
    <li class="py-2 px-4 w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">Vin: {{$vin}}</li>
    <li class="py-2 px-4 w-full border-b border-gray-200 dark:border-gray-600">Rok: {{implode(",", $year)}}</li>
    <li class="py-2 px-4 w-full border-b border-gray-200 dark:border-gray-600">Region: {{$region}}</li>
    <li class="py-2 px-4 w-full border-b border-gray-200 dark:border-gray-600">Výrobce: {{$manufacturer}}</li>
</ul>
</body>
