@extends('layout')

@section('content') 

	<div class="container mt-4">
	    <h3 class="mt-3">Résultat de la recherche</h3>
	    <table class="table mt-3">
	      <thead>
	        <tr>
	          <th scope="col">#</th>
	          <th scope="col">Matricule</th>
	          <th scope="col">First Name</th>
	          <th scope="col">Last Name</th>
	          <th scope="col">Level</th>
	          <th scope="col">Academy Year</th>
	          <th scope="col">Update Student</th>
	        </tr>
	      </thead>
	      <tbody>
	      	@foreach ( $find_student as $key => $find )
	          <tr>
	            <th scope="row">{{ ++$key }}</th>
	            <td>{{ $find->matricul }}</td>
	            <td>{{ $find->firstname }}</td>
	            <td>{{ $find->lastname }}</td>
	            <td>{{ $find->level }}</td>
	            <td>{{ $find->academy_year }}</td>
	            <td>
	            	<form method="POST" action="{{ route('students.update', $find->id) }}">
		                @csrf
	                    <button class="btn btn-warning">Update</button>
	                </form>
	            </td>
	          </tr>
	         @endforeach
	      </tbody>
	    </table>

	    <a href="{{ route('student') }}" class="btn btn-outline-secondary">Retour à la liste des étudiants</a>

@endsection