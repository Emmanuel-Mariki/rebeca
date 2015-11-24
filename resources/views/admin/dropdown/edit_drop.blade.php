@extends('layouts.admin')

@section('title')
    Edit Page 
@stop

@section('content')
<div class="container-fluid content-area" >      
    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('dropnav')}}"class="btn btn-success">BACK TO DROP NAVIGATION LIST</a>
            
            {!! 
                Form::model($page, ['route'=>['update_drop',$page->id], 
                'method'=>'PUT','class'=>'box-shadow'])
            !!}
            @include('.partials.drop_form', ['action'=>'Edit drop navigation'])
           {!! Form::close() !!}
        </div>
    </div>
</div>
    @include('partials.ckeditor')
@stop