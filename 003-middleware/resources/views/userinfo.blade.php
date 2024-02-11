@extends('layouts.app')

@section('content')
<div class="container w-50">
        <div class="card">
            <div class="card-header card-title">
                <h5 class="card-title">Данные текущего пользователя</h5>
            </div>
                <div class="card-body ">
                    <p class="card-text">
                        <span class="fw-bold">ID:</span> {{ $user->id }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Name:</span> {{ $user->name }}
                    </p>
                    <p class="card-text">
                        <span class="fw-bold">Email:</span> {{ $user->email }}
                    </p>
                    <a href="/" class="btn btn-outline-secondary w-100">Main Page</a>
                </div>
            </div>
        </div>
    </div>

@endsection