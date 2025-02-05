<x-layout>

    <ul>
    @foreach ($posts as $post)
    <li>
        <a href="{{route('posts.show' , ['id'=> $post->id])}}">
        <h2>{{$post->name}}</h2>
        <p>{{$post->member->name}}</p>
        </a>    
    </li>    
    @endforeach    
    </ul>
    {{$posts->links()}}

    
</x-layout>