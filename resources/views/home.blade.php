@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard 1</div>

                <div class="panel-body">
                    @if(empty($articles))
                    <h6>Nothing to Show</h6>

                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
