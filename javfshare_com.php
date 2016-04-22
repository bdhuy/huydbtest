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


    <title>JAVlibs Generation :: PHP</title>

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
        $title_url="https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY";
        $img_pr="https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY";
        $pr="";
        $pr=$pr."[img]https://dl.dropboxusercontent.com/u/102673926/Banners/javlibs/javlib01.jpg[/img]\n\n";
        $pr=$pr."[color=#FF0080][b]++ Kho Phim JAV [color=red]'Khủng Bố'[/color] nhất [color=#2E2EFE]Hệ Mặt Trời[/color], Tuyển Tập Gái Đẹp, Dáng Chuẩn, Vếu Bự, link [color=#088A08]Fshare.vn & 4Share.vn[/color] :[/b][/color] [b][url]http://bit.ly/javfshare[/url][/b]\n";
        $pr=$pr."[color=#2E2EFE][b]++ Xem Phim JAV trên [color=#FF0080]SmartPhone[/color] của bạn bằng [color=red]App Google[/color], không quảng cáo, cập nhật mới mỗi ngày:[/b][/color] [b][url]http://bit.ly/xemphim3x[/url][/b]\n";

        $fsfolder="";
        $fsfolder=$fsfolder."[color=red][b]>> Folder Fshare JAV Tuyển Tập Phim JAV << [/b][/color]\n";        
        $fsfolder=$fsfolder."[color=#0062c3][b]01/ Vol 01:[/b][/color] [url]https://www.fshare.vn/folder/XZGCEU7BE0[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]02/ Vol 02:[/b][/color] [url]https://www.fshare.vn/folder/5VWCW40JNM[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]03/ Vol 03:[/b][/color] [url]https://www.fshare.vn/folder/Q2292YWK1R[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]04/ Vol 04:[/b][/color] [url]https://www.fshare.vn/folder/T0WG5VM23T[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]05/ Vol 05:[/b][/color] [url]https://www.fshare.vn/folder/HFFUVBEG2J[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]06/ Vol 06:[/b][/color] [url]https://www.fshare.vn/folder/3ZJB2VAVN2[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]07/ Vol 07:[/b][/color] [url]https://www.fshare.vn/folder/Q199PJTMPL[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]08/ Vol 08:[/b][/color] [url]https://www.fshare.vn/folder/8DXKOLE9RD[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]09/ Vol 09:[/b][/color] [url]https://www.fshare.vn/folder/QOZO49PGX25B[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]10/ Vol 10:[/b][/color] [url]https://www.fshare.vn/folder/8CRI1CDI76XX[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]11/ Vol 11:[/b][/color] [url]https://www.fshare.vn/folder/LG9KUBRMHBRP[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]12/ Vol 12:[/b][/color] [url]https://www.fshare.vn/folder/1KKVF7HHR3UQ[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]13/ Vol 13:[/b][/color] [url]https://www.fshare.vn/folder/JE1P6HMFX6QZ[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]14/ Vol 14:[/b][/color] [url]https://www.fshare.vn/folder/7UGGMF2OYIGG[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]15/ Vol 15:[/b][/color] [url]https://www.fshare.vn/folder/MSVPP2YDLPHZ[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]16/ Vol 16:[/b][/color] [url]https://www.fshare.vn/folder/5WWLWGD4ARP1[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]17/ Vol 17:[/b][/color] [url]https://www.fshare.vn/folder/XJK132SJ1A27[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]18/ Vol 18:[/b][/color] [url]https://www.fshare.vn/folder/YCKKS3SEAZW9[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]19/ Vol 19:[/b][/color] [url]https://www.fshare.vn/folder/1V18RY7UGC6I[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]20/ Vol 20:[/b][/color] [url]https://www.fshare.vn/folder/36E7IOKJRX5M[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]21/ Vol 21:[/b][/color] [url]https://www.fshare.vn/folder/LN6NG4X1ZQEG[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]22/ Vol 22:[/b][/color] [url]https://www.fshare.vn/folder/DFTIUGFK84PW[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]23/ Vol 23:[/b][/color] [url]https://www.fshare.vn/folder/HAPDH1EMQGUK[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]24/ Vol 24:[/b][/color] [url]https://www.fshare.vn/folder/8RX5J2FPYH7B[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]25/ Vol 25:[/b][/color] [url]https://www.fshare.vn/folder/N7RZGZEOW9AC[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]26/ Vol 26:[/b][/color] [url]https://www.fshare.vn/folder/EMPDI62HWWKU[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]27/ Vol 27:[/b][/color] [url]https://www.fshare.vn/folder/JIQVXSWT4UOL[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]28/ Vol 28:[/b][/color] [url]https://www.fshare.vn/folder/RBZPDFSEAYPD[/url]\n";
        $fsfolder=$fsfolder."[color=#0062c3][b]29/ Vol 29:[/b][/color] [url]https://www.fshare.vn/folder/RFLG8HEC6K19[/url]\n";
        $fourfolder="";
        $fourfolder=$fourfolder."[color=red][b]>> Folder 4share JAV Tuyển Tập Phim JAV << [/b][/color]\n";        
        $fourfolder=$fourfolder."[color=#0062c3][b]01/ Vol 01:[/b][/color] [url]http://4share.vn/d/596a61606b6b686d[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]02/ Vol 02:[/b][/color] [url]http://4share.vn/d/3f0b0e0706090f08[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]03/ Vol 03:[/b][/color] [url]http://4share.vn/d/2216131a1b14121a[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]04/ Vol 04:[/b][/color] [url]http://4share.vn/d/3b0f0a03020d0909[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]05/ Vol 05:[/b][/color] [url]http://4share.vn/d/6753565f5e515553[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]06/ Vol 06:[/b][/color] [url]http://4share.vn/d/685c5950515e5a50[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]07/ Vol 07:[/b][/color] [url]http://4share.vn/d/5e6a696e686f676e[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]08/ Vol 08:[/b][/color] [url]http://4share.vn/d/3501020503040c07[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]09/ Vol 09:[/b][/color] [url]http://4share.vn/d/6b5f5c5b5d59585a[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]10/ Vol 10:[/b][/color] [url]http://4share.vn/d/5763606761656464[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]11/ Vol 11:[/b][/color] [url]http://4share.vn/d/5266656264606662[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]12/ Vol 12:[/b][/color] [url]http://4share.vn/d/6551525553575154[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]13/ Vol 13:[/b][/color] [url]http://4share.vn/d/390d0e090f0b0d0c[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]14/ Vol 14:[/b][/color] [url]http://4share.vn/d/3105020904030806[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]15/ Vol 15:[/b][/color] [url]http://4share.vn/d/6054545251555858[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]16/ Vol 16:[/b][/color] [url]http://4share.vn/d/2216151317171617[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]17/ Vol 17:[/b][/color] [url]http://4share.vn/d/3b0f0c09090a0c0b[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]18/ Vol 18:[/b][/color] [url]http://4share.vn/d/5165666362616862[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]19/ Vol 19:[/b][/color] [url]http://4share.vn/d/7d494a4f4a4b4545[/url]\n";
        $fourfolder=$fourfolder."[color=#0062c3][b]20/ Vol 20:[/b][/color] [url]http://4share.vn/d/6652515451505f50[/url]\n";        
        
    ?>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">Code Generations</div>                
            <div class="panel-body">
                <div class="row no-padding">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#F140" aria-controls="online" role="tab" data-toggle="tab">F140</a></li>
                        <li role="presentation"><a href="#F240" aria-controls="download" role="tab" data-toggle="tab">F240</a></li>
                        <li role="presentation"><a href="#F141" aria-controls="fb" role="tab" data-toggle="tab">F141</a></li>
                        <li role="presentation"><a href="#F041" aria-controls="fb" role="tab" data-toggle="tab">F041</a></li>
                        <li role="presentation"><a href="#F242" aria-controls="phim" role="tab" data-toggle="tab">F242</a></li>
                        <li role="presentation"><a href="#HF140" aria-controls="lxus" role="tab" data-toggle="tab">HF140</a></li>
                        <li role="presentation"><a href="#HF240" aria-controls="signal" role="tab" data-toggle="tab">HF240</a></li>
                        <li role="presentation"><a href="#HF141" aria-controls="signal" role="tab" data-toggle="tab">HF141</a></li>
                        <li role="presentation"><a href="#HF242" aria-controls="signal" role="tab" data-toggle="tab">HF242</a></li>
                        <li role="presentation"><a href="#FB" aria-controls="signal" role="tab" data-toggle="tab">FB</a></li>
                    </ul>
                </div>
                <div class="row no-padding">
                    <div class="col-sm-4 no-padding">
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="phim_id" ng-model="phim_id" placeholder="This is ID"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="phim_title" ng-model="phim_title" placeholder="Tựa Phim"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="phim_photo" ng-model="phim_photo" placeholder="Hình Ảnh"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="dien_vien" ng-model="dien_vien" placeholder="Dien Vien"></div>                        
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="fshare_first" ng-model="fshare_first" placeholder="Link Fshare 01"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="fshare_second" ng-model="fshare_second" placeholder="Link Fshare 02"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="4share_first" ng-model="fourshare_first" placeholder="Link 4Share 01"></div>
                        <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="4share_second" ng-model="fourshare_second" placeholder="Link 4Share 02"></div>
                    </div>
                    <div class="col-sm-8 no-padding">
                        <div>
                          <!-- Tab panes -->
                          <div class="tab-content">
                            
                            <div role="tabpanel" class="tab-pane active" id="F140">
                                <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="fs_input" value="Phim JAV Fshare.vn - {{phim_title}}::{{dien_vien}}" placeholder="This is ID" /></div>
                                <?php 
                                    $str01="";
                                    $str01=$str01."[color=red][b] [url=$title_url][color=#490091]JAV Fshare[/color][/url] :: {{phim_title}} :: [color=green]{{dien_vien}}[/color] [/b][/color]\n";
                                    $str01=$str01."[url=$img_pr][img]{{phim_photo}}[/img][/url]\n";
                                    $str01=$str01."\n[color=fuchsia][b]- Link Fshare:[/b][/color] [url]{{fshare_first}}[/url]\n";
                                    $str01=$str01."------------------------------------------------------------------\n";
                                    $str01=$str01.$pr."\n";
                                    $str01=$str01.$fsfolder.$fourfolder."\n";
                                ?>
                                <textarea class="form-control inselect" rows="10"><?php echo $str01; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="F240">
                                <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="fs_input" value="Phim JAV Fshare.vn - {{phim_title}}::{{dien_vien}}" placeholder="This is ID" /></div>
                                <?php
                                    $str02="";
                                    $str02=$str02."[color=red][b] [url=$title_url][color=#490091]JAV Fshare[/color][/url] :: {{phim_title}} :: [color=green]{{dien_vien}}[/color] [/b][/color]\n";
                                    $str02=$str02."[url=$img_pr][img]{{phim_photo}}[/img][/url]\n";
                                    $str02=$str02."\n[color=fuchsia][b]- Link Fshare:[/b][/color]\n";
                                    $str02=$str02."[color=fuchsia][b]++ Part 01:[/b][/color] [url]{{fshare_first}}[/url]\n";
                                    $str02=$str02."[color=fuchsia][b]++ Part 02:[/b][/color] [url]{{fshare_second}}[/url]\n";
                                    $str02=$str02."------------------------------------------------------------------\n\n";
                                    $str02=$str02.$pr."\n";
                                    $str02=$str02.$fsfolder."\n";
                                ?>
                                <textarea class="form-control inselect" rows="10"><?php echo $str02; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="F141">
                                <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="fs_input" value="Phim JAV Fshare.vn & 4Share.vn - {{phim_title}}::{{dien_vien}}" placeholder="This is ID" /></div>
                                <?php
                                    $str03="";                                    
                                    $str03=$str03."[color=red][b] [url=$title_url][color=#490091]Phim JAV Fshare.vn & 4Share.vn[/color][/url] :: {{phim_title}} :: [color=green]{{dien_vien}}[/color] [/b][/color]\n";
                                    $str03=$str03."[url=$img_pr][img]{{phim_photo}}[/img][/url]\n";
                                    $str03=$str03."\n[color=fuchsia][b]- Link Fshare:[/b][/color] [url]{{fshare_first}}[/url]\n";
                                    $str03=$str03."[color=purple][b]- Link 4share:[/b][/color] [url]{{fourshare_first}}[/url]\n";                                    
                                    $str03=$str03."------------------------------------------------------------------\n\n";
                                    $str03=$str03.$pr."\n";
                                    $str03=$str03.$fsfolder."\n";
                                ?>

                                <textarea class="form-control inselect" rows="10"><?php echo $str03; ?></textarea>
                            </div>

                            <div role="tabpanel" class="tab-pane" id="F041">
                                <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="fourshare_input" value="Phim JAV 4Share.vn {{phim_title}}::{{dien_vien}}" placeholder="This is ID" /></div>
                                <?php
                                    $str041="";                                    
                                    $str041=$str041."[color=red][b] [url=$title_url][color=#490091]Phim JAV 4share.vn[/color][/url] :: {{phim_title}} :: [color=green]{{dien_vien}}[/color] [/b][/color]\n";
                                    $str041=$str041."[url=$img_pr][img]{{phim_photo}}[/img][/url]\n";
                                    $str041=$str041."[color=purple][b]- Link 4share:[/b][/color] [url]{{fourshare_first}}[/url]\n";                                    
                                    $str041=$str041."------------------------------------------------------------------\n\n";
                                    $str041=$str041.$pr."\n";
                                    $str041=$str041.$fsfolder."\n";
                                ?>

                                <textarea class="form-control inselect" rows="10"><?php echo $str041; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="F242">
                                <div class="input-group no-padding has-warning input-group-sm col-sm-12"><input type="text" class="form-control inselect" id="inputWarning1" name="fs_input" value="Phim JAV Fshare.vn & 4Share.vn - {{phim_title}}::{{dien_vien}}" placeholder="This is ID" /></div>                                
                                <?php
                                    $str04="";
                                    $str04=$str04."[color=red][b] [url=$title_url][color=#490091]JAV Fshare[/color][/url] :: {{phim_title}} :: [color=green]{{dien_vien}}[/color] [/b][/color]\n";
                                    $str04=$str04."[url=$img_pr][img]{{phim_photo}}[/img][/url]\n";
                                    $str04=$str04."\n[color=fuchsia][b]- Link Fshare:[/b][/color]\n";
                                    $str04=$str04."[color=fuchsia][b]++ Part 01:[/b][/color] [url]{{fshare_first}}[/url]\n";
                                    $str04=$str04."[color=fuchsia][b]++ Part 02:[/b][/color] [url]{{fshare_second}}[/url]\n";
                                    $str04=$str04."[color=purple][b]- Link 4share:[/b][/color]\n";
                                    $str04=$str04."[color=purple][b]++ Part 01:[/b][/color] [url]{{fourshare_first}}[/url]\n";
                                    $str04=$str04."[color=purple][b]++ Part 02:[/b][/color] [url]{{fourshare_second}}[/url]\n";
                                    $str04=$str04."------------------------------------------------------------------\n\n";
                                    $str04=$str04.$pr."\n";
                                    $str04=$str04.$fsfolder."\n";
                                ?>
                                <textarea class="form-control inselect" rows="10"><?php echo $str04; ?></textarea>
                            </div>
                            <?php

                                
                                $hlink="";
                                $hlink=$hlink."<p style='color:blue;font-weight:bold;'>Folder Phim JAV Fshare , 4Share Cập Nhật Thường Xuyên</p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 01: <a href='https://www.fshare.vn/folder/XZGCEU7BE0'>https://www.fshare.vn/folder/XZGCEU7BE0</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 02: <a href='https://www.fshare.vn/folder/5VWCW40JNM'>https://www.fshare.vn/folder/5VWCW40JNM</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 03: <a href='https://www.fshare.vn/folder/Q2292YWK1R'>https://www.fshare.vn/folder/Q2292YWK1R</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 04: <a href='https://www.fshare.vn/folder/T0WG5VM23T'>https://www.fshare.vn/folder/T0WG5VM23T</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 05: <a href='https://www.fshare.vn/folder/HFFUVBEG2J'>https://www.fshare.vn/folder/HFFUVBEG2J</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 06: <a href='https://www.fshare.vn/folder/3ZJB2VAVN2'>https://www.fshare.vn/folder/3ZJB2VAVN2</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 07: <a href='https://www.fshare.vn/folder/Q199PJTMPL'>https://www.fshare.vn/folder/Q199PJTMPL</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 08: <a href='https://www.fshare.vn/folder/8DXKOLE9RD'>https://www.fshare.vn/folder/8DXKOLE9RD</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 09: <a href='https://www.fshare.vn/folder/QOZO49PGX25B'>https://www.fshare.vn/folder/QOZO49PGX25B</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 10: <a href='https://www.fshare.vn/folder/8CRI1CDI76XX'>https://www.fshare.vn/folder/8CRI1CDI76XX</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 11: <a href='https://www.fshare.vn/folder/LG9KUBRMHBRP'>https://www.fshare.vn/folder/LG9KUBRMHBRP</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 12: <a href='https://www.fshare.vn/folder/1KKVF7HHR3UQ'>https://www.fshare.vn/folder/1KKVF7HHR3UQ</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 13: <a href='https://www.fshare.vn/folder/JE1P6HMFX6QZ'>https://www.fshare.vn/folder/JE1P6HMFX6QZ</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 14: <a href='https://www.fshare.vn/folder/7UGGMF2OYIGG'>https://www.fshare.vn/folder/7UGGMF2OYIGG</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 15: <a href='https://www.fshare.vn/folder/MSVPP2YDLPHZ'>https://www.fshare.vn/folder/MSVPP2YDLPHZ</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 16: <a href='https://www.fshare.vn/folder/5WWLWGD4ARP1'>https://www.fshare.vn/folder/5WWLWGD4ARP1</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 17: <a href='https://www.fshare.vn/folder/XJK132SJ1A27'>https://www.fshare.vn/folder/XJK132SJ1A27</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 18: <a href='https://www.fshare.vn/folder/YCKKS3SEAZW9'>https://www.fshare.vn/folder/YCKKS3SEAZW9</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 19: <a href='https://www.fshare.vn/folder/1V18RY7UGC6I'>https://www.fshare.vn/folder/1V18RY7UGC6I</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 20: <a href='https://www.fshare.vn/folder/36E7IOKJRX5M'>https://www.fshare.vn/folder/36E7IOKJRX5M</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 21: <a href='https://www.fshare.vn/folder/LN6NG4X1ZQEG'>https://www.fshare.vn/folder/LN6NG4X1ZQEG</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 22: <a href='https://www.fshare.vn/folder/DFTIUGFK84PW'>https://www.fshare.vn/folder/DFTIUGFK84PW</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 23: <a href='https://www.fshare.vn/folder/HAPDH1EMQGUK'>https://www.fshare.vn/folder/HAPDH1EMQGUK</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 24: <a href='https://www.fshare.vn/folder/8RX5J2FPYH7B'>https://www.fshare.vn/folder/8RX5J2FPYH7B</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 25: <a href='https://www.fshare.vn/folder/N7RZGZEOW9AC'>https://www.fshare.vn/folder/N7RZGZEOW9AC</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 26: <a href='https://www.fshare.vn/folder/EMPDI62HWWKU'>https://www.fshare.vn/folder/EMPDI62HWWKU</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 27: <a href='https://www.fshare.vn/folder/JIQVXSWT4UOL'>https://www.fshare.vn/folder/JIQVXSWT4UOL</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 28: <a href='https://www.fshare.vn/folder/RBZPDFSEAYPD'>https://www.fshare.vn/folder/RBZPDFSEAYPD</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:red;margin-bottom:-10px;'>Folder Fshare Vol 29: <a href='https://www.fshare.vn/folder/RFLG8HEC6K19'>https://www.fshare.vn/folder/RFLG8HEC6K19</a></p>\n";                                
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 01: <a href='http://4share.vn/d/596a61606b6b686d'>http://4share.vn/d/596a61606b6b686d</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 02: <a href='http://4share.vn/d/3f0b0e0706090f08'>http://4share.vn/d/3f0b0e0706090f08</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 03: <a href='http://4share.vn/d/2216131a1b14121a'>http://4share.vn/d/2216131a1b14121a</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 04: <a href='http://4share.vn/d/3b0f0a03020d0909'>http://4share.vn/d/3b0f0a03020d0909</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 05: <a href='http://4share.vn/d/6753565f5e515553'>http://4share.vn/d/6753565f5e515553</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 06: <a href='http://4share.vn/d/685c5950515e5a50'>http://4share.vn/d/685c5950515e5a50</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 07: <a href='http://4share.vn/d/5e6a696e686f676e'>http://4share.vn/d/5e6a696e686f676e</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 08: <a href='http://4share.vn/d/3501020503040c07'>http://4share.vn/d/3501020503040c07</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 09: <a href='http://4share.vn/d/6b5f5c5b5d59585a'>http://4share.vn/d/6b5f5c5b5d59585a</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 10: <a href='http://4share.vn/d/5763606761656464'>http://4share.vn/d/5763606761656464</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 11: <a href='http://4share.vn/d/5266656264606662'>http://4share.vn/d/5266656264606662</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 12: <a href='http://4share.vn/d/6551525553575154'>http://4share.vn/d/6551525553575154</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 13: <a href='http://4share.vn/d/390d0e090f0b0d0c'>http://4share.vn/d/390d0e090f0b0d0c</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 14: <a href='http://4share.vn/d/3105020904030806'>http://4share.vn/d/3105020904030806</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 15: <a href='http://4share.vn/d/6054545251555858'>http://4share.vn/d/6054545251555858</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 16: <a href='http://4share.vn/d/2216151317171617'>http://4share.vn/d/2216151317171617</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 17: <a href='http://4share.vn/d/3b0f0c09090a0c0b'>http://4share.vn/d/3b0f0c09090a0c0b</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 18: <a href='http://4share.vn/d/5165666362616862'>http://4share.vn/d/5165666362616862</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 19: <a href='http://4share.vn/d/7d494a4f4a4b4545'>http://4share.vn/d/7d494a4f4a4b4545</a></p>\n";
                                $hlink=$hlink."<p style='font-weight:bold;color:orange;margin-bottom:-10px;'>Folder 4Share Vol 20: <a href='http://4share.vn/d/6652515451505f50'>http://4share.vn/d/6652515451505f50</a></p>\n";
                                

                            ?>
                            <div role="tabpanel" class="tab-pane" id="HF140">
                                <?php
                                    $sh140="";
                                    $sh140=$sh140."";
                                    $sh140=$sh140."<p style='color:red;font-size:25px; font-weight:bold;margin-bottom:-10px;'><span style='color:blue;'><a href='https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY'>JAV Fshare</a></span>:: <span style='color:red;'>{{phim_title}}</span> :: <span style='color:green;'>{{dien_vien}}</span></p>\n";
                                    $sh140=$sh140."<p><a href='https://docs.google.com/spreadsheets/d/1vsAlxzm2A9pGEF2N9Sfs2fvFRSV6btnei1KNPtvusVY'><img alt='JAV Fshare' src='{{phim_photo}}' /></a></p>\n";
                                    $sh140=$sh140."<p style='color:red;font-weight:bold;'>- Fshare Link: <a href='{{fshare_first}}'>{{fshare_first}}</a></p>\n";
                                ?>
                                <textarea class="form-control inselect" rows="10"><?php echo $sh140.$hlink; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="HF240">                                
                                <textarea class="form-control inselect" rows="10"><?php echo $str06; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="HF141">
                                <textarea class="form-control inselect" rows="10"><?php echo $str07; ?></textarea>
                            </div>
                            <div role="tabpanel" class="tab-pane" id="HF242">
                                <textarea class="form-control inselect" rows="10"><?php echo $str08; ?></textarea>
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