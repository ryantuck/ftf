<!DOCTYPE html>
<html lang="en">

<head>

    <title>FTF</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <div class="row">
          <div class="jumbotron">
            <h1>FTF</h1>
            <p>vendredi de pane grillé</p>
            <div id="nextfriday">
             <?php 
              $nextFriday = date('M d', strtotime('next friday'));
              echo $nextFriday;
              ?>
              </div>
              <br/>
              <div id="countdown">
              <?php
              $today = date('w');
              $countdown = 6 - $today;
              echo $countdown . ' days till FTF';
             ?>
             </div>
              <!-- if user is not logged in -->
            <div class="button">s'identifier</div>
            <!-- if user is logged in-->
            <div class="button">commande</div>
          </div>
        </div>
    </div>

</body>

</html>
