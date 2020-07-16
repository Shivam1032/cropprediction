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
                  <td><button type="button" class="btn btn-primary btn-block">Edit</button></td>
                  <td><button type="button" class="btn btn-danger btn-block">Delete</button></td>
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
        <h5 class="modal-title" id="exampleModalLabel">Add User</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>

      <div class="modal-body">
        <form @submit.prevent = "createuser">
         <div class="form-group row">
            <label data-error="wrong" data-success="right" for="defaultForm-email">Your email</label>
          <input type="email" id="defaultForm-email" class="form-control validate">
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
