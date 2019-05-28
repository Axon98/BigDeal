@extends('layouts.app')

@section('content')

<div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        @if (isset($listings))
        @foreach ($listings as $listing)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ $listing['photo'] }}">
                    <div class="card-body">
                    <p class="card-title">{{ $listing['title'] }}</p>
                    <p class="card-text">{{ $listing['description'] }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a href="listing/{{ $listing['id'] }}" class="btn btn-sm btn-outline-secondary">View</a>
                          {{-- <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button> --}}
                      </div>
                      <small class="text-muted">{{ $listing['created'] }}</small>
                    </div>
                    </div>
                </div>
            </div>
        @endforeach

            {{-- {{ $users->links('default') }} --}}

        @else
            There currently are no listings.
        @endif

        </div>
    </div>
</div>

@endsection
