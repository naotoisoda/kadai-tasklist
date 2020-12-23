@extends('layouts.app')

@section('content')
<h1>{{$task->content}}の詳細</h1>
<table class="table table-striped">
    <tr>
        <th>作成日</th>
        <th>id</th>
        <th>タスク</th>
        <th>ステータス</th>
    </tr>
    <tr>
        <td>{{$task->created_at}}</td>
        <td>{{$task->id}}</td>
        <td>{{$task->content}}</td>
        <td>{{$task->status}}</td>
    </tr>
</table>
{!! link_to_route('tasks.edit','編集',['task'=>$task->id],['class'=>'btn btn-primary'])!!}
{!!Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete']) !!}
    {!!Form::submit('削除',['class'=>'btn btn-danger']) !!}
{!!Form::close()!!}
@endsection