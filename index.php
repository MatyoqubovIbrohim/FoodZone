<!DOCTYPE html>
<html lang="en">
<?php include("connectdb.php") ?>

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Food Zone</title>
	<!-- Font awesome -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<!-- swiper css -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />


	<!-- Css file -->
	<link rel="stylesheet" href="./css/style.css">
</head>

<body>


	<!-- ========== Navigation Bar start ========== -->
	<header class="header">
		<!-- Logo -->

		<a href="" class="logo"><i class="fas fa-utensils"></i>Food Zone</a>
		<!-- search bar -->
		<form action="" class="search-form">
			<input type="search" id="searchBox" placeholder="Qidirishni boshlang...">
			<label for="searchBox" class="fas fa-search"></label>
		</form>
		<!-- some 	icons -->
		<div class="icons">
			<div id="search-btn" class="fas fa-search"></div>
			<div id="share-btn" class="fas fa-share"></div>
			<div id="user-btn" class="fas fa-user"></div>
			<div id="menu-btn" class="fas fa-bars"></div>
		</div>

		<nav class="navbar">
			<a href="#home">Asosiy sahifa<?= $a ?></a>
			<a href="#packeges">Taom</a>
			<a href="#pricing">Narx</a>
			<a href="#review">Fikr</a>
			<a href="#contact">Contact</a>
			<a href="#blogs">Blog</a>
		</nav>
	</header>

	<!-- ========== Navigation Bar end ========== -->

	<!-- ========== Home section start ========== -->
	<section class="home" id="home">
		<div class="image">
			<!-- back image -->
			<img src="./images/back.jpg" alt="back image">
		</div>
		<!-- content -->
		<div class="content">
			<h3>Siz uchun eng mazali burger!</h3>
			<p>
				Bizning burgerlarimiz sevgi bilan tayyorlangan va sizni hayajonlandiradigan lezzatlardir!
			</p>
			<!-- button -->
			<a href="#" class="btn">Hoziroq ko'ring</a>
		</div>
	</section>

	<!-- ========== Home section end ========== -->

	<!-- ========== Order Form start ========== -->
	<section class="form-container">
		<form action="">

			<div class="inputBox">
				<span>Qayerga</span>
				<input type="text" placeholder="Manzilni qidiring">
			</div>

			<div class="inputBox">
				<span>Qachon</span>
				<input type="date">
			</div>

			<div class="inputBox">
				<span>Vaqt</span>
				<input type="time">
			</div>
			<input type="submit" value="buyurtma berish" class="btn">
		</form>
	</section>

	<!-- ========== Order Form end ========== -->

	<!-- ========== Our Food start ========== -->
	<section class="packeges" id="packeges">
		<h1 class="heading">Bizning <span>Taomlar</span></h1>

		<div class="box-container">
			<?php foreach ($foods as $food) { ?>
				<div class="box">
					<div class="image">
						<img src="./images/blog-<?= $food['id'] ?>.jpg" alt="block-1">
						<h3><i class=" fas fa-utensils"></i> <?= $food['name'] ?></h3>
					</div>
					<div class="content">
						<div class="price">
							<?= $food['price'] ?><span>34.99</span>
						</div>
						<p><?= $food['about'] ?></p>
						<a href="#" class="btn">Buyurtma</a>

					</div>
				</div>
			<?php } ?>
		</div>
	</section>

	<!-- ========== Our Food end ========== -->

	<!-- ========== Pricing Section start ========== -->
	<section class="pricing" id="pricing">
		<h1 class="heading">Bizning <span>Narxlar</span></h1>

		<div class="box-container">


			<!-- #1 -->
			<div class="box">
				<h3>Oddiy Plan</h3>
				<div class="price">
					<span>$</span>
					<span class="amount">30</span>
					<span>/oy</span>
				</div>

				<ul>
					<li>10 kun</li>
					<li>Taom va ichimlik</li>
					<li>Qo'llab-quvvatlash</li>
					<li>Sug'urta</li>
					<li>Tekin Desert</li>
				</ul>
				<a href="" class="btn">Rejani Tanlang</a>
			</div>

			<!-- #2 -->
			<div class="box">
				<h3>Vip Plan</h3>
				<div class="price">
					<span>$</span>
					<span class="amount">50</span>
					<span>/oy</span>
				</div>

				<ul>
					<li>20 kun</li>
					<li>Taom va ichimlik</li>
					<li>Qo'llab-quvvatlash</li>
					<li>Sug'urta</li>
					<li>Tekin Desert</li>
				</ul>
				<a href="" class="btn">Rejani Tanlang</a>
			</div>

			<!-- #3 -->
			<div class="box">
				<h3>Premium Plan</h3>
				<div class="price">
					<span>$</span>
					<span class="amount">90</span>
					<span>/oy</span>
				</div>

				<ul>
					<li>1 oy</li>
					<li>Taom va ichimlik</li>
					<li>Qo'llab-quvvatlash</li>
					<li>Sug'urta</li>
					<li>Tekin Desert</li>
				</ul>
				<a href="" class="btn">Rejani Tanlang</a>
			</div>


		</div>
	</section>

	<!-- ========== Pricing Section end ========== -->

	<!-- ========== Review Section start ========== -->
	<section class="review" id="review">
		<h1 class="heading"> Mijozlar <span>sharxi</span> </h1>

		<div class="swiper-container review-slider" data-aos="zoom-in">

			<div class="swiper-wrapper">

				<!-- #1 -->
				<?php foreach ($comments as $comment) { ?>
					<div class="swiper-slide slide">
						<img src="images/contact_images/rasm-<?= $comment['id'] ?>.png" alt="">
						<h3><?= $comment['fullname'] ?></h3>
						<p><?= $comment['message'] ?></p>
						<div class="stars">
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star"></i>
							<i class="fas fa-star-half-alt"></i>
						</div>
					</div>
				<?php } ?>

			</div>


		</div>

	</section>

	<!-- ========== Review Section end ========== -->

	<!-- ========== Contact Form start ========== -->
	<section class="contact" id="contact">
		<h1 class="heading"> <span>Bog'lanish</span></h1>

		<form action="form.php" method="POST">

			<div class="inputBox">
				<input type="text" name="name" placeholder="Ism sharifingiz">
				<input type="email" name="email" placeholder="Email">
			</div>

			<div class="inputBox">
				<input type="number" name="number" placeholder="Nomer">
				<input type="text" name="subject" placeholder="Mavzu">
			</div>
			<textarea name="text" id="" cols="30" rows="10" placeholder="Xabaringiz..."></textarea>
			<input type="submit" value="Xabar jo'natish" class="btn">

		</form>
	</section>

	<!-- ========== Contact Form end ========== -->

	<!-- ========== Blog Section start ========== -->
	<section class="blogs" id="blogs">
		<h1 class="heading">Bizning <span>Blog</span> </h1>

		<div class="box-container">


			<!-- #1 -->
			<div class="box">
				<div class="image">
					<img src="./images/img1.jpg" alt="img 1">
				</div>
				<div class="content">
					<h3>Lorem ipsum dolor sit amet consectetur.</h3>
					<a href="" class="btn">Ko'proq</a>
					<div class="icons">
						<a href=""><i class="fas fa-calendar"></i>1st apr, 2024</a>
						<a href=""><i class="fas fa-user"></i> by admin</a>
					</div>
				</div>
			</div>

			<!-- #2 -->
			<div class="box">
				<div class="image">
					<img src="./images/img2.jpg" alt="img 2">
				</div>
				<div class="content">
					<h3>Lorem ipsum dolor sit amet consectetur.</h3>
					<a href="" class="btn">Ko'proq</a>
					<div class="icons">
						<a href=""><i class="fas fa-calendar"></i>7th apr, 2024</a>
						<a href=""><i class="fas fa-user"></i> by admin</a>
					</div>
				</div>
			</div>

			<!-- #3 -->
			<div class="box">
				<div class="image">
					<img src="./images/img3.jpg" alt="img 3">
				</div>
				<div class="content">
					<h3>Lorem ipsum dolor sit amet consectetur.</h3>
					<a href="" class="btn">Ko'proq</a>
					<div class="icons">
						<a href=""><i class="fas fa-calendar"></i>18th apr, 2024</a>
						<a href=""><i class="fas fa-user"></i> by admin</a>
					</div>
				</div>
			</div>


		</div>

	</section>

	<!-- ========== Blog Section end ========== -->

	<!-- ========== Footer Section start ========== -->
	<footer class="footer" id="footer">

		<div class="box-container">

			<!-- #1 -->
			<div class="box">
				<h3>Bizning Filiallar</h3>
				<a href=""><i class="fas fa-map-marker-alt"></i> Khorazm</a>
				<a href=""><i class="fas fa-map-marker-alt"></i> Samarqand</a>
				<a href=""><i class="fas fa-map-marker-alt"></i> Bukhara</a>
				<a href=""><i class="fas fa-map-marker-alt"></i> Jizzakh</a>
				<a href=""><i class="fas fa-map-marker-alt"></i> Guliston</a>
			</div>

			<!-- #2 -->
			<div class="box">
				<h3>Tez Bog'lanish</h3>
				<a href=""><i class="fas fa-chevron-right"></i> Home</a>
				<a href=""><i class="fas fa-chevron-right"></i> Packages</a>
				<a href=""><i class="fas fa-chevron-right"></i> Services</a>
				<a href=""><i class="fas fa-chevron-right"></i> Prices</a>
				<a href=""><i class="fas fa-chevron-right"></i> Blogs</a>
			</div>

			<!-- #3 -->
			<div class="box">
				<h3>Contact markaz</h3>
				<a href=""><i class="fas fa-phone"></i> +998 (78) 960 00 55</a>
				<a href=""><i class="fas fa-phone"></i></i> +998 (78) 961 00 55</a>
				<a href=""><i class="fas fa-envelope"></i> foodzone@gmail.com</a>
				<a href=""><i class="fas fa-map-marker-alt"></i> Tashkent, Xalqlar do'stligi, 44-uy</a>
			</div>

			<!-- #4 -->
			<div class="box">
				<h3>Obuna bo'ling</h3>
				<a href=""><i class="fa-brands fa-square-instagram"></i>Instagram</a>
				<a href=""><i class="fab fa-facebook"></i>Facebook</a>
				<a href=""><i class="fab fa-youtube"></i>Youtube</a>
				<a href=""><i class="fab fa-telegram"></i>Telegram</a>
			</div>

		</div>

		<!-- Copyright -->
		<div class="credit">Create By <span>Do it</span> | All Right Reserved</div>
	</footer>

	<!-- ========== Footer Section end ========== -->



	<!-- Js file -->

	<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

	<script src="./js/script.js"></script>

</body>

</html>