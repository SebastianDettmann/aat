@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User bearbeiten</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{--    <h1>
                               User Index
                           </h1>
                      @foreach($users as $user)
                           <div>
                               @foreach($user as $element)
                                   <div>
                                       {{ $element }}
                                   </div>
                                   <br />
                               @endforeach
                               ==================================================
                           </div>
                       @endforeach--}}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
