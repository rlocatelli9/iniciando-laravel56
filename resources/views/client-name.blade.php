<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dados cliente</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<p>"Cliente: {{ $id }}, {{ $name }}";</p>
<p>{{ 2+2 }}</p>
<p>{{$name . " Macedo"}}</p>
<!--condicao ternaria-->
<p>{{ $conteudo or 'Variável não existe!'}}</p>
<p>{!! "<a href='#'>Link</a>"!!}</p>
</body>
</html>
