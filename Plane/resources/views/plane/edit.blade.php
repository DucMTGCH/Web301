@extends('layout.navbar')

@extends('layout.layout')
<section class="home">
        <div class="text">Home</div>
            <ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
                <form action="/planes/{{$Plane->id}}" method="post" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label " style="color: red">Plane name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$Plane->name}}">
                    </div>
                    
                        <div class="mb-3">
                            <label for="factory" class="form-label" style="color: red">Factory</label>
                            <select id="factories" name="factories[]" class="form-select" aria-label="Select factorys" multiple>            
                            @foreach ($factories as $factory)
                                <option value="{{$factory->id}}" @if(in_array($factory->id, $Plane->factories->pluck('id')->toArray())) selected @endif>{{$factory->name}}</option>
                            @endforeach
                            </select>
                    
                        </div>
                    
                    </div>
                    <div class="mb-3">
                        <label for="types" class="form-label" style="color: red">type plane</label>
                        <select id="types" name="types" class="form-select" aria-label="Select types">
                            <option selected>Please choose one</option>
                            @foreach($types as $type)
                            <option {{ ($type->id == $Plane->type->id)?"selected":""}} value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="national" class="form-label" style="color: red">National</label>
                        <select id="national" name="national" class="form-select" aria-label="Select national">
                            <option selected>Please choose one</option>
                            @foreach($nationals as $national)
                            <option {{ ($national->id == $Plane->national->id)?"selected":""}} value="{{$national->id}}">{{$national->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </ol>
            <div style="margin-top: 3rem">
            @include('layout.footer')
            </div>
    </section>