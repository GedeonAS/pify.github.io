@extends('layouts.master')

@section('content')
    @include('question.content')
@endsection
@push('scripts')
    @include('question.script')
    <script>
        $(document).ready(function () {
            $("#unanswered-question-tab").trigger('click');
        });
    </script>
@endpush