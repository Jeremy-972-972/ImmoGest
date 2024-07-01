<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>immogest</title>
    @rite ("ressource/css/app.css")
</head>


<body>
    <!-- component -->
    <div class="w-screen h-screen flex wr justify-center items-center">
    <div class="container mx-auto max-w-sm w-full p-4 sm:w-1/2">
    <div class="card flex flex-wrap p-10 bg-white rounded-lg shadow-Zxl
        @foreach ($biens as $rowBien)
        <div class="prod-title m-4" >
        <p class="text-2x1 uppercase text-sm text bg-gray-900 font-bold">{{$rowBien->name}}</p>
        <p class="uppercase text-sm text-gray-400">
            {{$categories[$rowBien->category_id-1]->name}}
        </p>
    </div>
    <div class="prod img">
        <img src="{{$rowBien->image}}"
            class="w-full object-cover object-center" />
    </div>
    <div class="prod info grip gap-10">
    <div>
    <span>
        <a href="{{route('show' , $rowBien)}}">detail</a>
    </span>
    </div>
    <div class="flex flex-col sd:flex-row justifiy-between items-center text-gray-900">
        <p class="font-bold text-xl"{{number_format ($rowBien->price,2)}} $</p>

    </div>
    </div>
    @endforeach
    </div>
    </div>
            
</body>
</html>