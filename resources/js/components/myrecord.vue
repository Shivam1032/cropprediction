<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-12">
             <div class ="card card-default">
                  <div class ="card-header">
                      <center><h4><b>My Record</b></h4></center>
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
                    <th>Date</th>
                    <th>Description</th>
                </tr>
                </thead>

                <tbody>
                <tr v-for="his in history" :key="his.id"> 
                  <td>{{his.created_at  | stddate}}</td>
                  <td>{{his.description}}</td>
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
    data(){
        return{
        history:{},
        user:'',

        }
       },
methods:{
    start () {
        this.$Progress.start();
    },

    loadhistory(){
     this.$Progress.start();
     axios.get('/history').then(({ data })=>{this.history = data});
     this.$Progress.finish();
}},mounted()
    {
       
       // axios.get("/getuserid").then(({ data })=>{this.user = data});
       this.loadhistory();
       
    }
}
</script>
