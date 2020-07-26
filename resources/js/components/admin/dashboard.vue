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
              
              <router-link to="/manageuser" class="nav-link small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
              </router-link>
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
              
              <router-link to="/manageuser" class="nav-link small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner" style="text-align:center;">
                <h3>44</h3>

                <p>Kg of Fertilizer Distributed</p>
              </div>
              
              <router-link to="/manageuser" class="nav-link small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
              </router-link>    
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-md-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner" style="text-align:center;">
                <h3>65</h3>

                <p>kg of Seed Distributed</p>
              </div>
              <router-link to="/manageuser" class="nav-link small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
              </router-link>
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
                       <h3><b>User Problem Reports(Dist_Name)</b></h3>
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
          <div class="col-md-6 col-12">
            <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              
              <div class="dataTables_wrapper dt-bootstrap4">
                 <div class="row">
                   <div class="col-12">
                     <center>
                       <h3><b>Soil Testing Reports</b></h3>
                     </center>
                     </div>
                     <div class="col-sm-12">
               <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid">
                                       <thead>
                                             <tr role="row">
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Farmer Id">Farmer id</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Sample Number">Sample No.</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="pH">pH(0-14)</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Nitrogen">N</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Phosphores">P</th> 
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Potesium">K</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Status">status</th>
                                             </tr>

                                        </thead>
                                        <tbody>
                                         <tr role="row" class="odd"> 
                                             <td>123</td>
                                             <td>23</td>
                                             <td >124</td>
                                             <td >543</td>
                                             <td >87</td>
                                             <td >09</td>
                                             <td >closed</td>
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
