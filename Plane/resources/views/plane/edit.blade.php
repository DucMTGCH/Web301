<section class="home">
        <div class="text">Home</div>
            <ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
                <form action="/songs/{{$song->id}}" method="post" enctype="multipart/form-data">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label " style="color: red">Plane name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="{{$song->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="factory" class="form-label" style="color: red">Factory</label>
                        <div class="mb-3">
                            <label for="factory" class="form-label" style="color: red">Factory</label>
                            <select id="factorys" name="factorys[]" class="form-select" aria-label="Select Artists" multiple>            
                                @foreach($factorys as $factory)
                                <option value="{{$factory->id}}">{{$factory->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    </div>
                    <div class="mb-3">
                        <label for="typeplanes" class="form-label" style="color: red">type plane</label>
                        <select id="typeplanes" name="typeplanes" class="form-select" aria-label="Select Author">
                            <option selected>Please choose one</option>
                            @foreach($typeplanes as $typeplanes)
                            <option {{ ($typeplanes->id == $plane->typeplanes->id)?"selected":""}} value="{{$typeplanes->id}}">{{$typeplanes->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="nationality" class="form-label" style="color: red">National</label>
                        <select id="nationality" name="nationality" class="form-select" aria-label="Select Author">
                            <option selected>Please choose one</option>
                            @foreach($nationalitys as $nationality)
                            <option {{ ($nationality->id == $song->nationality->id)?"selected":""}} value="{{$nationality->id}}">{{$nationality->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </ol>
            <div style="margin-top: 3rem">
            </div>
    </section>