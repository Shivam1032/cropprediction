<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
      <div class="col-md-12">
          <div class ="card card-default">
              <div class ="card-header">
                  <h3>Contact Us</h3>
              </div>

              <div class="card-body">
                    <form class="form form-vertical">
						<div class="form-body">
							<div class="row">
								<div class="col-12">
									<div class="form-group">
										<label>Name</label>
										<div class="position-relative has-icon-left">
											<input type="text" class="form-control" name="fname-icon" id="full name" placeholder="Enter Your Full Name" required="">
											<div class="form-control-position">
												<i class="fa fa-user"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label>Email</label>
										<div class="position-relative has-icon-left">
											<input type="email" class="form-control" name="email-id-icon" id="Email" placeholder="Email ID" required="">
											<div class="form-control-position">
												<i class="fa fa-envelope"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label>Subject</label>
										<div class="position-relative has-icon-left">
											<input type="text" class="form-control" name="fname-icon" id="subject" placeholder="Subject" required="">
											<div class="form-control-position">
												<i class="fa fa-sticky-note"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12">
									<div class="form-group">
										<label>Message</label>
										<div class="position-relative has-icon-left">
											<textarea class="form-control" rows="3" placeholder="Enter Message Here" id="contact-us-form-element" spellcheck="false" required=""></textarea>
											<div class="form-control-position">
												<i class="fa fa-commenting"></i>
											</div>
										</div>
									</div>
								</div>
								<div class="col-12 d-flex justify-content-end">
									<button type="submit" class="btn btn-dark mr-1 mb-1">Send</button>
									<button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
								</div>
							</div>
						</div>
					</form>
                </div>   
          </div>
      </div>
      </div>    
  </div>
</template>

<script>
export default {
    mounted()
    {
        console.log('Component Mounted')
    }
}
</script>
