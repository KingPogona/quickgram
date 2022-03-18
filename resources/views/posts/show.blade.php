@extends('layouts.app')

@section('content')
    <div class="container">

        <div class="row">
            <div class="col-8">
                <img src="{{ $post->image }}" alt="" class="w-100">
            </div>
            <div class="col-4">
                <div class="d-flex align-items-center">
                    <div class="pe-3">
                        <img src="{{ $post->user->profile->profileImage() }}" alt="" class="rounded-circle w-100"
                            style="max-width: 40px;">
                    </div>
                    <div>
                        <div class="fw-bold">
                            <a href="/profile/{{ $post->user->id }}" class="text-decoration-none text-dark pe-1">
                                {{ $post->user->username }}
                            </a>
                            •
                            <a href="#" class="text-decoration-none ps-1">Follow</a>
                        </div>
                    </div>

                </div>

                <hr>

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

    </div>
@endsection
