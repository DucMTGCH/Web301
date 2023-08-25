@extends('layout.layout')

<section class="home">
        <div class="text">Home</div>
     
        <ol style="margin-left: 3rem; " class="list-group list-group-numbered">
            <div class="container">
                <div class="card">
                <div class="card-body">
                <div class="row">
                    <div class="col">
            

                    </div>
                    <div class="col" style="margin-top:5rem;">
                        <p class="card-text">
                    
                        </p>
                        <div class="data">

    </div>
    <div class="row">
      <div class="info">
        @foreach($Plane->factories as $factory)
        <h3>Factory: {{$factory->name}}</h3>
        @endforeach
      </div>
      <div class="info">
        <h3>type: {{$Plane->Type->name}}</h3>
      </div>
      <div class="info">
        <h3>national: {{$Plane->National->name}}</h3>
      </div>
    </div>
                        <div style="text-align:center;margin-top:3rem">
                            <a class="btnbackhome" href="/planes" style="padding:4px 6px; border-radius:20px; border:2px solid black;text-decoration:none;color:black; ">
                            Back to home page</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            </div>
          </ol>
          <div style="margin-top: 3rem">
            @include('layout.footer')
        </div>
       
          
       
    </section>

