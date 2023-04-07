<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
<!-- View-A-Course -->
<div class="container-fluid">
    <div class="row p-3">
        <div class="col-md-4 p-3 border-end">
            <div class="row">
                <div class="course-path">
                    <button class="btn mb-1 fw-bold " onclick="showList()"><ion-icon id="angle"
                            name="chevron-forward-outline"></ion-icon>Course Material</button>
                    <div class="list-group list-group-flush ps-4" id="list">
                        <a href="#" class="list-group-item list-group-item-action active" id="nav-home-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab"
                            aria-controls="nav-home" aria-selected="true"" aria-current=" true">
                            <ion-icon name="checkmark-circle-outline" class="text-primary"></ion-icon>
                            Video 1
                        </a>
                        <a href="#" class="list-group-item list-group-item-action" id="nav-profile-tab"
                            data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab"
                            aria-controls="nav-profile" aria-selected="false">
                            <ion-icon name="ellipse-outline"></ion-icon>
                            Video 2</a>
                        <a href="#" class="list-group-item list-group-item-action">
                            <ion-icon name="ellipse-outline"></ion-icon>
                            Video 3</a>
                    </div>
                </div>
                <div class="code-links row">
                    <h6 class="m-0 fw-bolder">Links</h6>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a href="#">https:codefiles/video1</a></li>
                    </ul>
                </div>
            </div>


        </div>
        <div class="col-md-6">
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
                    tabindex="0">
                    <div class="container">
                        <div class="lecture-desc">
                            <p class="fw-light small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias quae
                                recusandae eligendi mollitia! Corrupti deleniti repellat maiores sunt, incidunt harum
                                quasi, soluta laborum temporibus nam magni ipsum, ducimus quibusdam animi?</p>
                        </div>
                        <div class="lecture-video">
                            <video src="videos/1.mp4" controls></video>
                        </div>
                    </div>
                </div>

            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                Week 2</div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                ...</div>
            <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab"
                tabindex="0">...</div>
        </div>
    </div>
</div>
</div>
<?php include "includes/footer.php" ?>
<script>

    var flag = 1
    var list = document.getElementById("list")
    var angle = document.getElementById("angle")
    function showList() {
        if (flag == 1) {
            console.log(list)
            list.style.display = "block"
            angle.style.rotate = "0 0 1 90deg"

            flag = 0
        }
        else {
            list.style.display = "none"
            angle.style.rotate = "0 0 1 360deg"

            flag = 1
        }
    }
    var cl = document.getElementById("courseList")
    var innerAngle = document.getElementById("innerAngle")
    var f = 1
    function courseList() {
        if (f == 1) {
            console.log(list)
            cl.style.display = "block"
            innerAngle.style.rotate = "0 0 1 90deg"

            f = 0
        }
        else {
            cl.style.display = "none"
            innerAngle.style.rotate = "0 0 1 360deg"

            f = 1
        }
    }
</script>