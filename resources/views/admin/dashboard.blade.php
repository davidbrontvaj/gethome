@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard 

                    <h2>Ahoj, 

                        <!-- vypis meno admina --> 
                        {{Auth::guard('web_admin')->user()->name}}


                     </h2>

                   </div>

                <div class="panel-body">
                    Hi you are in Admin dashboard! Huray!
                    
                    Vitaj 
                   @if (Auth::guard('web_admin')->user()->name)
                            {{Auth::guard('web_admin')->user()->name}}
                    @else
                            <li>Nie si prihlásený</li>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
