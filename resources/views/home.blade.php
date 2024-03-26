@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @auth
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
        @endauth
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Welcome to contact app</div>

                <div class="card-body">
                   Please <b>login</b> or <b>register</b> before continue
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
