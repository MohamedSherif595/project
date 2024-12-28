<x-layout>

    <ul>
    @foreach ($posts as $post)
    <li>
        <a href="/project/public/{{$post->id}}">
        <h2>{{$post->members->name}}</h2>
        <p>{{$post->name}}</p>
        </a>    
    </li>    
    @endforeach    
    </ul>
    {{$posts->links()}}

    
</x-layout>