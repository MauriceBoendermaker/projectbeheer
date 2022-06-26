<?php include "include/head.php"; ?>
<div class="container">
	<div class="crud-container">
		<div class="row">
			<h2 class="col-5">Projectbeheer Admin Tools</h2>
			<div class="col-7">
				<div class="float-end">
					<p class="my-0">Ingelogd als:</p>
					<p class="my-0 text-end fw-light"><?php echo $_SESSION['naam'] . " [" . $_SESSION['email'] . "]" . " (" . ($_SESSION['telefoon']) . ")"; ?></p>
				</div>
			</div>
		</div>
		<?php
		$dashboard = endsWith(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "/");

		$projecten = endsWith(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), "projecten");
		?>
		<ul class="nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link <?php if ($dashboard) echo "active\" aria-current=\"page"; ?>"
				   href="./">Dashboard</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if ($projecten) echo "active\" aria-current=\"page"; ?>" href="projecten">Projecten</a>
			</li>
			<li class="nav-item">
				<a class="nav-link <?php if (!$dashboard && !$projecten) echo "active\" aria-current=\"page"; ?>"
				   href="gasten">Beheer</a>
			</li>
			<li class="nav-item ms-auto">
				<a class="nav-link text-danger" href="logout">Logout</a>
			</li>
		</ul>
		<div class="crud-form row mx-0">