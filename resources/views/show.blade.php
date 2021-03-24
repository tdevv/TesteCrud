<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD>RELATORIO</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <h1 class="text-center">Relatorio de despesas</h1>
    <div class="col-8 m-auto">
        <table class="table">
            <thead>
            <tr style="font-size: 1.2em">

                <th scope="col">id</th>
                <th scope="col">description</th>
                <th scope="col">date</th>
                <th scope="col">file</th>
                <th scope="col">user</th>
                <th scope="col">price</th>
            </tr>
            </thead>

            <tbody>
            @foreach($crud as $crud)
            <tr>

                <td>{{$crud->id}}</td>
                <td>{{$crud->description}}</td>
                <td>{{$crud->date}}</td>
                <td>{{$crud->file}}</td>
                <td>{{$crud->user}}</td>
                <td>{{$crud->price}}</td>

                <td><a href="{{ route('editar_registro',['id'=>$crud->id])}}"
                       title="Editar {{$crud->name}}">Editar</a></td>

                <td><a href="{{ route('excluir_registro',['id'=>$crud->id])}}"
                       title="Excluir {{$crud->name}}">Excluir</a></td>

            </tr>
            @endforeach
            </tbody>
        </table>

    </div>

</body>
</html>
