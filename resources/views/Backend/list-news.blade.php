@extends('backend.master')
@section('content')
    @section('site-title')
    Admin | List News
    @endsection
    @section('page-main-title')
    List News
    @endsection

    @if (Session::has( 'success' ))
    <script>
        Swal.fire({
          title: "success",
          text: "update News success",
          icon: "success"
        });
      </script>
    @endif
    @if (Session::has( 'Dsuccess' ))
    <script>
        Swal.fire({
          title: "success",
          text: "update News success",
          icon: "success"
        });
      </script>
    @endif
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="card">
          {{-- <div class="table-responsive text-nowrap"> --}}
            <table  class="table table-active table-hover table-secondary  ">
              <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Thumbnail</th>
                    <th>Description</th>
                    <th>User ID</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Actions</th>
                </tr>
              </thead>
              <tbody class="table-border-bottom-0">
                @foreach ($data as $value)
                <tr>
                  <td>
                    <span>{{$value->id }}</span>
                  </td>
                  <td>
                    {{ $value->title }}
                  </td>
                  <td>
                    <img src="{{ url('Backend/Images/'. $value->thumbnail) }}" alt="Avatar"  width="110px">
                  </td>
                  <td>
                    {{ $value->description }}
                  </td>
                  <td>
                    {{ $value->user_id }}
                  </td>
                  <td>
                    {{ $value->created_at }}
                  </td>
                  <td>
                    {{ $value->updated_at }}
                  </td>
                  <td>
                    <div class="dropdown">
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="/admin/update-news/{{ $value->id }}"><i class="bx bx-edit-alt me-1 "></i> Edit</a>
                        <a class="dropdown-item" id="remove-post-key" data-value="{{ $value->id }}" data-bs-toggle="modal" data-bs-target="#basicModal" href="javascript:void(0);" ><i class="bx bx-trash me-1"></i> Delete</a>
                      </div>
                    </div>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          {{-- </div> --}}
        </div>

        <div class="mt-3">
          <form action="/admin/delete-news" method="post">
            @csrf
          <div class="modal fade" id="basicModal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel1">Are you sure to remove this post?</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-footer">
                  <input type="text" id="remove-val" name="delete_id" >{{-- value="{{ $value->id }}" --}}
                  <button type="submit" class="btn btn-danger">Confirm</button>
                  <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Cancel</button>
                </div>
              </div>
            </div>
          </form>
        </div>
        
      <hr class="my-5" />
    </div>
    <!-- / Content -->
  </div>
</div>
@endsection