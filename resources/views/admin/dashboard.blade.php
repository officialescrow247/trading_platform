@extends('layouts.admin')

@section('content')
    <div class="container py-4">
        {{-- <div class="row">
            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div class="col-8">
                            <div class="numbers">
                                <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Withdrawals</p>
                                <h5 class="font-weight-bolder mb-0">
                                {{ $total_withdrawals }}
                                <!-- <span class="text-success text-sm font-weight-bolder">+55%</span> -->
                                </h5>
                            </div>
                            </div>
                            <div class="col-4 text-end">
                            <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                                <i class="ni ni-money-coins text-lg opacity-10" aria-hidden="true"></i>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Users</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{ $total_users }}
                                <!-- <span class="text-success text-sm font-weight-bolder">+3%</span> -->
                            </h5>
                        </div>
                        </div>
                        <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-world text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6 mb-xl-0 mb-4">
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total Deposit</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{ $total_deposits }}
                            <!-- <span class="text-danger text-sm font-weight-bolder">-2%</span> -->
                            </h5>
                        </div>
                        </div>
                        <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-paper-diploma text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-sm-6">
                <div class="card">
                    <div class="card-body p-3">
                    <div class="row">
                        <div class="col-8">
                        <div class="numbers">
                            <p class="text-sm mb-0 text-capitalize font-weight-bold">Total orders</p>
                            <h5 class="font-weight-bolder mb-0">
                                {{ $total_orders }}
                            <!-- <span class="text-success text-sm font-weight-bolder">+5%</span> -->
                            </h5>
                        </div>
                        </div>
                        <div class="col-4 text-end">
                        <div class="icon icon-shape bg-gradient-primary shadow text-center border-radius-md">
                            <i class="ni ni-cart text-lg opacity-10" aria-hidden="true"></i>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pt-5">
            <h6>People online: {{ $online_users }}</h6>
            <form action="{{ route('update_online_user') }}" method="post">
                @csrf
                <div class="mb-3">
                    <input type="number" name="online_user" class="form-control w-10" value="{{ $online_users }}">
                </div>
                <button type="submit" class="btn btn-sm px-4 btn-info">Update!</button>
            </form>
        </div> --}}

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
                                            <td>{{ 'https://tradenations-uk.com?q=' . $code->code }}</td>
                                            <td style="font-size: 12px;">{{ $code->status }}</td>
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
                <form action="{{ route('add_access_code') }}" method="post">
                    @csrf

                    <div class="mb-3">
                        <label for="">New Code</label>
                        <input type="text" class="form-control" placeholder="code340" name="access_code" required />
                    </div>
                    <button class="btn bg-gradient-success w-100">Add</button>
                </form>
            </div>
        </div>
    </div>
@endsection