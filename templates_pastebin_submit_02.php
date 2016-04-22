<!DOCTYPE html>
<html lang="en" ng-app>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <link href="css/font-awesome.min.css" rel="stylesheet">


    <title>Templates :: JAVlibs - PasteBin Submit</title>

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
    <script src="js/angular-1.2.1.min.js"></script>
  </head>

  <body>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      

      <div class="panel panel-primary">
        <div class="panel-heading">Templates :: JAVlibs - PasteBin</div>
        <div class="panel-body">
              <div class="row">
                <div class="col-md-12">
                <form class="form-group" action="templates_pastebin_submit_02.php" method="post" role="form">
                  <div class="row">
                        <div class="col-md-3">
                          <div class="input-group">
                            <span class="input-group-addon">ID</span>
                            <input type="text" class="form-control focus" placeholder="ID here" name="id_name" id="id_name">
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                          </div>
                        </div>

                        <div class="col-md-8">
                          <div class="input-group">
                            <span class="input-group-addon">Title</span>
                            <input type="text" class="form-control focus" placeholder="Title here" name="title_name" id="title_name">
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                          </div>
                          
                        </div>
                        <button value="submit" name="ok" class="btn btn-sm btn-danger">Submit</button>
                  </div>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">RapidGator.net</span>
                            <input type="text" class="form-control focus" placeholder="RapidGator.net URL" name="rg_url" id="rg_url" >
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">Uploadable.ch</span>
                            <input type="text" class="form-control focus" placeholder="Uploadable.ch URL" name="uploadable_url" id="uploadable_url" >
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                          </div>                    
                        </div>

                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">File2Share.ch</span>
                            <input type="text" class="form-control focus" placeholder="File2Share.ch URL" name="f2s_url" id="f2s_url" >
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">Fshare</span>
                            <input type="text" class="form-control focus" placeholder="Fshare.vn URL" name="fshare_url" id="fshare_url">
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                          </div>                    
                        </div>

                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">Streamin URL</span>
                            <input type="text" class="form-control focus" placeholder="Streamin URL" name="stream_url" id="stream_url" >
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                          </div>
                        </div>

                        <div class="col-md-6">
                          <div class="input-group">
                            <span class="input-group-addon">Streamin Image</span>
                            <input type="text" class="form-control focus" placeholder="Streamin Image" name="stream_img" id="stream_img" >
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                          </div>                    
                        </div>
                                                                   
                  </div>                   
              </form>
            </div>
          </div>  

          <?php
            if(isset($_POST['ok'])){   
              $id=$_POST['id_name']; $title=$_POST['title_name'];
              $rapidgator=$_POST['rg_url']; $uploadable=$_POST['uploadable_url'];
              $file2share=$_POST['f2s_url']; $fshare=$_POST['fshare_url'];
              $stream_url=$_POST['stream_url']; $stream_img=$_POST['stream_img'];

              $pastebin_content=""; $javlib_content=""; $pastebin_submit_header="Free Download Hot New JAV Updates ".$id." || ";

              $rapidgator_pastebin_infos=""; $rapidgator_javlibs_infos="";
              if ($rapidgator!==""){
                  
                  $rapidgator_pastebin_infos = "\nLink Rapidgator.net: $rapidgator  \n";
                  $rapidgator_javlibs_infos= "\n[color=#ff0000][b]Link Rapidgator.net:[/b][/color] [b][url=".$rapidgator."]".$rapidgator."[/url][/b] \n";
                  $pastebin_submit_header=$pastebin_submit_header."Rapidgator.net ";

              }

              $uploadable_pastebin_infos=""; $uploadable_javlibs_infos="";
              if ($uploadable!==""){
                  
                  $uploadable_pastebin_infos = "\nLink Uploadable.ch: $uploadable  \n";
                  $uploadable_javlibs_infos= "\n[color=#ff0000][b]Link Uploadable.ch:[/b][/color] [b][url=".$uploadable."]".$uploadable."[/url][/b] \n";                  
                  $pastebin_submit_header=$pastebin_submit_header."Uploadable.ch ";
              }

              $file2share_pastebin_infos=""; $file2share_javlibs_infos="";
              if ($file2share!==""){
                  
                  $file2share_pastebin_infos = "\nLink File2Share.ch: $file2share  \n";
                  $file2share_javlibs_infos= "\n[color=#ff0000][b]Link File2Share.ch:[/b][/color] [b][url=".$file2share."]".$file2share."[/url][/b] \n";                  
                  $pastebin_submit_header=$pastebin_submit_header."File2Share.ch ";
              }

              $fshare_pastebin_infos=""; $fshare_javlibs_infos="";
              if ($fshare!==""){
                  
                  $fshare_pastebin_infos = "\nLink Fshare.vn: $fshare  \n";
                  $fshare_javlibs_infos= "\n[color=#ff0000][b]Link Fshare.vn:[/b][/color] [b][url=".$fshare."]".$fshare."[/url][/b] \n";                  
                  $pastebin_submit_header=$pastebin_submit_header."Fshare.vn ";
              }

              $stream_pastebin_infos=""; $stream_javlibs_infos="";
              if ($stream_url!=="" && $stream_img!==""){
                  
                  $string_rename=$stream_img;
                  $string_rename=str_replace("_t","",$string_rename);
                  $stream_img=$string_rename;
                  $stream_pastebin_infos = "\nLink View Online: $stream_url  \n";
                  $stream_javlibs_infos= "\n[color=#ff0000][b]Link View Online:[/b][/color] [b][url=".$stream_url."]".$stream_url."[/url][/b] \n [b][url=".$stream_url."][img]".$stream_img."[/img][/url][/b] \n";                  
                  $pastebin_submit_header=$pastebin_submit_header."Streamin.to ";
              }

              $pastebin_header="".$pastebin_submit_header."\n";
              $pastebin_header=$pastebin_header."@h@Xem JAV Online trên YouTube (SD,HD): http://goo.gl/iz8wes\n";
              $pastebin_header=$pastebin_header."@h@Hỗ trợ xem trên mọi thiết bị Di Động: SmartPhone, Tablet, Laptop, PC & Smart-TV. Hơn 10,000 phim JAV đang chờ bạn khám phá !!! Luôn Có JAV Mới, Cập Nhật Thường Xuyên !!!\n\n";
              $pastebin_header=$pastebin_header."@h@Download Phim Fshare.vn - Luôn cập nhật phim mới nhất mỗi ngày !!! \n";
              $pastebin_header=$pastebin_header."@h@JAV ID: $id \n";
              $pastebin_header=$pastebin_header."@h@Description: $title \n";

              $pastebin_footer="";
              $pastebin_footer=$pastebin_footer."\n@h@Xem JAV Online trên YouTube :: Ưu Điểm \n";
              $pastebin_footer=$pastebin_footer."------------------------------------------\n";
              $pastebin_footer=$pastebin_footer."+ Tốc độ xem phim Vượt Trội, Mạnh Nhất trong tất cả các kênh xem phim Online !!!\n";
              $pastebin_footer=$pastebin_footer."+ Số lượng phim Không Giới Hạn và đc Lưu Trữ Vĩnh Viễn !!!\n";
              $pastebin_footer=$pastebin_footer."+ Xem được trên mọi thiết bị Di Động: \n";
              $pastebin_footer=$pastebin_footer."       SmartPhone: iPhone, HTC, SamSung và bất kỳ mẫu SmartPhone có trên Thị Trường, \n";
              $pastebin_footer=$pastebin_footer."       Máy Tính Bảng - Tablet iPad, SamSung và bất kỳ mẫu Tablet có trên Thị Trường, \n";
              $pastebin_footer=$pastebin_footer."       Laptop, PC, Smart-TV ...\n";
              $pastebin_footer=$pastebin_footer."+ Xem được Mọi Lúc, Mọi Nơi, chỉ cần có kết nối Internet, Wifi hoặc 3G !!!\n";
              $pastebin_footer=$pastebin_footer."+ Chi Phí Cực Thấp, Giá Trị Cực Đỉnh !!!\n";
              $pastebin_footer=$pastebin_footer."+ Hỗ trợ mọi định dạng Videos: SD, full HD(720/1080) siêu nét\n";
              $pastebin_footer=$pastebin_footer."+ Cập Nhật phim Mới Nhất, ko cần phải Download, Xem Ngay !!!\n";
              $pastebin_footer=$pastebin_footer."+ Phim Mới luôn được Cập Nhật Mỗi Ngày !!! \n\n";
              $pastebin_footer=$pastebin_footer."------------------------------------------ \n\n";
              $pastebin_footer=$pastebin_footer."@h@Hãy cùng Trải Nghiệm trên kênh Miễn Phí : J4U\n";
              $pastebin_footer=$pastebin_footer."+ Trang Chủ: http://goo.gl/zy5w9Z\n";
              $pastebin_footer=$pastebin_footer."+ Hướng Dẫn Đăng Ký: http://goo.gl/xx2Ht3\n";
              $pastebin_footer=$pastebin_footer."+ Hướng dẫn Xem Phim trên các Thiết Bị Di Động: http://goo.gl/xx2Ht3\n";
              $pastebin_footer=$pastebin_footer."+ Danh Sách phim + Hình Ảnh chi tiết, Click vào xem ngay!!! : http://goo.gl/Eu33qj \n\n";
              $pastebin_footer=$pastebin_footer."------------------------------------------ \n\n";
              $pastebin_footer=$pastebin_footer."@h@Kênh Thu Phí J4New :: Số lượng phim cực 'Khủng', Cập Nhật Mỗi Ngày với Nhiều Kênh hơn cho bạn chọn lựa !!!\n";
              $pastebin_footer=$pastebin_footer."+ Kênh SD :: Playlist YouTube: http://goo.gl/OBuiEs ; Danh Sách Phim có Hình Ảnh, Click vào xem ngay: http://goo.gl/fpdnQA\n";
              $pastebin_footer=$pastebin_footer."+ Kênh HD :: Playlist YouTube: http://goo.gl/PAvLyN ; Danh Sách Phim có Hình Ảnh, Click vào xem ngay: http://goo.gl/oHHoU6\n";
              $pastebin_footer=$pastebin_footer."+ Kênh Âu-Mỹ :: Playlist YouTube: http://goo.gl/DfNIM2 ; Danh Sách Phim có Hình Ảnh, Click vào xem ngay: http://goo.gl/xE2rwg\n";
              $pastebin_footer=$pastebin_footer."+ Kênh Hoạt Hình :: Playlist YouTube: http://goo.gl/vbQhkI ; Danh Sách Phim có Hình Ảnh, Click vào xem ngay: http://goo.gl/QgT14E \n\n";
              $pastebin_footer=$pastebin_footer."@h@+ Hướng Dẫn Đăng Ký: http://goo.gl/R5xi3G\n";
              $pastebin_footer=$pastebin_footer."@h@+ Hướng dẫn Xem Phim trên các Thiết Bị Di Động: http://goo.gl/Ejc7FR\n";
              $pastebin_footer=$pastebin_footer."@h@+ Bảng Giá chi tiết: http://goo.gl/OG18X0\n \n";              


              $javlibs_header="";
              $javlibs_header="[color=#ff0000][b]Xem JAV Online trên YouTube (SD,HD)[/b][/color]: [b][url=http://goo.gl/iz8wes]http://goo.gl/iz8wes[/url][/b]\n";
              $javlibs_header=$javlibs_header."[b]JAV ID[/b]: [color=#0000ff][b]".$id."[/b][/color] \n";
              $javlibs_header=$javlibs_header."[b]Description[/b]: [color=#0000ff][b]".$title."[/b][/color] \n";

              $javlibs_footer="";

            }
          ?>

          <div class="row">
            <div class="col-md-6">
              <div class="row"><input type="text" class="form-control focus" placeholder="PasteBin Title Here" name="pastebin_submit_header" id="pastebin_submit_header" <?php
                echo "value='$pastebin_submit_header'";
              ?> ></div>
              <div class="row">
                <textarea class="form-control focus" rows="16" name="pastebin_submit"><?php 
                echo $pastebin_header;
                echo $rapidgator_pastebin_infos;
                echo $uploadable_pastebin_infos;
                echo $file2share_pastebin_infos;
                echo $fshare_pastebin_infos;
                echo $stream_pastebin_infos;
                echo $pastebin_footer;?></textarea>
              </div>
            </div>
            <div class="col-md-6">
              <textarea class="form-control focus" rows="18" name="javlibs_submit" id="javlibs_submit"><?php 
              echo $javlibs_header; 
              echo $rapidgator_javlibs_infos;
              echo $uploadable_javlibs_infos;
              echo $file2share_javlibs_infos;
              echo $fshare_javlibs_infos;
              echo $stream_javlibs_infos;?></textarea>                          
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
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
