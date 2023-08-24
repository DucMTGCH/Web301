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
                        <div class="mb-3">
                            <label for="factory" class="form-label" style="color: red">Factory</label>
                            <select id="factorys" name="factorys[]" class="form-select" aria-label="Select factorys" multiple>            
                        
                            </select>
                            <div class="mb-3">
                        <label for="description" class="form-label" style="color: red">description</label>
                        <div class="mb-3">
                            <label for="description" class="form-label" style="color: red">Factory</label>
                            <!-- <select id="description" name="description[]" class="form-select" aria-label="Select description" multiple>            
                                @foreach($Descriptions as $description)
                                <option value="{{$description->id}}">{{$description->name}}</option>
                                @endforeach
                            </select> -->
                            <div class="mb-3">
                        <label for="color" class="form-label" style="color: red">description</label>
                        <div class="mb-3">
                            <label for="color" class="form-label" style="color: red">Factory</label>
                            <select id="color" name="color[]" class="form-select" aria-label="Select color" multiple>            
        
                            
                        </div>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="typeplanes" class="form-label" style="color: red">type plane</label>
                        <select id="typeplanes" name="typeplanes" class="form-select" aria-label="Select typeplanes">
                            <option selected>Please choose one</option>
                            @foreach($typePlanes as $typeplanes)
                            <option {{ ($typeplanes->id == $Plane->typeplanes->id)?"selected":""}} value="{{$typeplanes->id}}">{{$typeplanes->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nationality" class="form-label" style="color: red">National</label>
                        <select id="nationality" name="nationality" class="form-select" aria-label="Select nationality">
                            <option selected>Please choose one</option>
                            @foreach($nationalitys as $nationality)
                            <option {{ ($nationality->id == $Plane->nationality->id)?"selected":""}} value="{{$nationality->id}}">{{$nationality->name}}</option>
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