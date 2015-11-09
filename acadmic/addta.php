<?php
	require('../header.php');
	require('sidebar2.php');
?>

    <div class="main-content">
        <div id="contents">

            <h2>Add Requirement for TAs</h2>
            <?php
                if($_SESSION['admin'] != 0)
                {
            ?>
                <div class="container">
                    <div class="row">
                        <form role="form" action="insertta.php" enctype="multipart/form-data" method="post">


                            <div class="form-group">
                                <label for="course">Course</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="course" id="course" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            <br>

                           <div class="form-group">
                                <label for="type">Type of</label>
                                <div class="input-group">
                            <select name="type" class="form-control">
                                <option value="Theory">Theory</option>
                                <option value="Lab">Lab</option>

                            </select>
                            </div>
                            </div>
                            
                            <br>
                            <div class="form-group">
                                <label for="pg_ta_require">No. of PG TAs Required</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="pg_ta_require" id="ta_require" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>

                            <br>
                            <div class="form-group">
                                <label for="ug_ta_require">No. of UG TAs Required</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="ug_ta_require" id="ta_require" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            
                            <br>
                            <div class="form-group">
                                <label for="hours">Assistance of Hours per Week</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="hours" id="ta_require" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>


                            <br>

                            <div class="form-group">
                                <label for="description">Description</label>
                                <div class="input-group">
                                    <input type="text" class="form-control" name="description" id="description" required>
                                    <span class="input-group-addon"><span class="glyphicon glyphicon-asterisk"></span></span>
                                </div>
                            </div>
                            
                            

                            <br>

                            <input type="submit" name="adta" id="adta" value="Add TA Offer" class="btn btnx pull-right">
                        </form>
                    </div>
                </div>
                <?php      
                }
            
             ?>
        </div>
    </div>

    <?php
	require('../footer.php');
?>