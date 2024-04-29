@extends('admin.admin')
@section('content')

 <h5 class="card-title">Edit Experiences</h5>
    <ul class="list-group list-group-flush">

        @foreach ($experiences as $experience)
            <li class="list-group-item"> {{ $experience->Exprience_name }}
                <a href="{{ route('experience', ['id' => $experience->id])}}" class="alert-link"> <i class="bi bi-pencil-square"></i>
                </a>
            </li><br>

        @endforeach

    </ul>
@endsection
