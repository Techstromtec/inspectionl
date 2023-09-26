<!-- Footer-->
<footer class="content-footer footer bg-footer-theme">
  <div class="{{ (!empty($containerNav) ? $containerNav : 'container-fluid') }} d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
    <div class="mb-2 mb-md-0">
      © <script>
        document.write(new Date().getFullYear())

      </script>
      , Copy right by <a href="{{ (!empty(config('variables.creatorUrl')) ? config('variables.creatorUrl') : '') }}" target="_blank" class="footer-link fw-bolder">{{ (!empty(config('variables.creatorName')) ? config('variables.creatorName') : '') }}</a>
    </div>
    
  </div>
</footer>
<!--/ Footer-->

 <!-- Offcanvas to add new user -->
 <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" aria-labelledby="offcanvasAddUserLabel">
      <div class="offcanvas-header">
         <h5 id="offcanvasAddUserLabel" class="offcanvas-title">Add User</h5>
         <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body mx-0 flex-grow-0">
         <form class="add-new-user pt-0 fv-plugins-bootstrap5 fv-plugins-framework" id="addNewUserForm" novalidate="novalidate">
            <input type="hidden" name="id" id="user_id" value="">
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-fullname">User Name</label>
               <input type="text" class="form-control" id="add-user-username" placeholder="John Doe" name="name" aria-label="John Doe" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-password">Password</label>
               <input type="password" id="add-user-password" name="password" class="form-control" placeholder="********" aria-label="" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-fullname">Full Name</label>
               <input type="text" class="form-control" id="add-user-fullname" placeholder="John Doe" name="name" aria-label="John Doe" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-email">Email</label>
               <input type="text" id="add-user-email" class="form-control" placeholder="john.doe@example.com" aria-label="john.doe@example.com" name="email" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-contact">Mobile</label>
               <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+91 999 999 9999" aria-label="john.doe@example.com" name="userContact" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            
            <div class="mb-3">
               <label class="form-label" for="country">State</label>
               <div class="position-relative">
                  <select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
                     <option value="" data-select2-id="2">Select</option>
                     <option value="Australia">Australia</option>
                     <option value="Bangladesh">Bangladesh</option>
                  </select>
                  
               </div>
            </div>
            <div class="mb-3">
               <label class="form-label" for="country">City</label>
               <div class="position-relative">
                  <select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
                     <option value="" data-select2-id="2">Select</option>
                     <option value="Australia">Australia</option>
                     <option value="Bangladesh">Bangladesh</option>
                  </select>
                  
               </div>
            </div>
            <div class="mb-3">
               <label class="form-label" for="country">Locality</label>
               <div class="position-relative">
                  <select id="country" class="select2 form-select select2-hidden-accessible" data-select2-id="country" tabindex="-1" aria-hidden="true">
                     <option value="" data-select2-id="2">Select</option>
                     <option value="Australia">Australia</option>
                     <option value="Bangladesh">Bangladesh</option>
                  </select>
                 
               </div>
            </div>
            <div class="mb-3 fv-plugins-icon-container">
               <label class="form-label" for="add-user-contact">PIN Code</label>
               <input type="text" id="add-user-contact" class="form-control phone-mask" placeholder="+91 999 999 9999" aria-label="john.doe@example.com" name="userContact" value="">
               <div class="fv-plugins-message-container invalid-feedback"></div>
            </div>
            <button type="submit" class="btn btn-primary me-sm-3 me-1 data-submit">Submit</button>
            <button type="reset" class="btn btn-label-secondary" data-bs-dismiss="offcanvas">Cancel</button>
            <input type="hidden">
         </form>
      </div>
   </div>
