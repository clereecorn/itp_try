@extends('layouts.main')

@section('title','Home')

@section('content')
@if (session('regSuccess'))
    <div class="alert alert-success">
        {{ session('regSuccess') }}
    </div>
@endif

<h2>Content</h2>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestiae aliquam, nihil, aspernatur odio reprehenderit earum suscipit corporis nulla quidem aperiam, blanditiis ipsa eveniet fugit! Ullam porro et amet nihil inventore!</p>
@endsection