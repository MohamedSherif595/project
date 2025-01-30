<x-layout>

    <ul>
    @foreach ($products as $product)
    <li>
        <a href="/project/public/product/{{$product->id}}">
        <h2>{{$product->name}}</h2>
        <p>{{$product->price}}</p>
        <p>{{$product->member->name}}</p>
        </a>    
    </li>    
    @endforeach    
    </ul>
    {{$posts->links()}}

    
</x-layout>