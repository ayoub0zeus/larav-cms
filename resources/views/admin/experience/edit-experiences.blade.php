@extends('admin.admin')
@section('content')
<h5 class="card-title">Changer les informaton Personneles </h5>
                            

<form class="row g-3" method="POST" action="{{ route('updateexperience', $experience->id) }}"  >
    @csrf
    @method('PUT')

    <div class="col-12">
        <label class="form-label" for="experience">experience:</label>
        <input class="form-control" type="text" id="Exprience_name" name="Exprience_name" value="{{ old('Exprience_name', $experience->Exprience_name) }}">
    </div>

    <div class="col-12">
        <label class="form-label" for="experience">Experience Date:</label>
        <input class="form-control" type="text" id="Exprience_date" name="Exprience_date" value="{{ old('Exprience_date', $experience->Exprience_date) }}">
    </div>

    <div class="col-12">
        <label class="form-label" for="experience">Experience Society:</label>
        <input class="form-control" type="text" id="Exprience_company" name="Exprience_company" value="{{ old('Exprience_company', $experience->Exprience_company) }}">
    </div>





    <div class="text-center">
        <a href="{{ route('showExperience') }}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection