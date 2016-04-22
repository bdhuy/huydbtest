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
            <div class="col-md-5">
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-barcode"></i></span>
                <input type="text" class="form-control focus" placeholder="input ID" ng-model="input_id">
              </div>
              <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-link"></i></span>
                <input type="text" class="form-control focus" placeholder="input URL" ng-model="input_url">
              </div>
            </div>
            <div class="col-md-7">
              <textarea class="form-control focus" style="overflow:hidden">Download JAV {{input_id}} Fshare.vn - Xem JAV Online trên YouTube</textarea>
              <?php
                echo "<textarea class='form-control focus' rows='20'>";
                echo "@h@Xem JAV Online trên YouTube (SD,HD): http://goo.gl/iz8wes\n";
                echo "@h@Hỗ trợ xem trên mọi thiết bị Di Động: SmartPhone, Tablet, Laptop, PC & Smart-TV. Hơn 10,000 phim JAV đang chờ bạn khám phá !!!\n\n";
                echo "@h@JAV {{input_id}} - Link Fshare.vn: {{input_url}} \n\n";
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
