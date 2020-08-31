@extends('layouts.app')

@section('content')
  <div class="container">
    <main>
      <h1>Pagina Studenti</h1>
      {{-- <h3>Teacher: {{ $teacher }}</h3> --}}
      <?php foreach ($array_students as $student) { ?>
        <ul>
          <li>Nome: {{$student['name']}}</li>
          <li>Cognome: {{$student['lastname']}}</li>
          <li>Voto: {{$student['vote']}}</li>
        </ul>
      <?php } ?>
    </main>
  </div>
@endsection
