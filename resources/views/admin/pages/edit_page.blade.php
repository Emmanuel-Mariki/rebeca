@extends('layouts.admin')

@section('title')
    Edit Page 
@stop

@section('content')
<div class="container-fluid content-area" >      
    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('pages')}}"class="btn btn-success">BACK TO PAGE LIST</a>
            
            {!! 
                Form::model($page, ['route'=>['update_page',$page->url], 
                'method'=>'PUT','class'=>'box-shadow'])
            !!}
            @include('.partials.form_page', ['action'=>'Edit Page'])
           {!! Form::close() !!}
        </div>
    </div>
</div>
    @include('partials.ckeditor')
@stop