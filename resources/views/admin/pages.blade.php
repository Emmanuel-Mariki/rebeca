@extends('layouts.admin')

@section('title')
   {{$title}}
@stop

@section('content')
<div class="container-fluid content-area">      
    <div class="row">
        <div class="col-lg-12 box-shadow">
            <a href="{{route('add_page')}}"class="btn btn-success">ADD PAGE</a>
            <table class="table table-bordered table-striped">
                <thead>
                    <th>#ID</th>
                    <th>NAME</th>
                    <th>URL</th>
                    <th>PRIORITY</th>
                    <th>ACTION</th>
                </thead>
                <tbody>
                    @foreach($pages as $page)
                    <tr>
                        <td>{{$page->id}}</td>
                        <td>{{$page->name}}</td>
                        <td>{{$page->url}}</td>
                        <td>{{$page->priority}}</td>
                        <td>
                            <a href="{{route('edit_page',$page->url )}}"class="btn btn-success">Edit</a>
                            <a href="{{route('view_page',$page->url)}}"class="btn btn-info">View</a>
                            <a href="{{route('delete_page',$page->url)}}"class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
 </div>
@stop