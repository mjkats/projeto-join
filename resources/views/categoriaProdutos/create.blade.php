<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
    <form method="post" action="{{route('createNewCategoria')}}">
        @csrf
        <div class="form-group">
            <label for="nome">Nome da categoria:</label>
            <input type="text" class="form-control" name="nome"/>
        </div>
        <button type="submit" class="btn btn-primary-outline">Adicionar categoria</button>
    </form>
</body>