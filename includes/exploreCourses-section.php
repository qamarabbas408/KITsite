<?php if (mysqli_num_rows($courseResults) >= 1):
    while ($row = mysqli_fetch_assoc($courseResults)): ?>
        <div class="col-lg-3 col-md-6 my-2">
            <div class="card">
                <img src="images/banner3.jpg" class="img-fluid" alt="">
                <div class="card-body py-3">
                    <div class="card-title mb-3">
                        <!-- LESSON AND STAR ICON HERE  -->
                        <p class="fw-bold mb-1 page-title">
                            <?= $row['title'] ?>
                        </p>
                    </div>
                    <div class="card-text">
                        <?php echo !empty($row['description']) ? $row['description'] : 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure unde voluptates facilis.
                        Suscipit, repellat Lorem ipsum dolor sit amet.' ?>
                        <hr class="text-warning">
                        <span>
                            <a href="controllers/router.php?cid=<?= $row['id'] ?>" class="text-dark fs-6 p-2 shover">View Course</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile; ?>
<?php else: ?>
    <div class="text-center display-5 text-danger">
        Sorry!, System has no Courses
    </div>
<?php endif; ?>