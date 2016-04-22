<!DOCTYPE html>
<html lang="en" ng-app>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">


    <title>Test AngularJS</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.1/angular.min.js"></script>
  </head>

  <body>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      

      <div class="panel panel-primary">
        <div class="panel-heading">Panel heading without title</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-5">
            <form class="form-inline" action="angularjs_01.php" method="post" role="form">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                  <input type="text" class="form-control focus" placeholder="input value here" name="input_value">                
                </div>
                <button type="submit" value="submit" name="ok" class="btn btn-sm btn-danger">Submit</button>
              </form>
              <?php
                if(isset($_POST['ok'])){
                  $input_value=$_POST['input_value'];                  
                }
              ?>
            </div>
        </div>
      </div>
    </div>

      <div class="panel panel-primary">
        <div class="panel-heading">Panel heading without title</div>
        <div class="panel-body">          
          <div class="row">
            <div class="col-md-5">

              <?php
                $texarea_str=" ";
                for($i=1 ; $i<=$input_value ; $i=$i+1){
                  $str_input_id="input_id_".$i;
                  $str_input_image="input_image_".$i;
                  $str_input_url="input_url_".$i;
                  echo "<div class='input-group'>";
                    echo "<span class='input-group-addon'><i class='fa fa-barcode'></i></span>";
                    echo "<input type='text' class='form-control focus' placeholder='input ID Name' ng-model='".$str_input_id."'>";
                  echo "</div>";
                  echo "<div class='input-group'>";
                    echo "<span class='input-group-addon'><i class='fa fa-camera'></i></span>";
                    echo "<input type='text' class='form-control focus' placeholder='input Image URL' ng-model='".$str_input_image."'>";
                  echo "</div>";
                  echo "<div class='input-group'>";
                    echo "<span class='input-group-addon'><i class='fa fa-link'></i></span>";
                    echo "<input type='text' class='form-control focus' placeholder='input URL here' ng-model='".$str_input_url."'>";
                  echo "</div>";
                  $texarea_str=$textarea_str."[b]input_id={{".$str_input_id."}} ; input_image={{".$str_input_image."}} ; input_url={{".$str_input_url."}} [/b]";
                  echo $textarea_str;
                }
              ?>
            </div>
            <div class="col-md-7">
              <?php
              $row=$i*4;
              echo "<textarea class='form-control focus' rows='".$row."'>";
                $url_pr="https://ea8c13cc38fdb76db645e93cafb6307f82bcdeec.googledrive.com/host/0B-KVRNLISGFTVU9XMFFvR1hRSTQ/danh-sach-phim-sd-10.html";
                  for($i=1 ; $i<=$input_value ; $i=$i+1){
                    $str_input_id="input_id_".$i;
                    $str_input_image="input_image_".$i;
                    $str_input_url="input_url_".$i;                    
                    echo "[size=+2][color=lime][b]JAV HD Fshare :: {{".$str_input_id."}}[/b][/color][/size]\n";
                    echo "--------------------------------------------------------\n";
                    echo "[url=".$url_pr."][img]{{".$str_input_image."}}[/img][/url]\n";
                    echo "[code]{{".$str_input_url."}}[/code]\n\n\n";
                  }
              echo "</textarea>";
                ?>
            </div>          
          </div>
        </div>
      </div>      

    </div> <!-- /container -->
    <script language="JavaScript">
      $(document).ready(function() {
        $(".focus").focus(function() {
                      var $this = $(this);
                      $this.select();

                      if (($this).next("span").length > 0) {
                        return false;
                      }
                      else{
                        
                        
                      }

                      // Work around Chrome's little problem
                      $this.mouseup(function() {
                          // Prevent further mouseup intervention
                          $this.unbind("mouseup");
                          return false;
                      });
                  });
        });
    </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.jss"></script>
    <script src="js/bootstrap.min.jss"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
