@extends('layouts.admin')

@section('title')
    Kasichana Initiative
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
                <fieldset>
                    <legend style="padding: 1rem;">Add Page</legend>
                    <div class="form-group {!!  $errors->first('page_name','has-error') !!}">
                    {!! Form::label('name', 'Page Name') !!}
                    {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Page Name'])!!}
                    {!! 
                        $errors->first('name',
                        '<span id="" class="help-block">:message.</span>')
                    !!}
                    </div>
                    <hr>
                    <div class="form-group {!!  $errors->first('keywords','has-error') !!}">
                    {!! Form::label('keywords', 'Keywords') !!}
                    {!! Form::textarea('keywords',null, ['class'=>'form-control',
                    'placeholder'=>'Keywords Separated by comma max character 255 Name'])!!}
                    {!! 
                         $errors->first('keywords',
                         '<span id="" class="help-block">:message.</span>')
                     !!}
                    </div>
                    <hr>
                    <div class="form-group {!!  $errors->first('description','has-error') !!}">
                    {!! Form::label('description', 'Page Description') !!}
                    {!! Form::textarea('description',null, ['class'=>'form-control',
                    'placeholder'=>'Description max character 255 Name'])!!}
                    {!! 
                         $errors->first('description',
                         '<span id="" class="help-block">:message.</span>')
                     !!}
                    </div>
                    <hr>
                    <div class="form-group">
                        {!! Form::label('dynamic', 'Static', array('class' => 'radio-inline')) !!}
                        {!! Form::radio('dynamic','0', true)!!}
                        {!! Form::label('dynamic', 'Dynamic', array('class' => 'radio-inline')) !!}
                        {!! Form::radio('dynamic','1')!!}
                        
                        {!! 
                            $errors->first('dynamic',
                            '<span id="" class="help-block">:message.</span>')
                        !!}
                        
                        &nbsp;&nbsp; &nbsp;&nbsp;| &nbsp;&nbsp;&nbsp;&nbsp;
                        
                        {!! Form::label('publish', 'Publish', array('class' => 'radio-inline')) !!}
                        {!! Form::radio('publish','1', true)!!}
                        {!! Form::label('publish', 'Draft', array('class' => 'radio-inline')) !!}
                        {!! Form::radio('publish','0')!!}
                     
                        {!! 
                            $errors->first('publish',
                            '<span id="" class="help-block">:message.</span>')
                        !!}
                    </div>
                    <hr>
                    <div class="form-group {!!  $errors->first('contents','has-error') !!}">
                        {!! Form::label('contents', 'Static Contents') !!}
                        {!! Form::textarea('contents',null, ['class'=>'form-control','id'=>'contents',
                        'placeholder'=>'Static Contents'])!!}
                        {!! 
                             $errors->first('contents',
                             '<span id="" class="help-block">:message.</span>')
                        !!}
                    </div>
                    <hr>
                    <div class="form-group {!!  $errors->first('priority','has-error') !!}">
                        <div class="col-lg-2">
                        {!! Form::label('priority', 'Priority') !!}
                        {!! Form::number('priority',null, ['class'=>'form-control']) !!}
                        {!! 
                             $errors->first('priority',
                             '<span id="" class="help-block">:message.</span>')
                         !!}
                        </div>
                    </div>
                        <button class="btn waves-effect waves-light" type="submit" name="action">
                          Edit Page
                        </button>
                    
                </fieldset>
           {!! Form::close() !!}
        </div>
    </div>
 </div>
@stop