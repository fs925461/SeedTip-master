<?php //Reihenfolge entscheidend!, functions kann auf config zugreifen, weil diese vorher eingelesen wird!--> ?>
<?php
        error_reporting(E_ALL);
        ini_set('display_errors',true);
        require_once ('./php/config.php');
        require_once ('./php/functions.php'); ?>

<!DOCTYPE html>
<html lang="de">

<?php printHead() ?>

<body>

<?php printHeader('Schwarzes Brett', 'sub') ?>

<!--Background-->
<div class="background-image bkgimg-blackboard">
</div>

<!--Content-->
<div class="container-fluid heading">

    <div class="text-center row">
      <!-- <div class="col-md-2 text-center">
        <img src="img/bubbles/bubble-left.png" alt="" />
      </div> -->

      <div class="col-md-8 col-md-offset-2 text-white text-center">
        <h1>Schwarzes Brett</h1>
        <p >
          Auszug an Angeboten mit zeitnaher Bewerbungsfrist
        </p>
      </div>

      <!-- <div class="col-md-2 text-center">
        <img src="img/bubbles/bubble-right.png" alt="" />
      </div> -->
    </div>

</div>

<div class="container-fluid flow">

  <div class="container">


      <?php selectJobs()?>





    <div class="row ">
      <div class="col-md-12 col-xs-12 text-center">
        <a type="button" class="button green-button" href="anmeldung-studis.php">Jetzt starten</a>
      </div>
    </div>


  </div>
</div>


<!--<?php printPartner()?>-->
<?php loadScript()?>
</body>
</html>
