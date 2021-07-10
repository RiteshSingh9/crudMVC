<!-- <?php


?> -->
<!-- <?php // echo htmlspecialchars($_SERVER['PHP_SELF']); ?> -->
<div class="content center-align">
    <div class="row">
        <form  action="index.php?action=students-add" method="post" class="col s12 l6">
            <div class="row">
                <div class="input-field col s6 l6">
                    <input placeholder="Student Name" id="sName" name="sName" type="text" class="validate" required>
                    <label for="sName">Student Name</label>
                </div>
                <div class="input-field col s6 l6">
                    <input placeholder="Roll No." id="rollNo" name="rollNo" type="text" class="validate" required>
                    <label for="rollNo">Roll No.</label>
                </div>
            </div>
            <!-- <div class="row">
            </div> -->
            <div class="row">
                <div class="input-field col s12 l6">
                    <select name="stuClass" required>
                        <option value="" disabled selected>Student Class</option>
                        <?php
                        for ($i = 1; $i <= 12; $i++) {
                            echo '<option value="' . $i . '">' . $i . '</option>';
                        }
                        ?>
                    </select>
                    <label>Class</label>
                </div>
                <div class="input-field col s6 l6">
                    <input placeholder="Date of Birth" id="dob" name="dob" type="text" class="datepicker" required>
                    <label for="dob">Date Of Birth</label>
                </div>
            </div>
            <div class="row">
            </div>
            <button type="submit" class="btn waves-effect waves-light blue hoverable" type="submit" name="action">Add
                <i class="material-icons right">add</i>
            </button>
        </form>
    </div>
</div>
<?php



?>