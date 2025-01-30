<x-layout>

    <ul>
    @foreach ($posts as $post)
    <li>
<<<<<<< Updated upstream
        <a href="/project/public/{{$post->id}}">
        <h2>{{$post->members->name}}</h2>
        <p>{{$post->name}}</p>
=======
        <a href="{{route('posts.show' , ['id'=> $post->id])}}">
        <h2>{{$post->name}}</h2>
        <p>{{$post->member->name}}</p>
>>>>>>> Stashed changes
        </a>    
    </li>    
    @endforeach    
    </ul>
    {{$posts->links()}}

    
</x-layout>