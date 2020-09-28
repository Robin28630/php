<div class="card">
	<div class="card-body">
		<h5 class="card-title">Nouvelle partie</h5>
		<form id="gameForm" action="/game/save" method="post" enctype="multipart/form-data">
			<div class="form-group">
				<label for="gameTitle">Quel est le titre de votre partie ?</label>
				<input type="text" class="form-control" name="gameTitle" id="gameTitle">
			</div>
			<p>
				<button type="submit" class="btn btn-primary">Créer</button>
			</p>
		</form>
	</div>
</div>