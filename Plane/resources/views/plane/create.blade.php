@extends('layout.navbar')

@extends('layout.layout')

<section class="home">

        <div class="text">Home</div>
            <ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
                <form action="/planes" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label " style="color: red">Plane name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name">
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label " style="color: red">description</label>
                        <input type="text" class="form-control" id="description" name="description" placeholder="description">
                    </div>
                    <label for="color" class="form-label " style="color: red">color</label>
                        <input type="text" class="form-control" id="color" name="color" placeholder="color">
                    <div class="mb-3">
                        <label for="factory" class="form-label" style="color: red">factory</label>
                        <select id="factorys" name="factorys[]" class="form-select" aria-label="Select Factorys" multiple>            
                            @foreach($factorys as $factory)
                            <option value="{{$factory->id}}">{{$factory->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    </div>
                    <div class="mb-3">
                        <label for="typeplane" class="form-label" style="color: red">typeplane</label>
                        <select id="typeplane" name="typeplane" class="form-select" aria-label="Select typeplane">
                            <option selected>Please choose one</option>
                            @foreach($typeplanes as $typeplane)
                            <option value="{{$typeplane->id}}">{{$typeplane->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nationality" class="form-label" style="color: red">National</label>
                        <select id="nationality" name="nationality" class="form-select" aria-label="Select nationality">
                            <option selected>Please choose one</option>
                            @foreach($nationalitys as $nationality)
                            <option value="{{$nationality->id}}">{{$nationality->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </ol>
            <div style="margin-top: 3rem">
            @include('layout.footer')