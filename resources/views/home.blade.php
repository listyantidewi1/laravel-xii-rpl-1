@extends('layouts.app')
<<<<<<< HEAD
  
=======

>>>>>>> 9425c259395d1d59d569f4c91b8e132b7259cbe9
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
<<<<<<< HEAD
  
=======

>>>>>>> 9425c259395d1d59d569f4c91b8e132b7259cbe9
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
<<<<<<< HEAD
  
                    You are a User.
                    
=======

                    {{ __('You are logged in!') }}
>>>>>>> 9425c259395d1d59d569f4c91b8e132b7259cbe9
                </div>
            </div>
        </div>
    </div>
</div>
<<<<<<< HEAD
@endsection
=======
@endsection
>>>>>>> 9425c259395d1d59d569f4c91b8e132b7259cbe9
