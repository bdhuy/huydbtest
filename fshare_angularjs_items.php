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
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/normalize.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    
    <link href="style.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery_v.2.1.4.min.js"></script>
    <script src="js/angular.min.js"></script>
  </head>

  <body>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      

      <div class="panel panel-primary">
        <div class="panel-heading">Panel heading without title</div>
        
        <div class="panel-body">
              
              <div class="row">
                <div class="col-md-12">

                  

                <form class="form-group" action="fshare_angularjs_items.php" method="post" role="form">
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
              
              <?php
                      if(isset($_POST['ok'])){

                        $content = $_POST['txt_id'];
                        echo "Items: $content";
                        
                        $str_out=" ";
                        $str_convert="";

                         $array = preg_split('/(\r?\n)+/', $content);
                         $i=0;
                    ?>
                    <div class="row no-padding">
                    <div class="col-sm-4 no-padding"><!--Begin Left Column :: List Items-->
                    <?php
                        
                           foreach($array as $line)
                           {
                                $i++;
                                $str_convert=$str_convert."[COLOR=yellow][SIZE=5][B] JAV Fshare :: ".$line." {{film_idols_".$i."}}[/B][/SIZE][/COLOR]\n";
                                $str_convert=$str_convert."------------------------------------------------------------------\n";
                                $str_convert=$str_convert."[IMG]{{film_photo_".$i."}}[/IMG]\n";
                                $str_convert=$str_convert."[CODE]{{film_code_".$i."}}[/CODE]\n";
                                $str_convert=$str_convert."\n\n";
                                 
                                    
                                    

                    ?>      
                              
                    <div class="panel panel-default no-margin">
                        
                            <div class="input-group input-group-sm col-sm-12 has-success">
                                <input type="text" class="form-control focus col-sm-5" id="inputSuccess1" name="film_id_<?php echo $i;?>" value="<?php echo $line; ?>">
                                
                            </div>
                        
                    </div>
                        
    
                        
                    
                    <?php                                        
                           }
                        
                      }
                    ?>
                    </div><!--End Left Column :: List Items-->
                    <div class="col-sm-8"><!--Begin Right Column :: TextArea-->
                        <textarea class="form-control" rows="<?php echo $i*5;?>"><?php echo $str_convert;?></textarea>
                    </div><!--End Right Column :: TextArea-->
                  </div>
                  
              

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
                        
                        $this.after("<span class='input-group-addon remove'><i class='fa fa-check'></i></span>");
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

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    
  </body>
</html>
