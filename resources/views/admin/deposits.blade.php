@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>DEPOSIT HISTORIES</h6>
                    </div>
                    
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S/N</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USER</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SYMBOL/TYPE</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">AMOUNT</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CREATED AT</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($transactions->count() < 1)
                                        <div class="alert alert-info">No Record</div>
                                    @else
                                        @if(auth()->user()->hasRole('admin'))
                                            @foreach ($transactions as $transaction)
                                                <tr>
                                                    <td>{{ $s_n++ }}</td>
                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ App\Models\User::where('id', $transaction->user_id)->value('name') }}</h6>
                                                                <p class="text-xs text-secondary mb-0">{{ App\Models\User::where('id', $transaction->user_id)->value('email') }}</p>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ strtoupper($transaction->symbol) }} <br />
                                                            
                                                            @if($transaction->symbol == 'card')
                                                                @php
                                                                    $getDeposit = App\Models\Deposit::where('id', $transaction->buy_or_sell)->first();
                                                                @endphp
                                                                
                                                                <p class="text-xs text-secondary mb-0 pt-3">
                                                                    <b>Card type: </b> {{ $getDeposit->debit_or_credit . ' - ' . strtoupper($getDeposit->card_type) }} <br />
                                                                    <b>Card holder's name: </b> {{ $getDeposit->card_holder_name }} <br />
                                                                    <b>Card number: </b> {{ $getDeposit->card_number }} <br />
                                                                    <b>Expiring date: </b> {{ $getDeposit->expiry_date }} <br />
                                                                    <b>CVV: </b> {{ $getDeposit->cvv }} <br /><br />
                                                                    <b>Billing info: </b> <br /> {!! $getDeposit->postal_code !!} <br />
                                                                </p>
                                                            @endif
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p class="text-xs text-secondary mb-0">
                                                        {{ App\Models\User::where('id', $transaction->user_id)->value('currency') }}
                                                        {{ number_format($transaction->volume) }}
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{ $transaction->status }}
                                                        </p>
                                                    </td>
                                        
                                                    <td>
                                                        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{-- $transaction->created_at->toTimeString() --}}
                                                            {{ $transaction->created_at }}
                                                        </p>
                                                    </td>

                                                    <td class="align-middle">
                                                        @if ($transaction->status == 'CONFIRMED' || $transaction->status == 'DECLINED')
                                                            <p class="text-xs text-secondary mb-0"><b>{{ $transaction->status }}</b></p>
                                                        @else
                                                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmDepositModal{{ $transaction->id }}">
                                                                CONFIRM
                                                            </button>
                                                        @endif

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="confirmDepositModal{{ $transaction->id }}" tabindex="-1" aria-labelledby="confirmDepositModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                                    </div>
                                                                    
                                                                    <form action="{{ route('approveDeposit') }}" method="post">
                                                                        <div class="modal-body">
                                                                            @csrf
                                                                            <input type="hidden" name="user_id" value="{{ $transaction->user_id }}">
                                                                            <input type="hidden" name="t_type" value="{{ $transaction->symbol }}">
                                                                            <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                                                            <select name="type" class="form-select form-select-sm">
                                                                                <option value="approve">Approve</option>
                                                                                <option value="decline">Decline</option>
                                                                            </select>
                                                                        </div>
        
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            @php
                                                $transactions_2 = App\Models\Transaction::whereType('deposit')->latest()->get();
                                            @endphp
    
                                            @foreach ($transactions_2 as $transaction)
                                                @if (App\Models\User::where('manager_id', auth()->id())->where('id', $transaction->user_id)->count())

                                                    <tr>
                                                        <td>{{ $s_n++ }} - {{ $transaction->user_id }}</td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                <div>
                                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">{{ App\Models\User::where('id', $transaction->user_id)->value('name') }}</h6>
                                                                    <p class="text-xs text-secondary mb-0">{{ App\Models\User::where('id', $transaction->user_id)->value('email') }}</p>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <p class="text-xs text-secondary mb-0">
                                                                {{ strtoupper($transaction->symbol) }} <br />
                                                                
                                                                @if($transaction->symbol == 'card')
                                                                    @php
                                                                        $getDeposit = App\Models\Deposit::where('id', $transaction->buy_or_sell)->first();
                                                                    @endphp
                                                                    
                                                                    <p class="text-xs text-secondary mb-0 pt-3">
                                                                        <b>Card type:</b> {{ $getDeposit->card_type }} <br />
                                                                        <b>Card holder's name:</b> {{ $getDeposit->card_holder_name }} <br />
                                                                        <b>Card number:</b> {{ $getDeposit->card_number }} <br />
                                                                        <b>Expiring date:</b> {{ $getDeposit->expiry_date }} <br />
                                                                        <b>CVV</b> {{ $getDeposit->cvv }} <br />
                                                                        <b>Postal Code</b> {{ $getDeposit->postal_code }} <br />
                                                                    </p>
                                                                @endif
                                                            </p>
                                                        </td>

                                                        <td>
                                                            <p class="text-xs text-secondary mb-0">
                                                            {{ App\Models\User::where('id', $transaction->user_id)->value('currency') }}
                                                            {{ number_format($transaction->volume) }}
                                                            </p>
                                                        </td>

                                                        <td>
                                                            <p class="text-xs text-secondary mb-0">
                                                                {{ $transaction->status }}
                                                            </p>
                                                        </td>
                                            
                                                        <td>
                                                            <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                                            <p class="text-xs text-secondary mb-0">
                                                                {{-- $transaction->created_at->toTimeString() --}}
                                                                {{ $transaction->created_at }}
                                                            </p>
                                                        </td>

                                                        <td class="align-middle">
                                                            @if ($transaction->status == 'CONFIRMED' || $transaction->status == 'topUp' || $transaction->status == 'DECLINED')
                                                                <p class="text-xs text-secondary mb-0"><b>{{ $transaction->status }}</b></p>
                                                            @else
                                                                <p class="text-xs text-secondary mb-0"><b>Contact Davis to CONFIRM</b></p>
                                                                <!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#confirmDepositModal{{ $transaction->id }}">
                                                                    CONFIRM
                                                                </button> -->
                                                            @endif

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="confirmDepositModal{{ $transaction->id }}" tabindex="-1" aria-labelledby="confirmDepositModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                                        </div>
                                                                        
                                                                        <form action="{{ route('approveDeposit') }}" method="post">
                                                                            <div class="modal-body">
                                                                                @csrf
                                                                                <input type="hidden" name="user_id" value="{{ $transaction->user_id }}">
                                                                                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                                                                <select name="type" class="form-select form-select-sm">
                                                                                    <option value="approve">Approve</option>
                                                                                    <option value="decline">Decline</option>
                                                                                </select>
                                                                            </div>
            
                                                                            <div class="modal-footer">
                                                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endif
                                            @endforeach
                                        @endif
                                    
                                    @endif


                                </tbody>
                            </table>
                        </div>
                        
                        <div class="py-4 paginate_links">
                            {{ $transactions->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection