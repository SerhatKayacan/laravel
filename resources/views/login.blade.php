<h1>Login</h1>
@foreach($errors->all() as $error)
<li>{{$error}}</li>
@endforeach
<form action="/login" method="post"> <!--  submit edildiğinde /login sekmesine gönder -->
    @csrf
    <input type="text" name="user">
    <input type="password" name="password">
    <button type="submit">Login</button>
</form>