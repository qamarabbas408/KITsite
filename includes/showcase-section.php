<section class="showcase  position-relative">
    <div class="z-2 position-absolute p-5 rounded-3"></div>
    <div class="z-3 position-absolute p-5 rounded-3 top-50 start-50 text-center translate-middle">
        <h3 class="mb-lg-4 mb-3 text-warning">You <span class="d-block fw-bold text-light"> Deserve The </span><span
                class="text-light d-block fw-bold">Best Training</span>
        </h3>
        <p class="banner-sub border border-warning">Active Learning, Expert Trainers &amp; Perfect Environment</p>
        <?php if (isset($_SESSION['user_id']) && isset($_SESSION['username'])): ?>
            <a href="explore-courses.php" class="btn btn-style rounded-5 mt-lg-2 mt-2">Explore Courses</a>
        <?php else: ?>
            <a href="login.php" class="btn btn-style rounded-5 mt-lg-2 mt-2">Register Now</a>
        <?php endif; ?>
    </div>
</section>
