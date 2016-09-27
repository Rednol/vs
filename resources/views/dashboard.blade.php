@extends('layouts.app')
<link rel="stylesheet" href="css/app.css" type="text/css" media="screen"/>  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
@section('content')
<div class="container">
    <div class="row">
    
  <!-- Menu -->
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li><a href="{{ url('/opdrachten') }}"><i class="fa fa-tasks fa-fw"></i>Opdrachten</a></li>
                <li><a href="{{ url('/leereenheden') }}"><i class="fa fa-book fa-fw"></i>Leereenheden</a></li>
                <li><a href="{{ url('/voortgang') }}"><i class="fa fa-bar-chart fa-fw"></i>Voortgang</a></li>
                <li><a href="{{ url('/notificaties') }}"><i class="fa fa-bell-o fa-fw"></i>Notificaties</a></li>
                <li><a href="{{ url('/feedback') }}"><i class="fa fa-comments fa-fw"></i>Feedback</a></li>
                <li><a href="{{ url('/beoordelingen') }}"><i class="fa fa-check-square-o fa-fw"></i>Beoordelingen</a></li>
                <li><a href="{{ url('/instellingen') }}"><i class="fa fa-cogs fa-fw"></i>Instellingen</a></li>
            </ul>
        </div>

    <!-- Welkomstbericht & Progressiebalk -->
        <div class="panel panel-default col-md-6">
            <div class="panel-body" style="float: left; margin-right: 50px;">Welkom, {{ Auth::user()->name }} </div>

            <div class="progress progress-striped progress-success active" style="margin-top: 15px; margin-bottom: 0;">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
            </div>
        </div>

        <div class="panel panel-default col-md-3" style="margin-left: 20px; margin-bottom:20px; width: 23%; float: right; padding-bottom: 22px">
            <div class="panel-heading">Notificaties</div>
                <div class="panel-body">Notificatie 1 <br>
            Notificatie 2 <br>
            Notificatie 3 <br>
            Notificatie 4 <br>
            Notificatie 5
             </div>
        </div>

    <!-- Te behalen leereenheden -->
         <div class="panel panel-default col-md-6">
            <div class="panel-heading">Te behalen leereenheden</div>
                <div class="panel-body">
                    <div class="col-md-3 well clickable" style="margin: 5px; padding: 10px;">Leereenheid 1</div>
                    <div class="col-md-3 well clickable" style="margin: 5px; padding: 10px;">Leereenheid 2</div>
                    <div class="col-md-3 well clickable" style="margin: 5px; padding: 10px;">Leereenheid 3</div>
            </div>
        </div>

    <!--Lopende Opdrachten  -->
         <div class="panel panel-default col-md-9" style="float: right">
            <div class="panel-heading">Lopende Opdrachten</div>
                <div class="panel-body" style="float: right">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus.
            </div>
        </div>

    </div>
</div>

@endsection
