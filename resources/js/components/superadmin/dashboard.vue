<template>
    <div class="container mt-3">
        <div class="row">

          <div class="col-lg-3 col-md-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner" style="text-align:center;">
                <h3>150</h3>

                <p>Total Farmers</p>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner" style="text-align:center;">
                <h3>53</h3>

                <p>Total Buyers</p>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner" style="text-align:center;">
                <h3>44</h3>

                <p>Fertilizer Distribution Center</p>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner" style="text-align:center;">
                <h3>65</h3>

                <p>Soil testing Centers</p>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
  
        </div>

        <div class="row">
          <div class="col-md-6 col-12">
            <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              
              <div class="dataTables_wrapper dt-bootstrap4">
                 <div class="row">
                   <div class="col-12">
                     <center>
                       <h3><b>User Reports</b></h3>
                     </center>
                     </div>
                     <div class="col-sm-12">
              <table id="example2" class="table table-bordered table-hover dataTable dtr-inline table-responsive" role="grid" aria-describedby="User Managment">
                <thead>
                <tr role="row">
                    <th>S.No.</th>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Subject</th>
                    <th>Message</th>
                </tr>

                </thead>
                <tbody>
                <tr role="row" class="odd">
                  <td>1</td>
                  <td>Mohit Agrawal</td>
                  <td>nicemohit260@gmail.com</td>
                  <td>XYZ</td>
                  <td>Hello World!</td>
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
          <div class="col-md-6 col-12"></div>
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
