<x-layout>

    <h1>Register</h1>
    <form method="POST" action="{{route('register')}}">
    @csrf

    <!-- First Name -->
    <label for="firstname">First Name</label>
    <input type="text" name="firstname" id="firstname" value="{{ old('firstname') }}" required>
    @error('first_name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <!-- Last Name -->
    <label for="lastname">last Name</label>
    <input type="text" name="lastname" id="lastname" value="{{ old('lastname') }}" required>
    @error('last_name')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <!-- Email -->
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{ old('email') }}" required>
    @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <!-- Password -->
    <label for="password">Password</label>
    <input type="password" id="password" name="password" required>
    @error('password')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <!-- Confirm Password -->
    <label for="confirmpassword">Confirm Your Password</label>
    <input type="password"  id="confirmpassword" name="password_confirmation" required>
    @error('password_confirmation')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror

    <button type="submit">Register</button>
</form>

</x-layout>