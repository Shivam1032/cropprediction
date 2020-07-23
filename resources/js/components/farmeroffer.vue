<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-12">
             <div class ="card card-default">
                  <div class ="card-header">
                      <center><h4>Product Name : XYZ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Available Quantity : 1000kg.</h4></center>
                  </div>
                 <div class="card-body">
                <div  class="dataTables_wrapper dt-bootstrap4">
                  <div class="row">
                      <div class="col-sm-12 col-md-6"></div>
                      <div class="col-sm-12 col-md-6"></div>
                    </div>
                 <div class="row">
                     <div class="col-sm-12 table-responsive">
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" >
                        <thead class="thead-dark">
                            <tr role="row">
                                <th>Buyer Name</th>
                                <th>Contact Info</th>
                                <th>Offer Price</th>
                                <th>Per</th>
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
                                <td><button type="button" class="btn btn-primary btn-block">Accept</button></td>
                                <td><button type="button" class="btn btn-danger btn-block">Decline</button></td>
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

