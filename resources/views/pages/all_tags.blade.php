@extends('app')
@section('title', 'All Home')


@section('content')
    <div class="container">
        <div class="row py-4">
            <div class="py-2 cols-12 col-sm-6 col-md-6">
                <div class="tag-card">
                    @include('tags.tag_1')
                </div>
            </div>
            <div class="py-2 cols-12 col-sm-6 col-md-6">
                <div class="tag-card">
                    @include('tags.tag_2')
                </div>
            </div>
            <div class="py-2 cols-12 col-sm-6 col-md-6">
                <div class="tag-card">
                    @include('tags.tag_4')
                </div>
            </div>
            <div class="py-2 cols-12 col-sm-6 col-md-6">
                <div class="tag-card">
                    @include('tags.tag_5')
                </div>
            </div>
            <div class="py-2 cols-12 col-sm-6 col-md-6">
                <div class="tag-card">
                    @include('tags.tag_7')
                </div>
            </div>
            <div class="py-2 cols-12 col-sm-6 col-md-6">
                <div class="tag-card">
                    @include('tags.tag_8')
                </div>
            </div>
        </div>
    </div>
@endsection


@section('scripts')
@endsection
