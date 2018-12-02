@extends('layouts.app')

@section('header', __('Alle User'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                        <th></th>
                        <th>{{ __('Name') }}</th>
                        <th>{{ __('Email') }}</th>
                        <th>{{ __('Admin') }}</th>
                        <th>{{ __('Zugänge') }}</th>
                        </thead>
                        <tbody class="list">
                        @foreach($users as $user)
                            <tr>
                                <td>
                                    {!!  $user->fullName() !!}
                                </td>
                                <td>
                                    {!!  $user->email !!}
                                </td>
                                <td>
                                    {{ $access->admin ? __('ja') : '' }}
                                </td>
                                <td>
                                    @foreach($user->accesses as $access)
                                        {{ $access->title }}
                                        <br/>
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
