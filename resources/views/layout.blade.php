<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <div id="header">
        <h2>Header</h2>
    </div>


    <div id="content">
        

        @section('container')
        <h3>Main Heading of Layout</h3>
        @show()
    </div>
    
    
    <div id="footer">
        <h2>Footer</h2>    
    </div>
</body>
</html>