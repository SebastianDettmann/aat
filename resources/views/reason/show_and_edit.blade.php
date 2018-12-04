@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Grund bearbeiten</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {!! \Form::model($reason, [
                       'route' => ['reason.update', $reason->id],
                       'method' => 'PUT'
                   ]) !!}

                    <div class="row">
                        <div class="col-md-8 offset-1">
                            <div class="row">
                                <div class="col-md-12">
                                    {!! BTForm::text('title') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    {!! BTForm::text('description') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <input type="color" name="hex_color" value="{{ $reason->hex_color }}"
                                           style="width: 30px">
                                </div>
                                <div class="col-md-10">
                                    {!! BTForm::text('color') !!}
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1">
                                    {!! \Form::checkbox('has_to_confirm', true) !!}
                                </div>
                                <div class="col-md-11">
                                    {{ __('Muß bestätigt werden') }}
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
