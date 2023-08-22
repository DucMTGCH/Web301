@extends('layout.footer')
@section('content')
<section class="home">
    <div class="text">Home</div>
        <ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
<form action="/factorys" method="post" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label" style="color: red">factory Name</label> 
        <input type="text" class="form-control" id="name" name="name" placeholder="name">
    </div>
    <div class="mb-3">
        <label for="phone number" class="form-label" style="color: red">factory phone number</label>
        <input type="text" class="form-control" id="phonenumber" name="phonenumber" placeholder="phonenumber">
    </div>
    <div class="mb-3">
        <label for="nationality" class="form-label" style="color: red">factory nationality</label>
        <input type="text" class="form-control" id="nationality" name="nationalityity" placeholder="nationality">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label" style="color: red">factory email</label>
        <input type="text" class="form-control" id="email" name="email" placeholder="email">
   
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</ol>
</section>
@endsection