
    <?php
        $db = $Database->connected;
        $query = "SELECT title, destination FROM menu";
        $result = $db->query($query);
    ?>
		<!-- Navigation -->
		<nav class="navbar navbar-inverse" role="navigation">
			<ul class="nav navbar-nav">
			<?php
			    while($data = $result->fetch_assoc())
			    {
			        echo '<li><a href="'.$data['destination'].'">'.$data['title'].'</a></li>';
			    }
			?>
			</ul>
		</nav>