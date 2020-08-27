@foreach($produtos as $produto)
    <p>{{$produto['nome']}}</p>
    <p>{{$produto['valor']}}</p>

    <a href="{{route('showProduto', $produto['id'])}}">Mostrar o produto</a>
    <a href="{{route('deleteProduto', $produto['id'])}}">Deletar o produto</a>
@endforeach