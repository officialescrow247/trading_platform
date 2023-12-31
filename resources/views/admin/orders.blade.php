@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <div class="d-flex justify-content-between">
                            <div>
                                <h6>TRADE HISTORIES</h6>
                            </div>

                            <div>
                                <form action="{{ route('search_orders') }}" method="post">
                                    @csrf
                                    <div class="d-flex">
                                        <input type="text" name="search_orders" class="form-control" style="height: 34px; margin-right: 5px;" placeholder="Enter Trade Number - #A..." required>
    
                                        <button class="btn btn-success px-4 btn-sm">Search</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S/N</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">USER</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TIME</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">TYPE</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">BUY/SELL</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">SYMBOL</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">VOLUME</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PROFIT/LOSS</th>
                                        <!-- <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PROFIT</th> -->
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S/L</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">T/P</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CREATED AT</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTION</th>
                                    </tr>
                                </thead>

                                @vite(['resources/css/app.css', 'resources/js/app.js'])
                                <tbody id="app">
                                    @if ($transactions->count() < 1)
                                        <div class="alert alert-info">No Record</div>
                                    @else
                                        
                                        @if(auth()->user()->hasRole('admin'))
                                            @foreach ($transactions as $transaction)
                                                <tr>
                                                    <td>
                                                        <p class="text-xs mb-0">
                                                        {{ $s_n++ }}
                                                        </p>
                                                    </td>

                                                    <td>
                                                        <div class="d-flex px-2 py-1">
                                                            <div>
                                                                <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                            </div>
                                                            <div class="d-flex flex-column justify-content-center">
                                                                <h6 class="mb-0 text-sm">
                                                                    {{ App\Models\User::where('id', $transaction->user_id)->value('name') }}
                                                                </h6>
                                                                {{-- <p class="text-xs text-secondary mb-0">{{ App\Models\User::where('id', $transaction->user_id)->value('email') }}</p> --}}
                                                            </div>
                                                        </div>
                                                    </td>
                                        
                                                    <td>
                                                        <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                                        <p class="text-xs text-secondary mb-0">{{ $transaction->created_at->toTimeString() }}</p>
                                                    </td>

                                                    <td class="align-middle text-center text-sm">
                                                        <!-- <span class="badge badge-sm bg-gradient-success">Online</span> -->
                                                        
                                                        <p class="text-xs text-secondary mb-0">{{ $transaction->type }}</p>
                                                    </td>
                                                    
                                                    <td class="align-middle text-center">
                                                        <p class="text-xs text-secondary mb-0">
                                                            @if ($transaction->symbol == 'topUp')
                                                                - - -
                                                            @else
                                                                {{ $transaction->buy_or_sell }}
                                                            @endif
                                                        </p>
                                                        <button class="mt-3 btn btn-sm px-4 btn-info" data-bs-toggle="modal" data-bs-target="#updateBuyOrSell{{ $transaction->id }}">Update</button>
                                                    </td>

                                                    <!-- The modal to update the buy or sell status of the transaction START -->
                                                    <div class="modal fade" id="updateBuyOrSell{{ $transaction->id }}" tabindex="-1" aria-labelledby="updateBuyOrSellLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="updateBuyOrSellLabel">Update {{ $transaction->buy_or_sell }}</h5>
                                                                </div>
                                                                
                                                                <div class="modal-body">
                                                                    <form action="{{ route('updateBuyOrSell') }}" method="post">
                                                                        <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                                                        <input type="hidden" name="user_id" value="{{ $transaction->user_id }}">

                                                                        @csrf
                                                                        <label class="text-secondary">Assets</label>
                                                                        <select name="buy_or_sell" class="form-select mb-2">
                                                                            <option value="BUY">BUY</option>
                                                                            <option value="SELL">SELL</option>
                                                                        </select>

                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-success">Update</button>
                                                                        </div>
                                                                    </form>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- The modal to update the buy or sell status of the transaction END -->
                                                    
                                                    <td class="align-middle text-center">
                                                        <p class="text-xs text-secondary mb-0">
                                                            @if ($transaction->symbol == 'topUp')
                                                                - - -
                                                            @else
                                                                {{ $transaction->symbol }}
                                                            @endif
                                                        </p>
                                                        <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                    </td>
                                                    
                                                    <td class="align-middle text-center">
                                                        <p class="text-xs text-secondary mb-0">{{ number_format($transaction->volume, 2, '.', ',') }}</p>
                                                        <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                    </td>
                                                    
                                                    {{-- 
                                                    <td class="align-middle text-center">
                                                        <p class="text-xs text-secondary mb-0">
                                                            @if ($transaction->symbol == 'topUp')
                                                                - - -
                                                            @else
                                                                @if (is_numeric($transaction->s_l) == 1)
                                                                    @if ($transaction->s_l != 0)
                                                                        - {{ number_format((float)$transaction->s_l, 2, '.', '') }}
                                                                    @else
                                                                        {{ $transaction->s_l }}
                                                                    @endif
                                                                @else
                                                                    {{ $transaction->s_l }}
                                                                @endif
                                                            @endif
                                                        </p>
                                                        <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                    </td>
                                                    --}}
                                                    
                                                    <td class="align-middle text-center">
                                                        {{-- 
                                                            <p class="text-xs text-secondary mb-0">
                                                                @if ($transaction->symbol == 'topUp')
                                                                    - - -
                                                                @else
                                                                    @if (is_numeric($transaction->t_p) == 1)
                                                                        @if ($transaction->t_p != 0)
                                                                            + {{ number_format((float)$transaction->t_p, 2, '.', '') }}
                                                                        @else
                                                                            {{ $transaction->t_p }}
                                                                        @endif
                                                                    @else
                                                                        {{ $transaction->t_p }}
                                                                    @endif
                                                                @endif
                                                            </p>
                                                        --}}
                                                        @if ($transaction->status == 'CLOSED')
                                       
                                                            @if (Str::contains(Str::lower($transaction->displayprofit), '-'))
                                                                <span style="color: #fd3041;">
                                                                    <b>{{ $transaction->displayprofit }}</b>
                                                                </span>
                                                            @else
                                                                <span style="color: #82d617;">
                                                                    <b>{{ $transaction->displayprofit }}</b>
                                                            </span>
                                                            @endif
                                                        @else
                                                            @if ($transaction->s_l != 'topUp' && $transaction->s_l != 'deposit')
                                                                <display-profit select_user="/admin/" currency="{{ auth()->user()->currency }}" :test_profit='{{ $transaction->displayprofit }}' :tnx_id='{{ $transaction->id }}' :key="{{ $transaction->id }}" can_you_close='{{ auth()->user()->close_trade }}' />
                                                            @endif
                                                        @endif
                                                    </td>

                                                    <td class="align-middle text-center">
                                                        @if ($transaction->symbol == 'topUp')
                                                            Top up
                                                        @else
                                                            <p style="font-size: 10px;">S/L <br> 
                                                                @if($transaction->profit1 == '0' || $transaction->profit1 == NULL)
                                                                    0
                                                                @else
                                                                    {{ $transaction->profit1 }}
                                                                @endif
                                                            </p>
                                                        @endif
                                                    </td>

                                                    <td>
                                                        @if ($transaction->symbol == 'topUp')
                                                            Top up
                                                        @else
                                                            <p style="font-size: 10px;">T/P <br>
                                                                @if($transaction->profit2 == '0' || $transaction->profit2 == NULL)
                                                                    0
                                                                @else
                                                                    {{ $transaction->profit2 }}
                                                                @endif
                                                            </p>
                                                        @endif
                                                    </td>
                                                    
                                                    <td class="align-middle text-center">
                                                        <p class="text-xs mb-0 badge badge-sm bg-gradient-info">{{ $transaction->status }}</p>
                                                        <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                    </td>
                                                    
                                                    <td class="align-middle text-center">
                                                        <p class="text-xs text-secondary mb-0">{{ $transaction->created_at }}</p>
                                                        <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                    </td>

                                                    <td class="align-middle">
                                                        @if ($transaction->status == 'topUp')
                                                            TOP UP
                                                        @else
                                                            <!-- <button type="button" class="btn @if($transaction->status === 'CLOSED') btn-info @else btn-success @endif btn-sm" data-bs-toggle="modal" data-bs-target="#close_trade{{ $transaction->id }}">
                                                            {{ $transaction->status === 'CLOSED' ? 'Update' : 'Close' }}
                                                            </button> -->

                                                            @if ($transaction->status === 'CLOSED')
                                                                <h6><b>TRADE CLOSED</b></h6>
                                                            @else
                                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#topUpPlayNew{{ $transaction->id }}">
                                                                Top Up
                                                                </button>
                                                            @endif
                                                        @endif

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="close_trade{{ $transaction->id }}" tabindex="-1" aria-labelledby="close_tradeLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="close_tradeLabel">Close Trade</h5>
                                                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                                    </div>
                                                                    
                                                                    <div class="modal-body">
                                                                        <form action="{{ route('close_trade') }}" method="post">
                                                                            <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                                                            <input type="hidden" name="user_id" value="{{ $transaction->user_id }}">

                                                                            @csrf
                                                                            <label class="text-secondary">Assets</label>
                                                                            <select name="type" id="p_or_l" class="form-select mb-2">
                                                                                <option value="PROFIT">PROFIT</option>
                                                                                <option value="LOSS">LOSS</option>
                                                                            </select>

                                                                            <label class="text-secondary">Amount</label>
                                                                            <input type="tel" name="amt" id="amt" class="form-control">

                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-success">Close Trade</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>

                                                        <!-- Modal -->
                                                        <div class="modal fade" id="topUpPlayNew{{ $transaction->id }}" tabindex="-1" aria-labelledby="topUpPlayNewLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="topUpPlayLabel">TOP UP</h5>
                                                                        <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                                    </div>
                                                                    
                                                                    <div class="modal-body">
                                                                        {{-- 
                                                                            <form action="{{ route('topUpPlay') }}" method="post">
                                                                                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                                                                <input type="hidden" name="user_id" value="{{ $transaction->user_id }}">
    
                                                                                @csrf
                                                                                <label class="text-secondary">Assets</label>
                                                                                <select name="type" id="p_or_l" class="form-select mb-2">
                                                                                    <option value="PROFIT">PROFIT</option>
                                                                                    <option value="LOSS">LOSS</option>
                                                                                </select>
    
                                                                                <label class="text-secondary">Amount</label>
                                                                                <input type="tel" name="amt" id="amt" class="form-control">
    
                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-success">TOP UP TRADE</button>
                                                                                </div>
                                                                            </form>
                                                                            
                                                                        --}}

                                                                        <form action="{{ route('newtopUpPlay') }}" method="post">
                                                                            <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                                                            <input type="hidden" name="user_id" value="{{ $transaction->user_id }}">

                                                                            @csrf
                                                                            <label class="text-secondary">Amount</label>
                                                                            <input type="tel" name="amt" id="amt" class="form-control">

                                                                            <select name="topup_type" class="mt-3 form-select">
                                                                                <option value="increase">INCREASE</option>
                                                                                <option value="decrease">DECREASE</option>
                                                                                <option value="random">RANDOM</option>
                                                                            </select>

                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                <button type="submit" class="btn btn-success">TOP UP TRADE</button>
                                                                            </div>
                                                                        </form>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        @else
                                            @foreach ($transactions as $transaction)
                                                @if (App\Models\User::where('id', $transaction->user_id)->value('manager_id') == auth()->id())
                                                    <tr>
                                                        <td>
                                                            <p class="text-xs mb-0">
                                                            {{ $s_n++ }}
                                                            </p>
                                                        </td>
                                                        <td>
                                                            <div class="d-flex px-2 py-1">
                                                                <div>
                                                                    <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                                </div>
                                                                <div class="d-flex flex-column justify-content-center">
                                                                    <h6 class="mb-0 text-sm">
                                                                        {{ App\Models\User::where('id', $transaction->user_id)->value('name') }}
                                                                    </h6>
                                                                    <p class="text-xs text-secondary mb-0">{{ App\Models\User::where('id', $transaction->user_id)->value('email') }}</p>
                                                                </div>
                                                            </div>
                                                        </td>
                                            
                                                        <td>
                                                            <!-- <p class="text-xs font-weight-bold mb-0">Manager</p> -->
                                                            <p class="text-xs text-secondary mb-0">{{ $transaction->created_at->toTimeString() }}</p>
                                                        </td>

                                                        <td class="align-middle text-center text-sm">
                                                            <!-- <span class="badge badge-sm bg-gradient-success">Online</span> -->
                                                            
                                                            <p class="text-xs text-secondary mb-0">{{ $transaction->type }}</p>
                                                        </td>
                                                        
                                                        <td class="align-middle text-center">
                                                            <p class="text-xs text-secondary mb-0">
                                                                @if ($transaction->symbol == 'topUp')
                                                                    - - -
                                                                @else
                                                                    {{ $transaction->buy_or_sell }}
                                                                @endif
                                                            </p>
                                                            <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                        </td>
                                                        
                                                        <td class="align-middle text-center">
                                                            <p class="text-xs text-secondary mb-0">
                                                                @if ($transaction->symbol == 'topUp')
                                                                    - - -
                                                                @else
                                                                    {{ $transaction->symbol }}
                                                                @endif
                                                            </p>
                                                            <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                        </td>
                                                        
                                                        <td class="align-middle text-center">
                                                            <p class="text-xs text-secondary mb-0">{{ number_format($transaction->volume, 2, '.', ',') }}</p>
                                                            <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                        </td>
                                                        
                                                        <td class="align-middle text-center">
                                                            <p class="text-xs text-secondary mb-0">
                                                                @if ($transaction->symbol == 'topUp')
                                                                    - - -
                                                                @else
                                                                    @if (is_numeric($transaction->s_l) == 1)
                                                                        @if ($transaction->s_l != 0)
                                                                            - {{ number_format((float)$transaction->s_l, 2, '.', '') }}
                                                                        @else
                                                                            {{ $transaction->s_l }}
                                                                        @endif
                                                                    @else
                                                                        {{ $transaction->s_l }}
                                                                    @endif
                                                                @endif
                                                            </p>
                                                            <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                        </td>
                                                        
                                                        <td class="align-middle text-center">
                                                            <p class="text-xs text-secondary mb-0">
                                                                @if ($transaction->symbol == 'topUp')
                                                                    - - -
                                                                @else
                                                                    @if (is_numeric($transaction->t_p) == 1)
                                                                        @if ($transaction->t_p != 0)
                                                                            + {{ number_format((float)$transaction->t_p, 2, '.', '') }}
                                                                        @else
                                                                            {{ $transaction->t_p }}
                                                                        @endif
                                                                    @else
                                                                        {{ $transaction->t_p }}
                                                                    @endif
                                                                @endif
                                                            </p>
                                                            <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                        </td>

                                                        <td class="align-middle text-center">
                                                            @if ($transaction->symbol == 'topUp')
                                                                Top up
                                                            @else
                                                                <p style="font-size: 10px;">S/L <br> 
                                                                    @if($transaction->profit1 == '0' || $transaction->profit1 == NULL)
                                                                        0
                                                                    @else
                                                                        {{ $transaction->profit1 }}
                                                                    @endif
                                                                </p>
                                                            @endif
                                                        </td>

                                                        <td>
                                                            @if ($transaction->symbol == 'topUp')
                                                                Top up
                                                            @else
                                                                <p style="font-size: 10px;">T/P <br>
                                                                    @if($transaction->profit2 == '0' || $transaction->profit2 == NULL)
                                                                        0
                                                                    @else
                                                                        {{ $transaction->profit2 }}
                                                                    @endif
                                                                </p>
                                                            @endif
                                                        </td>
                                                        
                                                        <td class="align-middle text-center">
                                                            <p class="text-xs mb-0 badge badge-sm bg-gradient-info">{{ $transaction->status }}</p>
                                                            <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                        </td>
                                                        
                                                        <td class="align-middle text-center">
                                                            <p class="text-xs text-secondary mb-0">{{ $transaction->created_at }}</p>
                                                            <!-- <span class="text-secondary text-xs font-weight-bold">23/04/18</span> -->
                                                        </td>

                                                        <td class="align-middle">
                                                            @if ($transaction->status == 'topUp')
                                                                TOP UP
                                                            @else
                                                                <button type="button" class="btn @if($transaction->status === 'CLOSED') btn-info @else btn-success @endif btn-sm" data-bs-toggle="modal" data-bs-target="#close_trade{{ $transaction->id }}">
                                                                {{ $transaction->status === 'CLOSED' ? 'Update' : 'Close' }}
                                                                </button>

                                                                <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#topUpPlay{{ $transaction->id }}">
                                                                Top Up
                                                                </button>
                                                            @endif

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="close_trade{{ $transaction->id }}" tabindex="-1" aria-labelledby="close_tradeLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="close_tradeLabel">Close Trade</h5>
                                                                        </div>
                                                                        
                                                                        <div class="modal-body">
                                                                            <form action="{{ route('close_trade') }}" method="post">
                                                                                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                                                                <input type="hidden" name="user_id" value="{{ $transaction->user_id }}">

                                                                                @csrf
                                                                                <label class="text-secondary">Assets</label>
                                                                                <select name="type" id="p_or_l" class="form-select mb-2">
                                                                                    <option value="PROFIT">PROFIT</option>
                                                                                    <option value="LOSS">LOSS</option>
                                                                                </select>

                                                                                <label class="text-secondary">Amount</label>
                                                                                <input type="tel" name="amt" id="amt" class="form-control">

                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-success">Close Trade</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Modal -->
                                                            <div class="modal fade" id="topUpPlay{{ $transaction->id }}" tabindex="-1" aria-labelledby="topUpPlayLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <h5 class="modal-title" id="topUpPlayLabel">TOP UP</h5>
                                                                            <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                                        </div>
                                                                        
                                                                        <div class="modal-body">
                                                                            <form action="{{ route('topUpPlay') }}" method="post">
                                                                                <input type="hidden" name="transaction_id" value="{{ $transaction->id }}">
                                                                                <input type="hidden" name="user_id" value="{{ $transaction->user_id }}">

                                                                                @csrf
                                                                                <label class="text-secondary">Assets</label>
                                                                                <select name="type" id="p_or_l" class="form-select mb-2">
                                                                                    <option value="PROFIT">PROFIT</option>
                                                                                    <option value="LOSS">LOSS</option>
                                                                                </select>

                                                                                <label class="text-secondary">Amount</label>
                                                                                <input type="tel" name="amt" id="amt" class="form-control">

                                                                                <div class="modal-footer">
                                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                                    <button type="submit" class="btn btn-success">TOP UP TRADE</button>
                                                                                </div>
                                                                            </form>
                                                                        </div>

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