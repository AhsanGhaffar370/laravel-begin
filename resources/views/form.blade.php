<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Login User</h1>
    <form action=disp-form-data method="post" enctype="multipart/form-data">
        @csrf
        <br/>
        <input type="text" name="name" placeholder="Enter your name"  /> 
        <span class="error_field" style="color: red;">
            @error('name')
                {{$message}}
            @enderror
        </span>
        <br/>

        <input type="email" name="email" placeholder="Enter your Email" />
        <span class="error_field" style="color: red;">
            @error('email')
                {{$message}}
            @enderror
        </span>

        <br/>

        <input type="file" name="doc"  /> 
        <span class="error_field" style="color: red;">
            @error('doc')
                {{$message}}
            @enderror
        </span>
        <br/>
        
        <input type="submit" value="submit" />
    </form>
</body>
</html>