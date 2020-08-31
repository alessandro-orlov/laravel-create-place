<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() {
      $array_students = [
        [
          'nome' => 'Alessandro',
          'cognome' => 'Rossi',
          'voto' => 10.
        ],
        [
          'nome' => 'Marco',
          'cognome' => 'Verdi',
          'voto' => 9.
        ],
        [
          'nome' => 'Francesca',
          'cognome' => 'Forte',
          'voto' => 7.
        ],
        [
          'nome' => 'Michele',
          'cognome' => 'Bianchi',
          'voto' => 4.
        ],
      ];

      return view('students', [
          'teacher' => 'Alessandro Scolozzi',
          'students' => $array_students,
        ]);
    }
}
