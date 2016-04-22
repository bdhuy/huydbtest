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


    <title>FB Convert</title>

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
    <div class="on_top">
      <div class="row">
        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="link_url" ng-model="link_url" placeholder="This is Photos"></div>
        <input type="text" class="form-control inselect" id="exampleInputName2" placeholder="Link Here" value="https://drive.google.com/file/d/{{link_url}}/preview" >
        
      </div>
    </div>  

      <!-- Main component for a primary marketing message or call to action -->
      

      <div class="panel panel-primary">
        <div class="panel-heading">Panel heading without title</div>
        
        <div class="panel-body">              
              <div class="row">
                <div class="col-md-12">
                  <form class="form-group" action="fb_convert_angularjs.php" method="post" role="form">
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
                                $str_convert=$str_convert."+ Phim ID: ".$line."\n";
                                $str_convert=$str_convert."+ Tựa Phim: {{film_title_".$i."}}\n";
                                $str_convert=$str_convert."+ Diễn Viên: {{film_idols_".$i."}}\n";
                                $str_convert=$str_convert."+ Hình Ảnh: {{film_photo_".$i."}}\n";
                                $str_convert=$str_convert."+ Xem Online: {{film_code_".$i."}}\n";                                
                                $str_convert=$str_convert."\n\n";
                                 
                                    
                                    

                    ?>      
                              
                    <div class="panel panel-default no-margin">
                        <div class="panel-body no-padding-topbottom no-margin">
                            <div class="input-group input-group-sm col-sm-12 has-success">
                                <input type="text" class="form-control focus col-sm-5" id="inputSuccess1" name="film_id_<?php echo $i;?>" value="<?php echo $line; ?>">
                                <input type="text" class="form-control focus col-sm-5" id="inputSuccess1" name="film_idols_<?php echo $i;?>" ng-model="film_idols_<?php echo $i;?>" placeholder="This is Idol Name">
                            </div>
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="film_title_<?php echo $i;?>" ng-model="film_title_<?php echo $i;?>" placeholder="This is Title"></div>
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="film_photo_<?php echo $i;?>" ng-model="film_photo_<?php echo $i;?>" placeholder="This is Photos"></div>
                            <div class="input-group no-padding has-error input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputError1" name="film_code_<?php echo $i;?>" ng-model="film_code_<?php echo $i;?>" placeholder="View Online"></div>
                            
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
          $(".inselect").focus(function() {
                      var $this = $(this);
                      $this.select();                      

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
