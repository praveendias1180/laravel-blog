@extends ('layout')

@section ('content')
    <article>
        <h1><a href="post">{{ $post->title }}</a></h1>
        {!! $post->body !!}
    </article>
    <a href="/">Go back</a>
@endsection