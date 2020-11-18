@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bestätige deine E-Mail Adresse') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Du hast einen neuen Bestätigungslink erhalten!') }}
                        </div>
                    @endif

                    {{ __('Checke deine E-Mail Postfach nach einer Bestätigungsmail.') }}
                    {{ __('Falls du keine E-Mail erhalten hast') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('klicke hier um eine neue E-Mail zu erhalten.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
