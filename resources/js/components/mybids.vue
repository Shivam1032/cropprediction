<template>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <div class="card">
            <div class="card-header">
              <h4 class="card-title">My Bids</h4>
              <div class="card-tools">
                    <div class="input-group">     
                            <input type="text" class="form-control">
                            <div class="input-group-append">
                               <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i></button>
                            </div>

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

                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Bidding No">Bidding No.</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Farmer Name">Farmer Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Product Name">Product Name</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Bid Amount">Bid Amount</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Quantity">Quantity</th>
                    <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1" colspan="1" aria-label="Quantity">Status</th>
                </tr>

                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td>1</td>
                  <td>XYZ</td>
                  <td>Wheat</td>
                  <td>535</td>
                  <td>10</td>
                  <td>Active</td>
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
