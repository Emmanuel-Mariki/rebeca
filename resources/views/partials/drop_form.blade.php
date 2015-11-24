  <fieldset>
    <legend style="padding: 1rem;">Add drop down navigation</legend>
    <div class="row">
        <div class="form-group col-lg-6 {!!  $errors->first('page_name','has-error') !!}">
        {!! Form::label('name', 'Parent  page') !!}
        {!!Form::select('page_id',$pages, null,['class'=>'form-control','placeholder'=>'Parent page'])!!}
        {!! 
            $errors->first('page_id',
            '<span id="" class="help-block">:message.</span>')
        !!}
        </div>
    </div>
    <hr>
    <div class="row">
        <div class="form-group col-lg-6 {!!  $errors->first('page_name','has-error') !!}">
        {!! Form::label('name', 'Page Name') !!}
        {!! Form::text('name',null, ['class'=>'form-control','placeholder'=>'Page Name'])!!}
        {!! 
            $errors->first('name',
            '<span id="" class="help-block">:message.</span>')
        !!}
        </div>
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
    {!! Form::submit($action, ['class'=>'btn']) !!}
                    
</fieldset>