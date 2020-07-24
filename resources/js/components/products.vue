


<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-8">
             <div class="card border-info text-center bg-transparent">
                                    <div class="card-content">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12 mb-50 d-flex justify-content-center">
                                                    <img src="/images/macbookpro.png" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                                                </div>
                                                <div class="col-md-6 col-sm-12 d-flex justify-content-center flex-column">
                                                    <h4>
                                                        <span class="badge badge-light-info">New Arrival</span>
                                                    </h4>
                                                    <p class="card-text">Mac Book.</p>
                                                </div>
                                            </div>
                                            <button class="btn btn-info mt-50">Buy Now</button>
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
            
        }
    }
    ,mounted()
    {
        console.log('Component Mounted')

    },methods:{
        loadreport()
        {
          //  axios.get("api/soiltesting").then(({ data })=>{this.report = data});
        },
        searchrequest()
        {
                axios.get('');
        }
    }
}

</script>

