@extends('layouts.master')

@section('content')
    @include('question.content')
@endsection
@push('scripts')
    <script>
        let page = 1
    </script>
    @include('question.script')
@endpush