<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
        <div class="col-md-4">
            <div class ="card card-default">
                <div class ="card-header">
                    <h3><center>Labour Requirement</center></h3>
                </div>

                    <div class="card-body" style="padding:0px;">
                        <img src="../../../public/image/farmer.jpg" class="img-fluid" >
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
                        <img src="../../../public/image/farmer.jpg" class="img-fluid">
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
                        <img src="/image/farmer.jpg" class="img-fluid">
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
         axios.post('http://127.0.0.1:8000/request',{
                 description:'Needed Labour'
        })

        axios.post('http://127.0.0.1:8000/history',{
                description:'Labour Request'
        })
        },

        sendirrigationrequest(){
         axios.post('http://127.0.0.1:8000/request',{
                    description:'IRRIGATION RELATED HELP '
         })

        axios.post('http://127.0.0.1:8000/history',{
                description:'Irrigation Request'
        })

        },
        sendmachinerequest(){
         axios.post('http://127.0.0.1:8000/request',{
                    description:'MACHINE REQUIRED '
         })
        axios.post('http://127.0.0.1:8000/history',{
                description:'Machine Request'
        })
        }
    }
}
</script>
