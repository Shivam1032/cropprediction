<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
<div class="card">
            <div class="card-header">
              <h4 class="card-title">User Managment</h4>
              <div class="card-tools">
                    <div class="input-group">     
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                               <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i></button>
                            </div>

                            <button  class="btn btn-primary ml-2 mr-4" data-toggle="modal" data-target="#adduser"><i class="fas fa-user-plus"></i></button>
                    </div>
               </div>
            </div>

            <!-- /.card-header -->
            <div class="card-body">
              <div  class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                      <div class="col-sm-12 col-md-6"></div>
                      <div class="col-sm-12 col-md-6"></div>
                    </div>
                 <div class="row">
                     <div class="col-sm-12">
                         <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="User Managment">
                <thead>
                <tr role="row">

                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="user name">User Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="user email">E-mail</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="District">District</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Village</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Edit</th> 
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="">Delete</th>   
                </tr>

                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td class="" tabindex="0">Mohit Agrawal</td>
                  <td>nicemohit260@gmail.com</td>
                  <td class="sorting_1">Gaurella-Pendra-Marwahi</td>
                  <td class="sorting_1">Gaurella</td>
                  <td><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#adduser">Edit</button></td>
                  <td><button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#alert_delete_modal">Delete</button></td>
                </tr>
                </tbody>
              </table>
              </div>
              </div>
            <!-- /.card-body -->
          </div>
            </div>
        </div>
            </div>
        </div>

        
  <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="add user" aria-hidden="true" >
    <div class="modal-dialog">
      <div class="modal-content model-lg">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add a new user</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <div class="modal-body">
          <form @submit.prevent = "createuser">
          <div class="row p-3">
            <div class="col-12 form-group">
              <label data-error="wrong" data-success="right" for="user_name">Name</label>
              <input type="text" id="user_name" class="form-control validate">
            </div>
            <div class="col-12 form-group">
                <label data-error="wrong" data-success="right" for="defaultForm-email">Email Id</label>
                <input type="email" id="defaultForm-email" class="form-control validate">
            </div>
            <div class="col-12 form-group">
                <label data-error="wrong" data-success="right" for="mobile_number">Mobile Number</label>
                <input type="number" id="mobile_number" class="form-control validate">
            </div>
            <div class="col-12 form-group">
                <label data-error="wrong" data-success="right" for="aadhar_number">Aadhar Card Number</label>
                <input type="number" id="aadhar_number" class="form-control validate">
            </div>
            <div class="col-12 form-group">
              <label data-error="wrong" data-success="right" for="role">Role</label>
                <select id="role" class="form-control" name="role">
                    <option value="1">Admin</option>
                    <option value="2">Soil Distributer</option>
                    <option value="3">Soil Tester</option>                    
                </select>
            </div>

          </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Add User</button>
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
            Are you sure to delete the selected user?
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
      data(){
        return {
          form: new Form({
              name:'',
              email:'',
              mobile:'',
              farmer_id_card:'',
              aadhar_card:'',
              role:'',
          })
        }
      },
      methods:{
          createuser()
          {
            this.form.post('api/user');
          }
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
