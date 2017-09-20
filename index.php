<?php
$people = 'data2.json';
$content_people = file_get_contents($people);
$data_people = json_decode($content_people, true);

$film = 'data3.json';
$content_film = file_get_contents($film);
$data_film = json_decode($content_film, true);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Working Test</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="custom/style.css">
    <link rel="stylesheet" href="custom/font/font.css">
  </head>
  <body>
    <div class="container">
      <div class="bs-callout bs-callout-danger" id="callout-inputgroup-text-input-only">
        <b style="color:rgb(93, 96, 98); font-size:14pt;"><?php echo $data_people[0]['name']; ?></b>
      </div>

      <div class="box">
        <div class="row">
          <div class="col-md-2">
            <img class="img-responsive" src="images/image.jpg" alt="">
          </div>
          <div class="col-md-4">
            <table>
              <col width="100">
              <col width="100">
              <tr>
                <td>Height:</td>
                <td><?php echo $data_people[0]['height']; ?></td>
              </tr>
              <tr>
                <td>Mass:</td>
                <td><?php echo $data_people[0]['mass']; ?></td>
              </tr>
              <tr>
                <td>Hair Color:</td>
                <td><?php echo  ucfirst($data_people[0]['hair_color']); ?></td>
              </tr>
              <tr>
                <td>Skin Color:</td>
                <td><?php echo ucfirst($data_people[0]['skin_color']); ?></td>
              </tr>
              <tr>
                <td>Birth Year:</td>
                <td><?php echo ucfirst($data_people[0]['birth_year']); ?></td>
              </tr>
              <tr>
                <td>Gender:</td>
                <td><?php echo ucfirst($data_people[0]['gender']); ?></td>
              </tr>
            </table>
          </div>
        </div>
      </div><!-- end of box-->

      <div class="row" style="margin-top:20px">
        <div class="col-md-8">
          <p style="color:rgb(235, 79, 68); font-size:12pt; font-weight:bold;">Skywalker Movie's</p>
            <div class="row">
              <div class="col-md-3">
                <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title"><img src="images/plays.svg" alt="" ></h3>
                </div>
                <div class="panel-body">
                  <b><?php $position=17; // Define how many character you want to display
                    $message= $data_film[5]['title'];
                    $post = substr($message, 0, $position);
                    echo $post;
                    echo "...";
                  ?></b>
                  <br><br>
                  Director:<br>
                  <?php echo ucfirst($data_film[5]['director']); ?>
                  <br><br>
                  Release:<br>
                  <?php echo ucfirst($data_film[5]['release_date']); ?>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="panel panel-default">
              <div class="panel-heading">
                <h3 class="panel-title"><img src="images/plays.svg" alt="" ></h3>
              </div>
              <div class="panel-body">
                <b><?php echo ucfirst($data_film[3]['title']); ?></b>
                <br><br>
                Director:<br>
                <?php echo ucfirst($data_film[3]['director']); ?>
                <br><br>
                Release:<br>
                <?php echo ucfirst($data_film[3]['release_date']); ?>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title"><img src="images/plays.svg" alt="" ></h3>
            </div>
            <div class="panel-body">
              <b><?php $position=17; // Define how many character you want to display
                $message= $data_film[5]['title'];
                $post = substr($message, 0, $position);
                echo $post;
                echo "...";
              ?></b>
              <br><br>
              Director:<br>
              <?php echo ucfirst($data_film[5]['director']); ?>
              <br><br>
              Release:<br>
              <?php echo ucfirst($data_film[5]['release_date']); ?>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title"><img src="images/plays.svg" alt="" ></h3>
          </div>
          <div class="panel-body">
            <b><?php $position=19; // Define how many character you want to display
              $message= $data_film[3]['title'];
              $post = substr($message, 0, $position);
              echo $post;
            ?></b>
            <br><br>
            Director:<br>
            <?php echo ucfirst($data_film[3]['director']); ?>
            <br><br>
            Release:<br>
            <?php echo ucfirst($data_film[3]['release_date']); ?>
          </div>
        </div>
      </div>
            </div>
        </div>
        <div class="col-md-4">
          <p style="color:rgb(235, 79, 68); font-size:12pt; font-weight:bold;">Related Another Movie's</p>
          <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">
                <p><?php echo $data_film[6]['title']; ?></p>
                <table>
                  <col width="100">
                  <col width="200">
                  <tr>
                    <td style="color:black">Director:</td>
                    <td style="color:black"><?php echo $data_film[6]['director']; ?></td>
                  </tr>
                  <tr>
                    <td style="color:black">Producer:</td>
                    <td style="color:black"><?php echo $data_film[6]['producer']; ?></td>
                  </tr>
                  <tr>
                    <td style="color:black">Release Date:</td>
                    <td style="color:black"><?php echo  ucfirst($data_film[6]['release_date']); ?></td>
                  </tr>
                </table>
            </h3>
          </div>
          <div class="panel-body">
            <?php echo $data_film[6]['opening_crawl'];
            ?>
            <br><br><p align="right"><a href="#"><b style="text-decoration:none; color:rgb(6, 97, 142)">See More</b></a></p>
          </div>
        </div>
        </div>
      </div>
    </div><!-- end of container-->
  </body>
</html>
