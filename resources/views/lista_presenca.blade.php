@extends('layouts.template')

@section('content')
    <div id="tabela">
        <div class="header">
            <h3>Lista de Presença</h3>
        </div>
        <div id="table">
            <table id="presenca" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Matrícula</th>
                        <th>Data/ Hora</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($lista_presenca as $presenca)
                        <tr>
                            <td>{{$presenca->name}}</td>
                            <td>{{$presenca->matricula}}</td>
                            <td>{{$presenca->created_at}}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div> 
    </div> 
    
                
@endsection