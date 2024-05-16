@extends('layout')

@section('content')

<div class="discovery-module-one-pop-out py-5 py-lg-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-md-6 col-lg-4">
            <h2 class="display-1">Orange Bonjour</h2>
            <p class="lead">
            Désolé vous ne pouvez pas accéder à cette page. Peut-être que vous devez vous connecter.
            </p>
            @if(isset($userName))
              <h4>Welcome {{ $userName }}!</h4>
              
            @else
              <a href="{{ url('signin') }}" class="btn btn-secondary">
              Connectez-vous
              </a>
            @endif
          </div>
          <div class="col-12 col-md-6 col-lg-8">
          
            <img src="{{asset('/dist/img/team.jpg')}}" alt="" class="img-fluid" width="860" height="558" loading="lazy"/>
          </div>
        </div>
      </div>
    </div>

@endsection