<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        h1{
            text-align:center;

        }
        input{
            
            width:250px;
            heigh:50px;
            padding:10px;
        }
        div{
            text-align:center;
        }
    </style>
</head>
<body>

<h1>With xss vulnability</h1>
<hr>
    <h1>Enter Code For XSS</h1>
    <form action="xss.php">
        
    <div>
        
    <input type="text" name="data" value='<script>alert("This website is hacked!");</script>'>
    <input type="submit">
    </div>
    </form>
<hr>
<br>
    <h1>Without xss vulnability</h1>
<hr>
    <h1>Enter Code For XSS </h1>
    <form action="noxss.php">
        
    <div>
        
    <input type="text" name="data" value='<script>alert("This website is hacked!");</script>'>
    <input type="submit">
    </div>
    </form>
</body>
</html>