<div class="container">
    <ul class="nav nav-tabs-justified mb-4">
        <li class="mr-3">
            <a href="{{ route('user.index') }}">
                <button class="btn btn-default btn-block">{{ __('User') }}</button>
            </a>
        </li>
        <li class="mx-3">
            <a href="{{ route('access.index') }}">
                <button class="btn btn-default btn-block">{{ __('Berechtigungen') }}</button>
            </a>
        </li>
    </ul>
</div>