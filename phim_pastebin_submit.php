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


    <title>Phim :: PasteBin Submit</title>

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
                <form class="form-group" action="phim_pastebin_submit.php" method="post" role="form">
                  <div class="row">
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                            <input type="text" class="form-control focus" placeholder="tên Phim" ng-model="input_id" maxlength="60">
                          </div>
                        </div>

                        <div class="col-md-3">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-link"></i></span>
                            <input type="text" class="form-control focus" placeholder="link Fshare.vn" ng-model="input_url">                      
                          </div>                    
                        </div>

                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-comment-o"></i></span>
                            <input type="text" class="form-control focus" placeholder="Phụ Đề" ng-model="input_sub" >                      
                          </div>                    
                        </div>

                      <button type="submit" value="submit" name="ok" class="btn btn-sm btn-danger">Submit</button>
                      <div class="col-md-12">
                        <textarea class="form-control focus" name="txt_gioi_thieu" row='3' ng-model="txt_gioi_thieu"></textarea>
                      </div>
                  </div>  

                <textarea class="form-control focus" style="overflow:hidden" name="txt_title" maxlength="60">Download Phim Fshare {{input_id}}</textarea>
                <?php
                  echo "<textarea class='form-control focus' rows='16' name='txt_content'>";
                  echo "@h@Xem JAV Online trên YouTube (SD,HD): http://goo.gl/iz8wes\n";
                  echo "@h@Hỗ trợ xem trên mọi thiết bị Di Động: SmartPhone, Tablet, Laptop, PC & Smart-TV. Hơn 10,000 phim JAV đang chờ bạn khám phá !!! Luôn Có JAV Mới, Cập Nhật Thường Xuyên !!!\n\n";
                  echo "@h@Download Phim Fshare.vn - Luôn cập nhật phim mới nhất mỗi ngày !!! \n";
                  echo "@h@Tên Phim: {{input_id}} \n";
                  echo "Giới Thiệu: \n";
                  echo "{{txt_gioi_thieu}} \n";
                  echo "@h@Link Fshare.vn: {{input_url}} \n";
                  echo "@h@Link Phụ Đề Tiếng Việt: {{input_sub}} \n\n";
                  echo "@h@Xem JAV Online trên YouTube :: Ưu Điểm \n";
                  echo "------------------------------------------\n";
                  echo "+ Tốc độ xem phim Vượt Trội, Mạnh Nhất trong tất cả các kênh xem phim Online !!!\n";
                  echo "+ Số lượng phim Không Giới Hạn và đc Lưu Trữ Vĩnh Viễn !!!\n";
                  echo "+ Xem được trên mọi thiết bị Di Động: \n";
                  echo "       SmartPhone: iPhone, HTC, SamSung và bất kỳ mẫu SmartPhone có trên Thị Trường, \n";
                  echo "       Máy Tính Bảng - Tablet iPad, SamSung và bất kỳ mẫu Tablet có trên Thị Trường, \n";
                  echo "       Laptop, PC, Smart-TV ...\n";
                  echo "+ Xem được Mọi Lúc, Mọi Nơi, chỉ cần có kết nối Internet, Wifi hoặc 3G !!!\n";
                  echo "+ Chi Phí Cực Thấp, Giá Trị Cực Đỉnh !!!\n";
                  echo "+ Hỗ trợ mọi định dạng Videos: SD, full HD(720/1080) siêu nét\n";
                  echo "+ Cập Nhật phim Mới Nhất, ko cần phải Download, Xem Ngay !!!\n";
                  echo "+ Phim Mới luôn được Cập Nhật Mỗi Ngày !!! \n\n";
                  echo "------------------------------------------ \n\n";
                  echo "@h@Hãy cùng Trải Nghiệm trên kênh Miễn Phí : J4U\n";
                  echo "+ Trang Chủ: http://goo.gl/zy5w9Z\n";
                  echo "+ Hướng Dẫn Đăng Ký: http://goo.gl/xx2Ht3\n";
                  echo "+ Playlist trên YouTube: http://goo.gl/AOPrNE\n";
                  echo "+ Hướng dẫn Xem Phim trên các Thiết Bị Di Động: http://goo.gl/xx2Ht3\n";
                  echo "+ Danh Sách phim + Hình Ảnh chi tiết, Click vào xem ngay!!! : http://goo.gl/Eu33qj \n\n";
                  echo "------------------------------------------ \n\n";
                  echo "@h@Kênh Thu Phí J4New :: Số lượng phim cực 'Khủng', Cập Nhật Mỗi Ngày với Nhiều Kênh hơn cho bạn chọn lựa !!!\n";
                  echo "+ Kênh SD :: Playlist YouTube: http://goo.gl/OBuiEs ; Danh Sách Phim có Hình Ảnh, Click vào xem ngay: http://goo.gl/fpdnQA\n";
                  echo "+ Kênh HD :: Playlist YouTube: http://goo.gl/PAvLyN ; Danh Sách Phim có Hình Ảnh, Click vào xem ngay: http://goo.gl/oHHoU6\n";
                  echo "+ Kênh Âu-Mỹ :: Playlist YouTube: http://goo.gl/DfNIM2 ; Danh Sách Phim có Hình Ảnh, Click vào xem ngay: http://goo.gl/xE2rwg\n";
                  echo "+ Kênh Hoạt Hình :: Playlist YouTube: http://goo.gl/vbQhkI ; Danh Sách Phim có Hình Ảnh, Click vào xem ngay: http://goo.gl/QgT14E \n\n";
                  echo "@h@+ Hướng Dẫn Đăng Ký: http://goo.gl/R5xi3G\n";
                  echo "@h@+ Hướng dẫn Xem Phim trên các Thiết Bị Di Động: http://goo.gl/Ejc7FR\n";
                  echo "@h@+ Bảng Giá chi tiết: http://goo.gl/OG18X0\n";
                  echo "\n";                
                  echo "</textarea>";
                ?>                              
              </form>
            </div>
          </div>  
              
            <?php
                if(isset($_POST['ok'])){                  
                  $txt_title=$_POST['txt_title'];
                  $txt_content=$_POST['txt_content'];

                  //--------------------------------

                  $api_dev_key = '251fb03affa11fb5ca4fb4ee7403272c'; 
                  $api_user_name = 'jav_fshare_vn'; 
                  $api_user_password = 'real1906'; 
                  $api_user_name = urlencode($api_user_name); 
                  $api_user_password = urlencode($api_user_password); 
                  $url = 'http://pastebin.com/api/api_login.php'; 
                  $ch = curl_init($url); 
                  curl_setopt($ch, CURLOPT_POST, true); 
                  curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_dev_key='.$api_dev_key.'&api_user_name='.$api_user_name.'&api_user_password='.$api_user_password.''); 
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
                  curl_setopt($ch, CURLOPT_VERBOSE, 1); 
                  curl_setopt($ch, CURLOPT_NOBODY, 0); 
                  $u_session = curl_exec($ch);

                  //--------------------------------

                  $api_dev_key = '251fb03affa11fb5ca4fb4ee7403272c'; // your api_developer_key 
                  $api_paste_code = $txt_content; // your paste text 
                  $api_paste_private = '0'; // 0=public 1=unlisted 2=private 
                  $api_paste_name = $txt_title; // name or title of your paste 
                  $api_paste_expire_date = 'N'; 
                  $api_paste_format = 'text'; 
                  $api_user_key = $u_session; // if an invalid api_user_key or no key is used, the paste will be create as a guest 
                  $api_paste_name = urlencode($api_paste_name); 
                  $api_paste_code = urlencode($api_paste_code); 
                  $url = 'http://pastebin.com/api/api_post.php'; 
                  $ch = curl_init($url); 
                  curl_setopt($ch, CURLOPT_POST, true); 
                  curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=paste&api_user_key='.$api_user_key.'&api_paste_private='.$api_paste_private.'&api_paste_name='.$api_paste_name.'&api_paste_expire_date='.$api_paste_expire_date.'&api_paste_format='.$api_paste_format.'&api_dev_key='.$api_dev_key.'&api_paste_code='.$api_paste_code.''); 
                  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
                  curl_setopt($ch, CURLOPT_VERBOSE, 1); 
                  curl_setopt($ch, CURLOPT_NOBODY, 0); 
                  $response = curl_exec($ch); 
                  echo $response;
                }
              ?>
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
