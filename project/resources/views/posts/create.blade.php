<x-layout>

    <h1>create</h1>
    <form method="POST" action="/project/public/post">
        @csrf        
        <div>
            <label for="PostName">Post Name</label>
        <input type="text" name= "name" id="name" placeholder="Enter The Name">
        </div>
        @error('name')
            {{$message}}
        @enderror
        <input type="submit" placeholder="Save">
    </form>
</x-layout>