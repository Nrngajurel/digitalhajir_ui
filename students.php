<?php
require_once './includes/helper.php';

get_admin_header();
?>

<div class="flex justify-content-between">
<h2>Students</h2>
<!-- New Attendance Button -->
<div>
    <button class="btn btn-success">View Attendance</button>
    <button class="btn btn-primary">New Attendance</button>
</div>

</div>
<div class="toggle">
    <a href="#" class="toggle-link btn btn-primary">Add Student</a>
    <div class="toggle-content hidden py-3">
        <form action="Student.php" method="post">
            <label for="Student_name">Student Name</label> <br>
            <input type="text" name="Student_name" id="Student_name" />
            <button class='btn btn-primary'>Add Sub Student</button>
        </form>
    </div>
</div>
    <div class="all_Student pt-5">
            all student list
    </div>

<script>
    document.querySelector('.toggle-link').addEventListener('click', function(e) {
        e.preventDefault();
        var toggleContent = this.nextElementSibling;
        if (toggleContent.classList.contains('hidden')) {
            toggleContent.classList.remove('hidden');
        } else {
            toggleContent.classList.add('hidden');
        }
    });
</script>

<?php

get_admin_footer();