<?php while ($row = mysqli_fetch_assoc($courseResults)): ?>

    <tr class="text-center">
        <th scope="row">1</th>
        <td>
            <?= $row['title'] ?>
        </td>
        <td>
            <?= $row['start_date'] ?>
        </td>
        <td>
            <?= $row['start_date'] ?>

        </td>
      
        <td>
            <?php
            $id = intval($row['instructor_id']);
            $sql = "SELECT username FROM instructor WHERE id = $id";
            $rowInst = mysqli_fetch_assoc(mysqli_query($conn, $sql));
            echo $rowInst['username'];
            ?>

        </td>
        <td></td>
        <td><a class="btn btn-info" href="view_course.php?id=<?= $row['id']?>">View</a>
        </td>
    </tr>
<?php endwhile; ?>