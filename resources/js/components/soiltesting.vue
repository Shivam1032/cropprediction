<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-12">
             <div class ="card card-default">
                  <div class ="card-header">
                <form id="logout-form" action=" " method="POST" style="display: none;">
                      @csrf
                      <button type="submit" class="btn btn-primary btn-block"> REQUEST FOR SOIL TESTING</button>
                </form>

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
                     </div>
             </div>
         </div>
      </div>    
  </div>
  </div>
</template>

<script>
export default {
  data()
  {

  },created()
  {
      
  },
    mounted()
    {
        console.log('Component Mounted')
    }
}
</script>
