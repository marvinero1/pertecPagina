<html>
  <head>
    <title>Using Select2</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <!-- Select2 CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
  </head>
  <body>
    <div class="jumbotron">
      <div class="container bg-danger">
        <div class="col-md-6">
          <label>Single Select2</label>
      
          <select id="single" class="js-states form-control">
            @foreach ($producto as $productos)
                <option value="{{ $productos->nombre_producto }}">{{$productos->nombre_producto}}</option>
            @endforeach
        </select>
        </div>
      </div>
    </div>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Select2 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
      $("#single").select2({
          placeholder: "Select a programming language",
          allowClear: true
      });
      $("#multiple").select2({
          placeholder: "Select a programming language",
          allowClear: true
      });
    </script>
  </body>
</html>