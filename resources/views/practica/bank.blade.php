<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> banco el buen ahorro </h1> 
   
   <form action="{{route('bank.withdraw')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        Ingrese su cuenta de banco:
        <br>
        <input type="string" name="account">
    </label>
    <br><br>
    <label>
        Ingrese el numero de cuenta:
        <br>
        <input type="number" name="account_number">
    </label>
    <br><br>
    <label>
        Retirara en punto fisico o cajero: 
        <br>
        <input type="text" name="withdraw">
    </label>
    <br><br>
    <label>
        ingrese la cantidad:
        <br>
        <input type="double" name="amount">
    </label>
    <br><br>
    <label>
        por que quiere retirar :
        <br>
        <input type="text" name="description">
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