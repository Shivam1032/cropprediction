<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-12">
             <div class ="card card-default">
                  <div class ="card-header">
                    <label>Cycle</label>
                      <select id="cycle" class="form-control" name="role" value ="">
                          <option value="c1">{{ __('Cycle 1') }}</option>
                          <option value="c2">{{ __('Cycle 2') }}</option>
                                  
                      </select>

                       <form id="logout-form" @submit.prevent="soiltesting" @keydown="form.onKeydown($event)">
                      <button type="submit" class="btn btn-primary btn-block">REQUEST FOR SOIL TESTING</button>
                </form>
                  </div>

                 <div class="card-body">
                    <div  class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                           <div class="col-sm-12" style= "overflow-x:auto;">
                                <table id="display soil process" class="table table-bordered table-hover dataTable dtr-inline" role="grid">
                                       <thead class="thead-dark">
                                          <tr role="row">
                                              <th>Date</th>
                                              <th>Description</th>
                                           </tr>
                                </thead>
                                        <tbody>
                                      <tr v-for="soil in soilreport" :key="soil.id"> 
                                       <td>{{soil.created_at  | stddate}}</td>
                                        <td>{{soil.status}}</td>
                  <!-- <td>{{this.data}}</td> -->
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
    return{
      form :new Form({
        name:''
      }),
      soilreport:{}
    }
  },methods:{
      soiltesting(){
          axios.post('http://127.0.0.1:8000/soiltesting');
      },
      loaddata(){
           axios.get('http://127.0.0.1:8000/soiltesting').then(({ data })=>{this.soilreport = data});
      }
  },mounted()
    {
        this.loaddata();
    }
}
</script>
