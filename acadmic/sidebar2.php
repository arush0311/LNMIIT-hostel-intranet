<div id="container">
    <div id="sidebar">
        <div id="sidebar_header">
           <h3>TASHIP</h3>
        </div>

        <ul>

            
            <li>
                <a href="instructions.php">
                    <div class="options">Instructions</div>
                </a>
            </li>
            <li>
                <a href="showta.php">
                    <div class="options">TAship Offered</div>
                </a>
            </li>
            
            <li>
                <a href="applyta.php">
                    <div class="options">Apply Now</div>
                </a>
            </li>
             <?php if(isset($_SESSION['id'])&& ($_SESSION['admin']!=0))
                { ?>
                <li>
                <a href="applicants.php">
                    <div class="options">Applicants</div>
                </a>
            </li>
            <?php } ?>
            <li>
                <a href="result_ta.php">
                    <div class="options">Result</div>
                </a>
            </li>
            <li>
                <a href="contact_ta.php">
                    <div class="options">Contact Us</div>
                </a>
            </li>
        </ul>
    </div>
</div>