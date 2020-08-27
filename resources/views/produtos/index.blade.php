@foreach($produtos as $produto)
    <p>Nome do produto: {{$produto->nome}}</p>
    <p>Valor do produto: {{$produto->valor}}</p>
    <!-- <p>Categoria do produto: {{$produto->}}</p> -->

    <a href="{{route('showProduto', $produto->id)}}">Mostrar o produto</a>
    <a href="{{route('deleteProduto', $produto->id)}}">Deletar o produto</a>
@endforeach