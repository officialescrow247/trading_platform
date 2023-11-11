@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
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
        </div>
    </div>
@endsection