<h1>
    Register
</h1>
<form action="{{url("/register")}}" method="post">
    @csrf
    <label>Name</label> <br>
    <input type="text" name="name" placeholder="Name"/> <br>
    <span>  @error('name')
        {{$message}}
        @enderror</span>
   
    <br> <br>
    <label>Email</label><br>
    <input type="email" name="email" placeholder="Email"/><br>
    <span>  @error('email')
        {{$message}}
        @enderror</span><br><br>
    <label>Password</label><br>
    <input type="password" name="password" placeholder="password"/><br>
    <span>  @error('password')
        {{$message}}
        @enderror</span><br><br>
    <label>Confirm Password</label><br>
    <input type="password" name="password_confirmation" placeholder="Confirm Password"><br>
    <span>  @error('password_confirmation')
        {{$message}}
        @enderror</span><br><br>
<button>Submit</button>
    
</form>