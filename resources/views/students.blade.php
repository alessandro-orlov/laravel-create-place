@extends('layouts.app')

@section('content')
  <div class="container">
    <main>
      <h1>Pagina Studenti</h1>
      <h3>Teacher: {{ $teacher }}</h3>
      <?php foreach ($students as $student) { ?>
        <ul>
          <li>Nome: {{$student['nome']}}</li>
          <li>Cognome: {{$student['cognome']}}</li>
          <li>Voto: {{$student['voto']}}</li>
        </ul>
      <?php } ?>
    </main>
  </div>
@endsection
