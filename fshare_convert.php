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


    <title>Fshare Convert</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-2.1.0.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.1/angular.min.js"></script>
  </head>

  <body>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      

      <div class="panel panel-primary">
        <div class="panel-heading">Panel heading without title</div>
        
        <div class="panel-body">
              
              <div class="row">
                <div class="col-md-12">

                  <?php
                      if(isset($_POST['ok'])){

                        $content = $_POST['txt_id'];
                        echo "Items: $content";
                        
                        $str_out="";

                         $array = preg_split('/(\r?\n)+/', $content);
                         $i=1;
                           foreach($array as $line)
                           {
                              $str_out=$str_out."[COLOR=yellow][SIZE=5][B] JAV Fshare :: $line [/B][/SIZE][/COLOR] \n";
                              $str_out=$str_out."------------------------------------------------------------------ \n";
                              $str_out=$str_out."[IMG][/IMG] \n\n";                                                  
                              $str_out=$str_out."[CODE][/CODE] \n\n\n";                              
                           }
                           

                           

                        //--------------------------------

                        
                      }
                    ?>

                <form class="form-group" action="fshare_convert.php" method="post" role="form">
                  <div class="row">
                    <div class="col-md-3">
                      <textarea class="form-control focus" rows="6" name="txt_id"></textarea>
                    </div>
                    <div class="col-md-9">
                      <textarea class="form-control focus" rows="6" name="txt_output"><?php echo $str_out; ?></textarea>
                    </div>
                  </div>
                  <div class="row">
                      <button type="submit" value="submit" name="ok" class="btn btn-sm btn-danger">Submit</button>
                  </div>                              
              </form>

            </div>
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
