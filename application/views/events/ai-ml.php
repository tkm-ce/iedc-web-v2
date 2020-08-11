
<section id="page-title">
	<div class="container">
		<div class="page-title">
			<h1>AI & ML</h1>
		</div>
		<div class="breadcrumb">
			<ul>
				<li><a href="<?=base_url()?>">Home</a> </li>
				<li class="active"><a href="<?=base_url()?>workshops/ai-ml">AI & ML</a> </li>
			</ul>
		</div>
	</div>
</section>
<section>
	<div class="container">
		<?php if($this->session->flashdata('fail')): ?>
		<div class="alert alert-danger" role="alert">
			<center><?php echo $this->session->flashdata('fail'); ?></center>
		</div>
		<?php endif; ?>
		<?php if($this->session->flashdata('success')): ?>
		<div class="alert alert-success" role="alert">
			<center><?php echo $this->session->flashdata('success'); ?></center>
		</div>
		<?php endif; ?>
		<div class="row">
      <div class="col-lg-6 pr-3">
				<div class="row">
					  <div class="mb-3 mt-5">
              <div>
                <h3>AI & ML</h3>
                <p align="justify">"Computers will overtake humans with AI 🤖 within the next 100 years. When this happens we need to make sure the computers have goals aligned with ours. "
                </p>
              </div>
              <span class="teaser">
                <h5 id="rules">Rules & Regulations</h5>
              </span>
              <span class="collapse smalldesc" id="more">
								<p>It's time to prepare for the future.<br>
								IEDC TKMCE presents a 2-day WORKSHOP on ARTIFICIAL INTELLIGENCE and MACHINE LEARNING . on JANUARY 25 , 26 2020. The workshop is conducted in association with  ACADEVO Research labs ,
								Grab the opportunity before it's too late. 🕑<br>	<br>
								Registration fee : Rs.700<br>
								Registration fee for IEDC members : Rs.550<br><br>

								For Queries Contact :<br>
								Aneesh: 9447546457<br>
								Babitha : 9400665722<br>
								</p>
                </span>
              <span><a href="#more" data-toggle="collapse">Click to expand</a></span>
				   </div>
				    <img src="<?=base_url()?>assets/uploads/images/updates/ai-ml.jpg" width="auto" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			   </div>
		  </div>
			<div class="col-lg-6 mt-5">
				<h3 class="mb-5">Register Here</h3>
				<div class="m-t-30">
					<form action="<?=base_url()?>pages/ai_ml_reg" method="post">
						<div class="row">
							<div class="form-group col-md-6">
								<label for="name">Name</label>
								<input type="text" aria-required="true" name="name" class="form-control" placeholder="Enter your name" required>
							</div>
							<div class="form-group col-md-6">
								<label for="email">Email</label>
								<input type="email" aria-required="true" name="email" class="form-control" placeholder="Enter your Email"required >
							</div>
						</div>
						<div class="row">
							<div class="form-group col-md-6">
								<label for="phone">Phone</label>
								<input type="phone" name="phone" class="form-control" placeholder="Enter your phone number" required>
							</div>
							<div class="form-group col-md-6">
								<label for="Year of study">Year of Study</label>
								<select name="year" class="form-control" required>
									<option>Select Year</option>
									<option>First Year</option>
									<option>Second Year</option>
                  <option>Third Year</option>
                  <option>Fourth Year</option>
								</select>
							</div>
						</div>
            <div class="row">
              <div class="form-group  col-md-6">
                <label for="Branch">Select your Branch</label>
                <select name="branch" class="form-control" required>
									<option>Branch</option>
									<option>M-Tech</option>
                  <option>Architecture</option>
                  <option>Chemical Engineering</option>
                  <option>Civil Engineering</option>
                  <option>Computer Science & Engineering</option>
                  <option>Electronics & Communication Engineering</option>
                  <option>Electrical & Electronics Engineering</option>
                  <option>Master of Computer Application</option>
                  <option>Mechanical Engineering</option>
                  <option>Mechanical Production</option>
              </select>
              </div>
							<div class="form-group  col-md-6">
								<label for="IEDC Member" name="iedc_member">IEDC Member</label>
								<input value="yes" name="is_iedc_member" type="radio">Yes
								<span class="mr-3"></span>
								<input value="no"name="is_iedc_member" type="radio">No
							</div>
						</div>
            <div class="form-group">
              <input type="checkbox" name="accept_rule" class="mr-3" required>Accept <a href="#rules">rules and regulations</a>
            </div>
						<div class="g-recaptcha" name="g-recaptcha-response" data-sitekey="6LfZF_EUAAAAANZ8kcPRhCXKepzq_RIOYd55Mob5"></div>
						<button class="btn" type="submit"><i class="fa fa-paper-plane"></i>&nbsp;Register</button>
					</form>
				</div>
			</div>
	</div>
</section>
