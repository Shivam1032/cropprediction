<template>
    <div class="container mt-3">
        <div class="row">

          
          <div class="col-lg-3 col-md-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner" style="text-align:center;">
                <h3>WHEAT</h3>

                <p>Recommended Crop</p>
              </div>
              
              <router-link to="/about crop" class="nav-link small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
          <div class="col-lg-3 col-md-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner" style="text-align:center;">
                <h3>Required</h3>

                <p>Soil testing</p>
              </div>
              <router-link to="/" class="nav-link small-box-footer">
                    More info <i class="fas fa-arrow-circle-right"></i>
              </router-link>
            </div>
          </div>
  
        </div>

        <div class="row">
          <div class="col-md-8 col-12">
            <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              
              <div class="dataTables_wrapper dt-bootstrap4">
                 <div class="row">
                   <div class="col-12">
                     <center>
                       <h3><b>Latest Bids</b></h3>
                     </center>
                     </div>
                     <div class="col-sm-12">
              <table id="example2" class="table table-bordered table-hover dataTable dtr-inline table-responsive" role="grid" >
                        <thead class="">
                            <tr role="row">
                                <th>Buyer Name</th>
                                <th>Contact Info</th>
                                <th>Offer Price</th>
                                <th>Per</th>
                                <th>Quantity Needed</th>
                                <th>Accept</th>
                                <th>Decline</th>
                            </tr>
                        </thead>
                            <tbody>
                            <tr> 
                                <td>Animesh Shukla</td>
                                <td>7894561230</td>
                                <td>500</td>
                                <td>kg</td>
                                <td>500</td>
                                <td><button type="button" class="btn btn-primary btn-block">Accept</button></td>
                                <td><button type="button" class="btn btn-danger btn-block">Decline</button></td>
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
          <div class="col-md-4 col-12">
            <div class="card">
              <div class="card-header ui-sortable-handle" style="cursor: move;">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Latest Updates
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">«</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">»</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list ui-sortable">
                  <li class="done">
                    <span class="">Latest News</span>
                  </li>
                  <li class="done">
                    <span class="">News1</span>
                  </li>
                  <li class="done">
                    <span class="">News 2</span>
                  </li>
                  <li class="done">
                    <span class="">News 3</span>
                  </li>
                  <li class="done">
                    <span class="">News 4</span>
                  </li>
                  <li class="done">
                    <span class="">News5</span>
                  </li>

                </ul>
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
