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
    <form action="userform" method="POST">
        @csrf
        <br/>
        <input type="email" name="email" placeholder="Enter your Email" />
        <br/>
        <input type="text" name="password" placeholder="Enter your Password" /> 
        <br/>
        <input type="submit" value="submit" />
    </form>
</body>
</html>