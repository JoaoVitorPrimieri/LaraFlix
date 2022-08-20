<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atores</title>
</head>

<body>
    <ul>
        @foreach ($atores as $ator)
            <li>{{ $ator->nome }}</li>
            <li>{{ $ator->nacionalidade }}</li>
            <li>{{ $ator->nome }}</li>
            <li>{{ date('d/m/Y', strtotime($ator->dt_nascimento)) }}</li>
            <li>{{ date('d/m/Y', strtotime($ator->inicio_atividades)) }}</li>
            <br />
        @endforeach
    </ul>
</body>

</html>
