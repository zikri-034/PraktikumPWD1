<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Season of da year</title>
    <br>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  
  <body style="background-color: chocolate;">
    <?php
     if(isset($_POST['month'])){
      $month = $_POST['month'];

      if($month== 'december' || $month== 'january' || $month== 'february'){
          header("Location: indekswinter.php");
      } else if($month== 'march' || $month== 'april' || $month== 'may'){
          header("Location: indeksspring.php");
      } else if($month== 'june' || $month== 'july' || $month== 'august'){
          header("Location: indekssummer.php");
      } else if($month== 'september' || $month== 'october' || $month== 'november'){
          header("Location: indeksautumn.php");
      }
      exit();
  }
    ?>
    <div class="card text-center position-absolute top-50 start-50 translate-middle">
      <div class="card-header" style="background-color: bisque;">
      </div>
      <div class="card-body" style="background-color: bisque;">
        <h2 class="card-title">Whats The <span style="color: red; font-style: italic;">S</span> <span style="color: yellow; font-style: italic;">e</span> <span style="color: green; font-style: italic;">a</span> <span style="color: blue; font-style: italic;">s</span> <span style="color: blueviolet; font-style: italic;">o</span> <span style="color: brown; font-style: italic;">n</span> At That Month</h2>
        <form method="POST">
          <table style="color: blanchedalmond; border-color: aquamarine; " class="table table-striped table-hover table-bordered border mt-3 ">
            <tr>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="january">
                  <label class="form-check-label" for="january" style="font-family: 'Times New Roman', Times, serif;">
                    January
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="february">
                  <label class="form-check-label" for="february" style="font-family: 'Times New Roman', Times, serif;">
                    February
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="march">
                  <label class="form-check-label" for="march" style="font-family: 'Times New Roman', Times, serif;">
                    March
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="april">
                  <label class="form-check-label" for="april" style="font-family: 'Times New Roman', Times, serif;">
                    April
                  </label>
                </div>
              </td>
            </tr>
            <br>
            <tr>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="may" checked>
                  <label class="form-check-label" for="may">
                    May
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="june">
                  <label class="form-check-label" for="june">
                    June
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="july">
                  <label class="form-check-label" for="july">
                    July
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="august">
                  <label class="form-check-label" for="august">
                    August
                  </label>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="september">
                  <label class="form-check-label" for="september">
                    September
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="october">
                  <label class="form-check-label" for="october">
                    October
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="november">
                  <label class="form-check-label" for="november">
                    November
                  </label>
                </div>
              </td>
              <td>
                <div class="form-check" style="margin-bottom: 10px;">
                  <input class="form-check-input" type="radio" name="month" value="december">
                  <label class="form-check-label" for="december">
                    December
                  </label>
                </div>
              </td>
            </tr>
          </table>
          <button type="submit" class="btn btn-light w-100 border mt-3">See Season</button>
        </form>
      </div>
      
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>