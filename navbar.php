<nav id="sidebar" class='mx-lt-5 bg-light' style="background-color: #adadad !important;">
    <div class="container-fluid" style="padding: 0">
        <div class="sidebar-list">
            <a href="index.php?page=home" class="nav-item nav-home"><span class='icon-field'><i
                        class="fa fa-tachometer-alt"></i></span> Dashboard</a>
            <a href="index.php?page=enrollment" class="nav-item nav-enrollment"><span class='icon-field'><i
                        class="fa fa-users"></i></span> Student List</a>
            <a href="index.php?page=teacher" class="nav-item nav-teacher"><span class='icon-field'><i
                        class="fa fa-user-tie"></i></span> Teacher</a>
            <a href="#settings-collapse" role="button" aria-expanded="false" aria-controls="settings-collapse"
                class="nav-item nav-class_section nav-school_year " data-toggle="collapse"><span class='icon-field'><i
                        class="fa fa-scroll"></i></span> Academic <span class='float-right'><i
                        class="fa fa-angle-down"></i></span> </a>
            <div class="collapse" id="settings-collapse" data-id="settings-collapse">
                <a href="index.php?page=school_year" class="nav-item nav-school_year">Year</a>
                <a href="index.php?page=class_section" class="nav-item nav-class_section">Class and Section</a>
            </div>
            <a href="index.php?page=site_settings" class="nav-item nav-site_settings"><span class='icon-field'><i
                        class="fa fa-cogs"></i></span> System Settings</a>
        </div>

    </div>
</nav>
<script>
$('.nav-<?php echo $_GET['page'] ?>').addClass('active')

if ($('.nav-<?php echo $_GET['page'] ?>').parent().hasClass('collapse') == true) {
    $('a[href="#' + $('.nav-<?php echo $_GET['page'] ?>').parent().get(1).id + '"]').removeAttr('aria-expanded').attr(
        'aria-expanded', true)
    $('a[href="#' + $('.nav-<?php echo $_GET['page'] ?>').parent().get(1).id + '"]').removeClass('collapsed')
    $('.nav-<?php echo $_GET['page'] ?>').parent().addClass('show')
    // console.log($('.nav-<?php echo $_GET['page'] ?>').parent().get(1).id)
}
</script>