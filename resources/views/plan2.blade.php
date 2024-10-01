@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Plan Two</h1>
        <p>Welcome to the Plan Two details page!</p>
        {{-- Redirect Plan Two Page --}}

        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Sub Domain</span>
            <input type="email" class="form-control" placeholder="subdomain" aria-label="subdomain" aria-describedby="addon-wrapping">
            <hr>
            <button type="submit" class="btn btn-primary">Save</button>

        </div>

    </div>
@endsection
