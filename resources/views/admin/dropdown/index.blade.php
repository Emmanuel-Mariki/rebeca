@extends('layouts.admin')

@section('title')
   {{$title}}
@stop

@section('content')
<div class="container-fluid content-area">      
    <div class="row">
        <div class="col-lg-12 box-shadow">
            <a href="{{route('add_drop')}}"class="btn btn-success">
                <i class="glyphicon glyphicon-plus"></i>
                ADD DROP NAVIGATION
            </a>
            <table class="table table-bordered table-striped">
                <thead>
                    <th width="5%">#ID</th>
                    <th width="10%">NAME</th>
                    <th width="10%">URL</th>
                    <th width="10%">PARENT</th>
                    <th width="20%">KEYWORDS</th>
                    <th width="25%">DESCRIPTION</th>
                    <th width="5%">PRIORITY</th>
                    <th width="15%">ACTION</th>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                    <tr>
                        <td>{{$page->id}}</td>
                        <td>{{$page->name}}</td>
                        <td>{{$page->url}}</td>
                        <td>{{$page->Page->name}}</td>
                        <td>{{$page->keywords}}</td>
                        <td>{{$page->description}}</td>
                        <td>{{$page->priority}}</td>
                        <td>
                            <a href="{{route('edit_drop',$page->id )}}"class="btn btn-success">
                                <i class="glyphicon glyphicon-pencil"></i>
                                Edit
                            </a>
                            
                            <a href="{{route('delete_drop',$page->id)}}"class="btn btn-danger delete" 
                               id="delete"><i class="glyphicon glyphicon-trash"></i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>
@stop