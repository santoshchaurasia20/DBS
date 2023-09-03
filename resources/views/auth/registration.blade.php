@extends('layout')
  
@section('content')
<main class="login-form">
  <div class="cotainer">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Register</div>
                  <div class="card-body">
  
                      <form action="{{ route('register.post') }}" method="POST">
                          @csrf
                          <div class="form-group row">
                              <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="name" class="form-control" name="name" required autofocus>
                                  @if ($errors->has('name'))
                                      <span class="text-danger">{{ $errors->first('name') }}</span>
                                  @endif
                              </div>
                          </div>
  
                          <div class="form-group row">
                              <label for="email_address" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
                              <div class="col-md-6">
                                  <input type="text" id="email_address" class="form-control" name="email" required autofocus>
                                  @if ($errors->has('email'))
                                      <span class="text-danger">{{ $errors->first('email') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                            <label for="mobile_no" class="col-md-4 col-form-label text-md-right">Mobile No</label>
                            <div class="col-md-6">
                                <input type="number" id="mobile_no" class="form-control" name="mobile_no" required>
                                @if ($errors->has('mobile_no'))
                                    <span class="text-danger">{{ $errors->first('mobile_no') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="user_type" class="col-md-4 col-form-label text-md-right">User Type</label>
                            <div class="col-md-6">
                                {{-- <input type="radio" id="user_type" class="form-control" name="user_type" value='1' required>Doctor

                                <input type="radio" id="user_type" class="form-control" name="user_type" value='0' required>Patient --}}
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user_type" id="user_type" value="0">
                                    <label class="form-check-label" for="user_type">
                                     Patient
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="radio" name="user_type" id="user_type" value="1">
                                    <label class="form-check-label" for="user_type">
                                    Doctor
                                    </label>
                                  </div>
                                @if ($errors->has('user_type'))
                                    <span class="text-danger">{{ $errors->first('user_type') }}</span>
                                @endif
                            </div>
                        </div>
  
                          <div class="form-group row">
                              <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
                              <div class="col-md-6">
                                  <input type="password" id="password" class="form-control" name="password" required>
                                  @if ($errors->has('password'))
                                      <span class="text-danger">{{ $errors->first('password') }}</span>
                                  @endif
                              </div>
                          </div>
  
  
                          <div class="col-md-6 offset-md-4">
                              <button type="submit" class="btn btn-primary">
                                  Register
                              </button>
                          </div>
                      </form>
                        
                  </div>
              </div>
          </div>
      </div>
  </div>
</main>
@endsection