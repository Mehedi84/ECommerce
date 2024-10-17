<!-- modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update User</h5>
                <button type="button" class="btn-close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="text-danger error_txt code"></span>
                                <label class="col-form-label" for="cleave-date2">User Code</label>
                                <input class="form-control" type="text" id="code" value="{{ $resultData->code }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="text-danger error_txt name"></span>
                                <label class="col-form-label" for="cleave-date2">Name</label>
                                <input class="form-control" type="text" id="name" value="{{ $resultData->name }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="text-danger error_txt email"></span>
                                <label class="col-form-label" for="cleave-date2">Email</label>
                                <input class="form-control" type="email" id="email" value="{{ $resultData->email }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="text-danger error_txt mobile"></span>
                                <label class="col-form-label" for="cleave-date2">Number</label>
                                <input class="form-control" type="text" id="mobile" value="{{ $resultData->mobile }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="col-form-label" for="cleave-date2">Gender</label>
                                <select class="form-control" id="gender" required>
                                    <option value="1" {{ $resultData->gender == '1' ? 'selected' : '' }}>Male</option>
                                    <option value="2" {{ $resultData->gender == '2' ? 'selected' : '' }}>Female</option>
                                    <option value="3" {{ $resultData->gender == '3' ? 'selected' : '' }}>Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="col-form-label" for="cleave-date2">Password</label>
                                <input class="form-control" type="text" id="password">
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