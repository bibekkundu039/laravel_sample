<x-layout>

<div class="flex flex-col items-center justify-right">
            <ul>
                <li class="flex-col justify-content-right"><a href="/">Home</a></li>
                <li class="flex-col justify-content-right"><a href="/about">About Us</a></li>
            </ul>
        </div>
        <div class="flex flex-col items-center justify-center min-h-screen">
            <h1 class="text-3xl bg-blue-500 p-4 rounded-xl">Teas page</h1>
            <h2 class="text-3xl bg-white-500 p-4 rounded-xl">All teas are </h2>
            <ul>
                <li>
                @foreach($teas as $tea)
                    <a href="/teas/{{$tea['id']}}">
                    <p>{{ $tea['id'] }} | Name: {{ $tea['name'] }} | Price: {{ $tea['price'] }} </p>
                    </a>
                @endforeach
                </li>
            
            </ul>
        </div>

</x-layout>