<?php include('templates/header.php') ?>

<div class="container shadow p-3 mb-5 bg-body-tertiary rounded mt-5" style="width: 500px;">
    <h2 class="mb-1 text-center text-primary">Login</h2>

    <?php if ($this->session->flashdata('errmsg')) {
        echo "<h6 class='text-danger text-center mt-3'>" . $this->session->flashdata('errmsg') . "</h6>";
    }
    ?>
    
    <?php echo validation_errors(); ?>
    <?php echo form_open('Login/loginUser'); ?>
    <div class="row justify-content-center">
        <div class="col-md-9 mt-2 mb-3">
            <label for="email" class="form-label ">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="col-md-9">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
    </div>

    <div class="row justify-content-center"> <!-- Center the button -->
        <button type="submit" class="btn btn-primary mb-4 mt-4 col-md-4 fs-5">Login</button>
        <!-- Increase the width of the button -->
    </div>

    <p class="text-center">Do not have an account? <span><a href="<?php echo base_url('index.php/home/register'); ?>"
                class="text-decoration-none fs-5 ms-2">Register</a></span></p>


    <?php echo form_close(); ?>
</div>

<?php include('templates/footer.php') ?>