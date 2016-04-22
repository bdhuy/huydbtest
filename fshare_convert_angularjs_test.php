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
    
    <script src="js/jquery_v.2.1.4.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
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

                <form class="form-group" action="fshare_convert_angularjs_test.php" method="post" role="form">
                  <div class="row">
                    <div class="col-md-3">
                      <textarea class="form-control focus" rows="6" name="txt_id"></textarea>
                    </div>
                    <div class="col-md-9">
                      <textarea class="form-control focus" rows="6" name="txt_output"><?php $str_out=""; echo $str_out; ?></textarea>
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
                      $title_url="https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY";
                      $img_url="https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY";
                      $fsfolder="";
                      $fsfolder=$fsfolder."\n[IMG]https://dl.dropboxusercontent.com/u/102673926/Banners/LXUS/Tuyen_2016/url.jpg[/IMG]\n";
                      $fsfolder=$fsfolder."[size=3][color=cyan][b]>> Folder Fshare & 4Share Phim JAV Tuyển Gái Đẹp Cập Nhật Mới (Che + Ko Che) <<[/b][/color][/size]\n";
                      $fsfolder=$fsfolder."------------------------------------------------------------------\n";
                      $fsfolder=$fsfolder."[code]\n";
                      $fsfolder=$fsfolder."- Folder Fshare\n";
                      $fsfolder=$fsfolder."++ Vol 01: https://www.fshare.vn/folder/XZGCEU7BE0\n";
                      $fsfolder=$fsfolder."++ Vol 02: https://www.fshare.vn/folder/5VWCW40JNM\n";
                      $fsfolder=$fsfolder."++ Vol 03: https://www.fshare.vn/folder/Q2292YWK1R\n";
                      $fsfolder=$fsfolder."++ Vol 04: https://www.fshare.vn/folder/T0WG5VM23T\n";
                      $fsfolder=$fsfolder."++ Vol 05: https://www.fshare.vn/folder/HFFUVBEG2J\n";
                      $fsfolder=$fsfolder."++ Vol 06: https://www.fshare.vn/folder/3ZJB2VAVN2\n";
                      $fsfolder=$fsfolder."++ Vol 07: https://www.fshare.vn/folder/Q199PJTMPL\n";
                      $fsfolder=$fsfolder."++ Vol 08: https://www.fshare.vn/folder/8DXKOLE9RD\n";
                      $fsfolder=$fsfolder."++ Vol 09: https://www.fshare.vn/folder/QOZO49PGX25B\n";
                      $fsfolder=$fsfolder."++ Vol 10: https://www.fshare.vn/folder/8CRI1CDI76XX\n";
                      $fsfolder=$fsfolder."++ Vol 11: https://www.fshare.vn/folder/LG9KUBRMHBRP\n";
                      $fsfolder=$fsfolder."++ Vol 12: https://www.fshare.vn/folder/1KKVF7HHR3UQ\n";
                      $fsfolder=$fsfolder."++ Vol 13: https://www.fshare.vn/folder/JE1P6HMFX6QZ\n";
                      $fsfolder=$fsfolder."++ Vol 14: https://www.fshare.vn/folder/7UGGMF2OYIGG\n";
                      $fsfolder=$fsfolder."++ Vol 15: https://www.fshare.vn/folder/MSVPP2YDLPHZ\n";
                      $fsfolder=$fsfolder."++ Vol 16: https://www.fshare.vn/folder/5WWLWGD4ARP1\n";
                      $fsfolder=$fsfolder."++ Vol 17: https://www.fshare.vn/folder/XJK132SJ1A27\n";
                      $fsfolder=$fsfolder."++ Vol 18: https://www.fshare.vn/folder/YCKKS3SEAZW9\n";
                      $fsfolder=$fsfolder."++ Vol 19: https://www.fshare.vn/folder/1V18RY7UGC6I\n";
                      $fsfolder=$fsfolder."++ Vol 20: https://www.fshare.vn/folder/36E7IOKJRX5M\n";
                      $fsfolder=$fsfolder."++ Vol 21: https://www.fshare.vn/folder/LN6NG4X1ZQEG\n";
                      $fsfolder=$fsfolder."++ Vol 22: https://www.fshare.vn/folder/DFTIUGFK84PW\n";
                      $fsfolder=$fsfolder."++ Vol 23: https://www.fshare.vn/folder/HAPDH1EMQGUK\n";
                      $fsfolder=$fsfolder."++ Vol 24: https://www.fshare.vn/folder/8RX5J2FPYH7B\n";
                      $fsfolder=$fsfolder."++ Vol 25: https://www.fshare.vn/folder/N7RZGZEOW9AC\n";
                      $fsfolder=$fsfolder."++ Vol 26: https://www.fshare.vn/folder/EMPDI62HWWKU\n";
                      $fsfolder=$fsfolder."++ Vol 27: https://www.fshare.vn/folder/JIQVXSWT4UOL\n";
                      $fsfolder=$fsfolder."++ Vol 28: https://www.fshare.vn/folder/RBZPDFSEAYPD --> New\n\n\n";
                      $fsfolder=$fsfolder."- Folder 4Share\n";
                      $fsfolder=$fsfolder."++ Vol 01: http://4share.vn/d/596a61606b6b686d\n";
                      $fsfolder=$fsfolder."++ Vol 02: http://4share.vn/d/3f0b0e0706090f08\n";
                      $fsfolder=$fsfolder."++ Vol 03: http://4share.vn/d/2216131a1b14121a\n";
                      $fsfolder=$fsfolder."++ Vol 04: http://4share.vn/d/3b0f0a03020d0909\n";
                      $fsfolder=$fsfolder."++ Vol 05: http://4share.vn/d/6753565f5e515553\n";
                      $fsfolder=$fsfolder."++ Vol 06: http://4share.vn/d/685c5950515e5a50\n";
                      $fsfolder=$fsfolder."++ Vol 07: http://4share.vn/d/5e6a696e686f676e\n";
                      $fsfolder=$fsfolder."++ Vol 08: http://4share.vn/d/3501020503040c07\n";
                      $fsfolder=$fsfolder."++ Vol 09: http://4share.vn/d/6b5f5c5b5d59585a\n";
                      $fsfolder=$fsfolder."++ Vol 10: http://4share.vn/d/5763606761656464\n";
                      $fsfolder=$fsfolder."++ Vol 11: http://4share.vn/d/5266656264606662\n";
                      $fsfolder=$fsfolder."++ Vol 12: http://4share.vn/d/6551525553575154\n";
                      $fsfolder=$fsfolder."++ Vol 13: http://4share.vn/d/390d0e090f0b0d0c\n";
                      $fsfolder=$fsfolder."++ Vol 14: http://4share.vn/d/3105020904030806\n";
                      $fsfolder=$fsfolder."++ Vol 15: http://4share.vn/d/6054545251555858\n";
                      $fsfolder=$fsfolder."++ Vol 16: http://4share.vn/d/2216151317171617\n";
                      $fsfolder=$fsfolder."++ Vol 17: http://4share.vn/d/3b0f0c09090a0c0b\n";
                      $fsfolder=$fsfolder."++ Vol 18: http://4share.vn/d/5165666362616862\n";
                      $fsfolder=$fsfolder."++ Vol 19: http://4share.vn/d/7d494a4f4a4b4545\n";
                      $fsfolder=$fsfolder."++ Vol 20: http://4share.vn/d/6652515451505f50 --> New\n";
                      $fsfolder=$fsfolder."[/code]\n";
                      $f140="";  $f240=""; $f041=""; $f141=""; $f242=""; $signal="";
                      
                           foreach($array as $line)
                           {
                                $i++;
                                $f140=$f140."[size=5][b][url=$title_url][color=#ff00ff]JAV Fshare.vn[/color][/url] :: [color=yellow]{{phim_title_".$i."}}[/color] :: [color=cyan]{{dien_vien_".$i."}}[/color][/b][/size]\n";
                                $f140=$f140."------------------------------------------------------------------\n";
                                $f140=$f140."[URL=$img_url][IMG]{{phim_photo_".$i."}}[/IMG][/URL]\n";
                                $f140=$f140."[CODE]{{fshare_first_".$i."}}[/CODE]\n";
                                $f140=$f140."\n\n";
                                

                                $f240=$f240."[size=5][b][url=$title_url][color=#ff00ff]JAV Fshare.vn[/color][/url] :: [color=yellow]{{phim_title_".$i."}}[/color] :: [color=cyan]{{dien_vien_".$i."}}[/color][/b][/size]\n";
                                $f240=$f240."------------------------------------------------------------------\n";
                                $f240=$f240."[URL=$img_url][IMG]{{phim_photo_".$i."}}[/IMG][/URL]\n";
                                $f240=$f240."\n[color=fuchsia][b]- Link Fshare:[/b][/color]\n";
                                $f240=$f240."[color=fuchsia][b]++ Part 01:[/b][/color] [CODE]{{fshare_first_".$i."}}[/CODE]\n";
                                $f240=$f240."[color=fuchsia][b]++ Part 02:[/b][/color] [CODE]{{fshare_second_".$i."}}[/CODE]\n";
                                $f240=$f240."\n\n";
                                
                                $f041=$f041."[size=5][b][url=$title_url][color=#ff00ff]JAV 4Share.vn[/color][/url] :: [color=yellow]{{phim_title_".$i."}}[/color] :: [color=cyan]{{dien_vien_".$i."}}[/color][/b][/size]\n";
                                $f041=$f041."------------------------------------------------------------------\n";
                                $f041=$f041."[URL=$img_url][IMG]{{phim_photo_".$i."}}[/IMG][/URL]\n";
                                $f041=$f041."[CODE]{{fourshare_first_".$i."}}[/CODE]\n";
                                $f041=$f041."\n\n";

                                $f141=$f141."[size=5][b][url=$title_url][color=#ff00ff]JAV Fshare.vn & 4Share.vn[/color][/url] :: [color=yellow]{{phim_title_".$i."}}[/color] :: [color=cyan]{{dien_vien_".$i."}}[/color][/b][/size]\n";
                                $f141=$f141."------------------------------------------------------------------\n";
                                $f141=$f141."[URL=$img_url][IMG]{{phim_photo_".$i."}}[/IMG][/URL]\n";
                                $f141=$f141."[size=4][color=lime][b]- Link Fshare:[/b][/color][/size][code]{{fshare_first_".$i."}}[/code]\n";
                                $f141=$f141."[size=4][color=#ff6600][b]- Link 4share:[/b][/color][/size][code]{{fourshare_first_".$i."}}[/code]\n";
                                $f141=$f141."\n\n";
                                

                                $f242=$f242."[size=5][b][url=$title_url][color=#ff00ff]JAV Fshare.vn & 4Share.vn[/color][/url] :: [color=yellow]{{phim_title_".$i."}}[/color] :: [color=cyan]{{dien_vien_".$i."}}[/color][/b][/size]\n";                                    
                                $f242=$f242."------------------------------------------------------------------\n";
                                $f242=$f242."[URL=$img_url][IMG]{{phim_photo_".$i."}}[/IMG][/URL]\n";
                                $f242=$f242."[size=4][color=lime][b]- Link Fshare:[/b][/color][/size][code]{{fshare_first_".$i."}}\n";
                                $f242=$f242."{{fshare_second_".$i."}}[/code]\n";
                                $f242=$f242."[size=4][color=#ff6600][b]- Link 4share:[/b][/color][/size][code]{{fourshare_first_".$i."}}\n";
                                $f242=$f242."{{fourshare_second_".$i."}}[/code]\n";
                                $f242=$f242."\n\n";

                                $signal=$signal."&lt;";
                                $signal=$signal."html";
                                $signal=$signal."&gt;";
                                $signal=$signal."more <img src='#' />";
                                
                    ?>      
                              
                    <div class="panel panel-default no-margin">
                        <div class="panel-body no-padding-topbottom no-margin">
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="phim_id_<?php echo $i;?>" value="<?php echo $line; ?>"></div>                            
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="phim_title_<?php echo $i;?>" ng-model="phim_title_<?php echo $i;?>" placeholder="Tựa Phim"></div>
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="phim_photo_<?php echo $i;?>" ng-model="phim_photo_<?php echo $i;?>" placeholder="This is Photos"></div>
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="dien_vien_<?php echo $i;?>" ng-model="dien_vien_<?php echo $i;?>" placeholder="Dien Vien"></div>                            
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="fshare_first_<?php echo $i;?>" ng-model="fshare_first_<?php echo $i;?>" placeholder="Link Fshare 01"></div>
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="fshare_second_<?php echo $i;?>" ng-model="fshare_second_<?php echo $i;?>" placeholder="Link Fshare 02"></div>
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="4share_first_<?php echo $i;?>" ng-model="fourshare_first_<?php echo $i;?>" placeholder="Link 4Share 01"></div>
                            <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control focus" id="inputWarning1" name="4share_second_<?php echo $i;?>" ng-model="fourshare_second_<?php echo $i;?>" placeholder="Link 4Share 02"></div>
                        </div>
                    </div>

                     <?php                                        
                           }
                        
                      }
                    ?>
                    
                    </div><!--End Left Column :: List Items-->

                    <div class="col-sm-8"><!--Begin Right Column :: TextArea-->
                      <div>
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#F140" aria-controls="online" role="tab" data-toggle="tab">F140</a></li>
                            <li role="presentation"><a href="#F240" aria-controls="download" role="tab" data-toggle="tab">F240</a></li>
                            <li role="presentation"><a href="#F041" aria-controls="fb" role="tab" data-toggle="tab">F041</a></li>
                            <li role="presentation"><a href="#F141" aria-controls="fb" role="tab" data-toggle="tab">F141</a></li>
                            <li role="presentation"><a href="#F242" aria-controls="phim" role="tab" data-toggle="tab">F242</a></li>
                            <li role="presentation"><a href="#lxus" aria-controls="lxus" role="tab" data-toggle="tab">LXUS</a></li>
                            <li role="presentation"><a href="#signal" aria-controls="signal" role="tab" data-toggle="tab">Signal</a></li>
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">

                            <div role="tabpanel" class="tab-pane active" id="F140">                                
                                <textarea class="form-control inselect" rows="<?php echo round($i*14);?>"><?php echo $f140.$fsfolder; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="F240">                                
                                <textarea class="form-control inselect" rows="<?php echo round($i*14);?>"><?php echo $f240.$fsfolder; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="F041">
                                <textarea class="form-control inselect" rows="<?php echo round($i*14);?>"><?php echo $f041.$fsfolder; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="F141">
                                <textarea class="form-control inselect" rows="<?php echo round($i*14);?>"><?php echo $f141.$fsfolder; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="F242">
                                <textarea class="form-control inselect" rows="<?php echo round($i*14);?>"><?php echo $f242.$fsfolder; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="lxus">
                                <textarea class="form-control inselect" rows="<?php echo round($i*14);?>"><?php echo $str04.$fsfolder; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="signal">
                                <textarea class="form-control inselect" rows="10"><?php echo $signal; ?></textarea>
                            </div>
                          </div>

                        </div>
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
