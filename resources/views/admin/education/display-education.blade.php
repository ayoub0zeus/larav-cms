@extends('admin.admin')
@section('content')

 <h5 class="card-title">Edit Education</h5>
    <ul class="list-group list-group-flush">

        @foreach ($educations as $education)
            <li class="list-group-item"> {{ $education->Education_name }}
                <a href="{{ route('education', ['id' => $education->id])}}" class="alert-link"> <i class="bi bi-pencil-square"></i>
                </a>
            </li><br>

        @endforeach

    </ul>
@endsection
