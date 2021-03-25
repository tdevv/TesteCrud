<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD>RELATORIO</title>
    <link rel="stylesheet" href="{{url('assets/bootstrap/css/bootstrap.min.css')}}">
    <style>
        a:link{
            text-decoration:none;
        }
        a{
            color: inherit;
        }
        .btnNew{
            background-color: forestgreen;
            color: white;
            width:80px;
            height:40px;
            border-radius: 15px;
            -moz-border-radius: 15px;
            -webkit-border-radius: 15px;
            text-decoration:none;
        }

        .btn1{
            background-color: #0c63e4;
            color: white;
            width:80px;
            height:40px;
            border-radius: 15px;
            -moz-border-radius: 15px;
            -webkit-border-radius: 15px;
            text-decoration:none;
        }
        .btn1:houver{

        }
        .btnDel{
            background-color: red;
            color: white;
            width:80px;
            height:40px;
            border-radius: 15px;
            -moz-border-radius: 15px;
            -webkit-border-radius: 15px;
            text-decoration:none;
        }
    </style>
</head>
<body>
    <h1 class="text-center">Relatorio de despesas </h1>


    <div class="col-8 m-auto">
        <table class="table">
            <thead>
            <tr style="font-size: 1.2em">

                <th scope="col">ID</th>
                <th scope="col">Descrição</th>
                <th scope="col">Data</th>
                <th scope="col">Comprovante</th>
                <th scope="col">Usuario</th>
                <th scope="col">Valor</th>
                <th scope="col">Apagar</th>
                <th scope="col">Editar</th>

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

                <td><button class="btn1">
                        <a href="{{ route('editar_registro',['id'=>$crud->id])}}"
                           title="Editar {{$crud->name}}">Editar</a></button></td>

                <td><button class="btnDel"><a href="{{ route('excluir_registro',['id'=>$crud->id])}}"
                           title="Excluir {{$crud->name}}">Excluir</a></button></td></tr>
            @endforeach

            <button class="btnNew" href="#">Novo</button>

            </tbody>
        </table>

    </div>

</body>
</html>
