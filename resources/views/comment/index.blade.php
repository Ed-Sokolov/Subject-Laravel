@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center mb-5">
            <div class="card w-75 p-3">
                <div class="card__body">
                    <form action="{{ route('comment.store') }}" class="form" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Your name</label>
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your name"
                                   required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Your email</label>
                            <input type="email" name="email" class="form-control" id="email"
                                   placeholder="name@example.com" required>
                        </div>

                        <div class="mb-3">
                            <label for="content" class="form-label">Text</label>
                            <textarea name="content" class="form-control" id="content" rows="3" placeholder="Just text"
                                      required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Add comment</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="d-flex flex-column gap-3 align-items-center w-100 mb-5">
            @if(isset($comments) && count($comments) > 0)
                <h3>Comments ({{ $comments->total() }})</h3>

                @foreach($comments as $comment)
                    <div class="card w-100">
                        <div class="card-header d-flex justify-content-between align-items-center gap-3">
                            <div>
                                <h5 class="card-title">{{ $comment->user_name }}</h5>
                                <h6 class="card-subtitle mb-2 text-body-secondary">{{ $comment->user_email }}</h6>
                            </div>

                            <div>
                                {{ $comment->humanCreated() }}
                            </div>
                        </div>

                        <div class="card-body">
                            <p class="card-text">{!! $comment->content !!}</p>
                        </div>
                    </div>
                @endforeach

                {{ $comments->links() }}
            @else
                <p class="fs-4">Empty</p>
            @endif
        </div>
    </div>
@endsection
