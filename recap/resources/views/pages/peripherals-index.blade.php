@extends('layouts.main-layout')
@section('content')
<ul>

    <a href="{{ route('peripheral-create') }}">CREATE NEW PERIPHERAL</a>

    @foreach ($peripherals as $peripheral)
    <a href="{{ route('peripherals-show', $peripheral -> id) }}">
    <li>Name: {{ $peripheral -> name }}</li>
    </a>
    @endforeach
</ul>
@endsection