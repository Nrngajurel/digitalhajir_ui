<?php
require_once './includes/helper.php';

get_admin_header();
?>

<h2>Groups</h2>
<div class="toggle">
    <a href="#" class="toggle-link btn btn-primary">Add Group</a>
    <div class="toggle-content hidden py-3">
        <form action="group.php" method="post">
            <label for="group_name">Group Name</label> <br>
            <input type="text" name="group_name" id="group_name" />
            <button class='btn btn-primary'>Add Group</button>
        </form>
    </div>
</div>
<div class="all_group pt-5">
            <div class="dashboard-widgets">
                    <a href="/subgroup.php">
                    <div class="shadow p-3 flex dashboard-widget-item">
                          <div class="px-2 flex flex-col">
                                <h3 class="">BCA</h3>
                                <span>100 Meambers</span>
                          </div>
                    </div>
                    </a>
                    <div class="shadow p-3 flex dashboard-widget-item">
                          <div class="px-2 flex flex-col">
                                <h3 class="">CSIT</h3>
                                <span>100 Meambers</span>
                          </div>
                    </div>
                    <div class="shadow p-3 flex dashboard-widget-item">
                          <div class="px-2 flex flex-col">
                                <h3 class="">BHM</h3>
                                <span>100 Meambers</span>
                          </div>
                    </div>
                    <div class="shadow p-3 flex dashboard-widget-item">
                          <div class="px-2 flex flex-col">
                                <h3 class="">BIM</h3>
                                <span>100 Meambers</span>
                          </div>
                    </div>
                    <div class="shadow p-3 flex dashboard-widget-item">
                          <div class="px-2 flex flex-col">
                                <h3 class="">BED</h3>
                                <span>100 Meambers</span>
                          </div>
                    </div>
                    <div class="shadow p-3 flex dashboard-widget-item">
                          <div class="px-2 flex flex-col">
                                <h3 class="">BSC</h3>
                                <span>100 Meambers</span>
                          </div>
                    </div>
                    

                    
            </div>
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