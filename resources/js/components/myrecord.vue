
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
                    <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" role="grid" aria-describedby="User Managment">
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
computed:{
    loadhistory(){
        // var _this =this.user;
        // console.log(_this);
            axios.get(`api/history/${this.user}`).then(({ data })=>{this.history = data});
    }
},created()
    {
            this.$getLocation(options)
  .then(coordinates => {
    console.log(coordinates);
  });

        axios.get("/getuserid").then(({ data })=>{this.user = data});
       // this.loadhistory();
    }
    // ,mounted()
    // {
    //     axios.get("/getuserid").then(({ data })=>{this.id = data});
    //     // axios.get("/getuserid").then(({ data2 })=>{this.id = data2});
    // }
}
</script>
