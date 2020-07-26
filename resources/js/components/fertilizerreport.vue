<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-12">
             <div class ="card card-default">
                  <div class="card-header">
                    <h4 class="card-title">Fertilizer Report</h4>
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
                           <div class="col-sm-12 table-responsive">
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid">
                                       <thead>
                                             <tr role="row">
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="sr">Sr. No.</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="dist_date">Distribution Date</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="f_id">Farmer Id</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="seed_name">Fertilizer Name</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="seed_variety">Fertilizer Variety</th> 
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="qty">Quantity</th>
                                             </tr>

                                        </thead>
                                        <tbody>
                                         <tr> 
                                             <td>1</td>
                                             <td>20-06-2020</td>
                                             <td>101</td>
                                             <td>ABCD</td>
                                             <td>XYZ</td>
                                             <td>25kg</td>
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
