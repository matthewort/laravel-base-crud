@extends('layouts.main-layout')
@section('content')

<h1>CREATE NEW PERIPHERAL</h1>
<form action="{{ route('peripheral-store') }}" method='POST'>

@csrf
@method('POST')


    <label for="name">Name:</label>
    <input name="name" type="text">
    <br>
    <label for="model" type="text">Model:</label>
    <input name="model" type="text">
    <br>
    <label for="price" type="text">Price:</label>
    <input name="price" type="text">
    <br>
    <label for="consumption" type="text">Consumption:</label>
    <input name="consumption" type="text">
    <br>
    <input type="submit" value="SAVE">


</form>

@endsection