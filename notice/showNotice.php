<?php
	require('../header.php');
?>
    <?php

	@mysql_connect('localhost','intranet','user@123');
  	mysql_select_db('intranet');

	$id = $_GET['id'];

	$query = "SELECT * from `notice` where `id`=$id";
	$query_run = mysql_query($query);
	mysql_error();

	if(mysql_num_rows($query_run)==0){
		echo "Go Back";
	}else{


	$row = mysql_fetch_assoc($query_run);


	$title = $row['title'];
	$description = $row['description'];
	$user = $row['user'];
	$target = $row['target'];
	$document = $row['document_path'];


	$phpdate = strtotime( $row['date'] );
    $date = date( 'd F Y', $phpdate );
?>

        <html>

        <head>
            <link rel="stylesheet" type="text/css" href="../style.css">
            <script type="text/javascript">
                // we will add our javascript code here                                     
                $(document).ready(function () {
                    $('table.tiger-stripe tr:odd').addClass('odd');
                    $('table.tiger-stripe tr:even').addClass('even');
                    $("a[rel^='prettyPhoto']").prettyPhoto({
                        animation_speed: 'fast',
                        /* fast/slow/normal */
                        slideshow: 5000,
                        /* false OR interval time in ms */
                        allow_resize: true,
                        /* Resize the photos bigger than viewport. true/false */
                        default_width: 1200,
                        default_height: 600,
                        opacity: 0.70,
                        horizontal_padding: 25,
                        social_tools: '',
                        theme: 'light_rounded',
                        /* light_rounded / dark_rounded / light_square / dark_square / facebook */
                    });
                    $("textarea").autoGrow();
                    $("textarea")
                        .focus(function () {
                            this.cols = 80
                        })
                        .blur(function () {
                            this.cols = 80
                        });
                    $('#animate').fadeIn(200);

                })
            </script>
        </head>

        <body >
            <div align='center' class="content1">

                <h1 class="body_title"><?php echo $title; ?></h1>
                <div>
                    <table>
                        <tr>
                            <td><b>Posted By:</b>
                                <?php echo $user; ?> | Attention:
                                    <?php echo $target; ?> | Dated:
                                        <?php echo $date; ?>
                                            </th>
                        </tr>
                        <tr>
                            <td>
                                <div>
                                    <p>
                                        <?php echo $description; ?>
                                    </p>
                                    <p>&nbsp;</p>

                                    <?php
if($document != NULL){
	echo "<p><a href='$document'>Open Attachment</a></p>";
}
?>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                

        </body>

        </html>



        <?php
}

?>