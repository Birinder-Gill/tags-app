@extends('app')
@section('title', 'Home')


@section('content')
    <div class="page-wrapper">
        <div class="form-box">
            <div class="mb-3">
                <label for="nameInput" class="form-label">Your Name</label>
                <input type="text" class="form-control" id="nameInput" placeholder="Jack">
            </div>
            <div class="mb-3">
                <label for="emailInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="emailInput" placeholder="jack@example.com">
            </div>

            <div class="text-center mt-4">
                <a href="/all-tags">
                    <button type="button" class="btn btn-primary">Next</button>
                </a>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
@endsection
