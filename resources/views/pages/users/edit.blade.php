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
            <div class="main-card mb-3 card ">
                <div class="card-body">

                    <form action="{{ route('users.update', $user->id) }}" method="post">
                        {{ csrf_field() }}
                        @method('PUT')

                        <div class="row">
                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="name"
                                        class=""> 
                                        <strong>  Name :</strong>
                                    </label>
                                        <input name="name" value="{{ $user->name }}" id="name" placeholder="User Name" type="text"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="position-relative form-group">
                                    <label for="email"
                                        class="">  <strong>Employee ID :</strong></label>
                                        <input 
                                        name="email" value="{{ $user->email }}" id="email" placeholder="User Employee ID"
                                        type="text" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-4">

                                <div class="position-relative form-group">
                                    <label for="role_id"
                                        class=""><strong>Role: </strong></label>
                                        <select id="role_id" name="role_id" class="custom-select">
                                        <option value="">Select Role</option>
                                        <option value="1" {{ $user->role_id == 1 ? 'selected' : '' }}>Admin</option>
                                        <option value="2" {{ $user->role_id == 2 ? 'selected' : '' }}>Employee</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="position-relative form-group">
                                    <label for="status" class="mr-2">
                                        <input type="checkbox" name="status" value="{{ $user->status }}"
                                            {{ $user->status == 1 ? 'checked' : '' }}> Active
                                    </label>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>

        </div>
    </div>
@endsection
