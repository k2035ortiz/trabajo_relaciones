<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse String</title>
</head>
<body>
    <h1>Reverse String</h1>
    <form method="post" action="{{ route('reverseString') }}">
        @csrf
        <label for="input_string">Enter a string:</label><br>
        <input type="text" id="input_string" name="input_string"><br><br>
        <button type="submit">Reverse</button>
    </form>
</body>
</html>