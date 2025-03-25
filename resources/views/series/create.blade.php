<!DOCTYPE html>
<html lang="en">

<head>
    <title>Criando series</title>
</head>

<body>
    <h1>Criando uma serie</h1>
    <form action="/series/store" method="post">
        @csrf
        <input type="text" name="titulo">
        <button type="submit">Enviar</button>
    </form>
</body>

</html>
