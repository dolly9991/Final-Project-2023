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

            <h3>CREATE ASSET...</h3>
            <br>
            <div class="form-group">
                <label class="required" for="name">Asset Name</label>
                <input class="form-control " style="color:black;" type="text" name="name" id="name" placeholder="Enter asset name"value="" required>
                                <span class="help-block"></span>
            </div>                                   
            <div class="form-group">
                <label class="required" for="assetNo">Asset Number</label>
                <input class="form-control " style="color:black;" type="text" name="assetNo" id="assetNo" placeholder="Enter asset number here" value=""  required>
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required"  for="type">Asset Type</label>
                 <select name="type" class="form-control " style="color:white;">
                    <option>--Select asset type--</option>
                    <option value="IT_Equipment">IT Equipment</option>
                    <option value="furniture">Furniture</option>
                    <option value="vehicle">Vehicle</option>
                </select>
                                <span class="help-block"></span>               
            </div>
            <div class="form-group">
                <label class="required" for="description">description</label>
                <input class="form-control " style="color:black;" type="text" name="description" id="description" placeholder="Enter description here"value="" required>
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="" for="model">Asset Model</label>
                <input class="form-control " style="color:black;" type="text" name="model" id="model" placeholder="Enter model here" value=""  >
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="" for="serialNo">Serial number</label>
                <input class="form-control " style="color:black;" type="text" name="serialNo" id="serialNo" placeholder="Enter serial number here" value="" >
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="" for="warranty">Warranty</label>
                <input class="form-control " style="color:black;" type="text" name="warranty" id="warranty" placeholder="Enter warranty here" value="" >
                                <span class="help-block"></span>
            </div> 
            <div class="form-group">
                <label class="required" for="purchaseCost">Purchase Cost</label>
                <input class="form-control " style="color:black;" type="number" name="purchaseCost" id="purchaseCost" placeholder="Enter Purchase cost here" value="" required>
                                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="purchaseDate">Purchase Date</label>
                <input class="form-control " style="color:black;" type="date" name="purchaseDate" id="purchaseDate" value="" required>
                                <span class="help-block"></span>
            </div>              
            <div class="form-group">
                <label class="" for="image">Asset Image</label>
                <input class="form-control" type="file" name="image" id="image" value="" >
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