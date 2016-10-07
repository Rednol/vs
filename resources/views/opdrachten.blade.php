@extends('layouts.app')
<link rel="stylesheet" href="css/app.css" type="text/css" media="screen"/>  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">
@section('content')

<!-- Opdracht and Leereenheid models containing tables with opdracht information and leereenheden-->
<?php
use App\Opdracht;
use App\Leereenheid;

$opdrachten = App\Opdracht::all();
$leereenheden= App\Leereenheid::all();
?>

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

    <!-- Pagina titel -->
        <div class="panel panel-default col-md-9">
            <div class="panel-body">Opdrachten</div>
        </div>

    <!--Leereenheden -->
         <div class="panel panel-default col-md-3">
            <div class="panel-heading">Leereenheden</div>
                <div class="panel-body" style="padding: 1px;">
                       <?php
                        foreach ($leereenheden as $Leereenheid) {
                            /* Div om elke database entry heen */
                            echo "<div class='col-md-12 well clickable customdiv'>";
                            /* Toon alle leereenheden */
                            echo $Leereenheid->naam;
                            /* Sluit div */
                            echo "</div>"; }
                        ?>
                </div>
            </div>
            
            <!-- Opdrachten -->
            <div class="panel panel-default col-md-3">
            <div class="panel-heading">Opdrachten</div>
                <div class="panel-body" style="padding: 1px;">                       
                        <?php
                        foreach ($opdrachten as $opdracht) {
                            /* Div om elke database entry heen */
                            echo "<div class='col-md-12 well clickable customdiv'>";
                            /* Toon alle opdracht titels */
                            echo $opdracht->titel;
                            echo "<a href='http://www.w3schools.com'>$opdracht->titel</a>";
                            /* Sluit div */
                            echo "</div>"; }
                        ?>
                    </div>
            </div>

            <!-- Geselecteerde Opdracht -->
            <div class="panel panel-default col-md-3">
            <div class="panel-heading"><?php foreach ($opdrachten as $opdracht) {
                        echo $opdracht->titel; } ?></div>
                <div class="panel-body" style="padding: 1px;">
                        <!-- Div om opdracht type, status en beschrijving heen -->
                        <div class="col-md-12 well customdiv" style="margin-top: 5px; margin-bottom: 5px; padding: 10px;"> 
                        <!-- Toon opdracht type -->
                        Type: 
                   <?php echo $opdracht->type; ?> <br> <br>
                        <!-- Toon opdracht status -->
                        Status: 
                   <?php echo $opdracht->status; ?> <br> <br>

                        <!-- Toon opdracht beschrijving -->
                   <?php echo $opdracht->beschrijving; ?>
                    </div>
                </div>
            </div> 

        <!-- Opdracht toevoegen -->
        <div class="panel panel-default col-md-3" style="clear: left;">
            <div class="panel-heading">Opdracht toevoegen</div>
                <div class="panel-body" style="padding: 1px;">
                    <div class="col-md-12 well" style="margin-top: 5px; margin-bottom: 5px; padding: 10px;"><form action="opdrachten/toevoegen" method="post">
                    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                    Titel: <br> <input type="text" name="opdracht_titel" style="width: 100%";/> <br>
                    Beschrijving: <br> <input type="text" name="opdracht_type" style="width: 100%";/> <br>
                    Type: <br> <input type="text" name="opdracht_beschrijving" style="width: 100%";/> <br>
                    Leereenheden: 
                    <select style="width: 100%"> 
                        <?php
                        foreach ($leereenheden as $Leereenheid) {
                            /* Toon alle leereenheden */
                            echo "<option name='opdracht_leereenheden'>";
                            echo $Leereenheid->naam;
                            echo "</option>";
                        } ?>
                    </select>

                    <input type="Submit" value = "Opdracht Toevoegen" style="width: 100%; margin-top: 15px;";/></form></div>
                </div>
            </div>

    </div>
</div>

@endsection