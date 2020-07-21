<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-12">
             <div class ="card card-default">
                  <div class="card-header">
                    <h4 class="card-title">Soil Reports</h4>
                    <!-- <div class="card-tools">
                          <div class="input-group">     
                                  <input type="text" class="form-control">
                                  <div class="input-group-append">
                                     <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i></button>
                                  </div> -->
                                  <!-- <button  class="btn btn-primary ml-2 mr-4" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"></i></button> -->
                          <!-- </div>
                     </div> -->
                  </div>
                 <div class="card-body">
                    <div  class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        
                        <div class="row">
                           <div class="col-sm-12 table-responsive">
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid">
                                       <thead>
                                             <tr role="row">
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Farmer Id">Farmer id</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Sample Number">Sample No.</th>
                                                <!-- <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Sample Number">District</th> -->
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="pH">pH(0-14)</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Nitrogen">N</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Phosphores">P</th> 
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Potesium">K</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Status">status</th>
                                             </tr>

                                        </thead>
                                        <tbody>
                                         <tr v-for="record in report" :key="record.id"> 
                                             <td>{{record.farmer_id}}</td>
                                             <td>{{record.id}}</td>
                                             <!-- <td>District</td> -->
                                             <td >{{record.ph}}</td>
                                             <td >{{record.N}}</td>
                                             <td >{{record.P}}</td>
                                             <td >{{record.K}}</td>
                                             <td >{{record.status}}</td>
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
  </div>
</template>

<script>
export default {
    data(){
        return{
        report:{}
        }
    }
    ,mounted()
    {
        console.log('Component Mounted')
        this.loadreport();

    },methods:{
        loadreport()
        {
            axios.get("/soiltesting").then(({ data })=>{this.report = data});
        }
    }
}
</script>
