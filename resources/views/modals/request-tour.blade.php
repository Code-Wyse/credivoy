<div class="modal requestTourModal fade" id="requestTourModal" tabindex="-1" role="dialog" aria-labelledby="requestTourContainerTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">

            <div class="modal-body">
                <button type="button" class="close modalClose" data-dismiss="modal">×</button>
                <div class="container">
                  <div class="">

              <div class="text-center">
              <!-- <img src="img/logo.png" alt="logo" style="width:61px;" class="img-fluid  col-lg-6"> -->
              </div>



              <form action="{{route("front.contact.store")}}" method="POST">
                        @csrf
                        <input type="hidden" name="type" value="custom_tour">
                          <div class="copuncotnent mt-3">
                    <p class="m-0 text-white line-height-1 text-center" style="font-size:23px;">Leave us your information, We will contact you</p>
                    <ul class="m-0">
                      <li class="text-white font-30 font-weight-bold m-0" style="    text-align: center;
              list-style: none;">
                      {{-- LAST 9 COUPONS LEFT --}}
                      </li>
                    </ul>
                    <div class="form mt-4">
                      <div class="row">
                        <div class="col-lg-6">
                          <input type="text" placeholder="First Name *" required="" class="form-control copun-field" name="first_name">
                        </div>
                        <div class="col-lg-6">
                          <input type="text" placeholder="Last Name *" required="" class="form-control copun-field" name="last_name">
                        </div>
                        <div class="col-lg-6 mt-3">
                          <input type="email" placeholder="Email - Address*" required="" class="form-control copun-field" name="email">

                        </div>
                        <div class="col-lg-6 mt-3">
                          <input type="number" placeholder="Phone *" required="" class="form-control copun-field" name="phone">

                        </div>
                        <div class="col-12 mt-3">

                            <select name="destination_id" class="form-control select2_tag_modal" id="destinations">
                                <option value="" hidden>Select Destinations</option>
                                @foreach(\App\Models\Destination::get() as $destination)
                                    <option value="{{$destination->id}}">{{$destination->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-12 mt-3">
                            <input type="number" name="no_of_days" id="number_of_days" class="form-control" placeholder="Enter the estimated number of days">
                        </div>
                        <div class="col-12 mt-3">
                          <textarea name="message" class="form-control" style="resize:none;min-height:100px;" placeholder="Brief Discussion about your trip*" required=""></textarea>
                        </div>
                        <div class="col-12 text-center">
                          <input type="submit" class="btn rlr-button rlr-button--large rlr-button--rounded  btn-border-white">
                        </div>
                      </div>

                    </div>
                  </div>

              </form>



                      </div>
                  </div>
                </div>

        </div>
    </div>
</div>
