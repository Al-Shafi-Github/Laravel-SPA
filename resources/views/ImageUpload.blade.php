<x-layout>
<div class="row justify-content-center">
    <div class="col-sm-6 mt-4">
        <div class="card p-5 ml-5 mb-5">
            <form method="POST" action= '/upload-image'" enctype="multipart/form-data">
             @csrf
                <div class="form-group">
                    <label > Upload Image</label>
                    <input type="file" name="profile" class="form-control" required /> 
                </div>
                <button  type="submit" class="btn btn-primary "> Submit </button>
            </form>
        </div>
    </div>
</div>
<div class="row">
    @foreach($images as $image)
    <div class="col-sm-4">
        <img class="img-thumbnail" src="{{ asset('/assets/images') }}">
    </div>
    @endforeach
</div>
</x-layout>