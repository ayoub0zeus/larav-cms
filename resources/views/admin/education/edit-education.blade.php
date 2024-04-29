@extends('admin.admin')
@section('content')
<h5 class="card-title">Edit l'Education </h5>
                            

<form class="row g-3" method="POST" action="{{ route('updateeducation', $education->id) }}"  >
    @csrf
    @method('PUT')

    <div class="col-12">
        <label class="form-label" for="education">Education Name:</label>
        <input class="form-control" type="text" id="Education_name" name="Education_name" value="{{ old('Education_name', $education->Education_name) }}">
    </div>

    <div class="col-12">
        <label class="form-label" for="education">Education Date:</label>
        <input class="form-control" type="text" id="Education_years" name="Education_years" value="{{ old('Education_years', $education->Education_years) }}">
    </div>

    <div class="col-12">
        <label class="form-label" for="education">Experience Society:</label>
        <input class="form-control" type="text" id="Education_company" name="Education_company" value="{{ old('Education_company', $education->Education_company) }}">
    </div>





    <div class="text-center">
        <a href="{{ route('showEducation') }}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>
@endsection