<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-12">
             <div class ="card card-default">
                  <div class="card-header">
                    <h4 class="card-title">All Reports</h4>
                    <div class="card-tools">
                          <div class="input-group">     
                                  <input type="text" class="form-control">
                                  <div class="input-group-append">
                                     <button type="submit" class="btn btn-secondary"><i class="fas fa-search"></i></button>
                                  </div>
      
                                  <button  class="btn btn-primary ml-2 mr-4" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"></i></button>
                          </div>
                     </div>
                  </div>
                 <div class="card-body">
                    <div  class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        
                        <div class="row">
                           <div class="col-sm-12">
                                <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid">
                                       <thead>
                                             <tr role="row">
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Farmer Id">Farmer id</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Sample Number">Sample No.</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Sample Number">District</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="pH">pH(0-14)</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Nitrogen">N</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Phosphores">P</th> 
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="Potesium">K</th>
                                                <th class="sorting" tabindex="0"  rowspan="1" colspan="1" aria-label="">Update</th>   
                                             </tr>

                                        </thead>
                                        <tbody>
                                          <tr role="row" class="odd">
                                             <td class="" tabindex="0">1</td>
                                             <td>23</td>
                                             <td>District</td>
                                             <td class="sorting_1">313</td>
                                             <td class="sorting_1">111</td>
                                             <td class="sorting_1">111</td>
                                             <td class="sorting_1">111</td>
                                             <td><button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#one_report_modal">Update</button></td>
                                          </tr>
                                         </tbody>
                                </table>
                          </div>
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
                        <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row">
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
                                    
                                    <div class="col-sm-12 d-flex justify-content-end">
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
      </div>    
  </div>
  </div>
</template>

<script>
export default {
    mounted()
    {
        console.log('Component Mounted')
    }
}
</script>
