@extends('layouts.admin')

@section('content')
<div class="container d-flex justify-content-center mt-5">
    <div class="row">
        <div class="col d-flex justify-content-center">
            <div class="card" >
                <div class="card-body">
                    <h5 class="card-title">{{$project->title}}</h5>
                    <p class="card-text">Tecnologie Usate: {{$project->used_technologies}}</p>
                    <p class="card-text">Stato di lavorazione 
                         @if($project->status == 'ongoing')
                        "In Lavorazione"
                    @elseif($project->status == 'completed')
                            "Completato"
                    @endif</p>
                    <p class="card-text">Slug: {{$project->slug}}</p>
                    <p class="card-text"> Descrizione <br>
                     {{$project->description}}</p>
                    <a href="{{route('admin.projects.index')}}" class="card-link">Indietro</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection