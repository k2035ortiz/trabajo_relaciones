<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>



</head>
<body>
    <h1>citas</h1>

    <form action="{{route('semana1')}}"  method="POST">    

        @csrf
    
        <label>
            Ingrese cuantas citas quiere:
            <br>
            <input type="text" name="quotes">
        </label>
        <br><br>
        <label>
            Ingrese el dia de la cita :
            <br>
            <input type="text" name="days">
        </label>
        <br><br>
        <label>
            Ingrese la hora de la cita :
            <br>
            <input type="int" name="hour">
        </label>
        <br><br><br>

        <button type="submit">Enviar :</button>
       
   
    </form>
</body>
</html>