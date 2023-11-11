@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>WITHDRAWAL HISTORIES</h6>
                    </div>
                    
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S/N</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USER</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DETAILS</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CREATED AT</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTION</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($withdrawals->count() < 1)
                                        <div class="alert alert-info">No Record</div>
                                    @else

                                        @if(auth()->user()->hasRole('admin'))
                                            @foreach ($withdrawals as $withdrawal)
                                                <tr>
                                                    <td>
                                                        <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2 ps-3">
                                                            {{ $s_n++ }}
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">{{ App\Models\User::where('id', $withdrawal->user_id)->value('name') }}</h6>
                                                                <p class="text-xs text-secondary mb-0">{{ App\Models\User::where('id', $withdrawal->user_id)->value('email') }}</p>
                                                            </div>
                                                        </div>
                                                    </td>

                                                    <td>
                                                        <!-- <p class="text-xs text-secondary mb-0">
                                                            {{ number_format($withdrawal->wallet_amount, 2, '.', ',') }}
                                                        </p> -->
                                                        <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                            <b>Transction Amount: </b> 
                                                            @if ($withdrawal->wallet_address && !$withdrawal->wireT_acct_num)
                                                                {{ auth()->user()->currency . number_format((float)$withdrawal->wallet_amount, 2, '.', '') }}
                                                            @else
                                                                {{ auth()->user()->currency . number_format((float)$withdrawal->wireT_amount, 2, '.', '') }}
                                                            @endif
                                                        </p>
                                                        
                                                        

                                                        @if ($withdrawal->wallet_address && !$withdrawal->wireT_acct_num)
                                                            <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                <b>{{ $withdrawal->wallet_type }} Wallet Address: </b> {{ $withdrawal->wallet_address }}
                                                            </p>
                                                        @else
                                                            <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                <b>Account Holder's Name: </b> {{ $withdrawal->wireT_acct_name }} <br>
                                                            </p>
                                                            
                                                            <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                <b>Account Number: </b> {{ $withdrawal->wireT_acct_num }} <br>
                                                            </p>
                                                            
                                                            <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                <b>IBAN Number: </b> {{ $withdrawal->wireT_IBAN }} <br>
                                                            </p>
                                                            
                                                            <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                <b>Bank Name: </b> {{ $withdrawal->wireT_bank_name }} <br>
                                                            </p>
                                                            
                                                            <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                <b>Country: </b> {{ $withdrawal->wireT_country }} <br>
                                                            </p>
                                                            
                                                            <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                <b>Swift Code: </b> {{ $withdrawal->wireT_swift_code }} <br>
                                                            </p>
                                                        @endif
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <span class="badge @if ($withdrawal->status == 1) bg-success @elseif ($withdrawal->status == 2) bg-danger @else bg-info @endif text-light">
                                                            <b>
                                                                @if ($withdrawal->status == 1)
                                                                    APPROVED
                                                                @elseif ($withdrawal->status == 2)
                                                                    DECLINED
                                                                @else
                                                                    PENDING
                                                                @endif
                                                            </b>
                                                        </span>
                                                    </td>
                                        
                                                    <td>
                                                        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                                        <p class="text-xs text-secondary mb-0">
                                                            {{-- $withdrawal->created_at->toTimeString() --}}
                                                            {{ $withdrawal->created_at }}
                                                        </p>
                                                    </td>

                                                    <td class="align-middle">
                                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#approveWithdrawalModal{{ $withdrawal->id }}">
                                                        Approve
                                                        </button>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="approveWithdrawalModal{{ $withdrawal->id }}" tabindex="-1" aria-labelledby="approveWithdrawalModalLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Edit</h5>
                                                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                                    </div>
                                                                    
                                                                    <form action="{{ route('approveWithdrawal') }}" method="post">
                                                                        <div class="modal-body">
                                                                            @csrf
                                                                            <input type="hidden" name="user_id" value="{{ $withdrawal->user_id }}">
                                                                            <input type="hidden" name="withdrawal_id" value="{{ $withdrawal->id }}">
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
                                            @foreach ($withdrawals as $withdrawal)
                                                @if (App\Models\User::where('id', $withdrawal->user_id)->value('manager_id') == auth()->id())
                                                    <tr>
                                                        <td style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">{{ $s_n++ }}</td>

                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                <div>
                                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">{{ App\Models\User::where('id', $withdrawal->user_id)->value('name') }}</h6>
                                                                    <p class="text-xs text-secondary mb-0">{{ App\Models\User::where('id', $withdrawal->user_id)->value('email') }}</p>
                                                                </div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <!-- <p class="text-xs text-secondary mb-0">
                                                                {{ number_format($withdrawal->wallet_amount, 2, '.', ',') }}
                                                            </p> -->
                                                            <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                <b>Transction Amount: </b> 
                                                                @if ($withdrawal->wallet_address && !$withdrawal->wireT_acct_num)
                                                                    {{ $withdrawal->wallet_amount }}
                                                                @else
                                                                    {{ $withdrawal->wireT_amount }}
                                                                @endif
                                                            </p>
                                                            
                                                            

                                                            @if ($withdrawal->wallet_address && !$withdrawal->wireT_acct_num)
                                                                <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                    <b>Bitcoin Address: </b> {{ $withdrawal->wallet_address }}
                                                                </p>
                                                            @else
                                                                <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                    <b>Account Holder's Name: </b> {{ $withdrawal->wireT_acct_name }} <br>
                                                                </p>
                                                                
                                                                <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                    <b>Account Number: </b> {{ $withdrawal->wireT_acct_num }} <br>
                                                                </p>
                                                                
                                                                <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                    <b>IBAN Number: </b> {{ $withdrawal->wireT_IBAN }} <br>
                                                                </p>
                                                                
                                                                <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                    <b>Bank Name: </b> {{ $withdrawal->wireT_bank_name }} <br>
                                                                </p>
                                                                
                                                                <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                    <b>Country: </b> {{ $withdrawal->wireT_country }} <br>
                                                                </p>
                                                                
                                                                <p style="font-size: 15px;" class="text-xs text-secondary mb-0 pb-2">
                                                                    <b>Swift Code: </b> {{ $withdrawal->wireT_swift_code }} <br>
                                                                </p>
                                                            @endif
                                                            </p>
                                                        </td>

                                                        <td>
                                                            <span class="badge @if ($withdrawal->status == 1) bg-success @elseif ($withdrawal->status == 2) bg-danger @else bg-info @endif text-light">
                                                                <b>
                                                                    @if ($withdrawal->status == 1)
                                                                        APPROVED
                                                                    @elseif ($withdrawal->status == 2)
                                                                        DECLINED
                                                                    @else
                                                                        PENDING
                                                                    @endif
                                                                </b>
                                                            </span>
                                                        </td>
                                            
                                                        <td>
                                                            <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                                            <p class="text-xs text-secondary mb-0">
                                                                {{-- $withdrawal->created_at->toTimeString() --}}
                                                                {{ $withdrawal->created_at }}
                                                            </p>
                                                        </td>

                                                        <td class="align-middle">
                                                            <p class="text-xs text-secondary mb-0"><b>Contact Davis to APPROVE OR DECLINE</b></p>
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
                            {{ $withdrawals->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection