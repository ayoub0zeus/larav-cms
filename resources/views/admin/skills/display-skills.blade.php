@extends('admin.admin')
@section('content')

 <h5 class="card-title">Edit skills </h5>
    <ul class="list-group list-group-flush">

        @foreach ($skills as $skill)
            <li class="list-group-item"> {{ $skill->skills }}
                <a href="{{ route('skill', ['id' => $skill->id]) }}" class="alert-link"> <i class="bi bi-pencil-square"></i>
                </a>

            </li><br>

        @endforeach

    </ul>
@endsection
