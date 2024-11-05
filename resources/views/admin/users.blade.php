@extends('layouts.admin')

@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-12">
                <div class="card mb-4">
                    <div class="card-header pb-0">
                        <h6>LIST OF USERS</h6>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Add user
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Add user</h5>
                                    <!-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> -->
                                </div>

                                <div class="modal-body">
                                    <form method="POST" action="{{ route('register_new') }}">
                                        @csrf

                                        <!-- First Name -->
                                        <div>
                                            <x-input-label for="name" :value="__('First Name')" />
                                            <x-text-input id="first_name" class="form-control" type="text" name="first_name" :value="old('first_name')" required autofocus />
                                            <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                                        </div>

                                        <!-- Last Name -->
                                        <div class="mt-4">
                                            <x-input-label for="name" :value="__('Last Name')" />
                                            <x-text-input id="last_name" class="form-control" type="text" name="last_name" :value="old('last_name')" required autofocus />
                                            <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                                        </div>

                                        <!-- Email Address -->
                                        <div class="mt-4">
                                            <x-input-label for="email" :value="__('Email')" />
                                            <x-text-input id="email" class="form-control" type="email" name="email" :value="old('email')" required />
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>

                                        <!-- Phone Number -->
                                        <div class="mt-4">
                                            <x-input-label for="phone_number" :value="__('Phone Number (e.g. +447766038012)')" />
                                            <x-text-input id="phone_number" class="form-control" type="tel" name="phone_number" :value="old('phone_number')" required />
                                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                                        </div>

                                        <!-- Country -->
                                        <div class="mt-4">
                                            <x-input-label for="country" :value="__('Country')" />
                                            <select name="country" id="country" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select" required>
                                                @foreach ($countries as $country)
                                                    <option value="{{ $country->nicename }}">{{ $country->name }}</option>
                                                @endforeach
                                            </select>
                                            <x-input-error :messages="$errors->get('acct_type')" class="mt-2" />
                                        </div>

                                        <!-- City -->
                                        <div class="mt-4">
                                            <x-input-label for="city" :value="__('City')" />
                                            <input type="text" name="city" class="form-control mt-1" placeholder="Enter City">
                                        </div>

                                        <!-- Address -->
                                        <div class="mt-4">
                                            <x-input-label for="address" :value="__('Address')" />
                                            <input type="text" name="address" class="form-control mt-1" placeholder="Enter Address">
                                        </div>

                                        <!-- Date of Birth -->
                                        <div class="mt-4">
                                            <x-input-label for="dob" :value="__('Date of Birth')" />
                                            <input type="date" name="dob" class="form-control">
                                        </div>

                                        <!-- Account type -->
                                        <div class="mt-4">
                                            <x-input-label for="acct_type" :value="__('Account Type')" />
                                            <select name="acct_type" id="acct_type" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select" required>
                                                <option value="1">Basic Account</option>
                                                <option value="2">Gold Account</option>
                                                <option value="3">Pro Account</option>
                                                <option value="4">VIP Account</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('acct_type')" class="mt-2" />
                                        </div>

                                        <!-- Currency -->
                                        <div class="mt-4">
                                            <x-input-label for="acct_type" :value="__('Select currency')" />
                                            <select name="currency" id="currency_" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select">
                                                <option value="£">£ Pound</option>
                                                <option value="€">€ Euro</option>
                                                <option value="$">$ Dollar</option>
                                            </select>
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

                                        <!-- Approve account? -->
                                        <div class="mt-4">
                                            <x-input-label for="approve_account" :value="__('Approve account?')" />
                                            <select name="approve_account" id="approve_account" class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm form-select" required>
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                            </select>
                                            <x-input-error :messages="$errors->get('approve_account')" class="mt-2" />
                                        </div>

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
                                        
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">PHONE NUMBER</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">COUNTRY</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">CITY</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ADDRESS</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">DATE OF BIRTH (Y/M/D)</th>


                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">PASS</th>

                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">ACCOUNT TYPE</th>
                                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">STATUS</th>
                                        <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">BALANCE</th>

                                        @if (auth()->user()->hasRole('admin'))
                                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ACTIONS</th>
                                        @endif
                                    </tr>
                                </thead>

                                <tbody>
                                    @if ($users->count() < 1)
                                        <div class="alert alert-info">No Record</div>
                                    @else
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $s_n++ }}</td>
                                                <td>
                                                    <div class="d-flex px-2 py-1">
                                                        <div>
                                                            <img src="../assets/img/team-2.jpg" class="avatar avatar-sm me-3" alt="user1">
                                                        </div>
                                                        <div class="d-flex flex-column justify-content-center">
                                                            <h6 class="mb-0 text-sm">{{ $user->name }}</h6>
                                                            <p class="text-xs text-secondary mb-0">{{ $user->email }}</p>
                                                        </div>
                                                    </div>
                                                    
                                                    <br>

                                                    @if (auth()->user()->hasRole('admin'))
                                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#topUpAccount{{ $user->id }}">
                                                        Top up account
                                                    </button> <br>
                                                    
                                                    <a href="{{ route('delete_user', $user->id ) }}" class="btn btn-sm px-4 btn-danger">Delete User</a>
                                                    @endif


                                                    <!-- Modal -->
                                                    <div class="modal fade" id="topUpAccount{{ $user->id }}" tabindex="-1" aria-labelledby="topUpAccountLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">TOP UP</h5>
                                                                </div>
                                                                
                                                                <form action="{{ route('topUp') }}" method="post">
                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        <input type="hidden" name="user_id" value="{{ $user->id }}">
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

                                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#viewDocuments{{ $user->id }}">
                                                        View documents
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="viewDocuments{{ $user->id }}" tabindex="-1" aria-labelledby="viewDocumentsLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">View Proofs - <b>User {{ $user->verify_proof == 1 ? 'Verified' : 'Unverified' }}</b></h5>
                                                                </div>
                                                                
                                                                <form action="{{ route('approveProof') }}" method="post">
                                                                    <div class="d-flex justify-content-end container">
                                                                        <button type="submit" class="mt-4 btn btn-primary btn-sm">{{ $user->verify_proof == 1 ? 'Unverify' : 'Verify' }}</button>
                                                                    </div>
                                                                    <input type="hidden" name="user_id" value="{{ $user->id }}">

                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        @if ($user->poa != null)
                                                                            <label for="">Proof of Address</label><br>
                                                                            <img src="{{ asset($user->poa) }}" alt="Proof of Address Image" class="img-fluid">
                                                                        @else
                                                                            <label for="">No Proof of Address</label>
                                                                        @endif

                                                                        <br><br>

                                                                        @if ($user->poi != null)
                                                                            <label for="">Proof of ID</label><br>
                                                                            <img src="{{ url($user->poi) }}" alt="Proof of ID Image" class="img-fluid">
                                                                            </div>
                                                                        @else
                                                                            <label for="">No Proof of ID</label>
                                                                        @endif
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-check form-switch pl-4 pb-2">
                                                        <input id="checkboxSecurity_{{ $user->id }}" class="form-check-input checkboxSecurity" type="checkbox" role="switch" {{ $user->security_on_or_off == 1 ? 'checked' : '' }}>
    
                                                        <label class="form-check-label" for="checkboxSecurity_{{ $user->id }}">Security code <b>{{ $user->security_on_or_off == 1 ? 'ON' : 'OFF' }}</b></label>
                                                    </div>

                                                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                                    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
                                                    <script>
                                                        $(document).on('change', '.checkboxSecurity', function() {
                                                            let userId = this.id.split('_')[1];
                                                            let isChecked = event.target.checked;

                                                            let dataToSend = {
                                                                userId: userId,
                                                                isChecked: isChecked
                                                            };

                                                            axios.post('/admin/update-security', dataToSend)
                                                                .then(response => {
                                                                    alert('Updated successfully');
                                                                    location.reload();
                                                                })
                                                                .catch(error => {
                                                                    console.error('Error updating state:', error);
                                                                });
                                                        });
                                                    </script>
                                                </td>

                                                <td>
                                                    @if(Cache::has('user-is-online-' . $user->id))
                                                        <span class="text-sm text-success">Online</span>
                                                    @else
                                                        <span class="text-sm text-secondary">Offline: {{ \Carbon\Carbon::parse($user->last_seen)->diffForHumans() }}</span>
                                                    @endif  
                                                </td>

                                                <td>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $user->phone }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $user->country }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $user->city }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $user->address }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $user->dob }}
                                                    </p>
                                                </td>
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">
                                                        {{ $user->pass }}
                                                    </p>
                                                    <br>
                                                    <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#chnagePassword{{ $user->id }}">
                                                        Change password
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="chnagePassword{{ $user->id }}" tabindex="-1" aria-labelledby="chnagePasswordLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Change password</h5>
                                                                </div>
                                                                
                                                                <form action="{{ route('changePass') }}" method="post">
                                                                    <div class="modal-body">
                                                                        @csrf
                                                                        <input type="hidden" name="user_id" value="{{ $user->id }}">

                                                                        <input type="text" name="password" class="form-control" required value="{{ $user->pass }}">
                                                                    </div>
    
                                                                    <div class="modal-footer">
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                    
                                                <td>
                                                    <p class="text-xs text-secondary mb-0">
                                                        @if ($user->acct_type === '1')
                                                            Basic Account
                                                        @elseif ($user->acct_type === '2')
                                                            Gold Account
                                                        @elseif ($user->acct_type === '3')
                                                            Pro Account
                                                        @else
                                                            VIP Account
                                                        @endif
                                                    </p>
                                                </td>

                                                <td>
                                                    <p class="text-xs text-secondary mb-0">
                                                        @if ($user->approved == true)
                                                            APPROVED
                                                        @else
                                                            NOT APPROVED
                                                        @endif
                                                    </p>
                                                </td>

                                                <td class="align-middle text-center text-sm">
                                                    <p class="text-xs text-secondary mb-0">{{ $user->balance }}</p>
                                                </td>

                                                <td class="align-middle">
                                                    @if (auth()->user()->hasRole('admin'))
                                                        @if($user->close_trade == 0)
                                                            <a href="{{ route('close_trade_for_users', [1, $user->id]) }}" class="btn btn-sm btn-success px-3">
                                                                User can't close Trade
                                                            </a>
                                                        @else
                                                            <a href="{{ route('close_trade_for_users', [0, $user->id]) }}" class="btn btn-sm btn-danger px-3">
                                                                User can close Trade
                                                            </a>
                                                        @endif

                                                        <br>
                                                        
                                                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#upgradeUserAcct{{ $user->id }}">
                                                            Upgrade User
                                                        </button>

                                                        <br>

                                                        <a href="{{ route('approve_user', [$user->id, $user->approved]) }}" class="btn btn-sm btn-primary px-4">{{ $user->approved == true ? 'APPROVED' : 'NOT APPROVED' }}</a>
                                                    @else
                                                        @if($user->close_trade == 0)
                                                            <a href="{{ route('close_trade_for_users', [1, $user->id]) }}" class="btn btn-sm btn-success px-3">
                                                                User can't close Trade
                                                            </a>
                                                        @else
                                                            <a href="{{ route('close_trade_for_users', [0, $user->id]) }}" class="btn btn-sm btn-danger px-3">
                                                                User can close Trade
                                                            </a>
                                                        @endif

                                                        <br>

                                                        <a href="{{ route('approve_user', [$user->id, $user->approved]) }}" class="btn btn-sm btn-primary px-4">{{ $user->approved == true ? 'APPROVED' : 'NOT APPROVED' }}</a>
                                                    @endif

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="upgradeUserAcct{{ $user->id }}" tabindex="-1" aria-labelledby="upgradeUserAcctLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Update {{ $user->name }} - 
                                                                    <strong>
                                                                        @if ($user->acct_type === '1')
                                                                            Basic Account
                                                                        @elseif ($user->acct_type === '2')
                                                                            Gold Account
                                                                        @elseif ($user->acct_type === '3')
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
                                                                        <input type="hidden" name="user_id" value="{{ $user->id }}">

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
                                            </tr>
                                        @endforeach
                                    @endif


                                </tbody>
                            </table>
                        </div>
                        
                        <div class="py-4 paginate_links">
                            {{ $users->links() }}
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