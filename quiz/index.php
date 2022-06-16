<!doctype html>
<html lang="cs">

<head>
  <title>Kvíz</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/quiz.css">
</head>

<body onload="setup()">

  <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="../index.html">WZWiki</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="https://www.callofduty.com/warzone">Oficiální stránky</a>
          </li>
          <li>
            <a class="nav-link" href="../weaponpage/index.html">Zbraně</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Kvíz</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container h-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="box">
          <h1 Id="questionNo">Kvíz</h1>
          <p Id="question">Otázka</p>
          <input Id="text-field" type="text" class="form-control">
          <input Id="button" type="submit" value="Potvrdit" class="btn btn-primary btn-block" onclick="clickButton()">
        </div>
      </div>
    </div>
  </main>


  <script>
    const questions = [
      ["Jak se jmenuje hra o které jsem dělal stránku?", "Warzone"],
      ["Které studio vytvořilo hru CoD: Warzone?", "Infinity ward"],
      ["Do jakého místa se dostaneš po první smrti?", "Gulag"],
      ["Jak se jmenovala původní mapa ve CoD: Warzone?", "Verdansk"],
      ["Ve které hře v sérii CoD byl první mód na styl Battle Royale?", "Black Ops 4"]
    ];
    var questionNo = 1;
    var score = 0;

    function clickButton() {
      check();
      questions.shift();
      questionNo++;
      setup();

    }

    function setup() {
      if (questions.length != 0) {
        document.getElementById("question").innerHTML = questions[0][0];
        document.getElementById("questionNo").innerHTML = "Otázka: " + questionNo;
      } else {
        document.getElementById("questionNo").innerHTML = "Hotovo!";
        document.getElementById("question").innerHTML = "Tvoje skóre je: " + score;
        document.getElementById("text-field").remove();
        document.getElementById("button").remove();
        <?php 
        $servername = "sql11.freemysqlhosting.net";
        $username = "sql11499127";
        $password = "DivrqUnUi4";
        $dbname = "sql11499127";
        
        $body = "<script>document.write(score)</script>";
        $datum = date("Y/m/d");
        $cas = date("H:i:s");
        
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }
        
        $sql = "INSERT INTO kviz (body, datum, cas)
        VALUES ('$body', '$datum', '$cas')";
        
        if ($conn->query($sql) === TRUE) {
          echo "";
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }
        
        $conn->close(); 
        ?>
      }
    }

    function check() {
      if (document.getElementById("text-field").value == questions[0][1]) {
        score++;
        document.getElementById("text-field").value = "";
      } else {
        document.getElementById("text-field").value = "";
      }
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>