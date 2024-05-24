<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> registro para que el hospital lo atienda </h1> 
   
   <form action="{{route('hospital.data')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        Ingrese el si es privado o subsidiado:
        <br>
        <input type="string" name="service">
    </label>
    <br><br>
    <label>
        cual es el motivo por el cual asiste:
        <br>
        <input type="text" name="reason">
    </label>
    <br><br>
    <label>
        Ingrese el nombre del paciente: 
        <br>
        <input type="text" name="name">
    </label>
    <br><br>
    <label>
        identificacion :
        <br>
        <input type="number" name="id_number">
    </label>
    <br><br>
    <label>
        motivo posible por el cual este enfermo :
        <br>
        <input type="text" name="descripcion">
    </label>
    <br><br>
   
    <label>
        ingrese la fecha:
        <br>
        <input type="date" name="date_exp">
    </label>
    <br><br>

    <button type="submit">enviar registro :</button>
   

</form>

</body>
</html>
