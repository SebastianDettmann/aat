@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('User bearbeiten') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! \Form::model($user, [
                        'route' => ['user.update', $user->id],
                        'method' => 'PUT'
                    ]) !!}

                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    {!! BTForm::text('firstname') !!}
                                </div>
                                <div class="col-md-6">
                                    {!! BTForm::text('lastname') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    {!! \BTForm::text('email') !!}
                                </div>
                                <div class="col-md-6">
                                    {!! \BTForm::select('language', null, \App\Libs\Datamap::getAppLanguages()->pluck('title', 'locale')) !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    {!! \Form::checkbox('admin', true) !!}
                                </div>
                                <div class="col-md-11">
                                    {{ __('Admin') }}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 offset-1">
                            <div class="row">
                                <h4>{{ __('Zugänge') }}</h4>
                                <table class="table table-striped">
                                    <thead>
                                    <tr>
                                        <th>{{ __('Auswahl') }}</th>
                                        <th></th>
                                        <th>{{ __('Bezeichnung') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody class="list">
                                    @foreach($accesses as $access)
                                        <tr>
                                            <td>
                                                {!!  \Form::checkbox('accesses[]', $access->id, in_array($access->id, $user->getAccesses($access->slug))) !!}
                                            </td>
                                            <td>
                                                @if($access->image)
                                                    <img src="{{asset($access->image)}}" height="20"
                                                         alt="{{__('Logo für Zugang')}}"/>
                                                @endif
                                            </td>
                                            <td>
                                                {{ $access->title }}
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @include('partials.form_bottom_buttons')

                    {!! \Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
