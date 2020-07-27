<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
        <div class="col-md-4">
            <div class ="card card-default">
                
                <div class ="card-header">
                    <h3><center>Labour Requirement</center></h3>
                </div>

                    <div class="card-body" style="padding:0px;">
                        <img src="/image/farmer1.jpg" class="img-fluid" >
                    </div>  

                    <div class ="card-footer">
                        <form  @submit.prevent="sendlabourrequest" @keydown="form.onKeydown($event)">
                            <button type="submit" class="btn btn-primary btn-block mr-1 mb-1">Request</button>
                        </form>
                    </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class ="card card-default">
                <div class ="card-header">
                    <h3><center>Irrigation Aids</center></h3>
                </div>

                    <div class="card-body" style="padding:0px;"> 
                        <img src="/image/farmer1.jpg" class="img-fluid">
                    </div> 

                     <div class ="card-footer">
                            <form  @submit.prevent="sendirrigationrequest" @keydown="form.onKeydown($event)">
                            <button type="submit" class="btn btn-primary btn-block mr-1 mb-1">Request</button>
                            </form>
                    </div>
            </div>
        </div>
        
        <div class="col-md-4">
            <div class ="card card-default">
                <div class ="card-header">
                    <h3><center>Farm Machinary</center></h3>
                </div>
                    <div class="card-body" style="padding:0px;" >
                        <img src="/image/farmer1.jpg" class="img-fluid">
                    </div>   
                    <div class ="card-footer">
                            <form  @submit.prevent="sendmachinerequest" @keydown="form.onKeydown($event)">
                                <button type="submit" class="btn btn-primary btn-block mr-1 mb-1">Request</button>
                            </form>
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
    },
    data(){
        return{

        }
    },methods:{

        sendlabourrequest(){
            swal.fire({
                    title: 'Are you sure?',
                    text: "You want to submit labour request",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Submit'})
                    .then((result) => 
                        {
                        if (result.value)
                            {
                                                        
                                  axios.post('/request',{description:'Needed Labour'}).then(()=>{
                                      swal.fire('Submitted','Your Request has been Succesfully Submitted','success')
                                  })
                                  axios.post('/history',{description:'Labour Request'})
                                  
                            }
                        })
        },
        sendirrigationrequest(){
            swal.fire({
                    title: 'Are you sure?',
                    text: "You want to submit Irrigation request",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Submit'})
                    .then((result) => 
                        {
                        if (result.value)
                            {
                                                        
                                  axios.post('/request',{description:'IRRIGATION HELP'}).then(()=>{
                                      swal.fire('Submitted','Your Request has been Succesfully Submitted','success')
                                  })
                                  axios.post('/history',{description:'Irrigation Request'})
                                  
                            }
                        })
        },
        sendmachinerequest(){

             swal.fire({
                    title: 'Are you sure?',
                    text: "You want to submit Machine request",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Submit'})
                    .then((result) => 
                        {
                        if (result.value)
                            {
                                                        
                                  axios.post('/request',{description:'MACHINE REQUIRED'}).then(()=>{
                                      swal.fire('Submitted','Your Request has been Succesfully Submitted','success')
                                  })
                                  axios.post('/history',{description:'Machine Request'})
                                  
                            }
                        })
        }
    }
}
</script>
