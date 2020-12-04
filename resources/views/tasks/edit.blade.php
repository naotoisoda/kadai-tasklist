@extends('layouts.app');

@section('content')
    <h1>{{$task->content}}の編集</h1>
    <div class="row">
        <div class="col-6">
            {!! Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put']) !!}
                <div class="form-group">
                    {!! Form::label('content','タスク') !!}
                    {!! Form::text('content',null,['class'=>'form-control']) !!}
                    {!! Form::label('person','担当者') !!}
                    {!! Form::text('person',null,['class'=>'form-control']) !!}
                </div>
                    {!! Form::submit('更新',['class'=>'btn btn-primary']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>

@endsection