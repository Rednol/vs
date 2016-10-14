@extends('layouts.app')
<link rel="stylesheet" href="css/app.css" type="text/css" media="screen"/>  
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous"> 
<script src="http://code.jquery.com/jquery-1.10.1.js"></script>
@section('content')

<!-- Opdracht and Leereenheid models containing tables with opdracht information and leereenheden-->
<?php
use App\Opdracht;
use App\Leereenheid;

$opdrachten = App\Opdracht::all();
$leereenheden= App\Leereenheid::all();
?>

<div class="container">
    
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
        <!-- Pagina titel -->
            <div class="panel-body" style="float:left;">Opdrachten </div>
            <!-- Opdracht toevoegen knop -->
            <a href="#" class="btn btn-primary btn-primary" id="myBtn" style="float: right; margin-top: 8px;">Opdracht Toevoegen <span class="glyphicon glyphicon-plus"></span></a>
        </div>

        <!--Leereenheden -->
        <div class="panel panel-default col-md-3">
            <div class="panel-heading">Leereenheden</div>
                <div class="panel-body" style="padding: 1px;">
                    <?php
                        foreach ($leereenheden as $Leereenheid) {
                            echo "<div class='col-md-12 well clickable customdiv'>";
                            echo $Leereenheid->naam;
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
                            echo "<div class='col-md-12 well clickable customdiv'>";
                            echo $opdracht->titel;
                            //echo "<a href='http://www.w3schools.com'>$opdracht->titel</a>";
                            /* Sluit div */
                            echo "</div>"; }
                    ?>
                </div>
        </div>

        <!-- Geselecteerde Opdracht -->
        <div class="panel panel-default col-md-3">
            <div class="panel-heading">
            <!-- Zet opdracht titel als panel heading -->
                <?php 
                    foreach ($opdrachten as $opdracht) {
                        echo $opdracht->titel; } 
                ?>   
            </div>

            <!-- Opdracht type, status en beschrijving -->
            <div class="panel-body" style="padding: 1px;">
                <div class="col-md-12 well customdiv" style="margin-top: 5px; margin-bottom: 5px; padding: 10px;"> 
                    <label>Type:</label> 
                   <?php echo $opdracht->type; ?>
                   <hr> 
                   <label>Beschrijving:</label> <br>
                   <?php echo $opdracht->beschrijving; ?> 
                   <hr> 
                   <label>Leereenheden:</label>
                   <?php echo $opdracht->leereenheden; ?>
                   <hr> 
                   <label>Status:</label>
                   <?php echo $opdracht->status; ?> 
                   <hr> 
                    <label>Individueel of groep:</label>
                   <?php echo $opdracht->individueelofgroepsopdracht; ?> 
                   <hr>
                   <label>Deadline:</label>
                   <?php echo $opdracht->deadline; ?>

                </div>
            </div>
        </div>

        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <!-- Modal header -->
            <div class="modal-header">
                <span class="close" style="margin-top: 15px;">x</span>
                    <h2 style="margin-top: 15px; margin-bottom: 15px;">Opdracht Toevoegen</h2>
            </div>

            <!-- Modal body -->
            <div class="modal-body">

            <form action="opdrachten/toevoegen" method="post" id="opdrachttoevoegenform">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

                    <!-- Titel -->
                    <div style="float:left; width: 48%;">
                        <label for="opdracht_titel">Titel</label>
                        <input type="text" name="opdracht_titel" class="form-control"; required>
                    </div>

                     <!-- Type --> 
                    <div style="float:right; width: 48%;">
                        <label for="opdracht_type">Type</label>
                        <select name="opdracht_type" class="form-control" required> 
                        <option>Individueel</option>
                        <option>Intern</option>
                        <option>Extern</option>
                        </select>
                    </div> <br><br><br><br>

                    <!-- Beschrijving -->
                    <label for="opdracht_beschrijving">Beschrijving</label>
                    <textarea name="opdracht_beschrijving" class="form-control" rows=2 cols=20 style="width: 100%; max-width: 100%; height: 110px;"></textarea> <br>

                    <!-- Leereenheden -->
                     <!-- Beschikbare Leereenheden -->
                    <div class="col-md-2" style="width: 45%; padding: 0px;">
                    <label for="select1">Beschikbare Leereenheden</label>
                        <select id="select1" name="selectmultiple" class="form-control" multiple="multiple">
                            <?php
                                foreach ($leereenheden as $Leereenheid) {
                                    /* Toon alle leereenheden */
                                    echo "<option name='opdracht_leereenheden'>";
                                    echo $Leereenheid->naam;
                                    echo "</option>"; } 
                            ?>
                        </select>
                    </div>

                    <!-- Knoppen voor het verplaatsen van leereenheden tussen de multiselects -->
                    <ul style="list-style-type:none; float: left; padding: 0px; margin: 0px; margin-left: 13px;">
                        <li><button class="button fa fa-angle-double-right" href="#" id="add" style="margin: 0px; padding-right: 25px; padding-top: 8px; padding-bottom: 8px; margin-bottom: 10px; font-size: 20px;     margin-top: 27px;"></button> </li>
                        <li><button class="button fa fa-angle-double-left" href="#" id="remove" style="margin: 0px; padding-right: 25px; padding-top: 8px; padding-bottom: 8px; font-size: 20px;"></button></li>
                    </ul>

                    <!-- Geselecteerde Leereenheden -->
                    <div class="col-md-2" style="width: 45%; float: left; padding: 0px;">
                    <label for="select2">Geselecteerde Leereenheden</label>
                        <select id="select2" name="opdracht_leereenheden" class="form-control" multiple="multiple" required>
                        </select>
                    </div> <br><br><br><br><br><br>

                    <!-- Deadline -->        
                    <div style="float:right; width: 48%;">
                        <label for="deadline">Deadline</label>
                        <input type="date" name="opdracht_deadline" class="form-control" required/>
                    </div>

                    <!-- Individuele of Groeps opdracht -->
                    <label for="individueel">Individuele of groeps opdracht</label> <br>
                    <!-- Individueel -->
                    <label for="individueel" style="margin-top: 1%; margin-right: 5%;">Individueel
                        <input type="radio" id="individueel" name="individueelgroepselect" value="Individueel" checked />
                    </label>

                    <!-- Groep -->
                    <label for="groep">Groep
                        <input type="radio" id="groep" name="individueelgroepselect" value="Groep" />
                    </label>
            </div>

            <!-- Modal footer -->
            <div class="modal-footer">
                <!-- Sluiten en Opslaan -->
                <input class="button" type="reset" id="annuleer" value = "Annuleren" style="float:left; text-align: center; cursor: pointer;" />
                <input class="button" type="Submit" value = "Opslaan" style="float: right;" />
        </form>
    </div>

<!-- Javascript src -->
<script src="js/app.js"></script> 




<!-- Sluit Container -->
</div>

@endsection