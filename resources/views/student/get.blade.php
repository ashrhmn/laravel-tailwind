@extends('layouts.app')

@section('content')
    <h1>Get Student</h1>

    <h1>Name : {{ $student->name }}</h1>
    <h1>ID : {{ $student->id }}</h1>
    <h1>DOB : {{ $student->dob }}</h1>
@endsection
