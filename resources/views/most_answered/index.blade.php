@extends('layouts.master')

@section('content')
    @include('question.content')
@endsection
@push('scripts')
    @include('question.script')
    <script>
        $(document).ready(function () {
            $("#most-answered-tab").trigger('click');
        });
    </script>
@endpush