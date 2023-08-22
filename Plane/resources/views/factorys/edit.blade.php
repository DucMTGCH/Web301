
<section class="home">
    <div class="text">Home</div>
        <ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
<form action="/factorys/{{$factory->id}}" method="post">
    {{ method_field('PUT') }}
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">factory Name</label>
        <input type="text" class="form-control" id="name" value="{{$factory->name}}" name="name" placeholder="factory Name">
    </div>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">factory Email</label>
        <input type="text" class="form-control" id="email"  value="{{$factory->email}}" name="email" placeholder="factory Email">
    </div>
    <div class="mb-3">
        <label for="phone number" class="form-label">factory phone number</label>
        <input type="text" class="form-control" id="phonenumber" value="{{$factory->phonenumber}}" name="phonenumber" placeholder="factory phonenumber">
    </div>
    <div class="mb-3">
        <label for="nationality" class="form-label">factory Nationality</label>
        <input type="text" class="form-control" id="nationality" value="{{$factory->nationality}}" name="nationality" placeholder="factory nationality">
    </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

</ol>
</section>