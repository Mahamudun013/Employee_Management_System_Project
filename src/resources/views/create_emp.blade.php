@include('header')

<div class="container">
    <h1 class="well">Employer Registration Form</h1>
  <div class="col-lg-12 well">
    <div class="row">
       <form  method="post" action="{{url('/store') }}">
       	{{csrf_field()}}
          <div class="col-sm-12">              
              <div class="form-group">
                <label>Employer Id</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Id Here.." class="form-control" 
                name="employer_id" required>
              </div>


              <div class="form-group">
                <label>Employer Name</label><span class="error">*</span>
                <input type="text" placeholder="Enter Employer Name Here.." class="form-control" 
                name="employer_name" required>
              </div>


              <div class="form-group">
                <label>Address</label><span class="error">*</span>
                <textarea placeholder="Enter Address Here..." class="form-control" name="address"> </textarea>
              </div>
              
            

            <div class="form-group">
             <label>Phone Number</label><span class="error">*</span>
             <input type="text" placeholder="Enter Phone Number Here.." class="form-control" 
             name="phone_number" required>
             </div>  

             <div class="form-group">
             <label>Refference Name</label><span class="error">*</span>
             <input type="text" placeholder="Enter Refference Name Here.." class="form-control" 
             name="ref_name" required>
             </div>  

             <div class="form-group">
             <label>Refference person Phone</label><span class="error">*</span>
             <input type="text" placeholder="Enter Phone Number Here.." class="form-control" 
             name="ref_phone_number" required>
             </div>  

            <div class="form-group">
              <label>Employer Picture</label><span class="error">* (jpg, jpeg, png, gif)</span>
              <input type="file" placeholder="" class="form-control" name="image" >
            </div> 


            <button type="submit" class="btn btn-primary" name="submit">Submit</button>&nbsp&nbsp&nbsp&nbsp&nbsp
            <button type="reset" class="btn btn-danger" name="reset">Reset</button>      
          </div>
        </form> 
        </div>
  </div>
</div>
</body>
</html>