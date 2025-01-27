@extends('frontend.includes.main')
@section('content')

<!doctype html>
<html lang="en">
  <body>

    <section class="site-hero site-hero-innerpage overlay" data-stellar-background-ratio="0.5" style="background-image: url({{asset('frontend-assets/images/big_image_1.jpg')}});">
      <div class="container">
        <div class="row align-items-center site-hero-inner justify-content-center">
          <div class="col-md-12 text-center">

            <div class="mb-5 element-animate">
              <h1>Reservation</h1>
              <p>Discover our world's #1 Luxury Room For VIP.</p>
            </div>

          </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    <section class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <h2 class="mb-5">Reservation Form</h2>
                <form action="#" method="post">
                  <div class="row">
                      <div class="col-sm-6 form-group">
                          
                          <label for="">Arrival Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='text' class="form-control" id='arrival_date' />
                          </div>
                      </div>

                      <div class="col-sm-6 form-group">
                          
                          <label for="">Departure Date</label>
                          <div style="position: relative;">
                            <span class="fa fa-calendar icon" style="position: absolute; right: 10px; top: 10px;"></span>
                            <input type='text' class="form-control" id='departure_date' />
                          </div>
                      </div>
                      
                  </div>


                  <div class="row">
                    <div class="col-md-6 form-group">
                      <label for="room">Room</label>
                      <select name="" id="room" class="form-control">
                        <option value="">1 Room</option>
                        <option value="">2 Rooms</option>
                        <option value="">3 Rooms</option>
                        <option value="">4 Rooms</option>
                        <option value="">5 Rooms</option>
                      </select>
                    </div>

                    <div class="col-md-6 form-group">
                      <label for="room">Guests</label>
                      <select name="" id="room" class="form-control">
                        <option value="">1 Guest</option>
                        <option value="">2 Guests</option>
                        <option value="">3 Guests</option>
                        <option value="">4 Guests</option>
                        <option value="">5+ Guests</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="email">Email</label>
                      <input type="email" id="email" class="form-control ">
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12 form-group">
                      <label for="message">Write a Note</label>
                      <textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input type="submit" value="Reserve Now" class="btn btn-primary">
                    </div>
                  </div>
                </form>
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-5">
                <h3 class="mb-5">Featured Room</h3>
                <div class="media d-block room mb-0">
              <figure>
                <img src="{{asset('frontend-assets/images/img_1.jpg')}}" alt="Generic placeholder image" class="img-fluid">
                <div class="overlap-text">
                  <span>
                    Featured Room 
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                    <span class="ion-ios-star"></span>
                  </span>
                </div>
              </figure>
              <div class="media-body">
                <h3 class="mt-0"><a href="#">Presidential Room</a></h3>
                <ul class="room-specs">
                  <li><span class="ion-ios-people-outline"></span> 2 Guests</li>
                  <li><span class="ion-ios-crop"></span> 22 ft <sup>2</sup></li>
                </ul>
                <p>Nulla vel metus scelerisque ante sollicitudin. Fusce condimentum nunc ac nisi vulputate fringilla. </p>
                <p><a href="#" class="btn btn-primary btn-sm">Book Now From $20</a></p>
              </div>
            </div>
              </div>
        </div>
      </div>
    </section>
    <!-- END section -->

    @endsection
       
  </body>
</html>