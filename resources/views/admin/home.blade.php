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
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="employees/img/logo.jpg" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Admin</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">admin/!</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <span>
                          <a href="" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Upgrade to PRO</a>
                        </span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <h2> View Employees</h2>
                  <table class="table table-responsive table-dark table-bordered table-hover">
                    <thead class="thead-light">
                        <tr >
                          <th scope="col">#</th>
                          <th scope="col">Employee Name</th>
                          <th scope="col">Email</th>
                          <th scope="col">Password</th>
                          <th scope="col">Phone</th>
                          <th scope="col">Address</th>
                          <th scope="col">RoomNo</th>
                          <th scope="col">Role</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Block</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        
                      @if (count ($employees)!= 0)

                      @foreach($employees as $employees)
                      <th scope="row">{{ $employees->id }}</th>
                          <td>{{ $employees->name }}</td>
                          <td>{{ $employees->email }}</td>
                          <td>{{ $employees->password }}</td>
                          <td>{{ $employees->phone }}</td>
                          <td>{{ $employees->address }}</td>
                          <td>{{ $employees->roomNo }}</td>
                          <td>{{ $employees->role }}</td>
                          <td><a href="" class="btn btn-info">Edit</a></td>
                          <td><a onclick="return confirm('Are you sure to block this user')" class="btn btn-success">Block</a></td>
                          <td><a onclick="return confirm('Are you sure to delete this user')" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach

                        @endif
                      </tbody>
                    </table>
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