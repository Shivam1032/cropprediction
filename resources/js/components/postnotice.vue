<template>
  <div class="container mt-1">
      <div class="row justify-content-center mt-3">
		<div class="col-md-6">
			<div class ="card card-default">
				<div class ="card-header">
					<h3>Post A Notice</h3>
				</div>

				<div class="card-body">
						<form class="form form-vertical">
							<div class="form-body">
								<div class="row">

									<div class="col-12">
										<div class="form-group">
											<label>Subject</label>
											<input type="text" class="form-control" name="fname-icon" id="subject" placeholder="Subject" required>
										</div>
									</div>

									<div class="col-12">
										<div class="form-group">
											<label>Description</label>
											<textarea class="form-control" rows="3" placeholder="Write Description Here" id="contact-us-form-element" spellcheck="false" required></textarea>
										</div>
									</div>

									<div class="col-12 d-flex justify-content-end">
										<button type="submit" class="btn btn-dark mr-1 mb-1">Post</button>
										<button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
									</div>
								</div>

							</div>
						</form>

					</div>   
			</div>
		</div>
		 <div class="col-md-6">
             <div class ="card card-default">
                  <div class="card-header">
                    <h4 class="card-title">Recent Notices</h4>
                  </div>
                 <div class="card-body">
                    <div  class="dataTables_wrapper dt-bootstrap4">
                        
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid">
                                       <thead>
                                             <tr role="row">
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="sr">Sr. No.</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="sub">Subject</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="desc">Description</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="edit">Edit</th> 
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="del">Delete</th>
                                             </tr>

                                        </thead>
                                        <tbody>
                                         <tr> 
                                             <td>1</td>
                                             <td>XYZ</td>
                                             <td>afdfsdgsgdgesd</td>
                                             <td><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#adduser">Edit</button></td>
                  							 <td><button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#alert_delete_modal">Delete</button></td>
                                          </tr>
                                         </tbody>
                                </table>
                          </div>
                        </div>   
                     </div>
             </div>
         </div>
      </div>
      </div> 

	  <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="add user" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content model-lg">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Update Notice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form>
          <div class="row p-3">
            <div class="col-12 form-group">
              <label>Subject</label>
			  <input type="text" class="form-control" name="fname-icon" id="subject" placeholder="Subject" required>
            </div>
            <div class="col-12 form-group">
                <label>Description</label>
				<textarea class="form-control" rows="3" placeholder="Write Description Here" id="contact-us-form-element" spellcheck="false" required></textarea>
            </div>
          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Update</button>
        </div>
          </form>
        </div>
      </div>
    </div>
  </div>


	   <div class="modal fade" id="alert_delete_modal" tabindex="-1" role="dialog" aria-labelledby="add user" aria-hidden="true" >
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger">
          <h5 class="modal-title white" id="">Attention!!</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <i class="fa fa-times"></i>
          </button>
        </div>
        <div class="modal-body">
            Are you sure to delete the selected notice?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-light-secondary" data-dismiss="modal">
            <span class="d-none d-sm-block">Close</span>
          </button>
          <button type="button" class="btn btn-danger ml-1" data-dismiss="modal">
            <span class="d-none d-sm-block">Accept</span>
          </button>
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
        // console.log('Component Mounted')
    },data(){
		return{
		 form:new Form({
				 name:'',
				 mobile:'',
				 subject:'',
				 message:'',
		 }),
		}
	},methods:{
		 reportaproblem(){
			 //TODO PROBLEM REQUEST
			 	this.form.post('/contact').then();
		}
	}
}
</script>
