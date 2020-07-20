<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-8">
             <div class ="card card-default">
                  <div class="card-header">
                    <h4 class="card-title">Farmer Id : </h4>
                    <div class="input-group">     
                                  
                              <input type="text" class="form-control">
                                  <div class="input-group-append">
                                     <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i></button>
                                  </div>
                                  <!-- <button  class="btn btn-primary ml-2 mr-4" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"></i></button> -->
                          </div>
                  </div>
                 <div class="card-body">
                    <div  class="dataTables_wrapper dt-bootstrap4">
                        
                        <div class="row">
                           <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row p-4">
                                    <div class="col-md-4">
                                        <label>Sample Number</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="sample_no" placeholder="2" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Farmer Name</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="farmer_name" placeholder="Farmer Name" disabled>
                                    </div>
                                    <div class="col-md-4">
                                        <label>pH</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="pH" placeholder="pH">
                                    </div>
                                    <div class="col-md-4">
                                        <label>N</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="N" placeholder="N">
                                    </div>
                                    <div class="col-md-4">
                                        <label>P</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="P" placeholder="P">
                                    </div>
                                    <div class="col-md-4">
                                        <label>K</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="first-name" class="form-control" name="K" placeholder="K">
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                                        <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </div>   
                     </div>
             </div>
         </div>

         <div class="modal fade text-left modal-borderless" id="one_report_modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-scrollable modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h3 class="modal-title">Report(Sno./Farmer Id)</h3>
                        <button type="button" class="close rounded-pill" data-dismiss="modal" aria-label="Close">
                            <i class="bx bx-x"></i>
                        </button>
                    </div>
                    <div class="modal-body">
                        
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
        report:{};
    }
    ,mounted()
    {
        console.log('Component Mounted')

    },methods:{
        loadreport()
        {
            axios.get("api/soiltesting").then(({ data })=>{this.report = data});
        }
    }
}
</script>
