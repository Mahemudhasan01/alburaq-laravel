@extends('backend-layouts.main')

@section('main-backend-container')
    

  <div id="admin-content">
      <div class="container">
          <div class="row">
              <div class="col-md-12">
                  <h1 class="admin-heading">Add User</h1>
              </div>
              <div class="col-md-offset-3 col-md-6">
                  <!-- Form Start -->
                  <form  action=" {{url('admin/insertuser')}} " method ="POST" autocomplete="off">
                    @csrf
                      <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="fname" class="form-control" placeholder="First Name" >
                          <span class="text-danger"> @error('fname')
                            {{$message}}
                          @enderror  </span>
                      </div>
                          <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="lname" class="form-control" placeholder="Last Name" >
                          <span class="text-danger"> @error('lname')
                            {{$message}} 
                          @enderror </span>
                      </div>
                      <div class="form-group">
                          <label>User Name</label>
                          <input type="text" name="user" class="form-control" placeholder="Username" >
                          <span class="text-danger"> @error('user')
                            {{$message}}
                          @enderror </span>
                      </div>

                      <div class="form-group">
                          <label>Password</label>
                          <input type="password" name="password" class="form-control" placeholder="Password" >
                          <span class="text-danger"> @error('password')
                            {{$message}}
                          @enderror  </span>
                      </div>
                      <div class="form-group">
                          <label>User Role</label>
                          <select class="form-control" name="role" >
                              <option value="0">Normal User</option>
                              <option value="1">Admin</option>
                          </select>
                          <span class="text-danger"> @error('role')
                            {{$message}}
                          @enderror  </span>
                      </div>
                      <input type="submit"  name="save" class="btn btn-primary" value="Save"  />
                  </form>
                   <!-- Form End-->
               </div>
           </div>
       </div>
   </div>
@endsection
