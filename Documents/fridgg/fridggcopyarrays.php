	<?php
			$posts = array(
				array(
					'id' => 28946,
					'photo' => 'pankopotatoe.png',
					'logo' => 'userlogo.png',
					'title' => 'Spicy Panko Crusted Potato Cakes',
					'linkname' => 'ohmydish',
					'username' => 'ohmydish'),
				array(
					'id' => 30348,
					'photo' => 'smokeybbqbeans.png',
					'logo' => 'uservanillabean.png',
					'title' => 'Smokey BBQ Baked Beans',
					'linkname' => 'vanillaandbean',
					'username' => 'Vanilla And Bean'),
				array(
					'id' => 30303,
					'photo' => 'strawberryrhubarb.png',
					'logo' => 'userallison.png',
					'title' => 'Strawberry Rhubarb Crumble Bars',
					'linkname' => 'allisonday',
					'username' => 'Allison Day'),
				array(
					'id' => 30124,
					'photo' => 'surimistirfry.png',
					'logo' => 'userohmydish.png',
					'title' => 'Surimi stir fry',
					'linkname' => 'ohmydish',
					'username' => 'ohmydish'),
				 );
			foreach ($posts as $post) {
				// var_dump($post);?>

<!DOCTYPEhtml>
<html>
	<head>
		<meta http-equiv=“Content-Type” content=”text/html; charset=ISO-8859-1” />
		<link rel="stylesheet" type="text/css" href="fridgg1.css">
	</head>
	<body>
		<header>
			<nav>
				<div class="navleft">
					<a href="http://fridgg.com/"><img src="fridgg1pics/logo.png" class="logo"></a>
					<img src="fridgg1pics/dropmenu.png" class="dropmenu">
					
					<a href="http://fridgg.com/tour"><img src="fridgg1pics/whatsfridgg.png" class="whatsfridgg"></a>
					
				</div>
				<div class="navright">
					<a href="http://fridgg.com/login?r=%2F"><img src="fridgg1pics/login.png" class="login"></a>
					<a href="http://fridgg.com/login?r=%2F"><img src="fridgg1pics/fb.png" class="fb"></a>
				</div>
			</nav>
		</header>
		<div class="maincontent cls">
			<div class="mainnav cls">
				<div class="ptl">
					<ul>
						<li class="popular"><a href="http://fridgg.com/">Popular</a></li>
						<li class="top"><a href="http://fridgg.com/top">Top</a></li>
						<li class="latest"><a href="http://fridgg.com/latest">Latest</a></li>
					</ul>
				</div>
				<div class="twitface">
					<a href="https://twitter.com/intent/follow?original_referer=http%3A%2F%2Ffridgg.com%2Flatest&region=follow_link&screen_name=fridgg&tw_p=followbutton"><img src="fridgg1pics/followfridgg.png" class="twitter"></a>
					<a href=""><img src="fridgg1pics/like.png" class="fblike"></a>
				</div>
			</div>	
<?php
			$posts = array(
				array(
					'id' => 28946,
					'photo' => 'pankopotatoe.png',
					'logo' => 'userlogo.png',
					'title' => 'Spicy Panko Crusted Potato Cakes',
					'linkname' => 'ohmydish',
					'username' => 'ohmydish'),
				array(
					'id' => 30348,
					'photo' => 'smokeybbqbeans.png',
					'logo' => 'uservanillabean.png',
					'title' => 'Smokey BBQ Baked Beans',
					'linkname' => 'vanillaandbean',
					'username' => 'Vanilla And Bean'),
				array(
					'id' => 30303,
					'photo' => 'strawberryrhubarb.png',
					'logo' => 'userallison.png',
					'title' => 'Strawberry Rhubarb Crumble Bars',
					'linkname' => 'allisonday',
					'username' => 'Allison Day'),
				array(
					'id' => 30124,
					'photo' => 'surimistirfry.png',
					'logo' => 'userohmydish.png',
					'title' => 'Surimi stir fry',
					'linkname' => 'ohmydish',
					'username' => 'ohmydish'),
				 );
			foreach ($posts as $post) {
				// var_dump($post);?>
		
			<div class="usersubmit">
				<div class="userimg">
					<a href="http://fridgg.com/photo/<?php echo $post[id];?>"><img src="fridgg1pics/<?php echo $post[photo];?>" ></a>
				</div>
				<div class="userinfo">
					<div class="vlc">
						<ul>
							
							<li><a href=""><img src="fridgg1pics/fridggviews.png" class="views"><p>17</p></a></li>
							<li><a href=""><img src="fridgg1pics/fridgglikes.png" class="likes"><p>5</p></a></li>
							<li><a href=""><img src="fridgg1pics/fridggcomments.png" class="comments"><p>8</p></a></li>
						</ul>
					</div>
					<div class="usertitle cls">
						<a href="//fridgg.com/<?php echo $post[linkname];?>"><img src="fridgg1pics/<?php echo $post[logo];?>" class="userlogo"></a>
						<div class="titlelike">
							<span class="likethis cls"><a href=""><img src="fridgg1pics/id-eat-that.png" class="ideatthat"></a>
							</span>
							<div class="titlename cls">
								<h2><a href="http://fridgg.com/photo/<?php echo $post[id];?>"> <?php echo $post[title];?></a></h2>
								<h3><a href="http://fridgg.com/<?php echo $post[linkname];?>"><?php echo $post[username];?></a></h3>
							</div>	
						</div>
					</div>
				</div>
			</div><?php } ?>
		</div>
		<footer>
			<div class="footleft" >
				<ul>
					<li><a href="fridgg.com"><img src="fridgg1pics/footlogo.png" class="footlogo"></a></li>
					<li><a href="">about</a></li>
					<li><a href="">faq</a></li>
					<li><a href="">terms and conditions</a></li>
					<li><a href="">privacy policy</a></li>
					<li><a href="">contact us</a></li>
				</ul>
			</div>
			<div class="footright">
				<ul>
					<li><a href=""><img src="fridgg1pics/footpopular.png" class="footpopular"></a></li>
					<li><a href=""><img src="fridgg1pics/footfb.png" class="footfb"></a></li>
					<li><a href=""><img src="fridgg1pics/foottwit.png" class="foottwit"></a></li>
					<li><a href=""><img src="fridgg1pics/footpintrist.png" class="footpintrist"></a></li>
					<li><a href=""><img src="fridgg1pics/footgoogle.png" class="footgoogle"></a></li>
				</ul>
			</div>		
			<div class="copyright" class="cls">
			© 2012 Fridgg.com. All photo copyrights belong to their respective owners.
			</div>				
		</footer>
	</body>
</html>