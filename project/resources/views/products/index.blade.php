<x-layout>

    <ul>
    @foreach ($products as $product)
    <li>
        <a href="{{ route('products.show' , ['id'=> $product->id]) }}">
        <h2>{{$product->name}}</h2>
        <p>{{$product->member->name}}</p>
        </a>    
    </li>    
    @endforeach    
    </ul>
    {{$products->links()}}

    
</x-layout>