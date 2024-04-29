@extends('admin.admin')
@section('content')
<h5 class="card-title">Changer les informaton Personneles </h5>
                            
{{-- <form class="row g-3" method="POST" action="{{ route('updateskill', ['id' => $skill->id]) }}"  > --}}
<form class="row g-3" method="POST" action="{{ route('updateskill', $skill->id) }}"  >
    @csrf
    @method('PUT')

    <div class="col-12">
        <label class="form-label" for="skills">skills:</label>
        <input class="form-control" type="text" id="skills" name="skills" value="{{ old('skills', $skill->skills) }}">
    </div>

    {{-- <div class="col-12">
        <label class="form-label" for="skills_color">skills_color:</label>
        <input class="form-control" type="text" id="skills_color" name="skills_color" value="{{ old('skills_color', $skill->skills_color) }}">
    </div> --}}
            <div class="col-12">
                <label class="form-label" for="skills_color">skills_color:</label>
                <select class="form-control" id="skills_color" name="skills_color">
                    @foreach($colors as $color)
                        <option value="{{ $color }}" {{ $skill->skills_color == $color ? 'selected' : '' }}>{{ ucfirst($color) }}</option>
                    @endforeach
                </select>
            </div>

    {{-- <div class="col-12">
        <label class="form-label" for="skills_perstentage">skills_perstentage:</label>
        <input class="form-control" type="text" id="skills_perstentage" name="skills_perstentage" value="{{ old('skills_perstentage', $skill->skills_perstentage) }}">
    </div>
     --}}

    <div class="col-12">
        <label class="form-label" for="skills_perstentage">skills_perstentage:</label>
        <input class="form-range" type="range" id="skills_perstentage" name="skills_perstentage" min="0" max="100" value="{{ old('skills_perstentage', $skill->skills_perstentage) }}">
        <output for="skills_perstentage" id="skills_perstentage_output">{{ old('skills_perstentage', $skill->skills_perstentage) }}</output>
    </div>


    <div class="text-center">
        <a href="{{ route('showskills') }}" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

<script>

    document.getElementById('skills_perstentage').addEventListener('input', function() {
        document.getElementById('skills_perstentage_output').innerHTML = this.value;
    });
</script>
@endsection