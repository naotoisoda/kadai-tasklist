@extends('layouts.app')

@section('content')
    <div class="text-center">
        <h1>Task List</h1>
        {!! link_to_route('login','Login',['class'=>'btn btn-primary']) !!}
    </div>

@endsection