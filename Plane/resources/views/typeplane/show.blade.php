@extends('layout.layout')
    <section class="home">
        <div class="text">Home</div>
            <ol style="margin-left: 3rem" class="list-group list-group-numbered">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">{{$typeplane->name}}</h4>
                    </div>
                </div>
    </ol>
    <div style="margin-top: 3rem">
        @include('layout.footer')
    </div>
    </section>