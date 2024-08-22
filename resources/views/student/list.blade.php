@extends('layout')

@section('content')
  <div class="container mt-4">
    <h3 class="mt-3">Liste des étudiants</h3>

    <div class="message">
      @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}

            <button type="button" class="close" data-dismiss="alert aria-label">
              <span aria-hidden="true">&times;</span>
            </button>
        </div>
      @endif

    </div>
    <table class="table mt-3">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Matricule</th>
          <th scope="col">First Name</th>
          <th scope="col">Last Name</th>
          <th scope="col">Level</th>
          <th scope="col">Academy Year</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $students as $key => $student )
          <tr>
            <th scope="row">{{ ++$key }}</th>
            <td>{{ $student->matricul }}</td>
            <td>{{ $student->firstname }}</td>
            <td>{{ $student->lastname }}</td>
            <td>{{ $student->level }}</td>
            <td>{{ $student->academy_year }}</td>
          </tr>
        @endforeach
      </tbody>
    </table>
    <hr>
  </div>
@endsection