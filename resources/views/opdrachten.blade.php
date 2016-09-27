@extends('layouts.app')
<link rel="stylesheet" href="css/app.css" type="text/css" media="screen"/>  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
@section('content')
<div class="container">
    <div class="row">
    
  <!-- Menu -->
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li class="active"><a href="{{ url('/opdrachten') }}"><i class="fa fa-tasks fa-fw"></i>Opdrachten</a></li>
                <li><a href="{{ url('/leereenheden') }}"><i class="fa fa-book fa-fw"></i>Leereenheden</a></li>
                <li><a href="{{ url('/voortgang') }}"><i class="fa fa-bar-chart fa-fw"></i>Voortgang</a></li>
                <li><a href="{{ url('/notificaties') }}"><i class="fa fa-bell-o fa-fw"></i>Notificaties</a></li>
                <li><a href="{{ url('/feedback') }}"><i class="fa fa-comments fa-fw"></i>Feedback</a></li>
                <li><a href="{{ url('/beoordelingen') }}"><i class="fa fa-check-square-o fa-fw"></i>Beoordelingen</a></li>
                <li><a href="{{ url('/instellingen') }}"><i class="fa fa-cogs fa-fw"></i>Instellingen</a></li>
            </ul>
        </div>

    <!-- Welkomstbericht & Progressiebalk -->
        <div class="panel panel-default col-md-9">
            <div class="panel-body" style=";">Opdrachten</div>
        </div>

    <!--Lopende Opdrachten  -->
         <div class="panel panel-default col-md-3">
            <div class="panel-heading">Leereenheden</div>
                <div class="panel-body" style="padding: 1px;">
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Leereenheid 1</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Leereenheid 2</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Leereenheid 3</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Leereenheid 4</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Leereenheid 5</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Leereenheid 6</div>
                </div>
            </div>

            <div class="panel panel-default col-md-3">
            <div class="panel-heading">Opdrachten</div>
                <div class="panel-body" style="padding: 1px;">
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Lopende Opdrachten</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Afgeronde Opdrachten</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Opdracht 1</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Opdracht 2</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Opdracht 3</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Opdracht 4</div>
                </div>
            </div>

            <div class="panel panel-default col-md-3">
            <div class="panel-heading">Opdracht</div>
                <div class="panel-body" style="padding: 1px;">
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Opdracht 1</div>
                    <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Opdracht omschrijving 
Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla quam velit, vulputate eu pharetra nec, mattis ac neque. Duis vulputate commodo lectus, ac blandit elit tincidunt id. Sed rhoncus, tortor sed eleifend tristique, tortor mauris molestie elit, et lacinia ipsum quam nec dui. Quisque nec mauris sit amet elit iaculis pretium sit amet quis magna. Aenean velit odio, elementum in tempus ut, vehicula eu diam. Pellentesque rhoncus aliquam mattis. Ut vulputate eros sed felis</div>
                </div>
            </div>
    </div>
</div>

@endsection
