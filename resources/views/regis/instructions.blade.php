@extends('layouts.form')

@section('header','Instructions')

@section('content')
    <p>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum impedit vitae doloremque quae est repellendus eaque animi facere? Perspiciatis velit sit alias reprehenderit! Repellendus deleniti unde optio nostrum, veniam adipisci.
    </p>

    <a href="/enrollment">Back</a>
    <a href="{{ route('getRegPers') }}">Continue</a>
@endsection
