@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-center">
            <div class="card w-75 p-3">
                <div class="card__body">
                    <form action="{{ route('contact.store') }}" class="form" method="POST">
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

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
