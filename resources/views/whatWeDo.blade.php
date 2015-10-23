@extends('layouts.layout')

@section('title')
    Kasichana Initiative
@stop

@section('content')
<div class="container">      
    <div class="row">
        <div class="col s12">
            <h1 class="color-primary">OUR PROJECTS</h1><hr>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
                <img src="{{asset('public/img/reb_01.jpg')}}">
              <span class="card-title">Shujaa wangu TV Show</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">Shujaa wangu TV Show</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
                              <img src="{{asset('public/img/reb_01.jpg')}}">
              <span class="card-title">Vegatable garden project</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">Vegatable garden project</a>
            </div>
          </div>
        </div>
        <div class="col s12 m6 l4">
          <div class="card">
            <div class="card-image">
                              <img src="{{asset('public/img/reb_01.jpg')}}">
              <span class="card-title">Bicycle for education project</span>
            </div>
            <div class="card-content">
              <p>I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
            </div>
            <div class="card-action">
              <a href="#">Bicycle for education project</a>
            </div>
          </div>
        </div>
    </div>
 </div>
@stop