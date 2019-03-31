@include('header')


        <div class="form-group d-inline-block" style="width: 14%;">
           <label>Country</label>
           <select class="form-control" id="countries">
          <option disabled selected>select country</option>
           @foreach ($countries as $country) 
            <option value="{{$country->id}}"> {{$country->name}} </option>
           @endforeach 
            </select>
          </div>


          <div class="form-group d-inline-block" style="width: 14%;">
             <label>City</label>
              <select class="form-control" id="cities">
                  <option disabled selected>select city</option>
              </select>
          </div>



          <div class="form-group d-inline-block" style="width: 14%;">
             <label>Area</label>
              <select class="form-control" id="areas">
                  <option disabled selected>select area</option>
              </select>
          </div>


          <div class="form-group d-inline-block" style="width: 14%;">
             <label>Company</label>
              <select class="form-control" id="companies">
                  <option disabled selected>select company</option>
              </select>
          </div>



          <div class="form-group d-inline-block" style="width: 14%;">
             <label>Brand</label>
              <select class="form-control" id="brands">
                  <option disabled selected>select brand</option>
              </select>
          </div>


          <div class="form-group d-inline-block" style="width: 14%;">
             <label>Branch</label>
              <select class="form-control" id="branches">
                  <option disabled selected>select branch</option>
              </select>
          </div>


          <div class="form-group d-inline-block" style="width: 14%;">
             <label>Stand</label>
              <select class="form-control" id="stands">
                  <option disabled selected>select stand</option>
              </select>
          </div>






@include('footer')
@include('scripts')
        
