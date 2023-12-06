@extends('frontend.master')
@section('content')

<section class=" text-center text-lg-start">
  <style>
    .rounded-t-5 {
      border-top-left-radius: 0.5rem;
      border-top-right-radius: 0.5rem;
    }

    @media (min-width: 992px) {
      .rounded-tr-lg-0 {
        border-top-right-radius: 0;
      }

      .rounded-bl-lg-5 {
        border-bottom-left-radius: 0.5rem;
      }
    }
  </style>
  <div class="card mb-3">
    <div class="row g-0 d-flex align-items-center">
      <div class="col-lg-4 d-none d-lg-flex">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" alt="Trendy Pants and Shoes"
          class="w-100 rounded-t-5 rounded-tr-lg-0 rounded-bl-lg-5" />
      </div>
      <div class="col-lg-8">
        <div class="card-body py-5 px-md-5">

          <form action="{{route('tourist.login.post')}}" method="post">
            @csrf


          <div class="form-group">
           <label for="exampleInputEmail1">Email address</label>
           <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

          </div>
          <div class="form-group">
         <label for="exampleInputPassword1">Password</label>
         <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>


   <button type="submit" class="btn btn-primary">Login</button>
</form>

        </div>
      </div>
    </div>
  </div>
  </section>
@endsection