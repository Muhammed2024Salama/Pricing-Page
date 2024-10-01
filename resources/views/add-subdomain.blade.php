@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Add Your Subdomain</h1>

        <form action="{{ route('store.subdomain') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="subdomain">Subdomain:</label>
                <input type="text" class="form-control" id="subdomain" name="subdomain" placeholder="Enter your subdomain" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
