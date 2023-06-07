@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
             <span>General Settings</span>
             <a href="/home" class="float-end btn btn-info">Back</a>
                </div>
                <div class="card-body">
                    <form action="/home/{{ $home->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title" value="{{ $home->title }}">
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input id="price" class="form-control" type="number" name="price" value="{{ $home->price }}">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                         {{-- <textarea name="description" id="description" cols="30" rows="10"  > --}}
                            <input id="editor" class="form-control" type="description" name="description" value="{{ $home->description}}">
                    {{-- <textarea name="description" id="description" cols="30" rows="10">
                        {{ $home->description }}
                    </textarea> --}}

                        </div>

                       <div class="row">
                        <div class="my-2">
                            <img src="{{ asset($home->image) }}" width="80px" alt="">

                        </div>
                        <div class="form-group">
                            <label for="image">Photo</label>
                            <input id="image" class="form-control" type="file" name="image" value="{{ $home->image }}" accept="image/jpg,image/png">
                        </div>
                       </div>

                        <button class="btn btn-primary">Update</button>


                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
{{-- <script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create(document.querySelector('#description'))
        .then(editor => {
            console.log(editor);
        })
        .catch(error => {
            console.error(error);
        });
</script> --}}

@endsection
