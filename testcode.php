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


    <title>Test Code</title>

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
    <?php
        $fsfolder="";
        $fsfolder=$fsfolder."[color=lime][size=3][b]Folder Fshare JAV cho Anh Em[/b][/size][/color]\n";
        $fsfolder=$fsfolder."[code]\n";
        $fsfolder=$fsfolder."01/ Vol 01: https://www.fshare.vn/folder/XZGCEU7BE0\n";
        $fsfolder=$fsfolder."02/ Vol 02: https://www.fshare.vn/folder/5VWCW40JNM\n";
        $fsfolder=$fsfolder."03/ Vol 03: https://www.fshare.vn/folder/Q2292YWK1R\n";
        $fsfolder=$fsfolder."04/ Vol 04: https://www.fshare.vn/folder/T0WG5VM23T\n";
        $fsfolder=$fsfolder."05/ Vol 05: https://www.fshare.vn/folder/HFFUVBEG2J\n";
        $fsfolder=$fsfolder."06/ Vol 06: https://www.fshare.vn/folder/3ZJB2VAVN2\n";
        $fsfolder=$fsfolder."07/ Vol 07: https://www.fshare.vn/folder/Q199PJTMPL\n";
        $fsfolder=$fsfolder."08/ Vol 08: https://www.fshare.vn/folder/8DXKOLE9RD\n";
        $fsfolder=$fsfolder."09/ Vol 09: https://www.fshare.vn/folder/QOZO49PGX25B\n";
        $fsfolder=$fsfolder."10/ Vol 10: https://www.fshare.vn/folder/8CRI1CDI76XX\n";
        $fsfolder=$fsfolder."11/ Vol 11: https://www.fshare.vn/folder/LG9KUBRMHBRP\n";
        $fsfolder=$fsfolder."12/ Vol 12: https://www.fshare.vn/folder/1KKVF7HHR3UQ\n";
        $fsfolder=$fsfolder."13/ Vol 13: https://www.fshare.vn/folder/JE1P6HMFX6QZ\n";
        $fsfolder=$fsfolder."14/ Vol 14: https://www.fshare.vn/folder/7UGGMF2OYIGG\n";
        $fsfolder=$fsfolder."15/ Vol 15: https://www.fshare.vn/folder/MSVPP2YDLPHZ\n";
        $fsfolder=$fsfolder."16/ Vol 16: https://www.fshare.vn/folder/5WWLWGD4ARP1\n";
        $fsfolder=$fsfolder."17/ Vol 17: https://www.fshare.vn/folder/XJK132SJ1A27\n";
        $fsfolder=$fsfolder."18/ Vol 18: https://www.fshare.vn/folder/YCKKS3SEAZW9\n";
        $fsfolder=$fsfolder."19/ Vol 19: https://www.fshare.vn/folder/1V18RY7UGC6I\n";
        $fsfolder=$fsfolder."20/ Vol 20: https://www.fshare.vn/folder/36E7IOKJRX5M\n";
        $fsfolder=$fsfolder."21/ Vol 21: https://www.fshare.vn/folder/LN6NG4X1ZQEG\n";
        $fsfolder=$fsfolder."22/ Vol 22: https://www.fshare.vn/folder/DFTIUGFK84PW\n";
        $fsfolder=$fsfolder."23/ Vol 23: https://www.fshare.vn/folder/HAPDH1EMQGUK\n";
        $fsfolder=$fsfolder."24/ Vol 24: https://www.fshare.vn/folder/8RX5J2FPYH7B\n";
        $fsfolder=$fsfolder."25/ Vol 25: https://www.fshare.vn/folder/N7RZGZEOW9AC\n";
        $fsfolder=$fsfolder."26/ Vol 26: https://www.fshare.vn/folder/EMPDI62HWWKU\n";
        $fsfolder=$fsfolder."[/code]\n";
    ?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">This is Panel Header</div>                
            <div class="panel-body">
                <div class="row no-padding">
                    <div class="col-sm-4 no-padding">
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="phim_id" ng-model="phim_id" placeholder="This is ID"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="dien_vien" ng-model="dien_vien" placeholder="Dien Vien"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="phim_title" ng-model="phim_title" placeholder="Tựa Phim"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="phim_photo" ng-model="phim_photo" placeholder="Hình Ảnh"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="fshare_url" ng-model="fshare_url" placeholder="Link Fshare"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="drive_id" ng-model="drive_id" placeholder="Drive ID"></div>                        
                        <input type="text" class="form-control inselect" id="exampleInputName2" placeholder="Link Here" value="https://drive.google.com/file/d/{{drive_id}}/preview" >
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="adf_url" ng-model="adf_url" placeholder="ADF.ly"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="veno_url" ng-model="veno_url" placeholder="Veno Forum Link"></div>
                    </div>
                    <div class="col-sm-8 no-padding">
                        <div>
                          <!-- Nav tabs -->
                          <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#online" aria-controls="online" role="tab" data-toggle="tab">Online</a></li>
                            <li role="presentation"><a href="#download" aria-controls="download" role="tab" data-toggle="tab">Download</a></li>
                            <li role="presentation"><a href="#fb" aria-controls="fb" role="tab" data-toggle="tab">FB</a></li>
                            <li role="presentation"><a href="#lxus" aria-controls="lxus" role="tab" data-toggle="tab">LXUS</a></li>
                            <li role="presentation"><a href="#signal" aria-controls="signal" role="tab" data-toggle="tab">Signal</a></li>
                          </ul>

                          <!-- Tab panes -->
                          <div class="tab-content">
                            <div role="tabpanel" class="tab-pane active" id="online">
                                <?php 
                                    $str01="";
                                    $str01=$str01."[COLOR=yellow][SIZE=5][B] [URL=https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY][COLOR=YELLOW]JAV Fshare[/COLOR][/URL] :: {{phim_title}} :: {{dien_vien}} [/B][/SIZE][/COLOR]\n";
                                    $str01=$str01."------------------------------------------------------------------\n";
                                    $str01=$str01."[URL=https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY][IMG]{{phim_photo}}[/IMG][/URL]\n";
                                    $str01=$str01."[frame]https://drive.google.com/file/d/{{drive_id}}/preview[/frame]\n\n";
                                ?>
                                <textarea class="form-control inselect" rows="10"><?php echo $str01; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="download">
                                <?php
                                    $str02="";
                                    $str02=$str02."[COLOR=yellow][SIZE=5][B] [URL=https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY][COLOR=YELLOW]JAV Fshare[/COLOR][/URL] :: {{phim_title}} :: {{dien_vien}} [/B][/SIZE][/COLOR]\n";
                                    $str02=$str02."------------------------------------------------------------------\n";
                                    $str02=$str02."[URL=https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY][IMG]{{phim_photo}}[/IMG][/URL]\n";
                                    $str02=$str02."[CODE]{{fshare_url}}[/CODE]\n";
                                    $str02=$str02."[B]Xem Phim Online:[/B]: [URL]{{veno_url}}[/URL]\n\n";
                                    $str02=$str02.$fsfolder;
                                ?>
                                <textarea class="form-control inselect" rows="10"><?php echo $str02; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="fb">
                                <?php
                                    $str03="";
                                    $str03=$str03."- Phim ID: {{phim_id}}\n";
                                    $str03=$str03."- Tựa Phim: {{phim_title}}\n";
                                    $str03=$str03."- Diễn Viên: {{dien_vien}}\n";
                                    $str03=$str03."- Xem Online trên Diễn Đàn VenoJAV.net:\n";
                                    $str03=$str03."  + B1: Đăng Ký Tại Đây: http://venojav.net/topic/8026591\n";
                                    $str03=$str03."  + B2: Đăng Ký Thành Công thì Vô Đây Để Xem: {{veno_url}}\n";
                                    $str03=$str03."  + P/S: Ai đã có tài khoản Veno thì không cần làm B1\n";
                                    $str03=$str03."- Xem Trên Di Động, Tablet, iPad: {{adf_url}}\n";
                                    $str03=$str03."- Link Download Fshare: {{fshare_url}}\n";
                                    $str03=$str03."**************************************************\n";
                                    $str03=$str03."- Kho Phim JAV Tuyển Gái Đẹp Dáng Chuẩn Link FShare.vn - Cập Nhật Phim Mới Mỗi Ngày: http://adf.ly/1Mb3mU \n";
                                    $str03=$str03."- Xem JAV trên server Youtube Có Phí (>3000 phim, Che, Ko Che, Âu Mỹ, Hentai): http://adf.ly/1SHgaf \n";
                                    $str03=$str03."- Xem JAV trên server YouTube Miễn Phí tại đây (>100 Phim): http://adf.ly/1SHgfe \n";
                                ?>

                                <textarea class="form-control inselect" rows="10"><?php echo $str03; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="lxus">
                                <textarea class="form-control inselect" rows="10"><?php echo $str04; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="signal">
                                <?php                                   

                                    $str05=$str05.$fsfolder;
                                    $str05=$str05."[color=yellow][b]Xem Thêm Các Topic khác: [/b][/color]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=932533][color=DarkOrange][FSHARE||4SHARE||TENLUA]Tuyển Tập JAV Mới Nhất Cập Nhật Mỗi Ngày Hàng Đẹp Tuyển Chọn[/color][/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=917786][FShare] Nhật Ký JAV 2015 :: Tuyển Chọn và Cập Nhật Thường Xuyên JAV mới Xuất Bản !!![/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=920911][color=lime][JAV Fshare]Tuyển Tập JAV Không Che Uncensored Chuẩn Full HD Sắc Nét Từng Chi Tiết !![/color][/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=918851][color=cyan][JAV Fshare] Tuyển Tập Chuyên Đề Vếu Cam Sành Bưởi Ngọt Núm Hồng Đầy Đam Mê !![/color][/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=918792][color=Magenta][JAV Fshare] Tuyển Tập Phim Theo Tình Huống Hoàn Cảnh Có Nội Dung Độc Đáo !!![/color][/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=918887][color=DarkOrange][JAV Fshare] Tuyển Tập Giáo Viên-Học Sinh, Gái Văn Phòng, Tình Công Sở Hàng Đẹp !!![/url][/color]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=919011][color=yellow]Bán Point Điểm Thưởng Fshare Giá Rẻ Giao Dịch qua Thẻ Điện Thoại, PayPal, WMZ !!![/color][/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=922771][JAV Fshare] HNDS-028 Trò Chơi Đám Đông Cùng Rượt Đuổi Rồi Đè Em Ra Hiếp Tập Thể !!![/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=924526][color=lime][JAV Fshare] CMC-136 Bạo Lực Tra Tấn Dã Man Yếu Tim Chống Chỉ Định Không Nên Xem !!![/color][/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=927287][color=cyan][JAV Fshare]Thể Loại Lái Máy Bay Bà Già dành cho các Phi Công Trẻ triển vọng !!![/color][/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=928346][color=Magenta][JAV Fshare]Tuyển Tập Thể Loại Tra Tấn Bạo Lực Treo Ngược Cành Cây Yếu Tim Đừng Vào!![/color][/url]\n";
                                    $str05=$str05."- [url=http://thiendia.com/diendan/showthread.php?t=931422][color=DarkOrange][JAV Fshare]Tuyển Tập Gái Xinh Tươi Rạng Ngời Mà Không Chói Lóa !!![/color][/url]\n";
                                    $str05=$str05."- [b][url=http://thiendia.com/diendan/showpost.php?p=21675941&postcount=23][color=yellow][size=4]Hướng Dẫn Xem JAV Fshare Online Trực Tiếp, Không Cần Phải Download Phim Về Máy !!! Khỏi Lo Cháy Ổ Cứng !!! Mất thời gian chờ đợi ....[/size][/color][/url][/b]\n";                                    
                                ?>
                                <textarea class="form-control inselect" rows="10"><?php echo $str05; ?></textarea>
                            </div>
                          </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script language="JavaScript">
      $(document).ready(function() {
            

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
</body>
</html>