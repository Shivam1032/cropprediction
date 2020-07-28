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
                           <form class="form form-horizontal" @submit.prevent="postproduct" @keydown="form.onKeydown($event)">
                            <div class="form-body">
                                <div class="row p-4">
                                    
                                    <div class="col-md-4">
                                        <label>Product Name<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="name" class="form-control" name="role" v-model="form.name">
                                            <option value="cereals">cereals</option>
                                            <option value="nuts">nuts</option>
                                            <option value="others">others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Product Variety<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-8 form-group">
                                        <select id="variety" class="form-control" name="role" v-model ="form.variety">
                                            <option value="cereals">cereals</option>
                                            <option value="nuts">nuts</option>
                                            <option value="others">others</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label>Quantity<span style="color:#ff0000;">*</span></label>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <input type="number" id="qty" class="form-control" name="quantity" placeholder="Quantity" v-model ="form.qty" required>
                                    </div>
                                    <div class="col-md-4 form-group">
                                        <select id="role" class="form-control" name="role" v-model ="form.uom">
                                            <option value="kg">'kg'</option>
                                            <option value="tonne">'tonne'</option>
                                        </select>
                                    </div>

                                    <div class="col-md-4">
                                        <label>Contact<span style="color:#ff0000;">*</span></label>
                                    </div>

                                    <div class="col-md-8 form-group">
                                        <input type="number" id="mobile-number" class="form-control" name="mobile" placeholder="Mobile Number" v-model ="form.contact">
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
                name:'',
                variety:'',
                qty:'',
                uom:'',
                contact:'',
            }),

        }
    },methods:{
    postproduct()
    {
        swal.fire({
                    title: 'Are you sure?',
                    text: "You want to Sell Product",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Submit'})
                    .then((result) => 
                        {
                        if (result.value)
                            {
                                                        
                                  this.form.post('/sell').then(()=>{
                                      swal.fire('Submitted','Your Product is on sale','success');
                                      axios.post('/history',{description:'Your product ' + this.form.name + ' is on sale'});
                                  }).catch(()=>{
                                      swal.fire('ERROR','SOMETHING WENT WRONG','error');
                                  })
                                  
                                  
                            }
                        })

    },
    }
}

</script>
