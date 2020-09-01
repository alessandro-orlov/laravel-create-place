@extends('layouts.app')

@section('content')
  <div class="container">
    <main>
      <h1>Pagina Studenti</h1>
      <h3>dal database mySql:</h3>
      {{-- Nel blade è meglio usare convenzioni di blade e non inserire codice php puro --}}
      {{-- Per accedere alle chiavi dell'array di oggetti utilizziamo operatore ' -> ' --}}
      @foreach ($array_students as $student)
        <ul>
          <li>Nome: {{$student->name}}</li>
          <li>Cognome: {{$student->lastname}}</li>
          <li>Voto: {{$student->vote}}</li>
        </ul>
      @endforeach

      {{-- Per accedere all'array utilizziamo parentesi graffe --}}
      <h3>dall'array:</h3>
      @foreach ($students as $oneStudent)
        <ul>
          <li>Nome: {{$oneStudent['name']}}</li>
          <li>Cognome: {{$oneStudent['lastname']}}</li>
          <li>Voto: {{$oneStudent['vote']}}</li>
        </ul>
      @endforeach
    </main>
  </div>
@endsection
