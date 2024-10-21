<!-- modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Child Category</h5>
                <button type="button" class="btn-close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <span class="text-danger error_txt product_sub_categories_id"></span>
                                <label class="col-form-label" for="cleave-date2">Sub Category Name</label>
                                <select class="form-control" id="product_sub_categories_id">
                                    @foreach($subCategorys as $result)
                                    <option
                                        {{($resultData->product_sub_categories_id  == $result->id) ? 'selected' : ''}}
                                        value="{{ $result->id }}">{{ $result->name }} </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="mb-3">
                                <span class="text-danger error_txt name"></span>
                                <label class="col-form-label" for="cleave-date2">Child Category Name</label>
                                <input class="form-control" type="text" value="{{ $resultData->name }}" id="name">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                <button type="button" onclick="updateData('{{ $resultData->id }}')" class="btn btn-primary">Save
                    changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->