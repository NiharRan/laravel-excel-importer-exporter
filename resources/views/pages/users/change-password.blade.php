@extends('layouts.app')

@section('content')



    <ul class="body-tabs body-tabs-layout tabs-animated body-tabs-animated nav">
        <li class="nav-item">
            <a href="{{ route('users.index') }}" class="nav-link active">
                <span>Back</span>
            </a>
        </li>
    </ul>
    <div class="row ">
        <div class="col-md-12">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ Session::get('success') }}</p>
                </div>
            @endif
            <div class="main-card mb-3 card ">
                <div class="card-body">

                    <form action="{{ route('update-password') }}" method="post">
                        {{ csrf_field() }}

                        <div class="row">
                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="password"
                                        class=""> 
                                        <strong>  Password :</strong>
                                    </label>
                                        <input placeholder="Password" name="password" id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="position-relative form-group">
                                    <label for="password"
                                        class="">  <strong>Confirm Password :</strong></label>
                                        <input 
                                        placeholder="Confirm Password" name="password_confirmation" id="password_confirmation"
                                        type="password"
                                        class="form-control @error('password_confirmation') is-invalid @enderror">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="position-relative form-group">
                                    <button type="submit" class="btn btn-primary">Change</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
