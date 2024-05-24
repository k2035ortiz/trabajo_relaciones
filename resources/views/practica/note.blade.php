<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> NOTA OBTENIDA </h1> 
   
   <form action="{{route('practica.store1')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        Ingrese el nombre del profesor:
        <br>
        <input type="text" name="teacher">
    </label>
    <br><br>
    <label>
        Ingrese el nombre de la materia:
        <br>
        <input type="text" name="name">
    </label>
    <br><br>
    <label>
        Ingrese la nota OBTENIDA: 
        <br>
        <input type="number" name="note">
    </label>
    <br><br>
    <label>
        la nota es buena y una observacion:
        <br>
        <input type="text" name="descripcion">
    </label>
    <br><br>

    <button type="submit">Enviar boletin :</button>
   

</form>

</body>
</html>


