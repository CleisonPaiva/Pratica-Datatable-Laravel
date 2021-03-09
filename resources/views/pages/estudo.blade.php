@extends('layout')

@section('head')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css"/>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" charset="utf8" src="/js/jquery.dataTables.js"></script>
@endsection
@section('title')
    Inicio
@endsection
@section('cabecalho')
    Inicio
@endsection
@section('corpo')


    <div class="container">

        <a href="{{route('estudante.create')}}">Criar Estudante</a>
        {{--    <a href="{{route('aula.create')}}" class="btn btn-dark mb-2">Criar Usuario</a>--}}


        <table id="tabela" class="table table-bordered" style="width: 100%">
            <thead>
            <tr>
                <th>Nome:</th>
                <th>Sobrenome:</th>
            </tr>
            </thead>
        </table>
    </div>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#tabela').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {url: '{{ url("estudante/datatable") }}'},
                {{--"ajax":{{route('estudante/datatable')}},--}}
                "columns": [
                    {"data": "nome"},
                    {"data": "sobrenome"}
                ]
            });
        });
    </script>
@endsection

