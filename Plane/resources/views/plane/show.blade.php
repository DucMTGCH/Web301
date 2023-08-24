@extends('layout.layout')

<section class="home">
        <div class="text">Home</div>
     
        <ol style="margin-left: 3rem; " class="list-group list-group-numbered">
            <div class="container">
                <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col">
                        <video style="border-radius:10px" controls width="800" height="500" >

                    </div>
                    <div class="col" style="margin-top:5rem;">
                        <p class="card-text">Factory: 
                        </p>
                        @foreach($Planes as $plane)
                        <p class="card-text">typeplane: {{$plane->name}}</p>
                        <p class="card-text">nationality:{{$plane->name}}</p>
                        <div style="text-align:center;margin-top:3rem">
                            <a class="btnbackhome" href="/planes" style="padding:4px 6px; border-radius:20px; border:2px solid black;text-decoration:none;color:black; ">
                            Back to home page</a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
            </div>
          </ol>
          <div style="margin-top: 3rem">
            @include('layout.footer')
        </div>
       
          
       
    </section>

