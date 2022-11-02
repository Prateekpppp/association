<div class="row">
  <form class="row g-3 queryform px-md-4 col-md-12" id="frominputs">
    <div class="col-md-12">
      <label for="frominput1" class="form-label">Name</label>
      <input name='name' name='name' type="name" class="form-control" id="frominput1">
      <input name='admin_name' type="hidden" value="<?php if($row){ echo $row['name'];} else { echo $admin_name;} ?>">
      <input name='admin_mail' type="hidden" value="<?php if($row){ echo $row['email'];} else { echo $admin_mail;} ?>">
    </div>
    <div class="col-md-12">
      <label for="frominput2" class="form-label">Phone</label>
      <input name='phone' type="text" class="form-control" id="frominput2" minlength="10" maxlength="10">
    </div>
    <div class="col-md-12">
      <label for="frominput3" class="form-label">Email</label>
      <input name='email' type="email" class="form-control" id="frominput3">
    </div>
    <div class="col-md-12">
      <label for="frominput4" class="form-label">Query</label>
      <input name='query' type="text" class="form-control" id="frominput4">
    </div>
  </form>
  <div class="col-12 p-4">
    <button id="submit_form" class="btn text-dark btn-primary mx-auto submit">Send</button>
  </div>
  <div id='error' class="max-content mx-auto mt-3 text-dark"></div>
</div>
