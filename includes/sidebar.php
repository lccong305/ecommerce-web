<?php
$aMan  = array();

$aPCat = array();

$aCat  = array();

/// Manufacturers Code Starts ///





/// Products Categories Code Starts ///

if (isset($_REQUEST['p_cat']) && is_array($_REQUEST['p_cat'])) {

    foreach ($_REQUEST['p_cat'] as $sKey => $sVal) {

        if ((int)$sVal != 0) {

            $aPCat[(int)$sVal] = (int)$sVal;
        }
    }
}




?>

<div class="panel panel-default sidebar-menu">
    <!-- panel panel-default sidebar-menu Starts -->



    <div class="panel-collapse collapse-data">
        <!-- panel-collapse collapse-data starts -->
    </div><!-- panel-collapse collapse-data Ends -->


</div><!-- panel panel-default sidebar-menu Ends -->


<div class="panel panel-default sidebar-menu">
    <!--- panel panel-default sidebar-menu Starts -->

    <div class="panel-heading">
        <!-- panel-heading Starts -->

        <h3 class="panel-title">
            <!-- panel-title Starts -->

            Products Categories

            <div class="pull-right">
                <!-- pull-right Starts -->

                <a href="#" style="color:black;">

                    <span class="nav-toggle hide-show">

                        Hide

                    </span>

                </a>

            </div><!-- pull-right Ends -->

        </h3><!-- panel-title Ends -->

    </div>

    <div class="panel-collapse collapse-data">

        <div class="panel-body">

            <div class="input-group">

                <input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-p-cats" placeholder="Filter Product Categories">

                <a class="input-group-addon"> <i class="fa fa-search"></i> </a>

            </div>

        </div>

        <div class="panel-body scroll-menu">

            <ul class="nav nav-pills nav-stacked category-menu" id="dev-p-cats">

                <?php

                $get_p_cats = "select * from product_categories where p_cat_top='yes'";

                $run_p_cats = mysqli_query($con, $get_p_cats);

                while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                    $p_cat_id = $row_p_cats['p_cat_id'];

                    $p_cat_title = $row_p_cats['p_cat_title'];

                    $p_cat_image = $row_p_cats['p_cat_image'];

                    if ($p_cat_image == "") {
                    } else {

                        $p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20'> &nbsp;";
                    }

                    echo "

<li class='checkbox checkbox-primary' style='background:#dddddd;' >

<a>

<label>

<input ";

                    if (isset($aPCat[$p_cat_id])) {
                        echo "checked='checked'";
                    }

                    echo " type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat' id='p_cat' >

<span>

$p_cat_image
$p_cat_title

</span>

</label>

</a>

</li>

";
                }

                $get_p_cats = "select * from product_categories where p_cat_top='no'";

                $run_p_cats = mysqli_query($con, $get_p_cats);

                while ($row_p_cats = mysqli_fetch_array($run_p_cats)) {

                    $p_cat_id = $row_p_cats['p_cat_id'];

                    $p_cat_title = $row_p_cats['p_cat_title'];

                    $p_cat_image = $row_p_cats['p_cat_image'];

                    if ($p_cat_image == "") {
                    } else {

                        $p_cat_image = "<img src='admin_area/other_images/$p_cat_image' width='20'> &nbsp;";
                    }

                    echo "

<li class='checkbox checkbox-primary'>

<a>

<label>

<input ";

                    if (isset($aPCat[$p_cat_id])) {
                        echo "checked='checked'";
                    }

                    echo " type='checkbox' value='$p_cat_id' name='p_cat' class='get_p_cat' id='p_cat' >

<span>

$p_cat_image
$p_cat_title

</span>

</label>

</a>

</li>

";
                }

                ?>

            </ul>

        </div>

    </div>

</div>



<div class="panel panel-default sidebar-menu">





</div>