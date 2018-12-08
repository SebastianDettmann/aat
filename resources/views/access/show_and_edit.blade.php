@extends('layouts.app')

@section('content')
    @include('partials.second_navbar')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Zugang bearbeiten') }}n</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {!! \Form::model($access, [
                        'route' => ['access.update', $access->id],
                        'method' => 'PUT'
                        ]) !!}

                        <div class="row">
                            <div class="col-md-8">
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! BTForm::text('title') !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        {!! BTForm::text('url') !!}
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-7">
                                        {!! BTForm::text('image') !!}
                                    </div>
                                    <div class="col-md-5">
                                        @if($access->image)
                                            <img src="{{asset($access->image)}}" height="20"
                                                 alt="{{__('Logo für Zugang')}}"/>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-1"></div>
                        </div>
                        @include('partials.form_bottom_buttons')

                        {!! \Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
