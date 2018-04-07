<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Condicionais</title>
</head>
<body>
    <?php $num = 20; ?>
    <p>Exemplo d estrutura condicional</p>
    @if($num < 20)
        <p>Número é menor que 20</p>
    @elseif($num == 20)
        <p>Número é igual a 20</p>
    @else
        <p>Número é maior que 20</p>
    @endif

    <br/>

    <p>Exemplo de estrutura de repetição</p>
    <p>====FOR====</p>

    @for($i = 0; $i <= 10; $i++)
        <p>Valor: {{$i}}</p>
    @endfor

    <?php $k = 0; ?>

    <p>===WHILE====</p>

    @while($k < 30)
        <p>Valor: {{$k}}</p>
        <?php $k++; ?>
    @endwhile

    <p>====FOREACH====</p>

    <?php $array = [1,2,3,4,5]; ?>
    @foreach($array as $value)
        <p>Chave: {{ $loop->index }}, Valor: {{$value}}</p>
    @endforeach

    <p>====FORELSE====</p>

    <?php $arrays = [] ?>
    @forelse($arrays as $values)
        <p>Chave: {{ $loop->index }}, Valor: {{$values}}</p>
        @empty
        <p>Nenhum elemento no array</p>
    @endforelse

</body>
</html>