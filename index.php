<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>BSC Transaction Watcher</title>
  </head>
  <body>
    <div class="container">
      <h1 style="text-align: center;">Transaction Watcher</h1>
      <h3 id="gmt"></h3>
      <div class="row">
        <div class="col col-sm-2">
          <h2>Addrs 1</h2>
          <div id="cukong1">
             <?php include('backend/backend_1.php'); ?>
          </div>
        </div>
        <div class="col col-sm-2">
          <h2>Addrs 2</h2>
          <div id="cukong2">
             <?php include('backend/backend_2.php'); ?>
          </div>
        </div>
        <div class="col col-sm-2">
          <h2>Addrs 3</h2>
          <div id="cukong3">
             <?php include('backend/backend_3.php'); ?>
          </div>
        </div>
        <div class="col col-sm-2">
          <h2>Addrs 4</h2>
          <div id="cukong4">
             <?php include('backend/backend_4.php'); ?>
          </div>
        </div>
        <div class="col col-sm-2">
          <h2>Addrs 5</h2>
          <div id="cukong5">
             <?php include('backend/backend_5.php'); ?>
          </div>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
    setInterval(function(){
        $('#cukong1').load('backend/backend_1.php');
        $('#cukong2').load('backend/backend_2.php');
        $('#cukong3').load('backend/backend_3.php');
        $('#cukong4').load('backend/backend_4.php');
        $('#cukong5').load('backend/backend_5.php');
   },2000);

</script>
  </body>
</html>