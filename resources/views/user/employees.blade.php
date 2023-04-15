 
 
 <div class="page-section">
    <div class="container">
      <h1 class="text-center mb-5 wow fadeInUp">Our Employees</h1>

      <div class="owl-carousel wow fadeInUp" id="doctorSlideshow">
        @foreach($employees as $employees)
        <div class="item">
          <div class="card-doctor">
            <div class="header">
              <img src="employeesimage/{{$employees->image}}" alt="">
            </div>
            <div class="body">
              <p class="text-xl mb-0">{{$employees->name}}</p>
              <span class="text-sm text-grey">{{$employees->role}}</span>
            </div>
          </div>
        </div>
        @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>