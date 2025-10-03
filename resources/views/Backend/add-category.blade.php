@extends('Backend.master')
@section('content')

    @section('site-title')
        Admin | Add Category
    @endsection
    @section('page-main-title')
        Add Category
    @endsection


    @if (Session::has( 'success' ))
    <script>
        Swal.fire({
          title: "success",
          text: "Add Category success",
          icon: "success"
        });
      </script>
    @endif
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
                <form action="/admin/add-category" method="post" >
                    @csrf
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-12">
                                    <label for="formFile" class="form-label ">Name :</label>
                                    <input class="form-control" type="text" name="name_category" />
                                </div>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary" value="Add Post">
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

@endsection
