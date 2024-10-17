<!--start master layout -->
@extends('backend.layouts.master')
<!--end master layout -->

<!--start content -->
@section('content')
<!-- Container-fluid starts-->
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="list-product-header d-flex justify-content-between align-items-center">
                        <h4>List</h4>
                        <div> <a class="btn btn-primary save-btn"
                                href="{{ route(\Request::segment(1) . '.roles.create') }}"><i
                                    class="{{_icons('add')}}"></i>Add</a>
                        </div>
                    </div>
                    <div class="list-product mt-2">
                        <table class="table data-table custom-table-center" id="project-status">
                            <thead>
                                <tr>
                                    <th> <span class="f-light f-w-600 text-center">#</span></th>
                                    <th> <span class="f-light f-w-600">Route Segment</span></th>
                                    <th> <span class="f-light f-w-600">Name</span></th>
                                    <th> <span class="f-light f-w-600">Permission</span></th>
                                    @can('role-edit')
                                    <th> <span class="f-light f-w-600">Action</span></th>

                                    @endcan
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Container-fluid Ends-->
@endsection
<!--end content -->

<!--start indivisual pages javascript -->
@push('js')
<script>
$(document).ready(function() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        lengthMenu: [
            [10, 25, 50, 100, -1],
            [10, 25, 50, 100, "All"]
        ],
        ajax: "{{ route(Request::segment(1) . '.roles') }}",
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'route_segment',
                name: 'route_segment'
            },
            {
                data: 'name',
                name: 'name'
            },
            {
                data: 'permissions',
                name: 'permissions'
            },
            @can('role-edit') {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false
            },
            @endcan
        ]
    });
});
</script>
@endpush
<!--end indivisual pages javascript -->