@extends('layouts.admin')

@section('title')
    Kasichana Initiative
@stop

@section('content')
<div class="container-fluid content-area" >      
    <div class="row">
        <div class="col-lg-12">
            <a href="{{route('dropnav')}}"class="btn btn-success">BACK TO DROP DOWN LIST</a>
            
            {!! Form::open(array('url' => '/dropdown/create', 'method'=>'POST','class'=>'box-shadow',)) !!}
             
               @include('partials.drop_form',['action'=>'Create Page'])
           {!! Form::close() !!}
        </div>
    </div>
 </div>
    @include('partials.ckeditor')
@stop