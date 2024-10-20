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
                        <div> <a class="btn btn-primary save-btn" href="javascript:;" onclick="createNew();"><i
                                    class="{{_icons('add')}}"></i>Add</a>
                        </div>
                    </div>
                    <div class="list-product mt-2">
                        <div class="dt-ext table-responsive theme-scrollbar">
                            <table class="table data-table custom-table-center" id="dataTable">
                                <thead>
                                    <tr>
                                        <th> <span class="f-light f-w-600 text-center">SL</span></th>
                                        <th> <span class="f-light f-w-600">Category </span></th>
                                        <th> <span class="f-light f-w-600">Sub Category </span></th>
                                        <th> <span class="f-light f-w-600">Status</span></th>
                                        <th> <span class="f-light f-w-600">Action</span></th>
                                    </tr>
                                </thead>
                            </table>
                        </div>
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
    getData();
});
/**
 * createModal
 *
 * @return modal
 */
function createNew() {

    openCreateModal("{{ route(\Request::segment(1) . '.product.subcategory.create') }}");
}


/**
 * submitData
 *
 * @return void
 */
function submitData() {
    const name = $('#name').val();
    const product_categories_id = $('#product_categories_id').val();
    upsert(
        "{{ route(\Request::segment(1) . '.product.subcategory.store') }}", "POST", {
            'name': name,
            'product_categories_id': product_categories_id,
        }
    );
    getData();
}

/**
 * changeStatus
 *
 * @return void
 */
function changeStatus(id) {
    const url = "{{ route(Request::segment(1) . '.product.subcategory.status.change', ['id' => 'id']) }}".replace(
        'id', id);
    upsert(url, "PUT", {
        _method: 'PUT'
    });
    getData();
}

/**
 * editModal
 *
 * @return modal
 */
function editModal(id) {
    const url = "{{ route(Request::segment(1) . '.product.subcategory.edit', ['id' => 'id']) }}".replace('id', id);
    openEditModal(url);
}


/**
 * updateData
 *
 * @return void
 */
function updateData(id) {
    const name = $('#name').val();
    const product_categories_id = $('#product_categories_id').val();
    upsert("{{ route(\Request::segment(1) . '.product.subcategory.update') }}", "POST", {
        'id': id,
        'name': name,
        'product_categories_id': product_categories_id,
    });
    getData();
}


function getData() {
    dataTable("{{ route(Request::segment(1) . '.product.subcategory.show') }}", {}, [{
            data: 'id',
            name: 'id'
        },
        {
            data: 'product_category_name.name',
            name: 'product_category_name.name'
        },
        {
            data: 'name',
            name: 'name'
        },
        {
            data: 'statue',
            name: 'statue'
        },
        {
            data: 'actions',
            name: 'actions'
        }
    ]);
}
</script>
@endpush
<!--end indivisual pages javascript -->