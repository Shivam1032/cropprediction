<template>

  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-8">
             <div class ="card card-default">

                  <div class="card-header">
                      <form @submit.prevent="checkrequest">
                    <h4 class="card-title">Sample No : </h4>
                    <div class="input-group">          
                        <input type="text" class="form-control" name=search id=search v-model="search">
                           <div class="input-group-append">
                                 <button type="submit" class="btn btn-secondary" ><i class="fas fa-search"></i></button>     
                            </div>
                        <!-- <button  class="btn btn-primary ml-2 mr-4" data-toggle="modal" data-target="#adduser"><i class="fa fa-plus"></i></button> -->
                          </div>
                          </form>
                          <!-- /card header -->
                  </div>


                 <div class="card-body">
                    <div  class="dataTables_wrapper dt-bootstrap4">
                        <div class="row">
                           <form class="form form-horizontal" @submit.prevent="updatereport">
                            <div class="form-body">
                                <div class="row p-4">
                                    
                                    <div class="col-md-4">
                                        <label>Farmer id</label>
                                    </div>
                                    
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="sampleno" class="form-control" names="sample_no" disabled>
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <label>Farmer Name</label>
                                    </div>
                                    
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="name" class="form-control" name="farmer_name" placeholder="Farmer Name" disabled>
                                    </div>

                                    <div class="col-md-4">
                                        <label>pH</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="ph" class="form-control" name="pH" placeholder="pH">
                                    </div>
                                    <div class="col-md-4">
                                        <label>N</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="nitrogen" class="form-control" name="N" placeholder="N">
                                    </div>
                                    <div class="col-md-4">
                                        <label>P</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="phosphorus" class="form-control" name="P" placeholder="P">
                                    </div>
                                    <div class="col-md-4">
                                        <label>K</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="pottasium" class="form-control" name="K" placeholder="K">
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary mr-1 mb-1">Update</button>
                                
                                        <!-- <button type="reset" class="btn btn-light-secondary mr-1 mb-1">Reset</button> -->
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

        <!-- CARD CARD-DEFAULT-->
            </div>
    <!-- COL MD 8 -->
        </div>  
  <!-- /CONTENT CENTER  -->
    </div>
<!-- /container -->
 </div> 
  </div>
  
</template>

<script>
export default {
    data(){
        return{
            report:[],
            user:[],
            search:'',
             form : new Form({
                 Rainfall:'400',
                 Temprature:'255',
                  Nitrogen:'36',
                  Phosphorus:'42',
                  Potassium:'24',
                  Ph:'6.4'

             }),
        }
    },methods:{
        // var app :this,

        checkrequest(){
          axios.post('http://127.0.0.1:5000/predict',{
                Rainfall: '452.98507',
                Temprature:'23.34327',
                Nitrogen:'10',
                Phosphorus:'15',
                Potassium:'230',
                Ph:'6.7',
           })
            // }).then(response=>{}
            // ).catch(e=>{
            //     // this.errors.push(e)
            //     console.warn(e);
            // })


        // this.form.post('https://predictionkiloapi.herokuapp.com/predict');

        },
        updatereport()
        {
                id = this.search;
               // console.log(id);
                axios.get('/soiltesting/'+{id});
        },
        searchrequest(id)
        {
             id = this.search;
            axios.get('/soiltesting/'+id).then(({data})=>{this.user=data});
        }
    },mounted(){
            this.checkrequest();
    }

}

</script>
