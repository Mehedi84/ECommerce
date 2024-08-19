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
              <div class="card-header d-flex justify-content-between align-items-center">
                <h4>Edit</h4>
                <div class="btn-showcase text-end">
                    <a href="{{ route(\Request::segment(1) . '.roles') }}">
                        <button class="btn btn-primary save-btn" type="submit" >
                            <i class="{{_icons('arrow_left')}}"></i>Back</button>
                    </a>
                  </div>
              </div>
              <div class="card-body add-post">
                <form class="row"  method="post" action="{{ route(\Request::segment(1) . '.roles.update', $model->id) }}">
                    @csrf
                  <div class="col-sm-12">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input class="form-control bg-light-dark text-dark" type="text" id="name" name="name" value="{{ $model->name }}" readonly>
                                @if ($errors->has('name'))
                                    <div class="mt-1 text-danger">{{ $errors->first('name') }}</div>
                                @else
                                    <div class="mt-1">Role name required</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="mb-3">
                                <input class="form-control bg-light-dark text-dark" type="text" id="route_segment" name="route_segment" value="{{ $model->route_segment }}" readonly>
                                @if ($errors->has('route_segment'))
                                    <div class="mt-1 text-danger">{{ $errors->first('route_segment') }}</div>
                                @else
                                    <div class="mt-1">Route segment required</div>
                                @endif
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="row">
                                @php
                                   // dd($modules);
                                @endphp

                                @foreach ($modules as $module)
                                    <div class="col-xxl-4 col-md-6 ui-sortable-handle sortable-chosen" style="will-change: transform;">
                                        <div class="card height-equal list-with-icon" style="min-height: 100%;" id="{{ 'module_id_' . $module->id }}">
                                            <div class="card-header text-center">
                                                <h4>{{ $module->label }}</h4>
                                            </div>
                                            <div class="card-body">
                                                <ul class="list-group">
                                                    
                                                @foreach ($module->permissions as $item)
                                                    <li class="list-group-item d-flex justify-content-between align-items-center">{{ $item->name }}<span><input class="form-check-input"
                                                        type="checkbox" name="permissions[]"
                                                        value="{{ $item->id }}" id="permission" {{ in_array($item->id, $db_role_permission_ids) === true ? 'checked' : '' }}></span></li>
                                                @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                  </div>
                    <div class="btn-showcase text-end mt-3">
                    <button class="btn btn-primary save-btn" type="submit" >
                        <i class="{{_icons('save')}}"></i>Save</button>
                    </div>
                </form>
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
@endpush
<!--end indivisual pages javascript -->

