@extends('layout.main')

@section('container')
<h1>{{ $title }}</h1>
@foreach($contact as $conn)
<article class="mb-5 border-bottom pb-4">
    <h3><a href="/contact/{{ $conn->slug }}" class="text-decoration-none">{{ $conn->title }}</a></h3>
    <p>By. <a href="/authors{{ $conn->user->id }}" class="text-decoration-none">{{ $conn->user->name }}</a> In <a href="/categories/{{ $conn->category->username }}"
    class="text-decoration-none">{{ $conn->category->name }}</a></p>
    <p>{!! $conn->excerpt !!}</p>

    <a href="/contact/{{ $conn->slug }}" class="text-decoration-none">Read more...</a>

</article>
@endforeach

@endsection