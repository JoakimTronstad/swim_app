<?php
  include_once 'php/dbh.inc.php';
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tid for svømmer</title>
    <link rel="stylesheet" href="{{ url_for('static', filename='css/style.css') }}">
    <link rel="stylesheet" href="{{ url_for('static', filename='css/dropdown.css') }}">
  </head>
  <body>
    <header style="height: 150px; background-color: white;">
      <div class="row">
        <div class="column" style="width: 105.42px;">
          <a href="index.html"><img src="{{ url_for('static', filename='uploads/Asker_SK_Logo.jpg') }}" class="profile-img" style="height: 150px;"></a>
        </div>
        <div class="column" style="width: 1052.49px; text-align: center; margin-top: 50px;">
          <h1>Tid for svømmer</h1>
        </div>
        <div class="column" style="width: 105.42px;">
          <a href="index.html"><img src="{{ url_for('static', filename='uploads/Asker_SK_Logo.jpg') }}" class="profile-img" style="height: 150px;"></a>
        </div>
      </div>
    </header>
    <main style="padding-top: 150px;">
      <script>
        function swimmerDisplay(result){
          form.displaySwimmer.value=result;
        }
      </script>
      <div class="container">
		    <form id="myForm" name="form">
		    <div class="display">
          <div class="row">
            <input type="text" placeholder="Swimmer" name="displaySwimmer" id="swimmer" />
          </div>
        </div>
        <div class="dropdown">
          <button class="dropbtn">Swimmers</button>
          <div class="dropdown-content">
            <input type="button" name="joakim" value="Joakim Tronstad" onClick="swimmerDisplay(joakim.value)">
            <input type="button" name="kristian" value="Kristian Tronstad" onClick="swimmerDisplay(kristian.value)">
            <input type="button" name="julius" value="Julius Aleksander Stähr Aarnes" onClick="swimmerDisplay(julius.value)">
            <input type="button" name="oscarSI" value="Oscar Smeby Iden" onClick="swimmerDisplay(oscarSI.value)">
            <input type="button" name="aksel" value="Aksel Smeby Iden" onClick="swimmerDisplay(aksel.value)">
            <input type="button" name="ane" value="Ane Hanh Basberg" onClick="swimmerDisplay(ane.value)">
            <input type="button" name="liv" value="Liv Hanh Basberg" onClick="swimmerDisplay(liv.value)">
            <input type="button" name="ella" value="Ella Magnussen" onClick="swimmerDisplay(ella.value)">
            <input type="button" name="jonas" value="Jonas Magnussen" onClick="swimmerDisplay(jonas.value)">
            <input type="button" name="felix" value="Felix Richard Stavnes" onClick="swimmerDisplay(felix.value)">
            <input type="button" name="fredrik" value="Fredrik Christopher Almnes" onClick="swimmerDisplay(fredrik.value)">
            <input type="button" name="hannah" value="Hannah Ruud Raustøl" onClick="swimmerDisplay(hannah.value)">
            <input type="button" name="oscarM" value="Oscar Lars Christian Megård" onClick="swimmerDisplay(oscarM.value)">
            <input type="button" name="pauline" value="Pauline Hellesø Eriksen" onClick="swimmerDisplay(pauline.value)">
            <input type="button" name="sofie" value="Sofie Helena Østbye" onClick="swimmerDisplay(sofie.value)">
            <input type="button" name="william" value="William Torstveit Hansen" onClick="swimmerDisplay(william.value)">
            <input type="button" name="zoe" value="Zoé Helen Sivertsen" onClick="swimmerDisplay(zoe.value)">
          </div>
        </div>
        </form>
      </div>
      <?php
        $sql = "SELECT * FROM long_course_events;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);

        if ($resultCheck > 0) {
        ?>
        <table class='table table-bordered table-striped'>
          <tr>
            <td>time</td>
          </tr>
          <?php
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?php echo $row['time']; ?></td>
            </tr>
            <?php
            $i++;
          }
          ?>
          </table>
          <?php
        }
        else{
          echo "No results found"
        }
      ?>
    </main>
  </body>
</html>
