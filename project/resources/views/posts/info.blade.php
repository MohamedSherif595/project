<x-layout>
    <h1>User Information</h1>
        <ul>
            
            <li>
            <h2> {{$post->member->name}} </h2>
            <h3> {{$post->member->email}} </h3>
                <h3> {{$post->name}}</h3>
            </li>
        </ul>

</x-layout>