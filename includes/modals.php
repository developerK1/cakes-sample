<!-- ==================================================================================================================
							BRANCH MODAL					BRANCH MODAL					BRANCH MODAL
=================================================================================================================== -->
<section id="branches-modal" class="container-fluid customed-modal">
	<div  class="container content ">
			<article class="flexy-col">
				<div class="header">
					<button type="button" onClick="branchModalClose();" aria-hidden="true"> &times; </button>
				</div>
				<div class="row">
					 	<aside class="col-lg-4 col-md-4 flexy-col">
							<img src="../assests/carousels/office.jpg" alt="rebangwe-office-image" />
								<h4>Zeerust Branch</h4>
							<button>Directions</button>
						</aside>
						<aside class="col-lg-4 col-md-4 flexy-col">
							<img src="../assests/carousels/office.jpg" alt="rebangwe-office-image" />
								<h4>Mafikeng Branch</h4>
							<button>Directions</button>
						</aside>
						<aside class="col-lg-4 col-md-4 flexy-col">
							<img src="../assests/carousels/office.jpg" alt="rebangwe-office-image" />
								<h4>Rustenburg Branch</h4>
							<button>Directions</button>
						</aside>
				</div>
					<div class="footer">
						<button type="button" onClick="branchModalClose();" aria-hidden="true">Close </button>
					</div>
		</article>
	</div>

</section>
<!-- ==================================================================================================================
							POP_UP FORM							POP_UP FORM							POP_UP FORM
=================================================================================================================== -->

<section id="form-modal" class="container-fluid customed-modal">
	<div  class="container content ">
			<article class="flexy-col">
				<div class="header">
					<button type="button" onClick="formModalClose();" aria-hidden="true"> &times; </button>
				</div>
				<div class="row">
					<form class="form-horizontal" role="form" action="mail/contact_us.php" Method="POST">
			      <div class="form-group flexy-col">
			        <label for="firstname" class="control-label">First Name</label>
			        <div class="col-sm-10">
			          <input type="text" required class="form-control" id="firstname" name="firstname" placeholder="Enter First Name">
			        </div>
			      </div>
			      <div class="form-group flexy-col">
			        <label for="firstname" class="control-label">Email</label>
			        <div class="col-sm-10">
			          <input type="email" required class="form-control" id="email" name="email" placeholder="Enter email here">
			        </div>
			      </div>
			      <div class="form-group flexy-col">
			        <label for="firstname" class="control-label">Contact (OPTIONAL)</label>
			        <div class="col-sm-10">
			          <input type="tel" required name="phone" class="form-control" id="contact" placeholder="Enter Contact number">
			        </div>
			      </div>
			      <div class="form-group flexy-col">
			        <label for="message" class="col-sm-2 control-label">Message</label>
			        <div class="col-sm-10">
			          <textarea required class="form-control" rows="3" name="message"></textarea>
			        </div>
			      </div>
						<input type="text" name="token" value="<?=$token ;?>" hidden />
			      <div class="form-group">
			        <div class="flexy-cen">
			          <button class="add-more" type="submit" name="sendMailBtn">SEND</button>
			        </div>
			      </div>
			    </form>
				</div>
					<div class="footer">
						<button type="button" onClick="formModalClose();" aria-hidden="true">Close </button>
					</div>
		</article>
	</div>

</section>




<!-- ==================================================================================================================
							BRANCH MODAL					BRANCH MODAL					BRANCH MODAL
=================================================================================================================== -->

