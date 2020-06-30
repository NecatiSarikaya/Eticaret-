<?php include'header.php';

$hakkimizdasor=$db->prepare("SELECT * FROM hakkimizda where hakkimizda_id=:id");// prepare ile sorguyu hazırlıyoruz
$hakkimizdasor->execute(array(
  'id' => 0));// gelen get değerini diziye alarak çekiyoruz.

$hakkimizdacek=$hakkimizdasor->fetch(PDO::FETCH_ASSOC);// fetch methodu ile ekrana yazdırıyoruz fetch_assoc ile diziyi döndürüyoruz.



?>
	 <div id="contact-page" class="container">
    	<div class="bg">
	    	  		
	    		    	
    		<div class="row">  	
	    		<div class="col-sm-8">
	    			<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d12055.443505444273!2d29.156508600000002!3d40.9407162!3m2!1i1024!2i768!4f13.1!5e0!3m2!1str!2str!4v1527286505964" width="700" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
	    		</div>
	    		<div class="col-sm-4">
	    			<div class="contact-info">
	    				<h2 class="title text-center">İletişim Bilgileri</h2>
	    				<address>
	    					<p>MYBOOKS.</p>
							
							<p>TURKİYE TR</p>
							<p>Mobile: +0535-353-65-65</p>
							<p>Fax: +0212-353-65-65</p>
							<p>Email: info@mybooks.com</p>
	    				</address>
	    				<div class="social-networks">
	    					<h2 class="title text-center">Sosyal Ağlar</h2>
							<ul>
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-google-plus"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-youtube"></i></a>
								</li>
							</ul>
	    				</div>
	    			</div>
    			</div>    			
	    	</div>  
    	</div>	
    </div><!--/#contact-page-->
	
	<?php include'footer.php' ?>