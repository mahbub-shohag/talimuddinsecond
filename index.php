<!DOCTYPE html>

<!--[if IE 7]>
<html class="ie ie7" lang="en-US">
<![endif]-->

<!--[if IE 8]>
<html class="ie ie8" lang="en-US">
<![endif]-->

<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->

<!--[if !(IE 7) | !(IE 8) | !(IE 9)  ]><!-->
<html lang="en-US">
<!--<![endif]-->

<head>
<title>Welcome to Talimuddin Foundation | Home</title>
<meta charset="UTF-8" />
<link rel="shortcut icon" href="images/favicon.ico" title="Favicon"/>
<meta name="viewport" content="width=device-width" />

<style type="text/css">
	@font-face {
	    font-family: riad;
	    src: local(riad), url('fonts/SolaimanLipi_20-04-07.ttf') format('opentype');
	}

 	*{
 		font-family: riad;
 	}


</style>

<link rel='stylesheet' id='magz-style-css'  href='style.css' type='text/css' media='all' />
<link rel='stylesheet' id='swipemenu-css'  href='css/swipemenu.css' type='text/css' media='all' />
<link rel='stylesheet' id='flexslider-css'  href='css/flexslider.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-css'  href='css/bootstrap.css' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap-responsive-css'  href='css/bootstrap-responsive.css' type='text/css' media='all' />
<link rel='stylesheet' id='simplyscroll-css'  href='css/jquery.simplyscroll.css' type='text/css' media='all' />
<link rel='stylesheet' id='jPages-css'  href='css/jPages.css' type='text/css' media='all' />
<link rel='stylesheet' id='rating-css'  href='css/jquery.rating.css' type='text/css' media='all' />
<link rel='stylesheet' id='ie-styles-css'  href='css/ie.css' type='text/css' media='all' />
<link rel='stylesheet' id='Roboto-css'  href='http://fonts.googleapis.com/css?family=Roboto' type='text/css' media='all' />

<script type='text/javascript' src="js/jquery-1.10.2.min.js"></script>
<script type='text/javascript' src='js/html5.js'></script>
<script type='text/javascript' src='js/bootstrap.min.js'></script>
<script type='text/javascript' src='js/jquery.flexslider.js'></script>
<script type='text/javascript' src='js/jquery.flexslider.init.js'></script>
<script type='text/javascript' src='js/jquery.bxslider.js'></script>
<script type='text/javascript' src='js/jquery.bxslider.init.js'></script>
<script type='text/javascript' src='js/jquery.rating.js'></script>
<script type='text/javascript' src='js/jquery.idTabs.min.js'></script>
<script type='text/javascript' src='js/jquery.simplyscroll.js'></script>
<script type='text/javascript' src='js/fluidvids.min.js'></script>
<script type='text/javascript' src='js/jPages.js'></script>
<script type='text/javascript' src='js/jquery.sidr.min.js'></script>
<script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='js/custom.js'></script>

		<!-- END -->

</head>

<body>

<div id="page">

	<header id="header" class="container">
		<div id="mast-head">
			<div id="logo">
			<a href="index.php" title="Talimuddin" rel="home"><img src="images/logo.jpg" style="width:30px; height:30px;" alt="Magazine" /> তালিমুদ্দীন ফাউন্ডেশন</a>
			</div>
		</div>

				
        <nav class="navbar navbar-inverse clearfix nobot">
						
			<?php include_once('common/menu.php'); ?>
			
        </nav><!-- /.navbar -->
			
	</header><!-- #masthead -->

	<div id="headline" class="container">
		<?php include('common/headline.php') ?>
	</div>

	<div id="intr" class="container">
		<div class="row-fluid">
			<div class="brnews span9">
				<h3>Breaking News</h3>
				<ul id="scroller">
					<li><p><a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark"><span class="title">Lectus non rutrum pu...</span> Nam nibh arcu, tristique eget pretium sed, porta i...</a></p></li>
					<li><p><a href="#" title="Permalink to Suspen disse auctor dapibus neque pulvinar urna leo" rel="bookmark"><span class="title">Suspen disse auctor ...</span> Fusce aliquet non ipsum vitae scelerisque. Nullam ...</a></p></li>
					<li><p><a href="#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark"><span class="title">Porta lorem ipsum do...</span> Lorem ipsum dolor sit amet, consectetur adipiscing...</a></p></li>
				</ul>
			</div>
		
		<div class="search span3"><div class="offset1">
			<form method="get" id="searchform" action="#">
				<p><input type="text" value="Search here..." onfocus="if ( this.value == 'Search here...' ) { this.value = ''; }" onblur="if ( this.value == '' ) { this.value = 'Search here...'; }" name="s" id="s" />
				<input type="submit" id="searchsubmit" value="Search" /></p>
			</form>
		</div></div>
		</div>
	</div>
	<?php

	/*public function get_banner_post(){
		$this->db->select("*");
		$conditionarray = array(
			'is_act' => '1',
			'post_display' => 'banner'
		);
		$tablename = '`post`';
		$this->db->where($conditionarray);
		$this->db->order_by("post_date", "DESC");
		$this->db->limit(4);
		$query = $this->db->get($tablename);
		if($query)
			return $query->result();
		else
			return false;
	}
*/

	try{
		$sql = "select * from post where is_act='1' and post_display='banner' ORDER BY 'post_date' DESC limit 6";
		$result = $DB->query($sql);
		$row_count = $result->rowCount();
		if($row_count){
			$rows=$result->fetchAll(PDO::FETCH_ASSOC);
		}
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
?>
	<div id="content" class="container">

		<div id="main" class="row-fluid">
			<div id="main-left" class="span8">
				<div id="slider" class="clearfix">
					<div id="slide-left" class="flexslider span8">
						<ul class="slides">
							<?php


							foreach ($rows as $row)
							{
								$image=$row['img_thmb'];
								echo '<li data-thumb="images/dummy/photodune-3834701-laughing-girl-xs-546x291.jpg">
								<a href="#" title="Permalink to Morbi est est lectus non rutrum commodo felis quis tortor" rel="bookmark">
								<img width="546" height="291" src="post/'.$image.'" alt='.$image.' />
								</a>
								<div class="entry">
									<h4>Morbi est est lectus non rutrum commodo felis quis tortor...</h4>
									<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, qui...</p>
								</div>
							</li>';



							}
							
							?>
							<li data-thumb="images/dummy/photodune-3834701-laughing-girl-xs-546x291.jpg">
								<a href="#" title="Permalink to Morbi est est lectus non rutrum commodo felis quis tortor" rel="bookmark">
								<img width="546" height="291" src="images/dummy/photodune-3834701-laughing-girl-xs-546x291.jpg" alt="photodune-3834701-laughing-girl-xs" />
								</a>
								<div class="entry">
									<h4>Morbi est est lectus non rutrum commodo felis quis tortor...</h4>
									<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, qui...</p>
								</div>
							</li>

							<li data-thumb="images/dummy/photodune-2043745-college-student-s-546x291.jpg">
								<a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
								<img width="546" height="291" src="images/dummy/photodune-2043745-college-student-s-546x291.jpg" alt="photodune-2043745-college-student-s" />
								</a>
								<div class="entry">
									<h4>Donec consectetuer ligula vulputate sem tristique cursus...</h4>
									<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dignissim ant...</p>
								</div>
							</li>
							
							<li data-thumb="images/dummy/shutterstock_123603871-546x291.jpg">
								<a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
								<img width="546" height="291" src="images/dummy/shutterstock_123603871-546x291.jpg" alt="gallery-1" />
								</a>
								<div class="entry">
									<h4>Quisque sodales viverra ornare vitae libero ac risus...</h4>
									<p>Quisque sodales viverra ornare. Aenean posuere lacus sed facilisis gravida. Morb...</p>
								</div>
							</li>
							
							<li data-thumb="images/dummy/shutterstock_109209743-546x291.jpg">
								<a href="#" title="Permalink to Vestibulum auctor dapibus neque pulvinar urna leo" rel="bookmark">
								<img width="546" height="291" src="images/dummy/shutterstock_109209743-546x291.jpg" alt="shutterstock_109209743" />
								</a>
								<div class="entry">
									<h4>Vestibulum auctor dapibus neque pulvinar urna leo...</h4>
									<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, qui...</p>
								</div>
							</li>
						</ul>
					</div>

					<div id="slide-right" class="span4">
						<h3>Most Popular News</h3>
							<ul>
								<li><a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark"><h4 class="post-title">Lectus non rutrum pulvinar urna leo dignissim lore...</h4></a></li>
								<li><a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark"><h4 class="post-title">Donec consectetuer ligula vulputate sem tristique ...</h4></a></li>
								<li><a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark"><h4 class="post-title">Quisque sodales viverra ornare vitae libero ac ris...</h4></a></li>
								<li><a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark"><h4 class="post-title">Nam nibh arcu tristique eget pretium vitae libero ...</h4></a></li>
							</ul><div class="clear"></div>
					</div>
				</div>
				
				<div id="home-top">
					<h3 class="title"><span>সাম্প্রতিক পোস্ট</span></h3>
					<ul class="bxslider">
						<?php
						include('configFolder/cons.php');
						$query="select * from post ORDER BY 'post_date' DESC limit 6";
						$result=mysql_query($query);
						while ($row=mysql_fetch_assoc($result)) {
							$image=$row['img_thmb'];
                             echo '<li><a class="image_thumb_zoom" href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
							<img width="225" height="136" src="post/'.$image.'" alt='.$image.' />
							</a>
							<h4 class="post-title clearfix">
								<img class="post-icon" alt="Text post" src="images/'.$image.'">
								<a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">Donec consectetuer ligula vulputate...	</a>
							</h4>';
						}
						?>
							<div class="meta clearfix">
								<span class="date">July 11, 2013</span>
								<div class="ratings">
									<input class="star" type="radio" name="home-top-rating-1" value="1" disabled="disabled"/>
									</div>
							</div>
						</li>
                            
                             	
                             
						
						
						
					</ul>
				</div>

				<div id="home-top">
					<h3 class="title"><span>আল কোরআন</span></h3>
					<ul class="bxslider">
						<?php
						include('configFolder/cons.php');
						$query="select * from post";
						$result=mysql_query($query);
						while ($row=mysql_fetch_assoc($result)) {
							$image=$row['img_thmb'];
                             echo '<li><a class="image_thumb_zoom" href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
							<img width="225" height="136" src="post/'.$image.'" alt='.$image.' />
							</a>
							<h4 class="post-title clearfix">
								<img class="post-icon" alt="Text post" src="images/'.$image.'">
								<a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">Donec consectetuer ligula vulputate...	</a>
							</h4>
							<div class="meta clearfix">
								<span class="date">July 11, 2013</span>
								<div class="ratings">
									<input class="star" type="radio" name="home-top-rating-1" value="1" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-1" value="2" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-1" value="3" disabled="disabled" checked="checked"/>
									<input class="star" type="radio" name="home-top-rating-1" value="4" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-1" value="5" disabled="disabled"/>
								</div>
							</div>
						</li>';
						}
                            
                             	
                             
						
						?>
						
					</ul>
				</div>

				<div id="home-top">
					<h3 class="title"><span>মহিলাঙ্গন</span></h3>
					<ul class="bxslider">
						<?php
						include('configFolder/cons.php');
						$query="select * from post";
						$result=mysql_query($query);
						while ($row=mysql_fetch_assoc($result)) {
							$image=$row['img_thmb'];
                             echo '<li><a class="image_thumb_zoom" href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
							<img width="225" height="136" src="post/'.$image.'" alt='.$image.' />
							</a>
							<h4 class="post-title clearfix">
								<img class="post-icon" alt="Text post" src="images/'.$image.'">
								<a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">Donec consectetuer ligula vulputate...	</a>
							</h4>';
						}
						?>
						<div class="meta clearfix">
								<span class="date">July 11, 2013</span>
								<div class="ratings">
									<input class="star" type="radio" name="home-top-rating-1" value="1" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-1" value="2" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-1" value="3" disabled="disabled" checked="checked"/>
									<input class="star" type="radio" name="home-top-rating-1" value="4" disabled="disabled"/>
									<input class="star" type="radio" name="home-top-rating-1" value="5" disabled="disabled"/>
								</div>
							</div>
						</li>
					</ul>
				</div>
				
				<div id="home-middle" class="clearfix">
					<div class="left span6">
						<h3 class="title"><a href="#" title="Al Quran"><span>Al Quran</span></a></h3>
						<div class="row-fluid">	
							<article class="post">
								<a class="image_thumb_zoom" href="#" title="Permalink to Integer vitae libero ac risus egestas placerat urna" rel="bookmark">
								<img width="371" height="177" src="images/dummy/shutterstock_58382248-371x177.jpg" class="attachment-post-first wp-post-image" alt="shutterstock_58382248" />
								</a>
								<h4 class="post-title">
								<a href="#" title="Permalink to Integer vitae libero ac risus egestas placerat urna" rel="bookmark">Integer vitae libero ac risus egest...</a>
								<span class="date">July 11, 2013</span>
								</h4>
								<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing erat, quis bibendum enim congue porttitor. E...</p>
							</article>

							<article class="post">
								<div class="entry clearfix">
									<a href="#" title="Permalink to Morbi est est lectus non rutrum commodo felis quis tortor" rel="bookmark">
									<img width="225" height="136" src="images/dummy/photodune-3834701-laughing-girl-xs-225x136.jpg" class="thumb" alt="photodune-3834701-laughing-girl-xs" />
									<h4 class="post-title">Morbi est est lectus non rutrum com...</h4>
									</a>
									<p>Fusce aliquet non ipsum vitae scelerisqu...</p>
									<div class="meta">
										<span class="date">July 11, 2013</span>
									</div>
								</div>
							</article>

							<article class="post">
								<div class="entry clearfix">
									<a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
									<img width="225" height="136" src="images/dummy/photodune-2043745-college-student-s-225x136.jpg" class="thumb" alt="photodune-2043745-college-student-s" />
									<h4 class="post-title">Donec consectetuer ligula vulputate...</h4>
									</a>
									<p>Nam nibh arcu, tristique eget pretium se...</p>
									<div class="meta">
										<span class="date">July 11, 2013</span>
									</div>
								</div>
							</article>

							<div class="clearfix"></div>
						</div>
					</div>
					<div class="right span6">
						<h3 class="title"><a href="#" title="Sport News"><span>Sport News</span></a></h3>
							<div class="row-fluid">
								<article class="post">
									<a class="image_thumb_zoom" href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
									<img width="371" height="177" src="images/dummy/shutterstock_123603871-371x177.jpg" class="attachment-post-first wp-post-image" alt="gallery-1" />
									</a>
									<h4 class="post-title">
									<a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">Quisque sodales viverra ornare vita...</a>
									<span class="date">July 2, 2013</span>
									</h4>
									<p>Quisque sodales viverra ornare. Aenean posuere lacus sed facilisis gravida. Morbi auctor consectetur mauris a ultri...</p>
								</article>

								<article class="post">
									<div class="entry clearfix">
										<a href="#" title="Permalink to Nam nibh arcu tristique eget pretium vitae libero ac risus" rel="bookmark">
										<img width="225" height="136" src="images/dummy/photodune-3517559-idea-s-225x136.jpg" class="thumb wp-post-image" alt="photodune-3517559-idea-s" />
										<h4 class="post-title">Nam nibh arcu tristique eget pretiu...</h4>
										</a>
										<p>Nam nibh arcu, tristique eget pretium se...</p>
										<div class="meta">
											<span class="date">July 2, 2013</span>
										</div>
									</div>
								</article>

								<article class="post">
									<div class="entry clearfix">
										<a href="#" title="Permalink to Vestibulum auctor dapibus neque pulvinar urna leo" rel="bookmark">
										<img width="225" height="136" src="images/dummy/shutterstock_109209743-225x136.jpg" class="thumb wp-post-image" alt="shutterstock_109209743" />
										<h4 class="post-title">Vestibulum auctor dapibus neque pul...</h4>
										</a>
										<p>Fusce aliquet non ipsum vitae scelerisqu...</p>
										<div class="meta">
											<span class="date">June 14, 2013</span>
										</div>
									</div>
								</article>

								<div class="clearfix"></div>

							</div>
					</div>

				</div>

				<div id="home-bottom" class="clearfix">
					<h3 class="title"><a href="#" title="Fashion News"><span>Fashion News</span></a></h3>	
					<div class="row-fluid">	
						<div class="span6">
							<article class="post">
								<a class="image_thumb_zoom" href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark">
								<img width="371" height="177" src="images/dummy/shutterstock_134257640-371x177.jpg" alt="shutterstock_134257640" />
								</a>
								<h4 class="post-title">
								<a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark">Lectus non rutrum pulvinar urna leo...</a>
								<span class="date">August 12, 2013</span>
								</h4>
								<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dignissim ante ac tincidunt molestie. Nunc quis ...</p>
							</article>
						</div>

						<div class="span6">
							<article class="post">
								<div class="entry clearfix">
									<a href="#" title="Permalink to Suspen disse auctor dapibus neque pulvinar urna leo" rel="bookmark">
									<img width="225" height="136" src="images/dummy/shutterstock_70184773-225x136.jpg" class="thumb" alt="shutterstock_70184773" />
									<h4 class="post-title">Suspen disse auctor dapibus neque p...</h4>
									</a>
									<p>Fusce aliquet non ipsum vitae scelerisqu...</p>
									<div class="meta">
										<span class="date">August 11, 2013</span>
									</div>
								</div>
							</article>
							<article class="post">
								<div class="entry clearfix">
									<a href="#" title="Permalink to Aenean dignissim dignissim lorem pellentesque felis risus" rel="bookmark">
									<img width="225" height="136" src="images/dummy/shutterstock_58382248-225x136.jpg" class="thumb" alt="shutterstock_58382248" />
									<h4 class="post-title">Aenean dignissim dignissim lorem pe...</h4>
									</a>
									<p>Fusce aliquet non ipsum vitae scelerisqu...</p>
									<div class="meta">
										<span class="date">July 2, 2013</span>
									</div>
								</div>
							</article>
							<article class="post">
									<div class="entry clearfix">
										<a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
										<img width="225" height="136" src="images/dummy/shutterstock_123603871-225x136.jpg" class="thumb" alt="gallery-1" />
										<h4 class="post-title">Quisque sodales viverra ornare vita...</h4>
										</a>
										<p>Quisque sodales viverra ornare. Aenean p...</p>
										<div class="meta">
											<span class="date">July 2, 2013</span>
										</div>
									</div>
							</article>

							<div class="clearfix"></div>
						</div>
					</div>
				</div>

			</div><!-- #main-left -->

		<div id="sidebar" class="span4">

			<div id="tabwidget" class="widget tab-container"> 
				<ul id="tabnav" class="clearfix"> 
					<li><h3><a href="#tab1" class="selected"><img src="images/view-white-bg.png" alt="Popular">Popular</a></h3></li>
					<li><h3><a href="#tab2"><img src="images/time-white.png" alt="Recent">Recent</a></h3></li>
				    <li><h3><a href="#tab3"><img src="images/komen-putih.png" alt="Comments">Comments</a></h3></li>
				</ul> 

			<div id="tab-content">
			
	 		<div id="tab1" style="display: block; ">
				<ul id="itemContainer" class="recent-tab">
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_134257640-225x136.jpg" class="thumb" alt="shutterstock_134257640" /></a>
						<h4 class="post-title"><a href="#">Lectus non rutrum pulvinar urna...</a></h4>
						<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dig...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/photodune-2043745-college-student-s-225x136.jpg" class="thumb" alt="photodune-2043745-college-student-s" /></a>
						<h4 class="post-title"><a href="#">Donec consectetuer ligula vulpu...</a></h4>
						<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dig...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/photodune-3517559-idea-s-225x136.jpg" class="thumb" alt="photodune-3517559-idea-s" /></a>
						<h4 class="post-title"><a href="#">Nam nibh arcu tristique eget pr...</a></h4>
						<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dig...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_123603871-225x136.jpg" class="thumb" alt="gallery-1" /></a>
						<h4 class="post-title"><a href="#">Quisque sodales viverra ornare ...</a></h4>
						<p>Quisque sodales viverra ornare. Aenean posuere lacus sed facilisis gra...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/photodune-3834701-laughing-girl-xs-225x136.jpg" class="thumb" alt="photodune-3834701-laughing-girl-xs" /></a>
						<h4 class="post-title"><a href="#">Morbi est est lectus non rutrum...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_2114081-225x136.jpg" class="thumb" alt="shutterstock_2114081" /></a>
						<h4 class="post-title"><a href="#">Aliquam quam lectus pulvinar ur...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_70184773-225x136.jpg" class="thumb" alt="shutterstock_70184773" /></a>
						<h4 class="post-title"><a href="#">Suspen disse auctor dapibus neq...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_70787161-225x136.jpg" class="thumb" alt="shutterstock_70787161" /></a>
						<h4 class="post-title"><a href="#">Porta lorem ipsum dolor sit ame...</a></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer place...</p>
						<div class="clearfix"></div>				
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_58382248-225x136.jpg" class="thumb" alt="shutterstock_58382248" /></a>
						<h4 class="post-title"><a href="#">Integer vitae libero ac risus e...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
						<div class="clearfix"></div>				
					</li>
								
					<script type="text/javascript">
						jQuery(document).ready(function($){

							/* initiate the plugin */
							$("div.holder").jPages({
							containerID  : "itemContainer",
							perPage      : 3,
							startPage    : 1,
							startRange   : 1,
							links		   : "blank"
							});
						});		
					</script>

				</ul>
				
				<div class="holder clearfix"></div>
				<div class="clear"></div>

			<!-- End most viewed post -->		  

			</div><!-- /#tab1 -->
 
			<div id="tab2" style="display: none;">	
				<ul id="itemContainer2" class="recent-tab">
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_134257640-225x136.jpg" class="thumb" alt="shutterstock_134257640" /></a>
						<h4 class="post-title"><a href="http://magazine.themedesigner.in/lectus-non-rutrum-pulvinar-urna-leo-dignissim-lorem-8/">Lectus non rutrum pulvinar urna...</a></h4>
						<p>Nam nibh arcu, tristique eget pretium sed, porta id quam. Praesent dig...</p>
						<div class="clearfix"></div>	
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_70184773-225x136.jpg" class="thumb" alt="shutterstock_70184773" /></a>
						<h4 class="post-title"><a href="#">Suspen disse auctor dapibus neq...</a></h4>
						<p>Fusce aliquet non ipsum vitae scelerisque. Nullam ultricies adipiscing...</p>
						<div class="clearfix"></div>	
					</li>
					<li>
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_70787161-225x136.jpg" class="thumb" alt="shutterstock_70787161" /></a>
						<h4 class="post-title"><a href="#">Porta lorem ipsum dolor sit ame...</a></h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer place...</p>
						<div class="clearfix"></div>	
					</li>
				</ul> 	 
			</div><!-- /#tab2 --> 

			<div id="tab3" style="display: none; ">
				<ul>
					<li><span class="author">Magazine Author</span> on <a href="#" title=" View comment ">Lorem Ipsum is simply dummy te</a></li>
					<li><span class="author">Magazine Author</span> on <a href="#" title=" View comment ">Lorem Ipsum is simply dummy te</a></li>
					<li><span class="author">magazine</span> on <a href="#" title=" View comment ">This is threaded comment level</a></li>
					<li><span class="author">magazine</span> on <a href="#" title=" View comment ">This is threaded comment syste</a></li>
				</ul>
			</div><!-- /#tab2 --> 
	
			</div><!-- /#tab-content -->

			</div><!-- /#tab-widget --> 

			<div class="widget widget_latestpost">
				<h3 class="title"><span>নির্বাচিত পোষ্ট</span></h3>
				<div class="latest-posts widget">
					<div class="latest-post clearfix">
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_134257640-225x136.jpg" class="thumb fl" alt="shutterstock_134257640" title="" /></a>
						<h4><a href="#" rel="bookmark" title="Lectus non rutrum pulvinar urna leo dignissim lorem">Lectus non rutrum pulvinar urna leo</a></h4>
						<div class="post-time">August 12, 2013</div>
						<div class="ratings" style="float: none">
							<input class="star" type="radio" name="recent-post-1" value="1" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-1" value="2" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-1" value="3" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-1" value="4" disabled="disabled" checked="checked"/>
							<input class="star" type="radio" name="recent-post-1" value="5" disabled="disabled"/>
						</div>
					</div>
					
					<div class="latest-post clearfix">
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_70184773-225x136.jpg" class="thumb fl" alt="shutterstock_70184773" title="" /></a>
						<h4><a href="#" rel="bookmark" title="Suspen disse auctor dapibus neque pulvinar urna leo">Suspen disse auctor dapibus neque</a></h4>
						<div class="post-time">August 11, 2013</div>
						<div class="ratings" style="float: none">
							<input class="star" type="radio" name="recent-post-2" value="1" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-2" value="2" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-2" value="3" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-2" value="4" disabled="disabled" checked="checked"/>
							<input class="star" type="radio" name="recent-post-2" value="5" disabled="disabled"/>
						</div>
					</div>

					<div class="latest-post clearfix">
						<a href="#"><img width="225" height="136" src="images/dummy/shutterstock_70787161-225x136.jpg" class="thumb fl" alt="shutterstock_70787161" title="" /></a>
						<h4><a href="#" rel="bookmark" title="Porta lorem ipsum dolor sit amet, consectetur adipiscing risus">Porta lorem ipsum dolor sit amet</a></h4>
						<div class="post-time">August 2, 2013</div>
						<div class="ratings" style="float: none">
							<input class="star" type="radio" name="recent-post-3" value="1" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-3" value="2" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-3" value="3" disabled="disabled"/>
							<input class="star" type="radio" name="recent-post-3" value="4" disabled="disabled" checked="checked"/>
							<input class="star" type="radio" name="recent-post-3" value="5" disabled="disabled"/>
						</div>
					</div>

				</div>
			</div>

			<div class="widget widget_latestpost"><h3 class="title"><span>Technology News</span></h3>
				<div class="latest-posts">
					<article class="post">
						<a class="image_thumb_zoom" href="#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark">
						<img width="371" height="177" src="images/dummy/shutterstock_70787161-371x177.jpg" class="attachment-post-first wp-post-image" alt="shutterstock_70787161" />
						</a>
						<h4 class="post-title">
						<a href="#" title="Permalink to Porta lorem ipsum dolor sit amet, consectetur adipiscing risus" rel="bookmark">Porta lorem ipsum dolor sit amet, c...</a>
						<span class="date">August 2, 2013</span>
						</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer placerat id augue non dapibus. Morbi ut ipsum cond...</p>
					</article>
				
					<article class="post">
						<div class="entry clearfix">
							<a href="#" title="Permalink to Donec consectetuer ligula vulputate sem tristique cursus" rel="bookmark">
							<img width="225" height="136" src="images/dummy/photodune-2043745-college-student-s-225x136.jpg" class="thumb" alt="photodune-2043745-college-student-s" />
							<h4 class="post-title">Donec consectetuer ligula vulputate...</h4>
							</a>
							<p>Nam nibh arcu, tristique eget pretium se...</p>
							<div class="meta">
								<span class="date">July 11, 2013</span>
							</div>
						</div>
					</article>

					<article class="post">
						<div class="entry clearfix">
							<a href="#" title="Permalink to Quisque sodales viverra ornare vitae libero ac risus" rel="bookmark">
							<img width="225" height="136" src="images/dummy/shutterstock_123603871-225x136.jpg" class="thumb" alt="gallery-1" />
							<h4 class="post-title">Quisque sodales viverra ornare vita...</h4></a>
							<p>Quisque sodales viverra ornare. Aenean p...</p>
							<div class="meta">
								<span class="date">July 2, 2013</span>
							</div>
						</div>
					</article>
				</div>
			</div>
			
			<div class="video-box widget row-fluid">
				<h3 class="title"><span style="background-color: #;color: #;">Videos Gallery</span></h3>		
				<iframe width="369" height="188" src="http://www.youtube.com/embed/pkRB5xC1Cw8" frameborder="0" allowfullscreen></iframe>
				<ul>
					<li>
					<a href="#" title="Permalink to Lectus non rutrum pulvinar urna leo dignissim lorem" rel="bookmark">
					<img width="225" height="136" src="images/dummy/shutterstock_134257640-225x136.jpg" alt="shutterstock_134257640" />
					</a>
					</li>
						
					<li>
					<a href="#" title="Permalink to Vestibulum volutpat tortor libero sodales leo mauris ut lectus" rel="bookmark">
					<img width="225" height="136" src="images/dummy/photodune-3517559-idea-s-225x136.jpg" alt="photodune-3517559-idea-s" />
					</a>
					</li>
						
					<li>
					<a href="#" title="Permalink to Vivamus ultrices luctus nunc sem sit amet interdum consectetuer" rel="bookmark">
					<img width="225" height="136" src="images/dummy/photodune-2043745-college-student-s-225x136.jpg" alt="photodune-2043745-college-student-s" />
					</a>
					</li>
					
					<li>
					<a href="#" title="Permalink to Phasellus scelerisque massa molestie iaculis lectus pulvinar" rel="bookmark">
					<img width="225" height="136" src="images/dummy/shutterstock_109209743-225x136.jpg" alt="shutterstock_109209743" />
					</a>
					</li>
				</ul>
        	</div>
        				
		</div><!-- sidebar -->
		
		<div class="clearfix"></div>

		<div id="gallery">
			<h3 class="title"><span>All News Gallery</span></h3>
				<ul class="gallery">
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Fusce pellentesque suscipit nibh massa porta molestie iaculis" rel="bookmark">
					<img width="225" height="136" src="images/dummy/shutterstock_58382248-225x136.jpg" alt="shutterstock_58382248" />
					</a>
					<a href="#" title="Permalink to Fusce pellentesque suscipit nibh massa porta molestie iaculis" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Text post" src="images/text.png"> Fusce pellentesque suscipit nibh ma...</h4></a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>

					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Praesent placerat risus quis pellentesque suscipit nibh ultricies nulla" rel="bookmark">
					<img width="225" height="136" src="images/dummy/shutterstock_70184773-225x136.jpg" alt="shutterstock_70184773" />
					</a>
					<a href="#" title="Permalink to Praesent placerat risus quis pellentesque suscipit nibh ultricies nulla" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Gallery post" src="images/image.png"> Praesent placerat risus quis pellen...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Integer malesuada commodo nulla ligula vulputate sem tristique" rel="bookmark">
					<img width="225" height="136" src="images/dummy/shutterstock_109209743-225x136.jpg" alt="shutterstock_109209743" />
					</a>
					<a href="#" title="Permalink to Integer malesuada commodo nulla ligula vulputate sem tristique" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Photo" src="images/photo.png"> Integer malesuada commodo nulla lig...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Vestibulum volutpat tortor libero sodales leo mauris ut lectus" rel="bookmark">
					<img width="225" height="136" src="images/dummy/photodune-3517559-idea-s-225x136.jpg" alt="photodune-3517559-idea-s" />
					</a>
					<a href="#" title="Permalink to Vestibulum volutpat tortor libero sodales leo mauris ut lectus" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Video post" src="images/vid.png"> Vestibulum volutpat tortor libero s...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Fusce accumsan mollis eros amet interdum consectetuer" rel="bookmark">
					<img width="225" height="136" src="images/dummy/shutterstock_2114081-225x136.jpg" alt="shutterstock_2114081" />
					</a>
					<a href="#" title="Permalink to Fusce accumsan mollis eros amet interdum consectetuer" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Text post" src="images/text.png"> Fusce accumsan mollis eros amet int...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Quisque fermentum penatibus et magnis dis parturient montes" rel="bookmark">
					<img width="225" height="136" src="images/dummy/shutterstock_58382248-225x136.jpg" alt="shutterstock_58382248" />
					</a>
					<a href="#" title="Permalink to Quisque fermentum penatibus et magnis dis parturient montes" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Gallery post" src="images/image.png"> Quisque fermentum penatibus et magn...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Proin malesuada adipiscing lacus imperdiet nibh feugiat" rel="bookmark">
					<img width="225" height="136" src="images/dummy/shutterstock_134257640-225x136.jpg" alt="shutterstock_134257640" />
					</a>
					<a href="#" title="Permalink to Proin malesuada adipiscing lacus imperdiet nibh feugiat" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Photo" src="images/photo.png"> Proin malesuada adipiscing lacus im...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 30, 2013</span>
					</div>
					</li>
					
					<li>
					<a class="image_thumb_zoom" href="#" title="Permalink to Vivamus ultrices luctus nunc sem sit amet interdum consectetuer" rel="bookmark">
					<img width="225" height="136" src="images/dummy/photodune-2043745-college-student-s-225x136.jpg" alt="photodune-2043745-college-student-s" />
					</a>
					<a href="#" title="Permalink to Vivamus ultrices luctus nunc sem sit amet interdum consectetuer" rel="bookmark">
					<h4 class="post-title clearfix"><img class="post-icon" alt="Video post" src="images/vid.png"> Vivamus ultrices luctus nunc sem si...</h4>
					</a>
					<div class="meta clearfix">
						<span class="date">July 18, 2013</span>
					</div>
					</li>
				</ul>
		</div>

		</div><!-- #main -->

		</div><!-- #content -->

	<footer id="footer" class="row-fluid">
		

	
		<?php
			include('common/footer/footer.php');
			include('common/footer/siteInfo.php');
		?>
		
	</footer>

</div><!-- #wrapper -->

</body>


</html>
