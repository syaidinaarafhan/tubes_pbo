@props(['imagePaths'])

<div class="row">
    @foreach($imagePaths as $imagePath)
        <div class="col-md-4 mb-4">
            <img src="{{ asset($imagePath) }}" class="img-fluid" alt="Foto Galang Dana">
        </div>
    @endforeach
</div>