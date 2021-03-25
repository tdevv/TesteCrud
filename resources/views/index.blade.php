<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD>NOVO</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>

<h1 class="text-center">Insira nova despesa</h1>
<form action="{{route('salvar_registro')}}" method="post">
    @csrf
    <div><label for="id">Id</label>
        <input class="form-control" type="text" name="id" title="id" id="id"></div>

    <div><label for="description">descrição</label>
        <input class="form-control" type="text" title="text" name="description" id="description"></div>

    <div><label for="date">Data</label>
        <input class="form-control" type="date" name="date"title="date"  id="date"></div>

    <div><label for="file">file</label>
        <input class="form-control" type="file" name="file" title="file" id="file"></div>

    <div><label for="user">Usuario</label>
        <input class="form-control" type="text" name='user' title="user" id="user"></div>

    <div><label for="price">Valor</label>
        <input class="form-control" type="number" name="price" title="price" id="price"></div>

    <button type="submit"> Enviar</button>


</form>

</body>
</html>
