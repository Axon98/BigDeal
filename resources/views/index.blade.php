@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (isset($listings))
                        @foreach ($listings as $listing)
                            <img src="{{ $listing->photo }}">
                            <p>{{ $listing->title }}</p>
                            <p>{{ $listing->body }}</p>
                        @endforeach

                        {{ $users->links('default') }}

                    @else
                        There currently are no listings.
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
