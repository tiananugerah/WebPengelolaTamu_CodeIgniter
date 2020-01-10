
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Account</div>
      <div class="card-body">
        <form>
          <div class="form-group">
            <div class="form-row">
              <label for="exampleInputLastName">Username</label>
              <input class="form-control" id="exampleInputLastName" value="<?php echo $_SESSION['username'] ;?>" type="text" aria-describedby="nameHelp" placeholder="Enter last name">
            </div>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input class="form-control" id="exampleInputEmail1" value="<?php echo $_SESSION['email'] ;?>" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <label for="exampleInputPassword1">New Password</label>
                <input class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
              </div>
              <div class="col-md-6">
                <label for="exampleConfirmPassword">Confirm password</label>
                <input class="form-control" id="exampleConfirmPassword" type="password" placeholder="Confirm password">
              </div>
            </div>
          </div>
          <a class="btn btn-primary btn-block" href="index.php">Simpan</a>
      </div>
    </div>