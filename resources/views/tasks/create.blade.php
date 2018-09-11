@extends('layouts.app')

@section('content')

    <h1>タスク新規作成ページ</h1>
    
    <!--{!! Form::model($task, ['route' => 'tasks.store']) !!}-->
    
    <!--    {!! Form::label('status', 'ステータス:') !!}-->
    <!--    {!! Form::text('status') !!}-->
    
    <!--    {!! Form::label('title', 'タイトル:') !!}-->
    <!--    {!! Form::text('title') !!}-->

    <!--    {!! Form::label('content', 'タスク:') !!}-->
    <!--    {!! Form::text('content') !!}-->

    <!--    {!! Form::submit('投稿') !!}-->

    <!--{!! Form::close() !!}-->
    <div class="row">
        <div class="col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6">
            {!! Form::model($task, ['route' => 'tasks.store']) !!}
            
                <div class="form-group">
                    {!! Form::label('status', 'ステータス:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('title', 'タイトル:') !!}
                    {!! Form::text('title', null, ['class' => 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('content', 'タスク:') !!}
                    {!! Form::text('content', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>    
    
@endsection