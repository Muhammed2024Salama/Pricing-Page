@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Free Plan</h1>
        <p>Welcome to the free plan details page!</p>
                {{-- Redirect Free Plan Page --}}
        <div class="container">
            <h1>Choose Your Plan</h1>

            <a href="{{ route('choose.plan', ['planType' => 'free']) }}" class="btn btn-primary">Choose Free Plan</a>
{{--            <a href="{{ route('choose.plan', ['planType' => 'teacher']) }}" class="btn btn-primary">Choose Teacher Plan</a>--}}
{{--            <a href="{{ route('choose.plan', ['planType' => 'centers']) }}" class="btn btn-primary">Choose Centers Plan</a>--}}
        </div>

    </div>
@endsection
