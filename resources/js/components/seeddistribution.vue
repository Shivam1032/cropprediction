<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-8">
             <div class ="card card-default">
                  <div class="card-header">
                    <h4 class="card-title">Sell Your Produce</h4>
                  </div>
                 <div class="card-body">
                        
                        <div class="row">
                           <form class="form form-horizontal">
                            <div class="form-body">
                                <div class="row p-4">
                                    <div class="col-md-4">
                                        <label>Aadhar or Farmer ID No<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="id-no" class="form-control" name="id-no" placeholder="Aadhar or Farmer ID No" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Product Type<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="role" class="form-control" name="role" value ="">
                                            <option value="wheat">Wheat</option>
                                            <option value="maize">Maize</option>
                                            <option value="rice">Rice</option>
                                            <option value="cotton">Cotton</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Seed Variety</label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="role" class="form-control" name="role" value ="">
                                            <option value="wheat">HI 8759</option>
                                            <option value="maize">HD 4728</option>
                                            <option value="rice">HW 5207</option>
                                            <option value="etc">etc</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Quantity<span style="color:#ff0000;">*</span></label>
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
                                    
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-block mr-1 mb-1">Done</button>
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
