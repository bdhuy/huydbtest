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


    <title>Fshare JAVlibs</title>

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
        <div class="panel-heading">General Fshare for JAVlibs</div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-5">
            <form class="form-inline" action="fshare_javlibs.php" method="post" role="form">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                  <select class="form-control" name="select_options">
                    <option>---- Chọn Loại Flie ----</option>
                    <option selected="selected" value="1" <?=$select_options==1?'selected="selected"':'';?>>1 link JAV SD</option>
                    <option value="2"<?=$select_options==2?'selected="selected"':'';?>>1 link JAV HD</option>
                    <option value="3"<?=$select_options==3?'selected="selected"':'';?>>Both JAV SD & HD</option>                    
                  </select>             
                </div>
                <button type="submit" value="submit" name="ok" class="btn btn-sm btn-danger">Submit</button>
              </form>
              <?php
                if(isset($_POST['ok'])){
                  $select_options=$_POST['select_options'];                  
                }
              ?>
            </div>
        </div>
        <div class="row">
          <div class="col-md-5">
            <?php
              if ( $select_options==1){
                  echo "<div class='input-group'>";
                    echo "<span class='input-group-addon'><i class='fa fa-barcode'></i></span>";
                    echo "<input type='text' class='form-control focus' placeholder='input SD ID Name' ng-model='input_sd_id'>";
                  echo "</div>";
                  
                  echo "<div class='input-group'>";
                    echo "<span class='input-group-addon'><i class='fa fa-link'></i></span>";
                    echo "<input type='text' class='form-control focus' placeholder='input SD URL here' ng-model='input_sd_url'>";
                  echo "</div>";
                  }
                  else if ( $select_options==2){
                    echo "<div class='input-group'>";
                      echo "<span class='input-group-addon'><i class='fa fa-barcode'></i></span>";
                      echo "<input type='text' class='form-control focus' placeholder='input HD ID Name' ng-model='input_hd_id'>";
                    echo "</div>";
                    
                    echo "<div class='input-group'>";
                      echo "<span class='input-group-addon'><i class='fa fa-link'></i></span>";
                      echo "<input type='text' class='form-control focus' placeholder='input HD URL here' ng-model='input_hd_url'>";
                    echo "</div>";
                  }
                  else if ( $select_options==3){
                    echo "<div class='input-group'>";
                      echo "<span class='input-group-addon'><i class='fa fa-barcode'></i></span>";
                      echo "<input type='text' class='form-control focus' placeholder='input SD ID Here' ng-model='input_shd_id_01'>";
                    echo "</div>";
                    
                    echo "<div class='input-group'>";
                      echo "<span class='input-group-addon'><i class='fa fa-link'></i></span>";
                      echo "<input type='text' class='form-control focus' placeholder='input SD URL here' ng-model='input_shd_url_01'>";
                    echo "</div>";

                    echo "<div class='input-group'>";
                      echo "<span class='input-group-addon'><i class='fa fa-barcode'></i></span>";
                      echo "<input type='text' class='form-control focus' placeholder='input HD ID Here' ng-model='input_shd_id_02'>";
                    echo "</div>";
                    
                    echo "<div class='input-group'>";
                      echo "<span class='input-group-addon'><i class='fa fa-link'></i></span>";
                      echo "<input type='text' class='form-control focus' placeholder='input HD URL here' ng-model='input_shd_url_02'>";
                    echo "</div>";
                  }
            ?>
          </div>
          <div class="col-md-7">
            <?php 
              if ( $select_options==1){
                $row=6;
                echo "<textarea class='form-control focus' rows='".$row."'>";
                echo "[b][color=#CC0000]JAV SD {{input_sd_id}} link Fshare.vn:[/color] [url={{input_sd_url}}]{{input_sd_url}}[/url][/b]\n";
                echo "[b][url=http://goo.gl/iz8wes][color=#ff0000]Xem Phim JAV Online trên YouTube (SD, HD, che, ko che)[/color][/url][/b]\n";
                echo "</textarea>";
              }
              else if ( $select_options==2){
                $row=6;                
                echo "<textarea class='form-control focus' rows='".$row."'>";
                echo "[b][color=#CC0000]JAV HD {{input_hd_id}} link Fshare.vn:[/color] [url={{input_hd_url}}]{{input_hd_url}}[/url][/b]\n";
                echo "[b][url=http://goo.gl/iz8wes][color=#ff0000]Xem Phim JAV Online trên YouTube (SD, HD, che, ko che)[/color][/url][/b]\n";
                echo "</textarea>";
              }
              else if ( $select_options==3){
                $row=8;                
                echo "<textarea class='form-control focus' rows='".$row."'>";
                echo "[b][color=#CC0000]JAV SD {{input_shd_id_01}} link Fshare.vn:[/color] [url={{input_shd_url_01}}]{{input_shd_url_01}}[/url][/b]\n";
                echo "[b][color=#CC0000]JAV HD {{input_shd_id_02}} link Fshare.vn:[/color] [url={{input_shd_url_02}}]{{input_shd_url_02}}[/url][/b]\n";
                echo "[b][url=http://goo.gl/iz8wes][color=#ff0000]Xem Phim JAV Online trên YouTube (SD, HD, che, ko che)[/color][/url][/b]\n";
                echo "</textarea>";
              }
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
