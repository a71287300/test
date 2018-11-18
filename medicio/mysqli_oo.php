﻿<?php
	//啟動session
	session_start();
?>	
<!DOCTYPE html>
<html lang="zh-ch"> <!--/*語系*/-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- /*可以用來提供網頁內容的資訊給瀏覽器或是搜尋引擎*/ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title>智慧項圈</title>
	
    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" type="text/css" href="plugins/cubeportfolio/css/cubeportfolio.min.css">
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="css/owl.theme.css" rel="stylesheet" media="screen" />
	<link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">

	<!-- boxed bg -->
	<link id="bodybg" href="bodybg/bg10.css" rel="stylesheet" type="text/css" />
	<!-- template skin -->
	<link id="t-colors" href="color/default.css" rel="stylesheet">


</head>

<body>
	
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="top-area">
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-6">
					</div>
					<div class="col-sm-6 col-md-6">
					<p class="bold text-right">連絡電話:0975777719</p>
					</div>
				</div>
			</div>
		</div>
     <div class="container navigation">
		
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                
            </div>

            <!-- /.navbar-collapse -->
        <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
			  <ul class="nav navbar-nav">
				<li class="active"><a href="index.php">首頁</a></li>
				<li><a href="#boxes">功能</a></li>
				<li><a href="#doctor">開發人員</a></li>
				<li><a href="#facilities">產品</a></li>
				<li><a href="power.php">最新紀錄</a></li>
				<li><a href="Logout.php">登出</a></li>
			  </ul>
            </div>
        <!-- /.container -->
		
    </nav>
	
 <section id="intro" class="intro">
		<div class="intro-content">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
					<h2 class="h-ultra">智慧項圈官網</h2>
					</div>
					<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
					<h4 class="h-light">提供 <span class="color">最棒的服務</span>給您</h4>
					</div>
						<div class="well well-trans">
						<div class="wow fadeInRight" data-wow-delay="0.1s">

						<ul class="lead-list">
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>毛小孩健康監測</strong><br />紀錄寵物體溫活動力</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>毛小孩走失協尋</strong><br />附有GPS定位系統可追蹤寵物</span></li>
							<li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>毛小孩日常活動</strong><br />了解寵物平常的作息</span></li>
						</ul>

						</div>
						</div>


					</div>
				
					<div class="col-lg-6">
						<div class="form-wrapper">
						<div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">																										
     <?php
		require_once("dbtools.inc.php");
		
		//使用 isset()方法，判別有沒有此變數可以使用，以及為已經登入
		if(isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE):

		$account = $_SESSION['account'];
		$link = create_connection();
		$sql = "SELECT * FROM `member_info` WHERE account ='$account'";
		$result = execute_sql($link, "membership", $sql);

		//表格內容
		echo "<font color=\"black\"><center><table border='1'></center><tr align='center'></font>";
		while ($field = $result->fetch_field())   // 顯示欄位名稱
			echo "<td>" . $field->name . "</td>";
		echo "</tr>";
		while ($row = $result->fetch_row())
		{
				echo "<tr>";
				for ($i = 0; $i < $result->field_count; $i++)
					echo "<font color=\"black\"><td align=\"center\">  $row[$i]  </td></font>";
				echo "</tr>";
		}
		echo "</table>";
		
		$result->free();
	
		else:
			header('location: index.php');
		endif;
	?>
										
						  
						</div>
						</div>
					</div>					
				
    </section>
	 <section id="boxes" class="home-section paddingtop-80">
	
		<div class="container">
			<div class="row">
			<form action="power_info.php" method="post">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-check fa-3x circled bg-skin"></i>
							 <input type="submit" value="長期紀錄" class="btn btn-skin btn-block btn-lg">
							<p>
							讓飼主放心出門，輕鬆瞭解寵物需要
							</p>
						</div>
					</div>
				</div>
				</form>
				<form action="QR_Code.php" method="post">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-list-alt fa-3x circled bg-skin"></i>
							<input type="submit" value="QR_Code" class="btn btn-skin btn-block btn-lg">
							<p>
							寵物走失時方便找尋主人
							</p>
						</div>
					</div>
				</div>
				</form>
				<form action="team.html" method="post">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							<i class="fa fa-user-md fa-3x circled bg-skin"></i>
							<input type="submit" value="製作團隊" class="btn btn-skin btn-block btn-lg">
							<p>
							一為各位會員提升網站品質
							</p>
						</div>
					</div>
				</div>
				</form>
				<form action="google map api.php" method="post">
				<div class="col-sm-3 col-md-3">
					<div class="wow fadeInUp" data-wow-delay="0.2s">
						<div class="box text-center">
							
							<i class="fa fa-check fa-3x circled bg-skin"></i>
							<input type="submit" value="追蹤系統" class="btn btn-skin btn-block btn-lg">
							<p>
							防止寵物走失，設有連線功能
							</p>
						</div>
					</div>
				</div>
				</form>
			</div>
		</div>

	</section>


	</body>
<!-- Section: team -->
    <section id="doctor" class="home-section bg-gray paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">開發人員</h2>
					
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
				
            <div id="filters-container" class="cbp-l-filters-alignLeft">
                <div data-filter="*" class="cbp-filter-item-active cbp-filter-item">All (<div class="cbp-filter-counter"></div>)</div>
                
            </div>
		
            <div id="grid-container" class="cbp-l-grid-team">
                <ul>
                    <li class="cbp-item psychiatrist">
                        <div class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/2-1.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="cbp-singlePage cbp-l-grid-team-name">陳人愷</a>
                        <div class="cbp-l-grid-team-position">組長</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <div class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/1-2.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="cbp-singlePage cbp-l-grid-team-name">陳璽安</a>
                        <div class="cbp-l-grid-team-position">組員</div>
                    </li>
                    <li class="cbp-item cardiologist">
                        <div class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/3-3.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="cbp-singlePage cbp-l-grid-team-name">余姿蓉</a>
                        <div class="cbp-l-grid-team-position">組員</div>
                    </li>
                    <li class="cbp-item neurologist">
                        <div class="cbp-caption cbp-singlePage">
                            <div class="cbp-caption-defaultWrap">
                                <img src="img/team/1-4.jpg" alt="" width="100%">
                            </div>
                            <div class="cbp-caption-activeWrap">
                                <div class="cbp-l-caption-alignCenter">
                                    <div class="cbp-l-caption-body">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="cbp-singlePage cbp-l-grid-team-name">楊捷帆</a>
                        <div class="cbp-l-grid-team-position">組員</div>
                    </li>

                </ul>
            </div>
			</div>
			</div>
		</div>

	</section>
	<!-- /Section: team -->

	
		
	<!-- Section: works -->
    <section id="facilities" class="home-section paddingbot-60">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow fadeInDown" data-wow-delay="0.1s">
					<div class="section-heading text-center">
					<h2 class="h-bold">作品</h2>
					<p>智慧項圈</p>
					</div>
					</div>
					<div class="divider-short"></div>
				</div>
			</div>
		</div>

<div class="container">
			<div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12" >
					<div class="wow bounceInUp" data-wow-delay="0.2s">
                    <div id="owl-works" class="owl-carousel">
                        <div class="item"><a href="img/photo/10.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/1@2x.jpg"><img src="img/photo/10.jpg" class="img-responsive" alt="img"></a></div>
                        <div class="item"><a href="img/photo/11.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/2@2x.jpg"><img src="img/photo/11.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/12.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/3@2x.jpg"><img src="img/photo/12.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/13.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/photo/13.jpg" class="img-responsive " alt="img"></a></div>
                        <div class="item"><a href="img/photo/14.jpg" title="This is an image title" data-lightbox-gallery="gallery1" data-lightbox-hidpi="img/works/4@2x.jpg"><img src="img/photo/14.jpg" class="img-responsive " alt="img"></a></div>

                    </div>
					</div>
                </div>
            </div>
		</div>
	</section>
	<!-- /Section: works -->
	
	
	
	

</div>
<a href="#" class="scrollup"><i class="fa fa-angle-up active"></i></a>

	<!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="plugins/cubeportfolio/js/jquery.cubeportfolio.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
    <script src="js/custom.js"></script>


</body>

</html>
