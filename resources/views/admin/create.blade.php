@extends('layouts.master')



@section('content')
<div class="container">
    @if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif

<h1>Create and admin</h1>
<form action="#" class="p-5 bg-white">

    <div class="row form-group">
      <div class="col-md-12 mb-3 mb-md-0">
        <label class="font-weight-bold" for="fullname">Full Name</label>
        <input type="text" id="fullname" class="form-control" placeholder="Full Name">
      </div>
    </div>
    <div class="row form-group">
      <div class="col-md-12">
        <label class="font-weight-bold" for="email">Email</label>
        <input type="email" id="email" class="form-control" placeholder="Email Address">
      </div>
    </div>

    

    <div class="row form-group">
      <div class="col-md-12">
        <label class="font-weight-bold" for="message">Message</label> 
        <textarea name="message" id="message" cols="30" rows="5" class="form-control" placeholder="Say hello to us"></textarea>
      </div>
    </div>

    <div class="row form-group">
      <div class="col-md-12">
        <input type="submit" value="Send Message" class="btn btn-primary rounded-0 btn-lg">
      </div>
    </div>


  </form>

</div>
@endsection