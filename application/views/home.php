<?php include('templates/header.php') ?>

<div class="container">
    <div class="row">
        <div class="col">
            <div class="grid text-start" style="--bs-gap: .25rem 1rem; margin-top:6.5rem;">
                <div class="g-col-10 fw-semibold fs-1">Learn</div>
                <div class="g-col-10 fw-semibold fs-1">new concepts</div>
                <div class="g-col-10 fw-semibold fs-1 ">for each question</div>
            </div>
            <div class="d-flex justify-content-start mt-4">
                <div class="p-1 border-2 border-start border-secondary"></div>
                <div class="p-1 flex-grow-1 ms-2">We help you prepare for exam and quizzes</div>
            </div>
            <div class="d-flex justify-content-start mt-4">
                <div class="p-2">
                    <button type="button" class="btn btn-outline-secondary fs-4 ps-5 pe-5 fw-semibold" style="">Start</button>
                </div>
                <a href="#" class="text-decoration-none fs-4 pt-3 ps-5" style="color:rgb(13,67,94);">More</a>
            </div>
        </div>
        <div class="col text-center">
            <img src="<?= base_url('assets/images/heroPic.jpg'); ?>" class="img-fluid p-3">
        </div>
    </div>
</div>

<?php include('templates/footer.php') ?>