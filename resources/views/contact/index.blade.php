@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex flex-wrap gap-3 justify-content-center">
            @if(isset($contacts) && count($contacts) > 0)
                @foreach($contacts as $contact)
                    <div class="card" style="flex-basis: 30%">
                        <div class="card-header">
                            <h5 class="card-title">{{ $contact->user_name }}</h5>
                            <h6 class="card-subtitle mb-2 text-body-secondary">{{ $contact->user_email }}</h6>
                        </div>

                        <div class="card-body">
                            <p class="card-text">{!! $contact->content !!}</p>
                        </div>

                        <div class="card-footer">
                            {{ $contact->humanCreated() }}
                        </div>
                    </div>
                @endforeach
            @else
                <p class="fs-4">Empty</p>
            @endif
        </div>
    </div>
@endsection
