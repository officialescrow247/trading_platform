@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>LIST OF MANAGERS</h6>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#AddManagerModal">
                            Add Manager
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="AddManagerModal" tabindex="-1" aria-labelledby="AddManagerModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add Manager</h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                </div>

                                <div class="modal-body">
                                    <form method="POST" action="{{ route('register_new_manager') }}">
                                        @csrf

                                        <!-- First Name -->
                                        <div>
                                            <x-input-label for="name" :value="__('First Name')" />
                                            <x-text-input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')" required autofocus />
                                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <!-- Password -->
                                        <div class="mt-4">
                                            <x-input-label for="password" :value="__('Password')" />

                                            <x-text-input id="password" class="form-control password"
                                                            type="password"
                                                            name="password"
                                                            required autocomplete="new-password" />

                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>

                                        <!-- Confirm Password -->
                                        <div class="mt-4">
                                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                            <x-text-input id="password_confirmation" class="form-control password_confirmation"
                                                            type="password"
                                                            name="password_confirmation" required />

                                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                        </div>
                                        <input type="checkbox" class="show-password" class="mt-2"> Show password

                                        <div class="flex items-center justify-end mt-4">
                                            
                                            <button type="submit" class="ml-4 btn btn-sm btn-success px-4">{{ __('Submit') }}</button>
                                        </div>
                                        </a>
                                    </form>
                                </div>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="card-body px-0 pt-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">S/N</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">NAME</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">STATUS</th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PASS</th>

                                        {{-- 
                                        @if (auth()->user()->hasRole('admin'))
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTIONS</th>
                                        @endif
                                        --}}
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($managers->count() < 1)
                                        <div class="alert alert-info">No Record</div>
                                    @else
                                        @foreach ($managers as $manager)
                                            <tr>
                                                <td>{{ $s_n++ }}</td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $manager->name }}</h6>
                                                            <p class="text-xs text-secondary mb-0">{{ $manager->email }}</p>
                                                        </div>
                                                    </div>
                                                    
                                                    <br>

                                                    {{-- 
                                                        @if (auth()->user()->hasRole('admin'))
                                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#topUpAccount{{ $manager->id }}">
                                                            Top up account
                                                        </button> <br>
                                                        
                                                        <a href="{{ route('delete_user', $manager->id ) }}" class="btn btn-sm px-4 btn-danger">Delete User</a>
                                                        @endif


                                                        <!-- Modal -->
                                                        <div class="modal fade" id="topUpAccount{{ $manager->id }}" tabindex="-1" aria-labelledby="topUpAccountLabel" aria-hidden="true">
                                                            <div class="modal-dialog">
                                                                <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">TOP UP</h5>
                                                                    </div>
                                                                    
                                                                    <form action="{{ route('topUp') }}" method="post">
                                                                        <div class="modal-body">
                                                                            @csrf
                                                                            <input type="hidden" name="user_id" value="{{ $manager->id }}">
                                                                            <select name="type" class="form-select">
                                                                                <option value="1">Add</option>
                                                                                <option value="0">Substract</option>
                                                                            </select>
                                                                            
                                                                            <input type="text" name="amount" class="mt-3 form-control" required>

                                                                            <textarea name="details" class="mt-3 form-control" cols="30" rows="10" placeholder="Please provide details" required></textarea>
                                                                        </div>
        
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewDocuments{{ $manager->id }}">
                                                            View documents
                                                        </button>
                                                    --}}

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="viewDocuments{{ $manager->id }}" tabindex="-1" aria-labelledby="viewDocumentsLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">View Proofs - <b>User {{ $manager->verify_proof == 1 ? 'Verified' : 'Unverified' }}</b></h5>
                                                                </div>
                                                                
                                                                <form action="{{ route('approveProof') }}" method="post">
                                                                    <div class="d-flex justify-content-end container">
                                                                        <button type="submit" class="mt-4 btn btn-primary btn-sm">{{ $manager->verify_proof == 1 ? 'Unverify' : 'Verify' }}</button>
                                                                    </div>
                                                                    <input type="hidden" name="user_id" value="{{ $manager->id }}">

                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        @if ($manager->poa != null)
                                                                            <label for="">Proof of Address</label><br>
                                                                            <img src="{{ asset($manager->poa) }}" alt="Proof of Address Image" class="img-fluid">
                                                                        @else
                                                                            <label for="">No Proof of Address</label>
                                                                        @endif

                                                                        <br><br>

                                                                        @if ($manager->poi != null)
                                                                            <label for="">Proof of ID</label><br>
                                                                            <img src="{{ url($manager->poi) }}" alt="Proof of ID Image" class="img-fluid">
                                                                            </div>
                                                                        @else
                                                                            <label for="">No Proof of ID</label>
                                                                        @endif
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                <td>
                                                    @if(Cache::has('user-is-online-' . $manager->id))
                                                        <span class="text-sm text-success">Online</span>
                                                    @else
                                                        <span class="text-sm text-secondary">Offline: {{ \Carbon\Carbon::parse($manager->last_seen)->diffForHumans() }}</span>
                                                    @endif  
                                                </td>

                                                <td>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $manager->pass }}
                                                    </p>
                                                    <br>
                                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#chnagePassword{{ $manager->id }}">
                                                        Change password
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="chnagePassword{{ $manager->id }}" tabindex="-1" aria-labelledby="chnagePasswordLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Change password</h5>
                                                                </div>
                                                                
                                                                <form action="{{ route('changePass') }}" method="post">
                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        <input type="hidden" name="user_id" value="{{ $manager->id }}">

                                                                        <input type="text" name="password" class="form-control" required value="{{ $manager->pass }}">
                                                                    </div>
    
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>

                                                {{-- 
                                                <td class="align-middle">
                                                    @if (auth()->user()->hasRole('admin'))
                                                        @if($manager->close_trade == 0)
                                                            <a href="{{ route('close_trade_for_users', [1, $manager->id]) }}" class="btn btn-sm btn-success px-3">
                                                                User can't close Trade
                                                            </a>
                                                        @else
                                                            <a href="{{ route('close_trade_for_users', [0, $manager->id]) }}" class="btn btn-sm btn-danger px-3">
                                                                User can close Trade
                                                            </a>
                                                        @endif

                                                        <br>
                                                        
                                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#upgradeUserAcct{{ $manager->id }}">
                                                            Upgrade User
                                                        </button>

                                                        <br>

                                                        <a href="{{ route('approve_user', [$manager->id, $manager->approved]) }}" class="btn btn-sm btn-primary px-4">{{ $manager->approved == true ? 'APPROVED' : 'NOT APPROVED' }}</a>
                                                    @endif

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="upgradeUserAcct{{ $manager->id }}" tabindex="-1" aria-labelledby="upgradeUserAcctLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Update {{ $manager->name }} - 
                                                                    <strong>
                                                                        @if ($manager->acct_type === '1')
                                                                            Basic Account
                                                                        @elseif ($manager->acct_type === '2')
                                                                            Gold Account
                                                                        @elseif ($manager->acct_type === '3')
                                                                            Pro Account
                                                                        @else
                                                                            VIP Account
                                                                        @endif
                                                                    </strong></h5>
                                                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                                                </div>
                                                                
                                                                <form action="{{ route('upgradeUserAcct') }}" method="post">
                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        <input type="hidden" name="user_id" value="{{ $manager->id }}">

                                                                        <select name="acct_type" class="form-select form-select-sm">
                                                                            <option value="1">BASIC</option>
                                                                            <option value="2">GOLD</option>
                                                                            <option value="3">Pro</option>
                                                                            <option value="4">VIP</option>
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
                                                --}}
                                            </tr>
                                        @endforeach
                                    @endif


                                </tbody>
                            </table>
                        </div>
                        
                        <div class="py-4 paginate_links">
                            {{ $managers->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <script>
        $('.show-password').change(function () {
            if ($(this).is(':checked')) {
                $('.password').attr('type', 'text');
                $('.password_confirmation').attr('type', 'text');
            } else {
                $('.password').attr('type', 'password');
                $('.password_confirmation').attr('type', 'password');
            }
        });
    </script>
@endsection