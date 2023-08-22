<!-- @extends('layout.layout') -->

<section class="home" >
    <div class="text">Home</div>
     
    <ol style="margin-left: 3rem; " class="list-group list-group-numbered">
    <div class="container py-5">
  
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
            <img src="{{asset('song.jpg')}}" alt=""
              class="w-100" />
            <a href="/songs">
              <div class="mask" >
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">Songs</span></h5>
                </div>
              </div>
              
            </a>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
            <img src="{{asset('album.jpg')}}"
              class="w-100" />
            <a href="/albums">
              <div class="mask">
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">Albums</span></h5>
                </div>
              </div>
             
            </a>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
            <img src="{{asset('category.jpg')}}" alt=""
              class="w-100" />
            <a href="/categories">
              <div class="mask" >
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">Categories</span></h5>
                </div>
              </div>
             
            </a>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-lg-4 col-md-12 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded ripple-surface">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(2).webp"
              class="w-100" />
            <a href="/artists">
              <div class="mask" >
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">Artists</span></h5>
                </div>
              </div>
              
            </a>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
            <img src="https://mdbcdn.b-cdn.net/img/Photos/Horizontal/E-commerce/new/img(5).webp"
              class="w-100" />
            <a href="nationals">
              <div class="mask" >
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">Nationals</span></h5>
                </div>
              </div>
              
            </a>
          </div>
        </div>
  
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="bg-image hover-zoom ripple shadow-1-strong rounded">
            <img src="{{asset('favourite.jpg')}}"
              class="w-100" />
            <a href="#!">
              <div class="mask" >
                <div class="d-flex justify-content-start align-items-start h-100">
                  <h5><span class="badge bg-light pt-2 ms-3 mt-3 text-dark">Favourites</span></h5>
                </div>
              </div>
             
            </a>
          </div>
        </div>
        
      </div>
 
    </ol>
    @include('layout.footer')
    </div>
   
  </section>