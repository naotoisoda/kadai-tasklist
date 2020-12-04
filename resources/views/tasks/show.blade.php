@extends('layouts.app');

@section('content')
<h1>{{$task->content}}の詳細</h1>
<table class="table table-striped">
    <tr>
        <th>完了✓</th>
        <th>作成日</th>
        <th>id</th>
        <th>担当者</th>
        <th>タスク</th>
    </tr>
    <tr>
        <td>
            @if($task->done)✓ 
            @else 
            @endif
        </td>
        <td>{{$task->created_at}}</td>
        <td>{{$task->id}}</td>
        <td>{{$task->person}}</td>
        <td>{{$task->content}}</td>
    </tr>
</table>
{!! link_to_route('tasks.edit','編集',['task'=>$task->id],['class'=>'btn btn-primary'])!!}
{!!Form::model($task,['route'=>['tasks.destroy',$task->id],'method'=>'delete']) !!}
    {!!Form::submit('削除',['class'=>'btn btn-danger']) !!}
{!!Form::close()!!}
@endsection