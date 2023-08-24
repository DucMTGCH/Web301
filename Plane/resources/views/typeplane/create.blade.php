@extends('layout.layout')


<section class="home">
    <div class="text">Home</div>
        <ol style="margin-left: 3rem" class="list-group list-group-numbered">
            <form action="/typeplanes" method="post">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Type Plane Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="typeplane Name">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

</ol>
<div style="margin-top: 3rem">
@include('layout.footer')
</div>
</section>