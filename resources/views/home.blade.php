@extends('layout')

@section('content')
<div class="container-fluid" style="background-color: white">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="border: solid 0px; padding: 100px">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                   You are logged in, {{ Auth::user()->name }}

                    <button class="btn btn-outline-secondary" style="float: right" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </button>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
