<p>{{ __('Hallo :user,', ['user' => $user->fullName()]) }}</p>
<p></p>
<p>{{ __('wir haben eine Anfrage erhalten, das zu dieser E-Mail gehörende Passwort zu ändern. Falls Sie diese Anfrage gemacht haben, folgen Sie bitte den Anweisungen unten.') }}</p>
<p></p>
<p>{{ __('Klicken Sie auf den nachstehenden Link, um Ihr Passwort zurückzusetzen:') }}</p>
<p></p>
<p>
    <a href="{{ $link = url('auth/password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}">{{ $link }}</a>
</p>
<p></p>
<p>{{ __('Der Link bleibt für 24 Stunden gültig.') }}</p>
<p></p>
<p>{{ __('Falls die Anfrage auf Änderung des Passworts nicht von Ihnen stammt, können Sie diese E-Mail gefahrlos ignorieren.') }}</p>
@include('partials.emails.footer')