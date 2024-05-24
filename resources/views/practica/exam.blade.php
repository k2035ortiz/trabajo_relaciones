<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> es hora del examen </h1> 
   
   <form action="{{route('exam.examen')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        Ingrese su nombre:
        <br>
        <input type="string" name="name">
    </label>
    <br><br>
    <label>
        que tan preparado se ciente:
        <br>
        <input type="text" name="description">
    </label>
    <br><br>

    <button type="submit">enviar respuesta :</button>
   

</form>

</body>
</html>