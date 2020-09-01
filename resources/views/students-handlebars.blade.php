@extends('layouts.app')

@section('content')
  <div class="container">
    <main>
      <h1>Dati degli studenti stampati con handlebars(API)</h1>
      <p>
        Stampo a schermo con tamplate engine (Handlebars) i dati degli studenti provenienti da API (in formato json):
      </p>
      <div id="students-list">
        {{-- handlebars content goes here --}}
      </div>
    </main>
  </div>


  <script src="{{asset('js/app.js')}}"></script>
  <script id="students-template" type="text/x-handlebars-template">
    <ul>
      <li>Nome: @{{ name }}</li>
      <li>Cognome: @{{ lastname }}</li>
      <li>Voto: @{{ vote }}</li>
    </ul>
  </script>

@endsection
