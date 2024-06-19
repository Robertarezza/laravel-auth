@extends('layouts.admin')


@section('content')
<div class="container mt-5">
    <h1>I miei Progetti</h1>

    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Titolo</th>
                <th scope="col">Descrizione</th>
                <th scope="col">Tecnologie</th>
                <th scope="col">stato</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $project as $project)
            <tr>
                <th scope="row">{{$project->id}}</th>
                <td>{{$project->title}}</td>
                <td>{{$project->description}}</td>
                <td>{{$project->used_technologies}}</td>
                <td>@if($project->status == 'ongoing')
                    <i class="fas fa-spinner fa-spin" title="In Progress"></i>
                    @elseif($project->status == 'completed')
                    <i class="fas fa-check-circle" title="Completed"></i>
                    @else
                    <i class="fas fa-question-circle" title="Unknown Status"></i>
                    @endif
                </td>
            </tr>
            @endforeach



        </tbody>
    </table>
</div>

@endsection