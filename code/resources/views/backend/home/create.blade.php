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
                    <form action="/home" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="title">Title</label>
                            <input id="title" class="form-control" type="text" name="title">
                        </div>

                        <div class="form-group">
                            <label for="price">Price</label>
                            <input id="price" class="form-control" type="number" name="price">
                        </div>

                        <div class="form-group">
                            <label for="description">Description</label>
                         <textarea name="description" id="description" cols="30" rows="10">

                         </textarea>
                        </div>


                        <div class="form-group">
                            <label for="image">Photo</label>
                            <input id="image" class="form-control" type="file" name="image" >
                        </div>

                        <button class="btn btn-primary">Submit</button>


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
