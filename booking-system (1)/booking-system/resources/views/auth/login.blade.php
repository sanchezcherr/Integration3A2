@extends('layouts.auth')

@section('auth')
    
     <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Login</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('client.store') }}">
                        @csrf

                        <div class="form-group">
                            <label for="email_or_number">Email or Number</label>
                            <input type="text" class="form-control @error('email_or_number') is-invalid @enderror" id="email_or_number" name="email_or_number" value="{{ old('email_or_number') }}">
                            @error('email_or_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" >
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="d-flex justify-content-between">
                            <button type="submit" class="btn btn-primary">Login</button>

                            <p>No Account? <a href="{{ route('user.create') }}">Click here</a></p>
                        </div>
                    </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection