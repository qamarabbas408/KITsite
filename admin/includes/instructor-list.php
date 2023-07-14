    <?php while ($row = mysqli_fetch_assoc($instructorResults)): ?>
        <div class="d-flex align-items-center p-1 inst-list">
            <div class="col-md-2">
                <img src="<?php echo "../" . $row['profilePictureURL'] ?>" class="img-fluid rounded-circle" alt=""
                    style="height:50px; width:50px;">
            </div>
            <div class="col-md-10">
                <a class="fs-5 fw-bold text-decoration-none fs-6" href="view.php?instructor&id=<?php echo $row['id'] ?>"><?php echo $row['username'] ?></a>
                <span class="lead fs-6">
                    <?php echo "(" .$row['degree']. ")"  ?>
                </span><br>
                <span class="display-6 fs-6 text-warning text-decoration-underline">
                    <?php echo $row['skill'] ?>
                </span>
            </div>
        </div>
    <?php endwhile; ?>