@extends('layout.navbar')

@extends('layout.layout')
<section class="home">
    <div class="text">Home</div>
        <ol style="margin-left: 5rem; margin-right:5rem" class="list-group list-group-numbered">
            <form action="/nationalitys" method="post">
                {{ method_field('PUT') }}
                @csrf
                <div class="mb-3">
                    <label for="nationality" class="form-label">National</label>
                    <input type="text" class="form-control" id="nationality" name="nationality" placeholder="nationality" value="{{$nationality->name}}">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

</ol>
<div style="margin-top: 3rem">
    @include('layout.footer')
</div>
</section>