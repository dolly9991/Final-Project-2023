<!-- officer/body.blade.php-->

<div class="content-wrapper">
            <div class="row">
            </div>
            <div class="row">
                <h2> View assets</h2>
                  <table class="table table-responsive table-dark table-bordered table-hover">
                    <thead class="thead-light">
                        <tr >
                          <th scope="col">#</th>
                          <th scope="col">Asset Name</th>
                          <th scope="col">AssetNo</th>
                          <th scope="col">Type</th>
                          <th scope="col">Description</th>
                          <th scope="col">Model</th>
                          <th scope="col">serialNo</th>
                          <th scope="col">Warranty</th>
                          <th scope="col">Purchase Cost</th>
                          <th scope="col">Purchase Date</th>
                          <th scope="col">Edit</th>
                          <th scope="col">Delete</th>
                        </tr>
                      </thead>
                      <tbody>
                      @if (count ($assets)!= 0)

                      @foreach($assets as $asset)

                        <tr>
                        <th scope="row">{{ $asset->id }}</th>
                          <td>{{ $asset->name }}</td>
                          <td>{{ $asset->assetNo }}</td>
                          <td>{{ $asset->type }}</td>
                          <td>{{ $asset->description }}</td>
                          <td>{{ $asset->model }}</td>
                          <td>{{ $asset->serialNo }}</td>
                          <td>{{ $asset->warranty }}</td>
                          <td>{{ $asset->purchaseCost }}</td>
                          <td>{{ $asset->purchaseDate }}</td>
                          <td><a href="" class="btn btn-info">Edit</a></td>
                          <td><a onclick="return confirm('Hey!! Are you sure to delete this asset?')" class="btn btn-danger">Delete</a></td>
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