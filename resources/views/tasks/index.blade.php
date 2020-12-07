@extends ('layouts.app')

@section('content')
<h1>タスク一覧</h1>
    @if(count($tasks)>0)
        <table class='table table-striped'>
            <thead>
                <tr>
                    <th>作成日</th>
                    <th>id</th>
                    <th>担当者</th>
                    <th>タスク</th>
                    <th>ステータス</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tasks as $task)
                <tr>
                    <td>{{$task->created_at}}</td>
                    <td>{!! link_to_route('tasks.show',$task->id,['task'=>$task->id]) !!}</td>
                    <td>{{$task->person}}</td>
                    <td>{{$task->content}}</td>
                    <td>{{$task->status}}</td>
                </tr>
                @endforeach
            </tbody>
        </table> 
    @endif
    {!! link_to_route('tasks.create','新規タスクの作成',[],['class'=>'btn btn-primary'])!!}
@endsection