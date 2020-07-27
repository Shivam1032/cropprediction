<template>
  <div class="container">
      <div class="row justify-content-center">
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
                                        <label>Product Name<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="role" class="form-control" name="role" value ="">
                                            <option value="cereals">cereals</option>
                                            <option value="nuts">nuts</option>
                                            <option value="others">others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Product Variety<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="role" class="form-control" name="role" value ="">
                                            <option value="cereals">cereals</option>
                                            <option value="nuts">nuts</option>
                                            <option value="others">others</option>
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

                                    <div class="col-md-4">
                                        <label>Contact<span style="color:#ff0000;">*</span></label>
                                    </div>

                                    <div class="col-md-8 form-group">
                                        <input type="number" id="mobile-number" class="form-control" name="mobile" placeholder="Mobile Number">
                                    </div>

                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-block mr-1 mb-1 btn-success">Sell</button>
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
            form:new Form({
                
            }),

        }
    },methods:{
        loadreport()
        {
          //  axios.get("api/soiltesting").then(({ data })=>{this.report = data});
        },
        searchrequest()
        {
           axios.get('');
        },getproduct()
        {

        }
    }
}

</script>
