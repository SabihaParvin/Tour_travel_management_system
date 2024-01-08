<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
</head>

<body>

@extends('admin.master')

@section('content')


<div class="container bg-light col-md-5 pd-4 py-3 card shadow">
<form action="{{route('packages.store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="">Enter package Name:</label>
    <input type="text" class="form-control" id="" placeholder="Enter name" name="name" required>
    @error('name')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>

  <div class="form-group">
    <label for="">Upload Image: </label>
    <input name="image" type="file" class="form-control">
  </div>

  <div class="form-group">
  <label for="">Enter Package Description:</label>
   <textarea class="form-control" name="description" id="" cols="30" rows="10" required></textarea>
   @error('description')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="form-group">
    <label for="">Enter price:</label>
    <input type="numeric" class="form-control" id="" placeholder="Enter price" name="price" required>
    @error('price')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="elem-group inlined">
    <label for="start_date">Enter start date:</label>
    <input type="date" class="form-control" id="start_date" placeholder="Enter startDate" name="start_date"required>
    @error('start_date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  <div class="elem-group inlined">
    <label for="end_date">Enter end date:</label>
    <input type="date" class="form-control" id="end_date" placeholder="Enter endDate" name="end_date"required>
    @error('end_date')
    <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<script>
    var currentDateTime = new Date();
    var year = currentDateTime.getFullYear();
    var month = (currentDateTime.getMonth() + 1);
    var date = (currentDateTime.getDate() + 1);

    if (date < 10) {
      date = '0' + date;
    }
    if (month < 10) {
      month = '0' + month;
    }

    var dateTomorrow = year + "-" + month + "-" + date;
    var checkinElem = document.querySelector("#start_date");
    var checkoutElem = document.querySelector("#end_date");

    checkinElem.setAttribute("min", dateTomorrow);

    checkinElem.onchange = function() {
      checkoutElem.setAttribute("min", this.value);
    }
  </script>
  @endsection
</body>

</html>