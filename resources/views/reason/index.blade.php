@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Alle Gründe</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th></th>
                            <th>{{ __('Bezeichnung') }}</th>
                            <th>{{ __('Beschreibung') }}</th>
                            <th></th>
                            <th>{{ __('Farbe') }}</th>
                            <th>{{ __('zu bestätigen?') }}</th>
                        </tr>
                        </thead>
                        <tbody class="list">
                        @foreach($reasons as $reason)
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{ route('reason.edit', [$reason->id]) }}">
                                            <button class="btn btn-default btn-icon" dusk="button-edit">
                                                <i class="fa  fa-sm fa-edit"></i>
                                            </button>
                                        </a>
                                        {{-- @if($reason->id !== 1) Todo check if the reason is used--}}
                                        {!! \Form::open([
                                            'route' => ['reason.destroy',$reason->id],
                                            'method' => 'DELETE'
                                        ]) !!}
                                        <button class="btn btn-danger btn-icon" type="submit" dusk="button-delete">
                                            <i class="fa fa-sm fa-trash-o"></i>
                                        </button>
                                        {!! \Form::close() !!}
                                        {{--@endif--}}
                                    </div>
                                </td>
                                <td>
                                    {!!  $reason->title !!}
                                </td>
                                <td>
                                    {!!  $reason->description ?? '' !!}
                                </td>
                                <td>
                                    <div style="height: 15px; width: 15px; border: 1px #385d7a solid; background-color: {{ $reason->hex_color }}"></div>
                                </td>
                                <td>
                                    {{ $reason->color }}
                                </td>
                                <td>
                                    @if($reason->has_to_confirm)
                                        <i class="fa  fa-sm fa-check-square"></i>
                                    @endif
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
