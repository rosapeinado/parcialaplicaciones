<html>
<head>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" ></script></head>
<body>

<div class="container">
	<div class="row mt-3">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-header">
					<h3>Proyecto libros</h3>
				</div>
			</div>
		</div>
		
				<div class="card-body">
                <nav class="nav">
  <a class="nav-link" href="<?php echo "index.php?pid=" . base64_encode("presentacion/consultarlibro.php") ?>">Consultar Libro</a>
  <a class="nav-link" href="<?php echo "index.php?pid=" . base64_encode("presentacion/insertarlibro.php") ?>">Insertar libro</a>

</nav>
			</div>
		</div>
	</div>
</div>