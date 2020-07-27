<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-12">
             <div class ="card card-default">
                  <div class ="card-header">
                    <center>
                      <form @submit.prevent="soiltesting" @keydown="form.onKeydown($event)">
                    <div class="col-md-8 form-inline">
                    <!-- <div class="col-md-2"> -->
                    <!-- <label class="form-inline">Cycle</label> -->
                      <!-- <select id="cycle" class="form-control" name="role" value ="">
                          <option value="c1">'Cycle 1'</option>
                          <option value="c2">'Cycle 2'</option>          
                      </select> -->
                    <!-- </div> -->
                    
                    <div class="col-md-12" style="margin:0px">
                      <center>
                      <button type="submit" class="btn btn-primary btn-block">REQUEST FOR SOIL TESTING</button>      
                      </center>
                 </div>
                    
                 <!-- <div class="col-md-2"  style="margin:0px"> -->
                      <!-- <select id="year" class="form-control disabled" name="year" value ="">
                          <option value="2019-2020">2019-2020</option>
                          <option value="2019-2020">2020-2021</option>          
                      </select> -->
                 <!-- </div> -->

                  </div>
                  </form>
                    </center>
                  </div>

                 <div class="card-body">
                    <div  class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"></div>
                            <div class="col-sm-12 col-md-6"></div>
                        </div>
                        <div class="row">
                           <div class="col-md-12" style= "overflow-x:auto;">
                                <table id="display soil process" class="table table-bordered table-hover" role="grid">
                                       <thead class="thead-dark">
                                          <tr role="row">
                                              <th>SNo</th>
                                              <th>Date</th>
                                              <th>ph</th>
                                              <th>Nitrogen</th>
                                              <th>Phosphorus</th>
                                              <th>Potasium</th> 
                                              <th>rainfall</th>
                                              <th>temprature</th>
                                              <th>Recommended Crop</th>
                                              <th>Status</th>
                                           </tr>
                                </thead>
                                        <tbody>
                                      <tr v-for="(soil,index) in soilreport" :key="soil.id" i=index> 
                                        <td>{{index+1}}</td>
                                       <td>{{soil.created_at  | stddate}}</td>
                                       <td>{{soil.ph}}</td>
                                       <td>{{soil.nitrogen}}</td>
                                       <td>{{soil.phosphorus}}</td>
                                       <td>{{soil.potasium}}</td>
                                       <td>{{soil.rainfall}}</td>
                                       <td>{{soil.temprature}}</td>
                                       <td>{{soil.recommended_crop}}</td>
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
     //   this.$progressbar.start();
          axios.post('/soiltesting');
       //   this.$progressbar.finish();
      },
      loaddata(){
           axios.get('/soiltesting').then(({ data })=>{this.soilreport = data});
      }
  },mounted()
    {
        this.loaddata();
    }
}
</script>
