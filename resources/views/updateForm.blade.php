@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <form method="POST" action="{{route('contact.update',['id' => $contact->id])}}">
                      @csrf
                      @method('PUT')
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $contact->name }}" required autocomplete="name" autofocus>
                        </div>
                        <div class="mb-3">
                          <label for="email" class="form-label">Email</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $contact->email }}" required autocomplete="email">
                        </div>
                        <div class="mb-3">
                          <label for="address" class="form-label">Address</label>
                          <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ $contact->address }}" required autocomplete="address">
                        </div>
                        <div class="mb-3">
                          <label for="phone" class="form-label">Phone</label>
                          <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ $contact->phone }}" required autocomplete="phone">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection