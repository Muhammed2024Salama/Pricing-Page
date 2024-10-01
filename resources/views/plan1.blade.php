@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Plan One</h1>
        <p>Welcome to the plan One details page!</p>
                {{-- Redirect Free Plan Page --}}
        <div class="input-group flex-nowrap">
            <span class="input-group-text" id="addon-wrapping">Sub Domain</span>
            <input type="email" class="form-control" placeholder="subdomain" aria-label="subdomain" aria-describedby="addon-wrapping">
            <button type="submit" class="btn btn-primary">Save</button>

        </div>

    </div>
@endsection
