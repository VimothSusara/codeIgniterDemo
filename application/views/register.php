<?php include('templates/header.php') ?>

<div class="container shadow p-3 mb-5 bg-body-tertiary rounded mt-2" style="width: 500px;">
    <h2 class="mb-3 text-center text-primary">Register</h2>

    <?php echo form_open(); ?>

    <div class="row">
        <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input type="text" class="form-control" id="fname" name="fname">
        </div>
        <div class="col-md-6">
            <label for="lname" class="form-label ">Last Name</label>
            <input type="text" class="form-control" id="lname" name="lname">
        </div>
        <div class="col-md-12 mt-3 mb-3">
            <label for="email" class="form-label ">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-12 mb-3">
            <label for="formFile" class="form-label">Select a profile picture</label>
            <input class="form-control" type="file" id="profilePic" name="profilePic">
        </div>
        <div class="col-md-6">
            <label for="password1" class="form-label">Password</label>
            <input type="password" class="form-control" id="password1" name="password1">
        </div>
        <div class="col-md-6">
            <label for="password2" class="form-label ">Confirm Password</label>
            <input type="password" class="form-control" id="password2" name="password2">
        </div>
    </div>

    <div class="row justify-content-center"> <!-- Center the button -->
        <button type="submit" class="btn btn-primary mb-3 mt-4 col-md-4 fs-5">Register</button> <!-- Increase the width of the button -->
    </div>

    <p class="text-center">Already have an account? <span><a href="#" class="text-decoration-none fs-5 ms-2">Login</a></span></p>

    <!-- </form> -->
    <?php echo form_close(); ?>
</div>

<?php include('templates/footer.php') ?>