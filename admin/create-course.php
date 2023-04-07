<?php
include "includes/header.php";
include "includes/navigation.php"; ?>
<div class="container ">
    <form action="controller-admin/courseController.php" method="post" enctype="multipart/form-data">
        <label for="" class="form-label">Course Title</label>
        <input class="form-control" type="text" name="course-title" id="">
        <label for="" class="form-label">Course Description</label>
        <textarea class="form-control" name="" id="" cols="30" rows="5"></textarea>
        <div class="row">
            <div class="col-md-6">
                <label for="" class="form-label">Course Start Date</label>
                <input type="date" name="" class="form-control" id="">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Course End Date</label>
                <input type="date" name="" class="form-control" id="">
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                   
            </div>
        </div>
        <div class="row">
            <div class="col-md-3" style="margin-top: .5em !important;">
                <input type="submit" name="addCourse" class="btn btn-warning form-control" value="Add Course">
            </div>
        </div>
    </form>
</div>