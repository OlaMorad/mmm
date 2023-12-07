<h1>login</h1>

<form action="{{ route('login') }}" method="post">
    @csrf
    <label for="">email</label>
    <input type="string" name="email" placeholder="Enter your email" class="@error('email')
        is_invalide
    @enderror">
    @error('email')
        <div class="alert alert-danger" style="color: red" >
            {{ $message }}
        </div>
    @enderror
    <br><br>
<label for="">password</label> 
<input type="password" name="password" placeholder="Enter password"><br>
<input type="submit" value="login">
</form>