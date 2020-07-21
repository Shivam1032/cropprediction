<template>
  <div class="container">
      <div class="row justify-content-center mt-3">
         <div class="col-md-8">
             <div class ="card card-default">
                  <div class="card-header">
                    <h4 class="card-title">Submit Application Form</h4>
                  </div>
                 <div class="card-body">
                        
                        <div class="row">
                           <form class="form form-horizontal" @>
                            <div class="form-body">
                                <div class="row p-4">
                                    <div class="col-md-4">
                                        <label>Full Name<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="full-name" class="form-control" name="Full Name" placeholder="Full Name" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Product Type<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="role" class="form-control" name="role" value ="">
                                            <option value="cereals">'cereals</option>
                                            <option value="nuts">nuts</option>
                                            <option value="others">others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Product Name<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="text" id="product-name" class="form-control" name="Product Name" placeholder="Product Name" required>
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
                                        <label>Offer Price<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-3 form-group">
                                        <input type="number" id="oprice" class="form-control" name="oprice" placeholder="Price in Rs." required>
                                    </div>
                                    <div class="col-md-2 justify-content-center">per</div>
                                    <div class="col-md-3 form-group">
                                        <input type="number" id="oprice" class="form-control" name="oprice" placeholder="Quantity" required>
                                    </div>
                                    <div class="col-md-4">
                                        <label>State<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="role" class="form-control" name="role" value ="">
                                            <option value="abc">ABC</option>
                                            <option value="xyz">XYZ</option>
                                            <option value="others">others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>District<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="role" class="form-control" name="role" value ="">
                                            <option value="abc">ABC</option>
                                            <option value="xyz">XYZ</option>
                                            <option value="others">others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Contact<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="number" id="mobile-number" class="form-control" name="mobile" placeholder="Mobile Number">
                                    </div>
                                    <div class="col-md-4">
                                        <label>Email<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary btn-block mr-1 mb-1">Submit</button>
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
