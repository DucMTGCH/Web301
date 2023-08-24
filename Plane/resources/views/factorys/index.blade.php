@extends('layout.navbar')

@extends('layout.layout')
<section class="home">
 <div class="text">Home</div>
     @foreach ($factorys as $factorys)
     <ol style="margin-left: 3rem" class="list-group list-group-numbered">
         <li class="list-group-item d-flex justify-content-between align-items-start">
           <div class="ms-2 me-auto">
             <div class="fw-bold"><a style="color: #18191a;text-decoration:none;">{{$factorys->name}}</a></div>
            
             <div class="fw-bold"><a style="color: #18191a;text-decoration:none;">{{$factorys->phonenumber}}</a></div>
             
             <div class="fw-bold"><a style="color: #18191a;text-decoration:none;">{{$factorys->nationality}}</a></div>
             
             <div class="fw-bold"><a style="color: #18191a;text-decoration:none;">{{$factorys->email}}</a></div>
             
           </div>
           <span class="badge bg-secondary rounded-pill">
             <a href="{{url("/factorys/".$factorys->id)}}" class="btn btn-secondary">View</a>
                   <a href="{{url("/factorys/".$factorys->id."/edit")}}" class="btn btn-secondary">Edit</a>
                   <form action="{{url("/factorys/".$factorys->id)}}" method="post" class="d-inline">
                     {{ method_field('DELETE') }}
                     @csrf
                     <button type="submit" class="btn btn-secondary" onclick="return confirm('Are you sure?');">Delete</button>
                   </form>
                  
           </span>
         </li>
       </ol>
       @include('layout.footer')
       @endforeach
     </section>