@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    Je bent ingelogd!
                </div>
            </div>
        </div>
    </div>
</div>

    <?php header( 'refresh:1;url=/menu'); ?>
@endsection
