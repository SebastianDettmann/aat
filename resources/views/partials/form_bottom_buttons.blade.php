<div class="clearfix">
    <div class="row mt-4">
        <div class="col-md-2">
            <a href="{{ URL::previous() }}">
                <button class="btn btn-block btn-default" dusk="link-back">{{ __('Zurück') }}</button>
            </a>
        </div>
        <div class="col-md-2">
            <button class="btn btn-danger btn-block" type="reset" dusk="button-clear">{{ __('Reset') }}</button>
        </div>
        <div class="col-md-2 offset-6">
            {!! BTForm::submit(__('Speichern'), [
                'class' => 'btn btn-block btn-default',
                'dusk' => 'button-save',
            ]) !!}
        </div>
    </div>
</div>
