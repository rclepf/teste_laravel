@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Listagem de Tarefas
                <a href="{{ route('task.create') }}" class="btn btn-outline-success" style="float:right">Adicionar</a>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Título</th>
                                <th>Concluída?</th>
                                <th>Editar</th>
                                <th>Excluir</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($tasks as $key => $task)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$task->title}}</td>
                                <td class="{{$task->pending ? 'text-danger':'text-success'}}">{{$task->pending ? 'Não':'Sim'}}</td>
                                <td>
                                    <a href="{{ route('task.edit', ['task'=>$task->id]) }}" class="btn btn-outline-primary">Editar</a>
                                </td>
                                <td>

                                    <form method="POST" action="{{ route('task.destroy', ['task'=>$task->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-outline-danger">Excluir</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
