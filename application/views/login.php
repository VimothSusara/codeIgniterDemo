<?php include('templates/header.php') ?>

<div class="container">

    <?php echo form_open(); ?>
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
    <?php echo form_close(); ?>
</div>

<?php include('templates/footer.php') ?>