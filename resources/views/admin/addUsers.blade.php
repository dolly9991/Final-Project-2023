<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('admin.css')
    </head>
  <body>
    <div class="container-scroller">

          @include('admin.sidebar')

      <div class="container-fluid page-body-wrapper">

          @include('admin.navbar')
 
         <div class="main-panel">
          <div class="content-wrapper">
            <div class="row">
              <div class="container">
              <div class="card-body">

                        @if(session()->has('message'))
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert">
                               X 
                            </button>
                            {{session()->get('message')}}
                        </div>
                        @endif
        <form method="POST" action="{{url('uploadUser')}}" enctype="multipart/form-data">
          @csrf

            <h3>CREATE USER...</h3>
            <br>
            <div class="form-group">
                <label class="required" for="name">Employee Name</label>
                <input class="form-control " style="color:black;" type="text" name="name" id="name" placeholder="Enter fullname here"value="" required>
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="email">Email</label>
                <input class="form-control " style="color:black;" type="email" name="email" id="email" placeholder="Enter email here"value="" required>
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="password">Password</label>
                <input class="form-control " style="color:black;" type="password" name="password" id="password" placeholder="Enter password here" value="" required>
                                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label class="required" for="phone">Phone</label>
                <input class="form-control " style="color:black;" type="text" name="phone" id="phone" placeholder="Enter phone number here" value="" required>
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="address">Address</label>
                <input class="form-control " style="color:black;" type="text" name="address" id="address" placeholder="Enter address here" value="" required>
                                <span class="help-block"></span>
            </div>                                    
            <div class="form-group">
                <label class="required" for="roomNo">RoomNo</label>
                <input class="form-control " style="color:black;" type="text" name="roomNo" id="roomNo" placeholder="Enter room number here" value=""  required>
                                <span class="help-block"></span>
            </div>            
            <div class="form-group">
                <label class="required" for="role">Role</label>
                 <select name="role" class="form-control " style="color:black;">
                    <option>--Select user role--</option>
                    <option value="employee">Employee</option>
                    <option value="procurementOfficer">Procurement Officer</option>
                </select>
                                <span class="help-block"></span>               
            </div>
            <div class="form-group">
                <label class="" for="image">User Image</label>
                <input class="form-control" type="file" name="image" id="image" value="" >
                                <span class="help-block"></span>
            </div> 
            
 
            <div class="form-group">
                <button class="btn btn-danger" name="addUser" type="submit">
                    Save
                </button>
            </div>
         
        </form>
      </div>
                    </div>
            <div class="row">
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  
                </div>
              </div>
              <div class="col-md-6 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  
                </div>
              </div>
              <div class="col-md-12 col-xl-4 grid-margin stretch-card">
                <div class="card">
                  
                </div>
              </div>
            </div>
            <div class="row">  
             
            </div>
          </div>
        @include('admin.footer')
        </div>
      </div>
    </div>
        @include('admin.scripts')
  </body>
</html>