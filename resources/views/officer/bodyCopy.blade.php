<!-- officer/body.blade.php-->

<div class="content-wrapper">
            <div class="row">
              <div class="col-12 grid-margin stretch-card">
                <div class="card corona-gradient-card">
                  <div class="card-body py-0 px-0 px-sm-3">
                    <div class="row align-items-center">
                      <div class="col-4 col-sm-3 col-xl-2">
                        <img src="assets/img/logo.jpg" class="gradient-corona-img img-fluid" alt="">
                      </div>
                      <div class="col-5 col-sm-7 col-xl-8 p-0">
                        <h4 class="mb-1 mb-sm-0">Procurement Officer</h4>
                        <p class="mb-0 font-weight-normal d-none d-sm-block">...</p>
                      </div>
                      <div class="col-3 col-sm-2 col-xl-2 pl-0 text-center">
                        <!-- <span>
                          <a href="/home" target="_blank" class="btn btn-outline-light btn-rounded get-started-btn">Officer</a>
                        </span> -->
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
                <h2> View assets</h2>
                  <table class="table table-responsive table-dark table-bordered table-hover">
                    <thead class="thead-light">
                        <tr >
                          <th scope="col">#</th>
                          <th scope="col">Asset Name</th>
                          <th scope="col">AssetNo</th>
                          <th scope="col">RoomNo</th>
                          <th scope="col">Type</th>
                          <th scope="col">Description</th>
                          <th scope="col">Model</th>
                          <th scope="col">serialNo</th>
                          <th scope="col">Warranty</th>
                          <th scope="col">Purchase Cost</th>
                          <th scope="col">Purchase Date</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Block</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if (count($assets)!= 0)

                        @foreach($assets as $assets)
                        <tr>
                          <th scope="row">{{ $assets->id }}</th>
                          <td>{{ $assets->name }}</td>
                          <td>{{ $assets->assetNo }}</td>
                          <td>{{ $assets->roomNo }}</td>
                          <td>{{ $assets->type }}</td>
                          <td>{{ $assets->description }}</td>
                          <td>{{ $assets->model }}</td>
                          <td>{{ $assets->serialNo }}</td>
                          <td>{{ $assets->warranty }}</td>
                          <td>{{ $assets->purchaseCost }}</td>
                          <td>{{ $assets->purchaseDate }}</td>
                          <td><a  class="btn btn-info">Edit</a></td>
                          <td><a onclick="return confirm('Are you sure to block')"  class="btn btn-success"> Block</a></td>
                          <td><a onclick="return confirm('Are you sure to delete')" class="btn btn-danger">Delete</a></td>
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