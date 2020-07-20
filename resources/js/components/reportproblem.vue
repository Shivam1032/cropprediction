<template>
  <div class="container mt-1">
      <div class="row justify-content-center mt-3">
		<div class="col-md-8">
			<div class ="card card-default">
				<div class ="card-header">
					<h3>Report A Problem</h3>
				</div>

				<div class="card-body">
						<form class="form form-vertical" @submit.prevent="reportaproblem" @keydown="form.onKeydown($event)" >
							<div class="form-body">
								<div class="row">
									<div class="col-12">
										<div class="form-group">
											<label>Name</label>
											<input type="text" class="form-control" name="fname-icon" id="full name" placeholder="Enter Your Full Name" required>
											
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label>Email</label>
											<input type="email" class="form-control" name="email-id-icon" id="Email" placeholder="Email ID" >
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label>Subject</label>
											<input type="text" class="form-control" name="fname-icon" id="subject" placeholder="Subject" required>
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label>Message</label>
											<textarea class="form-control" rows="3" placeholder="Enter Message Here" id="contact-us-form-element" spellcheck="false" required></textarea>
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
    },data(){
		return{
		 form:new Form({
				 name:'',
				 email:'',
				 subject:'',
				 message:'',
		 }),
		}
	},methods:{
		 reportaproblem(){
			 //TODO PROBLEM REQUEST
			 	form.axios.post('');
		}
	}
}
</script>
