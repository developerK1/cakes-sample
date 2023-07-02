<?php
session_start();

if(!isset($_SESSION['progres'])){
  header('Location: ../index.php');
}else{
  session_unset();
}
?>
<?php include_once "../includes/header.php"; ?>
<?php include_once("../includes/menu.php");?>
<?php include_once("../includes/dynamics.php");?>


<section class="message-content">
<div class="msg-cont">
	<div class="messgae">
		<h2> MESSAGE SUCCESFULLY SENT</h2>
	</div>
	</div>
	<div class="container-wrapper container">
	<article>
		<h3 class="three">THANKS FOR CONTACTING</h3>
    <h3 class="three"><?=$busName ?></h3>
	</article>
	<aside class="container">
			<aside >
				<a href="../index.php"><button > BACK HOME HERE </button></a>
			</aside>
	</aside>
	<div id="orange">
			<p>Serving with Dignity and Compassion...</p>
	</div>
	</div>

</section>



<?php
  include_once "../includes/footer.php";
?>
