@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tarefa</div>

                <div class="card-body">
                    <div class="container">
                        <form method="POST" action="{{ route('task.update', ['task'=>$task->id]) }}">
                            @csrf
                            @method('PUT')
                            <div class="form-group row mb-3">
                                <label for="inputName" class="col-sm-1-12 col-form-label"></label>
                                <div class="col-sm-1-12">
                                    <input type="text" class="form-control" name="title" value="{{ $task->title }}">
                                </div>
                            </div>
                            <div class="form-check row mb-3">
                                <label class="form-check-label">
                                    <input type="radio" {{$task->pending ? 'checked':''}} class="form-check-input" name="pending" value="1">
                                    Tarefa Pendente
                                </label>
                                <label class="form-check-label">
                                    <input type="radio" {{$task->pending ? '':'checked'}} class="form-check-input" name="pending" value="0">
                                    Tarefa Concluída
                                </label>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-10">
                                    <a href="{{ route('task.index') }}" class="btn btn-primary">Voltar</a>
                                    <input type="submit" class="btn btn-primary">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
