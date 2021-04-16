<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login Form</h1>
    <span class="error_field" style="color: red;">
        {{session('login_error')}}
    </span>
    <span class="error_field" style="color: red;">
        {{session('noaccess')}}
    </span>
    <form action="/userprofile" method="POST">
        @csrf
        <input type="text" name="mail" placeholder="Email" />
        <span class="error_field" style="color: red;">
            @error('mail')
                {{$message}}
            @enderror
        </span>
        <br><br>

        <input type="text" name="pass" placeholder="Password" />
        <span class="error_field" style="color: red;">
            @error('pass')
                {{$message}}
            @enderror
        </span>
        <br><br>
        
        <input type="submit" value="submit" />
        
    </form>
</body>
</html>