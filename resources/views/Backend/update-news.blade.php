@extends('Backend.master')
@section('content')
    @section('site-title')
    Admin | Update News
    @endsection
    @section('page-main-title')
    Update News
    @endsection

    
    @if (Session::has( 'unsuccess' ))
    <script>
        Swal.fire({
          title: "Feild",
          text: "update News Not success",
          icon: "error"
        });
      </script>
    @endif
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/admin/add-news" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12">
                                    <input type="text" name="update_id" id="" value="{{ $data->id }}">
                                    <label for="formFile" class="form-label">Title</label>
                                    <input class="form-control" type="text" name="title" value="{{ $data->title }}"/>
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-danger">Recommend image size ..x.. pixels.</label>
                                    <input class="form-control" type="file" name="thumbnail" />
                                    <input type="text" name="old_thumbnail" id="" width="120px" value="{{ $data->thumbnail }}">
                                </div>
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label text-danger">Description</label>
                                    <textarea name="description" class="form-control" cols="30" rows="10">{{ $data->description }}</textarea>
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Update News">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
@endsection