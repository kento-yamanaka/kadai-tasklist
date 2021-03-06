@extends('layouts.app')

@section('content')

    <h1>id: {{ $task->id }} のタスク編集ページ</h1>
    
    <!--{!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}-->
    
    <!--    {!! Form::label('status', 'ステータス:') !!}-->
    <!--    {!! Form::text('status') !!}-->
    
    <!--    {!! Form::label('title', 'タイトル:') !!}-->
    <!--    {!! Form::text('title') !!}-->

    <!--    {!! Form::label('content', 'タスク:') !!}-->
    <!--    {!! Form::text('content') !!}-->

    <!--    {!! Form::submit('更新') !!}-->

    <!--{!! Form::close() !!}-->
    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
            
            
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
            
                {!! Form::submit('更新', ['class' => 'btn btn-default']) !!}
            
            {!! Form::close() !!}
        </div>
    </div>
@endsection