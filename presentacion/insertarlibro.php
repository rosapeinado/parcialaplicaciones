<?php
$creado = false;
if(isset($_POST["crear"])){
    $libro = new Libro("", $_POST["titulo"], $_POST["descripcion"], $_POST["fecha"]);
    $autor -> crear();
    $creado = true;
}
?>
<div class="container">
	<div class="row mt-3">
		<div class="col-3"></div>
		<div class="col-6">
			<div class="card">
				<div class="card-header">
					<h3>Crear Libro</h3>
				</div>
				<div class="card-body">
					<?php if ($creado) { ?>						
						<div class="alert alert-success alert-dismissible fade show"
							role="alert">
							<strong>Datos ingresados</strong>
							<button type="button" class="close" data-dismiss="alert"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
					<?php } ?>
					<form
						action=<?php echo "index.php?pid=" . base64_encode("presentacion/insertarlibro.php") ?>
						method="post">
						<div class="form-group">
							<input type="text" name="id" class="form-control"
								placeholder="Id" required="required">
						</div>
                        <div class="form-group">
							<input type="text" name="titulo" class="form-control"
								placeholder="Titulo" required="required">
						</div>
                        <div class="form-group">
							<input type="text" name="descripcion" class="form-control"
								placeholder="descripcion" required="required">
						</div>
						<div class="form-group">
							<input type="Date" name="fecha" class="form-control"
								placeholder="fecha" required="required">
						</div>
						<div class="form-group">
							<button type="submit" name="crear" class="btn btn-primary">Crear</button>
				