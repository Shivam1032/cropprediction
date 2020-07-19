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
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-block mr-1 mb-1">Request</button>
                        </div>
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
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-block mr-1 mb-1">Request</button>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class ="card card-default">
                <div class ="card-header">
                    <h3><center>Farm Machinary</center></h3>
                </div>

                    <div class="card-body" style="padding:0px;" >
                        <img src="../../../public/image/farmer.jpg" class="img-fluid">
                    </div>   
                    <div class ="card-footer">
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary btn-block mr-1 mb-1">Request</button>
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
        console.log('Component Mounted')
    }
}
</script>
