<x-layout>

    <h1>Register</h1>
    <form method="POST" action="/project/public/register">
        @csrf        
        <div>
            <label for="firstname">first name</label>
        <input type="text"  id="firstname" name="firstname"/>
        </div>
        @error('first name')
            {{$message}}
        @enderror
        <div>
            <label for="lastname">last name</label>
        <input type="text" id="lastname" name="lastname"/>
        </div>
        @error('lastname')
            {{$message}}
        @enderror
        <div>
            <label for="email">email</label>
        <input type="email" id="email" name="email"/>
        </div>
        <div>
            <label for="password">password</label>
        <input type="password" id="password" name="password"/>
        </div>
        <div>
            <label for="password_comfirmation">comfirm password</label>
        <input type="password" id="password_confirmation" name="password"/>
        </div>
        <input type="submit" value="Register">
    </form>

</x-layout>