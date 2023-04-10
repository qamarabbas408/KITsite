<?php
require_once "../includes/header.php";
require_once "../includes/navigation.php"; ?>
<div class="container">
    <h2 class="display-4">Students</h2>
    <div class="table-responsive">
        <form action="">
            <label for="exampleDataList" class="form-label">Search a Student</label>
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
                    <th scope="col">Course Enrolled</th>
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
                            <a href="student_ad.php" class="btn btn-info text-light"><ion-icon
                                    name="eye-outline"></ion-icon></a>
                        </td>
                    </tr>
                <?php endfor ?>

            </tbody>
        </table>
    </div>
</div>

<?php require_once("../includes/footer.php"); ?>