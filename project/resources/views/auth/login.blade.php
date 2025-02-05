<x-layout>

    <h1>LOG IN</h1>
    <form method="POST" action="{{route('login')}}">
        @csrf    
        <div>
            <label for="email">email</label>
        <input type="email" id="email" name="email"/>
        </div>
        <div>
            <label for="password">password</label>
        <input type="password" id="password" name="password"/>
        </div>
        <input type="submit" value="LOG">
    </form>

</x-layout>