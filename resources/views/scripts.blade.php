


<script type="text/javascript">
  $('#countries').on('change', function(){
    var SelectedId = $('#countries').find(":selected").val();
      if(SelectedId != 'select country'){
      axios.get('{{url("/cities/")}}' + '/'+ SelectedId)
            .then(function(response) {
                $('#cities').html(response.data);
                $('#areas').html('<option disabled selected>select area</option>');
                $('#companies').html('<option disabled selected>select company</option>');
                $('#brands').html('<option disabled selected>select brand</option>');
                $('#branches').html('<option disabled selected>select branch</option>');
                $('#stands').html('<option disabled selected>select stand</option>');

            });
    }
  });



  $('#cities').on('change', function(){
    var SelectedId = $('#cities').find(":selected").val();
      if(SelectedId != 'select city'){
      axios.get('{{url("/areas/")}}' + '/'+ SelectedId)
            .then(function(response) {
                $('#areas').html(response.data);
                $('#companies').html('<option disabled selected>select company</option>');
                $('#brands').html('<option disabled selected>select brand</option>');
                $('#branches').html('<option disabled selected>select branch</option>');
                $('#stands').html('<option disabled selected>select stand</option>');
            });
    }
  });


  $('#areas').on('change', function(){
    var SelectedId = $('#areas').find(":selected").val();
      if(SelectedId != 'select area'){
      axios.get('{{url("/companies/")}}' + '/'+ SelectedId)
            .then(function(response) {
                $('#companies').html(response.data);
                $('#brands').html('<option disabled selected>select brand</option>');
                $('#branches').html('<option disabled selected>select branch</option>');
                $('#stands').html('<option disabled selected>select stand</option>');
            });
    }
  });


  $('#companies').on('change', function(){
    var SelectedId = $('#companies').find(":selected").val();
      if(SelectedId != 'select company'){
      axios.get('{{url("/brands/")}}' + '/'+ SelectedId)
            .then(function(response) {
                $('#brands').html(response.data);
                $('#branches').html('<option disabled selected>select branch</option>');
                $('#stands').html('<option disabled selected>select stand</option>');
            });
    }
  });


  $('#brands').on('change', function(){
    var SelectedId = $('#brands').find(":selected").val();
      if(SelectedId != 'select brand'){
      axios.get('{{url("/branches/")}}' + '/'+ SelectedId)
            .then(function(response) {
                $('#branches').html(response.data);
                $('#stands').html('<option disabled selected>select stand</option>');

            });
    }
  });



  $('#branches').on('change', function(){
    var SelectedId = $('#branches').find(":selected").val();
      if(SelectedId != 'select branch'){
      axios.get('{{url("/stands/")}}' + '/'+ SelectedId)
            .then(function(response) {
                $('#stands').html(response.data);
            });
    }
  });

    

  </script>
