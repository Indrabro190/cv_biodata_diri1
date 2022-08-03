@extends('layout.main')
@section('container')
<article>
    <h3>{{$conn->title }}</h3>
    <p>By. <a href="#" class="text-decoration-none">{{ $conn->user->name }}</a> In <a href="/categories/{{ $conn->category->slug }}" class="text-decoration-none">{{ $conn->category->name }}</a></p>
    <p>{!! $conn->body !!}</p>
</article>

<a href="/contact" class="d-block mt-3">back to contact</a>
@endsection