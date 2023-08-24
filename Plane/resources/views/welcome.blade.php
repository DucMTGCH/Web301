<!-- @extends('layout.layout') -->

<section class="home" >
    <div class="text">Group I</div>
     
    <ol style="margin-left: 3rem; " class="list-group list-group-numbered">
    <div class="container py-5">
  
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
            <img src="{{asset('plane.jpg')}}" alt=""
              class="w-100" />
            <a href="/planes">
              <div class="mask" >
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">Planes</span></h5>
                </div>
              </div>
              
            </a>
          </div>
        </div>
  
             
            </a>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
            <img src="{{asset('typeplane.jpg')}}" alt=""
              class="w-100" />
            <a href="/typeplanes">
              <div class="mask" >
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">TypePlane</span></h5>
                </div>
              </div>
             
            </a>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded ripple-surface">
            <img src="{{asset('favourite.jpg')}}" alt=""
              class="w-100" />
            <a href="/factorys">
              <div class="mask" >
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">Factory</span></h5>
                </div>
              </div>
              <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded ripple-surface">
            <img src="{{asset('national.jpg')}}" alt=""
              class="w-100" />
            <a href="/nationals">
              <div class="mask" >
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">National</span></h5>
                </div>
              </div>

              
            </a>

 
    </ol>
   
    </div>
    @include('layout.footer')
   
  </section>
  