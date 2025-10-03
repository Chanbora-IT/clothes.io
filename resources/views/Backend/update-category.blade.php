@extends('Backend.master')
@section('content')

    @section('site-title')
        Admin | Update Category
    @endsection
    @section('page-main-title')
        Update Category
    @endsection


    
    @if (Session::has( 'unsuccess' ))
    <script>
        Swal.fire({
          title: "Feild",
          text: "Please fill the Name",
          icon: "error"
        });
      </script>
    @endif

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="col-xl-12">
                <!-- File input -->
                <form action="/admin/update-category" method="POST" >
                    @csrf
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12">
                                    <input type="text" name="update_id" value="{{ $data->id }}" id="">
                                    <label for="formFile" class="form-label ">Name Category:</label>
                                    <input class="form-control" value="{{ $data->name }}" type="text" name="name_category" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Update Category">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
