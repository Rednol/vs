@extends('layouts.app')
<?php
use App\Leereenheid;

$leereenheden = App\Leereenheid::all();

?>
<link rel="stylesheet" href="css/app.css" type="text/css" media="screen"/>  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
@section('content')
<div class="container">
    <div class="row">
    
  <!-- Menu -->
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li><a href="{{ url('/dashboard') }}"><i class="fa fa-home fa-fw"></i>Home</a></li>
                <li><a href="{{ url('/opdrachten') }}"><i class="fa fa-tasks fa-fw"></i>Opdrachten</a></li>
                <li class="active"><a href="{{ url('/leereenheden') }}"><i class="fa fa-book fa-fw"></i>Leereenheden</a></li>
                <li><a href="{{ url('/voortgang') }}"><i class="fa fa-bar-chart fa-fw"></i>Voortgang</a></li>
                <li><a href="{{ url('/notificaties') }}"><i class="fa fa-bell-o fa-fw"></i>Notificaties</a></li>
                <li><a href="{{ url('/feedback') }}"><i class="fa fa-comments fa-fw"></i>Feedback</a></li>
                <li><a href="{{ url('/beoordelingen') }}"><i class="fa fa-check-square-o fa-fw"></i>Beoordelingen</a></li>
                <li><a href="{{ url('/instellingen') }}"><i class="fa fa-cogs fa-fw"></i>Instellingen</a></li>
            </ul>
        </div>

    <!-- Welkomstbericht & Progressiebalk -->
        <div class="panel panel-default col-md-9">
            <div class="panel-body" style=";">Leereenheden</div>
        </div>

    <!--Lopende Opdrachten  -->
         <div class="panel panel-default col-md-3">
            <div class="panel-heading">Leereenheden</div>
                <div class="panel-body" style="padding: 1px;">
                      <?php
                        foreach ($leereenheden as $leereenheid) {
                        
                            echo "<div class='col-md-12 well clickable'>";
                            
                            echo "<a href='/vs/resources/assets/$leereenheid->Naam.pdf'>$leereenheid->Naam</a>";
                            echo "<div class='box'>";
                            echo "<iframe src='/vs/resources/assets/$leereenheid->Naam.pdf' width = '500px' height = '500px'></iframe>";
                            echo "</div> ";
                            
                            echo "</div>"; }
                        ?>
                    
                </div>
            </div>

         <div class="panel panel-default col-md-3">
            <div class="panel-heading">Gekoppelde</div>
                <div class="panel-body" style="padding: 1px;">
                <div class="col-md-12 well clickable" style="margin: 5px; padding: 10px;">Lopende Opdrachten</div>
            </div>
        </div>

         <div class="panel panel-default col-md-3">
            <div class="panel-heading">Preview</div>
                <div class="panel-body" style="padding: 1px;"></div>
                 
                    <img src="http://i67.tinypic.com/343hnon.jpg" width="260px" height="300px">
                   
        </div>
    </div>
</div>



@endsection
