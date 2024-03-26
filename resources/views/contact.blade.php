@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center mb-4">Contacts</h1>
    <div class="container">
        <a href="{{route('contact.form')}}" type="button" class="btn btn-success mb-4">Add Contact</a>
        <div class="row">
            <table class="table">
                <thead>
                    <tr class="text-center">
                        <td scope="col">No</td>
                        <td scope="col">Name</td>
                        <td scope="col">Address</td>
                        <td scope="col">email</td>
                        <td scope="col">Phone</td>
                        <td scope="col">Action</td>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $count = 1;
                    @endphp
                    @foreach ($contacts as $contact)
                        <tr class="text-center">
                            <th scope="row">{{$count}}</th>
                            <th scope="row">{{$contact->name}}</th>
                            <th scope="row">{{$contact->address}}</th>
                            <th scope="row">{{$contact->email}}</th>
                            <th scope="row">{{$contact->phone}}</th>
                            <th scope="row" class="d-flex justify-content-center gap-3">
                                <form method="POST" action="{{route('contact.delete',['id' => $contact->id])}}">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('contact.form.update', ['id' => $contact->id])}}" class="btn btn-secondary">Update</a>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </th>
                        </tr>
                        @php
                            $count++;
                        @endphp
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@endsection