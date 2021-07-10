<!-- <a href="index.php?action=student-add">Add students</a> -->
<div class="content">
    <br>

    <table>
        <a href="index.php?action=students-add" class="waves-effect waves-light btn blue"><i class="material-icons right">add</i>Add Student</a>
        <thead>
            <tr>
                <th>Roll no.</th>
                <th>Name</th>
                <th>DOB</th>
                <th>class</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            <?php
            foreach ($data as $key => $value) {
                echo "<tr>";
                echo '<td>' . $value['stu_roll_no'] . '</td>';
                echo '<td>' . $value['stu_name'] . '</td>';
                echo '<td>' . $value['stu_dob'] . '</td>';
                echo '<td>' . $value['stu_class'] . '</td>';
                echo '<td>
                        <a href="index.php?action=student-delete&id=' . $value['stu_id'] . '" class="red-text">Delete</a>
                    </td>';
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>
</div>