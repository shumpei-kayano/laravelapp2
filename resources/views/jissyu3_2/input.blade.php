<html>
<head>
   <title>Jissyu/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
    <h1>Blade/Index</h1>
    <p>{{ msg }}</p>
    <form method="POST" action="jissyu4">
        <table>
        @csrf
        <tr>
            <th>name:</th>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <th>email:</th>
            <td><input type="text" name="mail"></td>
        </tr>
        <tr>
            <th>age:</th>
            <td><input type="text" name="age"></td>
        </tr>
        <tr>
            <th></th>
            <td><input type="submit"></td>
    </form>
 </body>
</html>
