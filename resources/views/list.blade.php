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
@php
$counter = 1;
@endphp
@if(count($owners) == 0)
    <img src="https://c.tenor.com/dG_tr_lmYHkAAAAC/looking-around.gif" class="w-1/2 mx-auto mt-3" alt="">
@else
<div id="accordion-collapse" data-accordion="collapse" class="container mx-auto">
    <a href="/?token=@php echo env('TOKEN')@endphp" class="flex my-2">
        <button type="button" class="w-4/5 mx-auto text-black bg-yellow-500 hover:bg-yellow-400 font-medium rounded-xl text-sm px-5 py-2.5 text-center mb-2">
            Domů <i class="fa-solid fa-home"></i>
        </button>
    </a>
    @foreach($owners as $owner)
            <h2 id="accordion-collapse-heading-{{$counter}}">
                <button type="button" class="flex items-center justify-between w-11/12 mx-auto p-5 my-2 font-medium text-left rounded-xl bg-gray-900 text-white" data-accordion-target="#accordion-collapse-body-{{$counter}}" aria-expanded="false" aria-controls="accordion-collapse-body-{{$counter}}">
                    <span>{{ $owner->name }}</span>
                    <svg data-accordion-icon="" class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                </button>
            </h2>
            <div id="accordion-collapse-body-{{$counter}}" aria-labelledby="accordion-collapse-heading-{{$counter}}" class="w-11/12 mx-auto hidden">
                <div class="p-3 font-light border border-b-0 border-gray-200 bg-gray-900">
                    <div class="inline-flex">
                        <p class="mb-2 text-white">Vin: <span id="vinToCopy" class="font-bold">{{ $owner->vin }}</span></p> <button type="button" onclick="CopyMe('{{ $owner->vin }}')" class="text-white bg-yellow-600 font-medium rounded-lg text-sm px-3 py-1 ml-3 mb-2"><i class="fa-solid fa-copy"></i></button>
                    </div>
                    <p class="mb-2 text-white">Značka auta: <span class="font-bold">{{ $owner->manufacturer }}</span></p>
                    <p class="mb-2 text-white">Model: <span class="font-bold">{{$owner->model}}</span></p>
                    <p class="mb-2 text-white">Rok výroby: {{ $owner->year }} </p>
                    <p class="mb-2 text-white">Typ motoru: <span class="font-bold">{{ $owner->engine }}</span> </p>
                    <p class="mb-2 text-white">Poznámky:<br> <span class="font-bold">{{ $owner->note }}</span></p>
                    <br />
                    <p class="mb-2 text-white">Zkontrolovaný VIN: <span class="font-bold">@php echo $owner->checkVin ? 'ANO' : 'NE'@endphp</span> </p>
                    <p class="text-right">
                        <a href="/edit?name={{$owner->name}}&vin={{$owner->vin}}&manufacturer={{$owner->manufacturer}}&model={{$owner->model}}&engine={{$owner->engine}}&year={{$owner->year}}&note={{$owner->note}}"><button type="button" onclick="" class="text-white bg-sky-600 font-medium rounded-lg text-sm px-4 py-2 ml-3"><i class="fa-solid fa-pencil"></i></button></a>
                        <a href="/drop/{{$owner->vin}}"><button type="button" class="text-white bg-red-600 font-medium rounded-lg text-sm px-4 py-2 ml-3"><i class="fa-solid fa-trash-can"></i></button></a>
                    </p>
                </div>
            </div>
        @php
        $counter++
        @endphp
    @endforeach
</div>
@endif
<script>
    function CopyMe(TextToCopy) {
        var TempText = document.createElement("input");
        TempText.value = TextToCopy;
        document.body.appendChild(TempText);
        TempText.select();

        document.execCommand("copy");
        document.body.removeChild(TempText);
    }
</script>
</body>
