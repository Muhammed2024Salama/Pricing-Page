@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Plan Two</h1>
        <p>Welcome to the Plan Two details page!</p>

        {{-- Redirect Plan Two Page --}}

        <div class="container">
            <h1>Choose Your Plan</h1>

{{--            <a href="{{ route('choose.plan', ['planType' => 'free']) }}" class="btn btn-primary">Choose Free Plan</a>--}}
{{--            <a href="{{ route('choose.plan', ['planType' => 'plan1']) }}" class="btn btn-primary">Choose Plan 1</a>--}}
            <a href="{{ route('choose.plan', ['planType' => 'centers']) }}" class="btn btn-primary">Choose Plan 2</a>
        </div>
    </div>
@endsection
