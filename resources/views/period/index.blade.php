@extends('layouts.app')

@section('content')
    <div class="container mb-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Meine Abwesenheiten</div>
                <div class="card-body">
                    {!! $calendar->calendar() !!}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>
                <div class="card-footer">
                    <div class="row">
                        @foreach($reasons as $reason)
                            <div class="col-md-2 m-1 pl-3 "
                                 style="background-color: {{ $reason->hex_color}}; color: #000000 ">
                                {{ $reason->title }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Abwesenheiten in diesem Jahr') }}</div>
                    <div class="card-body">
                        <h5>zukünftig</h5>
                        @foreach($periods_year_now_future as $period)
                            <div class="row m-1 my-2 pl-5"
                                 style="background-color: {{ $period->pendingColor()}}; color: #000000 ">
                                {{ $period->start->toDateString() . ' - ' . $period->end->toDateString() . ' : ' . $period->pendingText() }}
                            </div>
                        @endforeach
                        <hr/>
                        <h5>aktuell</h5>
                        @foreach($periods_year_now_current as $period)
                            <div class="row m-1 my-2 pl-5"
                                 style="background-color: {{ $period->pendingColor()}}; color: #000000 ">
                                {{ $period->start->toDateString() . ' - ' . $period->end->toDateString() . ' : ' . $period->pendingText() }}
                            </div>
                        @endforeach
                        <hr/>
                        <h5>vergangen</h5>
                        @foreach($periods_year_now_past as $period)
                            <div class="row m-1 my-2 pl-5"
                                 style="background-color: {{ $period->pendingColor()}}; color: #000000 ">
                                {{ $period->start->toDateString() . ' - ' . $period->end->toDateString() . ' : ' . $period->pendingText() }}
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Neue Abwesenheit') }}</div>
                    <div class="card-body">
                        {!! \Form::open(['route' => ['period.store']]) !!}

                        <div class="row">
                            <div class="col-md-12">
                                <label for="reason_id" class="mr-sm-2">{{ __('Gründe') }}</label>
                                <select class="custom-select mr-sm-2" name="reason_id" id="reason_id">
                                    <option selected>{{__('Gründe')}}</option>
                                    @foreach($reasons as $reason)
                                        <option value="{{ $reason->id }}"
                                                style="background-color: {{ $reason->hex_color }}">{{ $reason->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! \BTForm::text('start', null, '', ['class' => 'datepicker']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! \BTForm::text('end', null, '', ['class' => 'datepicker']) !!}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                {!! \BTForm::text('comment') !!}
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

@push('foot-scripts')

    <script type="application/javascript">
        window.addEventListener('load', function () {
            $(".datepicker").datepicker($.datepicker.regional["de"]);
            $('#calendar-{{ $calendar->getId() }}').fullCalendar({!! $calendar->getOptionsJson() !!});
        });
    </script>
@endpush
