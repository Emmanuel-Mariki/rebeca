@extends('layouts.layout')

@section('title')
    Kasichana Initiative
@stop

@section('content')
<div class="container">      
    <div class="row">
        <div class="col s12">
            <h1 class="color-primary">PARTNERS</h1><hr>
        </div>
        <div class="col s12 m6 l6">
          <div class="card">
            <div class="card-image">
                <img src="{{asset('public/img/reb_01.jpg')}}">
              <span class="card-title">Partner  Name</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">This is a link</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l6">
          <div class="card">
            <div class="card-image">
                              <img src="{{asset('public/img/reb_01.jpg')}}">
              <span class="card-title">Card Title</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">website</a>
            </div>
          </div>
        </div>
    </div>
 </div>
@stop