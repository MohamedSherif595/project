<x-layout>
    <h1>Product Information</h1>
        <ul>
            
            <li>
            <h2> {{$product->member->name}} </h2>
            <h3> {{$product->member->email}} </h3>
                <h3> {{$product->name}}</h3>
                <h3> {{$product->price}}</h3>
            </li>
        </ul>
        <p><img src="{{ Storage::url($product->image) }}" alt="Product Image"></p>

</x-layout>