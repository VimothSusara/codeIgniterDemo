<?php include('templates/header.php') ?>

<div class="container">

    <?php echo form_open(); ?>
    <div class="mb-3">
        <label for="fname" class="form-label">First Name</label>
        <input type="text" class="form-control" id="fname" name="fname">
        <!-- <div id="fname" class="form-text">fill First name.</div> -->
    </div>
    <div class="mb-3">
        <label for="lname" class="form-label">Last Name</label>
        <input type="text" class="form-control" id="lname" name="lname">
        <!-- <div id="lname" class="form-text">fill Last name.</div> -->
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="mb-3">
        <label for="conpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="conpassword" name="conpassword">
    </div>

    <button type="submit" class="btn btn-primary mb-3">Submit</button>
    <!-- </form> -->
    <?php echo form_close(); ?>
</div>

<?php include('templates/footer.php') ?>