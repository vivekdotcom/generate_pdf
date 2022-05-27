<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
<div class="mt-5">
         <a href="{{ route('pdf') }}" class="btn btn-primary">
             generate pdf
        </a>
</div>
<div class="mt-5">
         <a href="{{ route('export') }}" class="btn btn-primary">
             Export Data
        </a>
</div>
  <h2>Basic Table</h2>
  <table class="table">
      <thead>
      <tr>
        <td>Name</td>
        <td>Email</td>
        <td>Password</td>
      </tr>
      </thead>
    <tbody>
      
      @foreach ($data as $datas)

      <tr>
      <td>{{ $datas->name }}</td>
      <td>{{ $datas->email }}</td>
      <td>{{ $datas->password }}</td>
      <td>
</tr>
@endforeach
    </tbody>
   
  </table>
 

</div>
<div class="mt-5">
         <a href="{{url('/')}}" class="btn btn-primary">
             Back
        </a>
</div>

</body>
</html>
