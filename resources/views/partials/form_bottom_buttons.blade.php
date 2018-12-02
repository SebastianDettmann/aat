<div class="clearfix">
    <div class="btn-group pull-left">
        <a href="{{ URL::previous() }}" class="btn btn-default" dusk="link-back">
            {{ __('Zurück') }}
        </a>
        <button class="btn btn-danger" type="reset" dusk="button-clear"> Reset</button>
    </div>
    {!! BTForm::submit(__('Speichern'), [
        'class' => 'btn btn-raised btn-default pull-right',
        'dusk' => 'button-save',
    ]) !!}
</div>