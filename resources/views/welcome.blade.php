<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
        * {
            border-radius: 0 !important;
        }
        body {
            background-color: #E7F7F9;
            padding: 20px 10px;
        }
    </style>
    </head>
    <body>


        <div class="form-group d-inline-block" style="width: 15%;">
           <label for="Vendor">Country</label>
           <select class="form-control" id="forVendors" name="vendor_id">
          <option disabled selected>select country</option>
          {{-- @foreach ($vendors as $vendor) --}}
            <option value="">country 1</option>
            <option value="">country 2</option>
            {{-- @endforeach  --}}
            </select>
          </div>


          <div class="form-group d-inline-block" style="width: 15%;">
           <label for="Vendor">Country</label>
           <select class="form-control" id="forVendors" name="vendor_id">
          <option disabled selected>select country</option>
          {{-- @foreach ($vendors as $vendor) --}}
            <option value="">country 1</option>
            <option value="">country 2</option>
            {{-- @endforeach  --}}
            </select>
          </div>



        



        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.min.js"></script>
    </body>
</html>
