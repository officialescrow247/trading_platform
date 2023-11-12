@extends('layouts.users')

@section('content')
   <section class="bg-light px-3" style="height: 100%;">

      <h1 class="pt-5">List of all Transactions</h1>
      <div class="table-responsive pt-4">
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">TRADE NUMBER</th>
                  <th scope="col">OPENING TIME</th>
                  <th scope="col">TYPE</th>
                  <th scope="col">SYMBOL</th>
                  <th scope="col">VOLUME</th>
                  <th scope="col">BUY OR SELL</th>
                  <th scope="col">S/L</th>
                  <th scope="col">T/P</th>
                  <th scope="col">PROFIT</th>
                  <th scope="col">LOSS</th>
                  <th scope="col">STATUS</th>

                  @if (auth()->user()->close_trade == true)
                     <th scope="col">ACTION</th>
                  @endif
                  
                  <th scope="col">Closed on</th>
               </tr>
            </thead>

            <tbody>
               @if ($transactions->count() < 1)
                  <div class="alert alert-info">No Record</div>
               @else
                  @foreach ($transactions as $transaction)
                     <tr>
                        <th scope="row">#A{{ date('Y') . $transaction->id }}</th>
                        <td>{{ $transaction->created_at->toTimeString() }}</td>
                        <td>{{ $transaction->type }}</td>
                        <td>
                           @if ($transaction->buy_or_sell == 'topUp')
                              - - -
                           @else
                              @if($transaction->symbol == 'card')
                                 @php
                                    $getDeposit = App\Models\Deposit::where('id', $transaction->buy_or_sell)->first();
                                 @endphp
                                 
                                 @if($getDeposit)
                                    @php
                                       $depositData = json_decode($getDeposit);
                                       $debitOrCredit = $depositData->debit_or_credit;
                                    @endphp

                                    {{ $debitOrCredit }} CARD
                                 @endif
                              @else
                                 {{ $transaction->symbol }}
                              @endif
                           @endif
                        </td>
                        <td>{{ auth()->user()->currency . number_format($transaction->volume, 2, '.', ',') }}</td>
                        <td>
                           @if ($transaction->buy_or_sell == 'topUp' || $transaction->type == 'deposit')
                              - - -
                           @else
                              {{ $transaction->buy_or_sell }}
                           @endif
                        </td>

                        <td>
                           <p style="font-size: 10px;">
                              @if($transaction->profit1 == '0' || $transaction->profit1 == NULL)
                                 0
                              @else
                                 @if ($transaction->buy_or_sell == 'topUp')
                                    - - -
                                 @else
                                    -{{ auth()->user()->currency . number_format($transaction->profit2, 2, '.', ',') }}
                                 @endif
                                 
                              @endif
                           </p>
                        </td>

                        <td>
                           <p style="font-size: 10px;">
                              @if($transaction->profit2 == '0' || $transaction->profit2 == NULL)
                                 0
                              @else
                                 @if ($transaction->buy_or_sell == 'topUp')
                                    - - -
                                 @else
                                    {{ auth()->user()->currency . number_format($transaction->profit2, 2, '.', ',') }}
                                 @endif
                              @endif
                           </p>
                        </td>

                        <td>
                           @if ($transaction->buy_or_sell == 'topUp')
                              - - -
                           @elseif($transaction->type == 'deposit')
                              0
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
                        </td>
                        
                        <td>
                           @if ($transaction->buy_or_sell == 'topUp')
                              - - -
                           @elseif($transaction->type == 'deposit')
                              0
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
                        </td>

                        <td>
                           @if ($transaction->status == 'topUp')
                              - - -
                           @elseif ($transaction->type == 'deposit')
                              @if($transaction->status == 'CONFIRMED')
                                 <span class="badge bg-success text-light">CONFIRMED</span>
                              @else
                                 <span class="badge bg-info text-light">{{ $transaction->status }}</span>
                              @endif
                           @else
                              @if($transaction->status == 'ACTIVE')
                                 <span class="badge @if ($transaction->status == 'NOT PAID') bg-warning @elseif ($transaction->status == 'ACTIVE') bg-danger @else bg-success @endif text-light d-flex" style="align-items: center;">
                                    <span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span>
                                    {{ $transaction->status }}
                                 </span>
                              @else
                                 <span class="badge @if ($transaction->status == 'NOT PAID') bg-warning @elseif ($transaction->status == 'ACTIVE') bg-danger @else bg-success @endif text-light">
                                    {{ $transaction->status }}
                                 </span>
                              @endif
                           @endif
                        </td>

                        @if (auth()->user()->close_trade == true)
                           <td>
                              @if($transaction->status === 'CLOSED')
                                 <p>CLOSED</p>
                              @else
                                 @if($transaction->status == 'topUp' || $transaction->type == 'deposit')
                                    - - -
                                 @else
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-sm btn-info px-3" data-bs-toggle="modal" data-bs-target="#closeTrade{{ $transaction->id }}">
                                    Close Trade
                                    </button>
                                 @endif

                                 <!-- Modal -->
                                 <div class="modal fade" id="closeTrade{{ $transaction->id }}" tabindex="-1" aria-labelledby="closeTrade{{ $transaction->id }}Label" aria-hidden="true">
                                    <div class="modal-dialog">
                                       <div class="modal-content">
                                          <div class="modal-header">
                                          <!-- <h5 class="modal-title" id="closeTrade{{ $transaction->id }}Label">Modal {{ $transaction->id }}</h5>
                                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                          </div>

                                          <div class="modal-body">
                                             <p>Are you sure you want to close the trade - #A{{ date('Y') . $transaction->id }}?</p>

                                             <div class="row pt-4">
                                                <div class="col-md-6">
                                                   <form action="{{ route('close_trade_user') }}" method="post">
                                                      @csrf
                                                      <input type="hidden" name="trans_id" value="{{ $transaction->id }}">

                                                      <div class="d-grid gap-2">
                                                      <button class="btn btn-success px-2" type="submit" data-bs-dismiss="modal">Yes</button>
                                                      </div>
                                                   </form>
                                                </div>

                                                <div class="col-md-6">
                                                   <div class="d-grid gap-2">
                                                      <button type="button" class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">No</button>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>

                                          <div class="modal-footer">
                                          <!-- <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button> -->
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              @endif
                           </td>
                        @endif

                        <td>
                           @if ($transaction->status == 'CLOSED')
                              {{ $transaction->updated_at }}
                           @else
                              - - -
                           @endif
                        </td>
                     </tr>
                  @endforeach
               @endif
            </tbody>
         </table>
      </div>

      <div class="py-4 paginate_links">
         {{ $transactions->links() }}
      </div>

      <hr>

      <h1 class="pt-5">List of all Withdrawals</h1>
      <div class="table-responsive pt-4">
         <table class="table">
            <thead>
               <tr>
                  <th scope="col">S/N</th>
                  <th scope="col">TIME</th>
                  <th scope="col">DETAILS</th>
                  <th scope="col">STATUS</th>
                  <th scope="col">Created on</th>
               </tr>
            </thead>

            <tbody>
               @if ($withdrawals->count() < 1)
                  <div class="alert alert-info">No Record</div>
               @else
                  @foreach ($withdrawals as $withdrawal)
                     <tr>
                        <th scope="row">{{ $s_n2++ }}</th>
                        <td>{{ $withdrawal->created_at->toTimeString() }}</td>

                        <td>
                           <p style="font-size: 15px;">
                              <b>Transction Amount: </b> 
                              @if ($withdrawal->wallet_address && !$withdrawal->wireT_acct_num)
                                 {{ auth()->user()->currency . number_format((float)$withdrawal->wallet_amount, 2, '.', '') }}
                              @else
                                 {{ auth()->user()->currency . number_format((float)$withdrawal->wireT_amount, 2, '.', '') }}
                              @endif

                              
                              
                           </p>
                           
                           <p style="font-size: 15px;">   
                              @if ($withdrawal->wallet_address && !$withdrawal->wireT_acct_num)
                                 <b>{{ $withdrawal->wallet_type }} Address: </b> {{ $withdrawal->wallet_address }}
                              @else
                                 <b>Account Holder's Name: </b> {{ $withdrawal->wireT_acct_name }} <br>
                                 <b>Account Number: </b> {{ $withdrawal->wireT_acct_num }} <br>
                                 <b>IBAN Number: </b> {{ $withdrawal->wireT_IBAN }} <br>
                                 <b>Bank Name: </b> {{ $withdrawal->wireT_bank_name }} <br>
                                 <b>Country: </b> {{ $withdrawal->wireT_country }} <br>
                                 <b>Swift Code: </b> {{ $withdrawal->wireT_swift_code }} <br>
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
                           {{ $withdrawal->created_at }}
                        </td>
                     </tr>
                  @endforeach
               @endif
            </tbody>
         </table>

      </div>

      <div class="py-4 paginate_links">
         {{ $withdrawals->links() }}
      </div>
   </section>
@endsection