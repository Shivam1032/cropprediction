<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
		<div class="col-md-8" >

			<div class="card">
                    <div class="card-content">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-12 col-sm-3">
                                            <img src="/image/user.jpg"  height="120" width="120">
                                        </div> 
                                        <div class="col-12 col-sm-9">
                                            <div class="row">
                                                <div class="col-12 text-center text-sm-left">
                                                    <!-- <h3 class="media-heading mb-0">{{user[0].name}}<i class="cursor-pointer bx bxs-star text-warning ml-50 align-middle"></i></h3> -->
                                                    <!-- <p class="text-muted align-top">{{user[0].role}}</p> -->
                                                </div>
                                                <div class="col-12 text-center text-sm-left">                               
                                                    <button class="btn btn-sm d-none d-sm-block float-right btn-primary">
                                                        <span>Edit</span>
                                                    </button>   
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- /card body -->
                        </div>

                    </div>
            </div>
            <div class="card">
                <div class="card-content">
                    <div class="card-body">
                        <h5 class="card-title">Basic details</h5>
                        <ul class="list-unstyled">
                        <br><br>
                            <li><i class="fa fa-map-marker mb-1 mr-2" style="color:#666699;"></i>Bihar</li>
                            <li><i class="fa fa-phone mb-1 mr-2" style="color:#666699;"></i>{{user[0].mobile}}</li>
                            <li><i class="fa fa-calendar mb-1 mr-2" style="color:#666699;"></i>July 10</li>
                            <li><i class="fa fa-envelope mb-1 mr-2" style="color:#666699;"></i>{{user[0].email}}</li>
                        </ul>
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
        this.loadprofile();
    },data(){
        return{
            user:[],
        }
    },methods:{
        loadprofile(){
             axios.get("http://127.0.0.1:8000/user").then(({ data })=>{this.user = data});
        }
    }
}
</script>
