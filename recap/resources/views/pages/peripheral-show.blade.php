@extends('layouts.main-layout')
@section('content')
<ul>
    <a href="{{ route('peripherals-index', $peripheral -> id) }}">
    <h2><li>Peripheral number {{$peripheral -> id}}</li></h2>
    </a>
    
    <li>Name: {{ $peripheral -> name }}</li>
    <br>
    <li>Model: {{ $peripheral -> model }}</li> 
    <br>
    <li>Price: {{ $peripheral -> price }}</li>
    <br> 
    <li>Consumption: {{ $peripheral -> consumption }}</li> 
    <br>
    <br>
</ul>
@endsection