<!DOCTYPE html>
<html lang="en">
  <head>
    
    @include('officer.css')
    </head>
  <body>
    <div class="container-scroller">

          @include('officer.sidebar')

      <div class="container-fluid page-body-wrapper">

          @include('officer.navbar')
 
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

        <form method="POST" action="{{url('uploadAsset')}}" enctype="multipart/form-data">
          @csrf

            <h3> ASSET MOVEMENT FORM...</h3>
            <br>
            <div class="form-group">
                <label class="required" for="assetCode">Assert code</label>
                <input class="form-control " style="color:black;" type="text" name="assetCode" id="assetCode" placeholder="Enter asset code here" value=""  required>
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="description">description</label>
                <input class="form-control " style="color:black;" type="text" name="description" id="description" placeholder="Enter description here"value="" required>
                                <span class="help-block"></span>
            </div>                                   
            <div class="form-group">
                <label class="required" for="location1">Location (from)</label>
                <input class="form-control " style="color:black;" type="text" name="location1" id="location1" placeholder="Enter From location" value=""  required>
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="" for="location2">Location(to)</label>
                <input class="form-control " style="color:black;" type="text" name="location2" id="location2" placeholder="Enter to location" value=""  >
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="movementDate">Movement Date</label>
                <input class="form-control " style="color:black;" type="date" name="movementDate" id="movementDate" value="" required>
                                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label class="required" for="name">Employee Name</label>
                <input class="form-control " style="color:black;" type="text" name="name" id="name" placeholder="Enter name of employee" value="" required>
                                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label class="required" for="status">Asset Status</label>
                 <select name="status" class="form-control " style="color:black;">
                    <option>--Select asset type--</option>
                    <option value="furniture">New</option>
                    <option value="vehicle">Old</option>
                </select>
                                <span class="help-block"></span>               
            </div> 
            <div class="form-group">
                <label class="required" for="authOfficer">Officer Name</label>
                <input class="form-control " style="color:black;" type="text" name="authOfficer" id="authOfficer" placeholder="Enter name of officer" value="" required>
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" name="addAssets" type="submit">
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
             @include('officer.footer')

        </div>
      </div>
    </div>
        @include('officer.scripts')
</body>
</html>