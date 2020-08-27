<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form method="post" action="{{route('updateCategoria', $category->id)}}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome da categoria:</label>
            <input type="text" class="form-control" name="nome" value="{{$category->nome}}"/>
        </div>
        <button type="submit" class="btn btn-primary-outline">Editar categoria</button>
    </form>
</body>