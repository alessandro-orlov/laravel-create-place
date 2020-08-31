<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function index() {
      // $array_students = [
      //   [
      //     'name' => 'Alessandro',
      //     'lastname' => 'Rossi',
      //     'vote' => 10.
      //   ],
      //   [
      //     'name' => 'Marco',
      //     'lastname' => 'Verdi',
      //     'vote' => 9.
      //   ],
      //   [
      //     'name' => 'Francesca',
      //     'lastname' => 'Forte',
      //     'vote' => 7.
      //   ],
      //   [
      //     'name' => 'Michele',
      //     'lastname' => 'Bianchi',
      //     'vote' => 4.
      //   ],
      // ];

      $array_students = Student::all();

      return view('students', compact('array_students'));

      // return view('students', [
      //     'teacher' => 'Alessandro Scolozzi',
      //     'students' => $array_students,
      //   ]);

      }
}
