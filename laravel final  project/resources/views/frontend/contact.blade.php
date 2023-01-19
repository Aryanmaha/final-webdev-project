@extends('layouts.app')
@section('title',"about")

@section('title',"about")

@section('title',"about")

@section('content')
<main class="container">
          <h1>Contact us</h1>
          <form action="">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="firstName"> First Name</label>
                <input type="text" class="form-control" id="FirstName" placeholder="Enter your first Name....">
              </div>
              <div class="form-group col-md-6">
                <label for="lastName"> Last Name</label>
                <input type="text" class="form-control" id="lastName" placeholder="Enter your last Name....">
              </div>
            </div>
            <div class="row">
              <div class="form-group col-md-6">
                <label for="userEmail">Email</label>
                <input type="email" class="form-control" id="userEmail" placeholder="Enter your Email Address....">
              </div>
              <div class="form-group col-md-6">
                <label for="teleNumber">Phone number</label>
                <input type="email" class="form-control" id="teleNumber" placeholder="Enter your phone number....">
              </div>
            </div>
            <div class="col-1 m-3">
              <label for="message">Message</label>
              <textarea class="from-control" id="message" rows="6" cols="100" placeholder="Enter your message...."></textarea>  
            </div>
            <div class="col-12">
              <button type="submit" class="submit-button btn btn-primary">Send Message</button>
            </div>
          </form>
        </main>

@endsection