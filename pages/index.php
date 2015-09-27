<?php require_once('_header.php'); ?>


<div style="        width: 800px;
                    height: auto;
                    margin: auto;
                    overflow: hidden;
                    background: #900;
                    padding-bottom: 20px;">
    <ul id="cat">
		<?php 
			foreach($cats as $cat) {
			echo "<li><a href=\"/?page=catalogue&amp;category=".$cat['id']."\"";
			echo Helper::getActive(array('category' => $cat['id']));
			echo ">";
			echo Helper::encodeHtml($cat['name']);
			echo "</a></li>";
			}
		?>
    </ul>



</div>

<?php require_once('_footer.php'); ?>

