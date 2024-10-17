<!-- modal -->
<div class="modal fade" id="Modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
    data-bs-backdrop="static" aria-labelledby="staticBackdropLabel">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Create User</h5>
                <button type="button" class="btn-close" onclick="closeModal()"></button>
            </div>
            <div class="modal-body">
                <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="text-danger error_txt code"></span>
                                <label class="col-form-label" for="cleave-date2">User Code</label>
                                <input class="form-control" type="text" id="code">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="text-danger error_txt name"></span>
                                <label class="col-form-label" for="cleave-date2">Name</label>
                                <input class="form-control" type="text" id="name">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="col-form-label" for="cleave-date2">Email</label>
                                <span class="text-danger error_txt email"></span>
                                <input class="form-control" type="email" id="email">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="text-danger error_txt mobile"></span>
                                <label class="col-form-label" for="cleave-date2">Number</label>
                                <input class="form-control" type="text" id="mobile">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <label class="col-form-label" for="cleave-date2">Gender</label>
                                <select class="form-control" id="gender" required="">
                                    <option value=""></option>
                                    <option value="1">Male </option>
                                    <option value="2">Female </option>
                                    <option value="3">Others </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <span class="text-danger error_txt password"></span>
                                <label class="col-form-label" for="cleave-date2">Password</label>
                                <input class="form-control" type="text" id="password">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Close</button>
                <button type="button" onclick="submitData()" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
<!-- modal end -->