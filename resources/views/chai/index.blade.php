<x-layout>
    @foreach ($menu as $i)
        <ul>
            <li><a href="chai/{{ $i['id'] }}">{{ $i['name'] }}</a></li>
        </ul> 
    @endforeach
</x-layout>