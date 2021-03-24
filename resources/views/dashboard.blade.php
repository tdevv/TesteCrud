<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cadastro') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

                <h1 class="text-center">Insira nova despesa</h1>

                <form action="{{route('salvar_registro')}}" method="post">
                    @csrf
                    <div><label for="id">Id</label>
                        <input type="text" name="id" title="id" id="id"></div>

                    <div><label for="description">descrição</label>
                        <input type="text" title="text" name="description" id="description"></div>

                    <div><label for="date">Data</label>
                        <input type="date" name="date"title="date"  id="date"></div>

                    <div><label for="file">file</label>
                        <input type="file" name="file" title="file" id="file"></div>

                    <div><label for="user">Usuario</label>
                        <input type="text" name='user' title="user" id="user"></div>

                    <div><label for="price">Valor</label>
                        <input type="number" name="price" title="price" id="price"></div>

                    <button type="submit"> Enviar</button>

                </form>
        </div>
    </div>
</x-app-layout>
