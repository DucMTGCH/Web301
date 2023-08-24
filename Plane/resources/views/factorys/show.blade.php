@extends('layout.footer')

@extends('layout.navbar')

<section class="home">
<body>
  <section class="main">
  <div class="profile-card">
   
     
    </div>
    <div class="data">
      <h2>{{$factory->name}}</h2>
      <span>name: {{$factory->name}}</span>
    </div>
    <div class="row">
      <div class="info">
        <h3>Email: {{$factory->email}}</h3>
      </div>
      <div class="info">
        <h3>PhoneNumber: {{$factory->PhoneNumber}}</h3>
      </div>
      <div class="info">
        <h3>Nationality: {{$factory->Nationality}}</h3>
      </div>
    </div>
    <div class="buttons">
      <a href="#" class="btn">Message</a>
      <a href="#" class="btn">Follow</a>
      @include('layout.footer')
    </div>
  </div>

</section>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap');
/* *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
} */
.main{
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: left;
  margin-left: 5rem;
  background-position: center;
  background-size: cover;
  background-color: 
  
}
.profile-card{
  display: flex;
  flex-direction: column;
  align-items: center;
  max-width: 1000px;
  width: 100%;
  border-radius: 25px;
  padding: 30px;
  border: 1px solid #ffffff40;
  box-shadow: 0 5px 20px rgba(0,0,0,0.4);
  background-color: #fff;
}
#image{
  position: relative;
  height: 150px;
  width: 150px;
}
#image .profile-pic{
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 50%;
  box-shadow: 0 5px 20px rgba(0,0,0,0.4);
}
.data{
  display: flex;
  flex-direction: column;
  align-items: center;
  margin-top: 15px;
}
.data h2{
  font-size: 33px;
  font-weight: 600;
}
span{
  font-size: 18px;
}
.row{
  display: flex;
  align-items: center;
  margin-top: 30px;
}
.row .info{
  text-align: center;
  padding: 0 20px;
}
.buttons{
  display: flex;
  align-items: center;
  margin-top: 30px;
}
.buttons .btn{
  color: #fff;
  text-decoration: none;
  margin: 0 20px;
  padding: 8px 25px;
  border-radius: 25px;
  font-size: 18px;
  white-space: nowrap;
  background: linear-gradient(to left, #33ccff 0%, #ff99cc 100%);
}
.buttons .btn:hover{
  box-shadow: inset 0 5px 20px rgba(0,0,0,0.4);
}
</style>

</ol>
</section>