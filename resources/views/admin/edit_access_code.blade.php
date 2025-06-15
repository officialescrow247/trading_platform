@extends('layouts.admin')

@section('content')
    <div class="container py-4">

        <div class="row">
            <div class="col-md-8">
                <div class="card p-3">
                    <div class="card-header pb-0">
                        <h6>Access Codes</h6>
                    </div>

                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Code</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Status</th>
                                        <th class="text-uppercase text-secondary text-xs font-weight-bolder opacity-7">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @foreach($access_codes as $code)
                                        <tr>
                                            <td>{{ $code->code }}</td>
                                            <td>{{ $code->status ? 'Unused' : 'Used' }}</td>
                                            <td>
                                                <a href="{{ route('edit_access_code', $code->id) }}" class="btn btn-info btn-sm">Edit</a>
                                                <form action="{{ route('delete_access_code') }}" method="post" class="d-inline">
                                                    @csrf
                                                    <input type="hidden" name="access_code_id" value="{{ $code->id }}">
                                                    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <form action="{{ route('edit_access_code_now') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="">New Code</label>
                        <input type="text" class="form-control" value="{{ $access_code->code }}" name="access_code" required />
                        <input type="hidden" name="access_code_id" value="{{ $access_code->id }}" />
                    </div>
                    <button class="btn bg-gradient-success w-100">Update</button>
                </form>
            </div>
        </div>
    </div>
@endsection