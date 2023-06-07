@extends('backend.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
             <span>General Settings</span>
             @if (empty($home))
             <a href="home/create" class="float-end btn btn-info">Add Detail</a>

             @endif
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Price</th>
                                <th>Image</th>
                                <th>Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                          @if (!empty($home))
                          <tr>
                            <td>{{ $home->title }}</td>
                            <td>{{ $home->price }}</td>
                            <td>{{ $home->image }}</td>
                            <td>{{ $home->description }}</td>

                           <th>
                            <form action="/home/{{ $home->id }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="/home/{{ $home->id }}/edit" class="badge bg-info p-1"> Edit</a>
                                <a href="/home/{{ $home->id }}" class="badge bg-success p-1"> Print</a>
                                <button type="submit" class="btn badge bg-danger">Delete</button>

                            </form>
                           </th>

                        </tr>

                          @endif
                        </tbody>

                    </table >

                </div>
            </div>
        </div>
    </div>
</div>

@endsection
