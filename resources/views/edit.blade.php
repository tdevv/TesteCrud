<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD>EDIT</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>

<h1 class="text-center">Atualize a despesa</h1>

<form action="{{route('atualizar_registro', ['id'=> $crud->id])}}" method="post">
    @csrf
    <div><label for="id">Id</label>
        <input type="text" name="id" title="id" id="id" value="{{$crud->id}}"></div>

    <div><label for="description">descrição</label>
        <input type="text" title="text" name="description" id="description" value="{{$crud->description}}"></div>

    <div><label for="date">Data</label>
        <input type="date" name="date" title="date"  id="date" value="{{$crud->date}}"></div>

    <div><label for="file">file</label>
        <input type="file" name="file" title="file" id="file" value="{{$crud->file}}"></div>

    <div><label for="user">Usuario</label>
        <input type="text" name='user' title="user" id="user" value="{{$crud->user}}"></div>

    <div><label for="price">Valor</label>
        <input type="number" name="price" title="price" id="price" value="{{$crud->price}}"></div>

    <button type="submit"> Atualizar</button>

    <td><a href="{{ route('atualizar_registro',['id'=>$crud->id])}}"
           title="Atualizar">Excluir</a></td>
</form>

</body>
</html>
