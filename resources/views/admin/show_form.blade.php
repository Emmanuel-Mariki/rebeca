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
                <fieldset>
                    <legend style="padding: 1rem;">Add Page</legend>
                    {!! Form::token(); !!}
                    <div class="form-group {!!  $errors->first('page_name','has-error') !!}">
                        <label for="page_name">Page Name</label>
                        <input type="text" name="name" class="form-control" 
                        value="{{ Input::old('name') }}"
                        id="page_name" placeholder="Page Name">
                        {!! 
                            $errors->first('page_name',
                            '<span id="" class="help-block">:message.</span>')
                        !!}
                    </div>
                    <hr>
                    <div class="form-group {!!  $errors->first('keywords','has-error') !!}">
                        <label for="Keywords">Keywords</label>
                        <input type="text" name="keywords" class="form-control" id="Keywords" 
                        value="{{ Input::old('keywords') }}"
                        placeholder="Keywords Separated by comma max character 255">
                       {!! 
                            $errors->first('keywords',
                            '<span id="" class="help-block">:message.</span>')
                        !!}
                    </div>
                    <hr>
                    <div class="form-group {!!  $errors->first('description','has-error') !!}">
                        <label for="description">Description</label>
                        <textarea id="description" name="description" class="form-control">{{ Input::old('description') }}</textarea>
                       {!! 
                            $errors->first('description',
                            '<span id="" class="help-block">:message.</span>')
                        !!}
                    </div>
                    <hr>
                    <div class="form-group">
                        <label class="radio-inline">
                        <input type="radio" name="type" id="type" value="0"> Static
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="type" id="type" value="1"> Dynamic
                        </label>
                        {!! 
                            $errors->first('type',
                            '<span id="" class="help-block">:message.</span>')
                        !!}
                        <label class="radio-inline">
                        <input type="radio" name="publish" id="type" value="1"> Publish
                        </label>
                        <label class="radio-inline">
                        <input type="radio" name="publish" id="type" value="0"> Draft
                        </label>
                        
                        {!! 
                            $errors->first('publish',
                            '<span id="" class="help-block">:message.</span>')
                        !!}
                    </div>
                    <hr>
                    <div class="form-group {!!  $errors->first('contents','has-error') !!}">
                        <label for="contents">Content</label>
                        <textarea id="contents" name="contents" class="form-control">{{ Input::old('contents') }}</textarea>
                       {!! 
                            $errors->first('Content',
                            '<span id="" class="help-block">:message.</span>')
                        !!}
                    </div>
                    <hr>
                    <button class="btn waves-effect waves-light" type="submit" name="action">Create page
<i class="material-icons right">send</i>
</button>
                </fieldset>
           {!! Form::close() !!}
        </div>
    </div>
 </div>
@stop