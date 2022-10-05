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
<div id="accordion-collapse" data-accordion="open" class="w-11/12 mx-auto pt-2">
    <h2 id="accordion-collapse-heading-1">
        <button type="button" class="flex items-center justify-between w-full p-5 font-medium text-left rounded-t-xl bg-gray-900 text-white" data-accordion-target="#accordion-collapse-body-1" aria-expanded="true" aria-controls="accordion-collapse-body-1">
            <span>{{ $name }}</span>
            <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
        </button>
    </h2>
    <div id="accordion-collapse-body-1" class="" aria-labelledby="accordion-collapse-heading-1">
        <div class="p-5 font-light border border-b-0 border-gray-200 bg-gray-900">
            <div class="inline-flex">
                <p class="mb-2 text-white">Vin: <span id="vinToCopy" class="font-bold">{{ $vin }}</span></p>
            </div>
            <p class="mb-2 text-white">Značka auta: <span class="font-bold">{{ $manufacturer }}</span></p>
            <p class="mb-2 text-white">Model: <span class="font-bold">{{$model}}</span></p>
            <p class="mb-2 text-white">Motor: <span class="font-bold">{{$engine}}</span></p>
            <p class="mb-2 text-white">Rok výroby: {{ implode(",", $year) }} </p>
            <p class="mb-2 text-white">Poznámky:<br> <span class="font-bold">{{$note}}</span></p>
        </div>
    </div>
    <a href="/fetch?name={{$name}}&vin={{$vin}}&manufacturer={{$manufacturer}}&model={{$model}}&engine={{$engine}}&year={{ implode(",", $year) }}&note={{$note}}&checkVin={{$checkVin}}"><button class="block w-3/5 mx-auto my-5 text-white bg-green-900 font-bold rounded-lg text-sm px-5 py-2.5 text-center">Vše OK, přidat do seznamu</button></a>
</div>
</body>
