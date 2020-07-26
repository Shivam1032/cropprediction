
<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
          <div class="col-md-12 p-2">
              
                <form class="form-inline ml-2">
                    <div class="lg-form my-0">
                        <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                    </div>
                    <button href="#" class="btn btn-primary btn-md my-0 ml-sm-2" type="submit">Search</button>
                </form>
              
          </div>
         <div class="col-md-12">
             <div class="card border-info text-center">
                <div class="card-content">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 mb-50 d-flex justify-content-center">
                                <img src="/image/favicon.ico" alt="element 04" width="150" class="float-left mt-1 img-fluid">
                            </div>
                        <div class="col-md-8 col-sm-12 d-flex flex-column">
                            
                            <div class="row">
                           <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row p-1">
                                    <div class="col-md-12">
                                        <h4><b>Wheat<small> (Id)</small></b></h4>
                           
                                        <label class="mr-4">Type : XYZ</label>
                         
                                        <label>MSP : &#8377;5690</label>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Quantity</label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="number" id="qty" class="form-control" name="quantity" placeholder="Quantity" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <select id="role" class="form-control" name="role" value ="">
                                            <option value="kg">'kg'</option>
                                            <option value="tonne">'tonne'</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Offer Price</label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="number" id="oprice" class="form-control" name="oprice" placeholder="Price in Rs." required>
                                    </div>
                                    <div class="col-md-2 justify-content-center">per</div>
                                    <div class="col-md-3 form-group">
                                        <input type="number" id="oprice" class="form-control sm" name="oqty" placeholder="Quantity" required>
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-info btn-block mt-50"><b>Bid</b></button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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

