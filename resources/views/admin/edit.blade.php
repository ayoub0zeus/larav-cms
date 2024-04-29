@extends('admin.admin')
@section('content')
<h5 class="card-title">Changer les informaton Personneles </h5>
                            
<form class="row g-3" method="POST" action="{{ route('update', ['id' => $content->id]) }}" enctype="multipart/form-data" >
    @csrf
    @method('PUT')
    <div class="col-12">
        <label class="form-label" for="username">username:</label>
        <input class="form-control" type="text" id="username" name="username" value="{{ old('username', $content->username) }}">
    </div>
    <div class="col-12">
        <label class="form-label" for="job">Job:</label>
        <input class="form-control" type="text" id="job" name="job" value="{{ old('job', $content->job) }}">
    </div>
    <div class="col-12">
        <label class="form-label" for="image">image:</label>
        <input class="form-control" type="file" id="image" name="image" >
        {{-- value="{{ old('image', $content->image) }}" --}}
    </div>

    <div class="col-12">
        <label class="form-label" for="email">Email:</label>
        <input class="form-control" type="text" id="email" name="email" value="{{ old('email', $content->email) }}">
    </div>
    <div class="col-12">
        <label class="form-label" for="adress">Adress:</label>
        <input class="form-control" type="text" id="adress" name="adress" value="{{ old('adress', $content->adress) }}">
    </div>
    <div class="col-12">
        <label class="form-label" for="phone">phone:</label>
        <input class="form-control" type="text" id="phone" name="phone" value="{{ old('phone', $content->phone) }}">
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

@endsection