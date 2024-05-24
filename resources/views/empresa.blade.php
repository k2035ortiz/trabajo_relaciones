<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



</head>
<body>
    <h1>empresa </h1>

    <form action="{{route('empresa1')}}"  method="POST">    

        @csrf
    
        <label>
            ingrese su usuario:
            <br>
            <input type="text" name="user">
        </label>
        <br><br>
        <label>
            Ingrese el cargo que tiene:
            <br>
            <input type="text" name="post">
        </label>
        <br><br>
        <label>
            Ingrese el numero de integrantes de su equipo :
            <br>
            <input type="int" name="equipment">
        </label>
        <br><br><br>

        <button type="submit">Enviar :</button>
       
   
    </form>
</body>
</html>