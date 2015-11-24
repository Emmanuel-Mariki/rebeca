@extends('layouts.admin')

@section('title')
    Kasichana Initiative
@stop

@section('content')
<div class="container-fluid content-area" >      
    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('pages')}}"class="btn btn-success">BACK TO PAGE LIST</a>
            
            {!! Form::open(array('url' => 'pages/create', 'method'=>'POST','class'=>'box-shadow',)) !!}
             
               @include('partials.form_page',['action'=>'Create Page'])
           {!! Form::close() !!}
        </div>
    </div>
 </div>
    @include('partials.ckeditor')
@stop