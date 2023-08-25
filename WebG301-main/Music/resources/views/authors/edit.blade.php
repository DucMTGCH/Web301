@extends ('layouts.app')
@section ('title', 'ADD new Author')
@section ('content')
<form action="/authors/{{$author->id}}" method="POST">
    @csrf
    @method ('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Name</label>
        <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId" placeholder="" value="{{$author->name}}">
        <label for="" class="form-label">Email</label>
        <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="" value="{{$author->email}}">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection