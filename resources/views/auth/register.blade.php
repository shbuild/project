@extends('default')

@section('content')
<div class="dp-main-content">
    <div class="container-fluid">
            <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                            <div class="panel panel-default">
                                    <div class="panel-heading">Register</div>
                                    <div class="panel-body">
                                            @if (count($errors) > 0)
                                                    <div class="alert alert-danger">
                                                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                                                            <ul>
                                                                    @foreach ($errors->all() as $error)
                                                                            <li>{{ $error }}</li>
                                                                    @endforeach
                                                            </ul>
                                                    </div>
                                            @endif

                                            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">



                                                    
                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">First Name</label>
                                                            <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                                                            </div>
                                                    </div>
                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">Last Name</label>
                                                            <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                                                            </div>
                                                    </div>


                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">Age</label>
                                                            <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="age" value="{{ old('age') }}">
                                                            </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">Address</label>
                                                            <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="address" value="{{ old('address') }}">
                                                            </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">Gender</label>
                                                            <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="gender" value="{{ old('gender') }}">
                                                            </div>
                                                    </div>


                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">E-Mail Address</label>
                                                            <div class="col-md-6">
                                                                    <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                                                            </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">Contact</label>
                                                            <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="contact" value="{{ old('contact') }}">
                                                            </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">Type Of User</label>
                                                            <div class="col-md-6">
                                                                <select name="roles" class="form-control">
                                                                    <option value=""></option>
                                                                    <option value="role">Role</option>
                                                                </select>
                                                                    
                                                            </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">UserName</label>
                                                            <div class="col-md-6">
                                                                    <input type="text" class="form-control" name="username" value="{{ old('username') }}">
                                                            </div>
                                                    </div>
                                                    
                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">Password</label>
                                                            <div class="col-md-6">
                                                                    <input type="password" class="form-control" name="password">
                                                            </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <label class="col-md-4 control-label">Confirm Password</label>
                                                            <div class="col-md-6">
                                                                    <input type="password" class="form-control" name="password_confirmation">
                                                            </div>
                                                    </div>

                                                    <div class="form-group">
                                                            <div class="col-md-6 col-md-offset-4">
                                                                    <button type="submit" class="btn btn-primary">
                                                                            Confirm
                                                                    </button>
                                                            </div>
                                                    </div>
                                            </form>
                                    </div>
                            </div>
                    </div>
            </div>
    </div>
</div>    
@endsection
