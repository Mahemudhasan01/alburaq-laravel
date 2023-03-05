@extends('backend-layouts.main')

@section('main-backend-container')
    

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Modify User Details</h1>
              </div>
              <div class="col-md-offset-4 col-md-4">
                  <!-- Form Start -->
                  <form  action=" {{route('user.update', ['id' => $user['user_id'] ])}} " method ="POST">
                    @csrf
                      <div class="form-group">
                          <input type="hidden" name="user_id"  class="form-control" value=" {{$user['user_id']}} "  placeholder="" >
                      </div>
                          <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="f_name" class="form-control" value=" {{$user['first_name']}} " placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="l_name" class="form-control" value=" {{$user['last_name']}} " placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="username" class="form-control" value=" {{$user['username']}} " placeholder="" required>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" value="">
                            @if ($user['role'] == 0)
                              <option value="0">normal User</option>
                            @endif
                              <option value="1">Admin</option>
                          </select>
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary" value="Update" required />
                  </form>
                  <!-- /Form -->
              </div>
          </div>
      </div>
  </div>
@endsection
