@extends('layout.layout')
<section class="home">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{$nationals->name}}</h4>
        </div>
    </div>
    <div style="margin-top: 3rem">
        @include('layout.footer')
    </div>
</section>