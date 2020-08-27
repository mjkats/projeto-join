@foreach($categoriaProdutos as $categoriaProduto)
    <p>{{$categoriaProduto['nome']}}</p>

    <a href="{{route('showCategoria', $categoriaProduto['id'])}}">Mostrar categoria</a>
    <a href="{{route('deleteCategoria', $categoriaProduto['id'])}}">Deletar categoria</a>
@endforeach