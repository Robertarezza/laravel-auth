@extends('layouts.admin')

@section('content')
<div class="container-fluid  mt-5">
    <div class="row  justify-content-center">
        <div class="col-12 ">
            <div class="card w-100">
                <div class="card-body ">
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
                        {{$project->description}}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">

                        <a href="{{route('admin.projects.index')}}" class="btn btn-outline-primary" title="Indietro"><i class="fa-solid fa-square-caret-left" ></i></a>
                       
                        <a href="{{route('admin.projects.edit', ['project'=>$project->slug]) }}" class="btn btn-outline-warning" title="Modifica" >
                            <i class="fa-solid fa-file-pen" ></i>
                       
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection