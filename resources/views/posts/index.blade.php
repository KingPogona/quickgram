@extends('layouts.app')

@section('content')
    <div class="container">

        @if (count($posts) < 1)
            <div class="d-flex justify-content-center">
                <div>
                    <p>Your feed is empty. Try searching for some creators!</p>
                </div>
            </div>
        @else
            @foreach ($posts as $post)
                <div class="row">
                    <div class="col-6 offset-3">
                        <a href="/profile/{{ $post->user->id }}">
                            <img src="{{ $post->image }}" alt="" class="w-100">
                        </a>
                    </div>
                </div>
                <div class="row pt-2 pb-4">
                    <div class="col-6 offset-3">

                        <p>
                            <span class="fw-bold">
                                <a href="/profile/{{ $post->user->id }}"
                                    class="text-decoration-none text-dark">{{ $post->user->username }}
                                </a>
                            </span>
                            {{ $post->caption }}
                        </p>
                    </div>
                </div>
            @endforeach

            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{ $posts->links() }}
                </div>
            </div>
        @endif

    </div>
@endsection
