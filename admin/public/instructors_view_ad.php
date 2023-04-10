<?php
require_once "../includes/header.php";
require_once "../includes/navigation.php"; ?>
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-2">
        <h2 class="display-4">Instructors</h2>
        <a class="btn btn-info text-light fs-6" href="add-instructor.php">Add Instructor</a>
    </div>
    <div class="table-responsive">
        <form action="">
            <label for="exampleDataList" class="form-label">Search Instructor</label>
            <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
            <datalist id="datalistOptions">
                <option value="San Francisco">
                <option value="New York">
                <option value="Seattle">
                <option value="Los Angeles">
                <option value="Chicago">
            </datalist>
        </form>
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Course Assigned</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php for ($i = 0; $i < 100; $i++): ?>
                    <tr>
                        <th><input type="checkbox" name="" id=""></th>
                        <td scope="row">1</td>
                        <td>Qam Abbasr</td>
                        <td>Web Deve</td>
                        <td>qmarabb@gmail.com</td>
                        <td>+923111588908</td>
                        <td>
                            <a href="" class="btn btn-danger"><ion-icon name="trash-outline"></ion-icon></a>
                            <a href="instructor_ad.php" class="btn btn-info text-light"><ion-icon
                                    name="eye-outline"></ion-icon></a>
                        </td>
                    </tr>
                <?php endfor ?>

            </tbody>
        </table>
    </div>
</div>

<?php require_once("../includes/footer.php"); ?>