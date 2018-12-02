@extends('layouts.app')

@section('header', __('User anlegen'))

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! \Form::open(['route' => ['user.create']]) !!}
                    <div class="col-md-8">
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
                    </div>
                    <div class="col-md-4">
                        <h3>{{ __('Zugänge') }}</h3>
                        <table class="table table-striped">
                            <thead>
                            <th>{{ __('Auswahl') }}</th>
                            <th></th>
                            <th>{{ __('Bezeichnung') }}</th>
                            </thead>
                            <tbody class="list">
                            @foreach($accesses as $access)
                                <tr>
                                    <td>
                                        {!!  \Form::checkbox('buildings[]', $access->id) !!}
                                    </td>
                                    <td>
                                        <img class="margin-top-5 height-30" src="{{$access->image}}"
                                             alt="{{__('Logo für Zugang')}}"/>
                                    </td>
                                    <td>
                                        {{ $access->title }}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    @include('partials.form_bottom_buttons')

                    {!! \Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
