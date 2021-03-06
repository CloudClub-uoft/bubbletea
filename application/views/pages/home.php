<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link href="./assets/css/css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Bubble Tea Shops</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="table-wrap">
						<table class="table table-bordered table-dark table-hover">
							<thead>
								<tr>
									<th>Name</th>
									<th>Image</th>
									<th>Notes</th>
									<th>Website</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($stuff as $item) : ?>
									<tr>
										<td><?= $item->name ?></td>
										<td><img width:"50px" height="50px" src="assets/team/mark.jpg" onerror="this.onerror=null; this.src='assets/images/24.jpg'"></td>
										<td><?= $item->notes ?></td>
										<td><a href='<?= $item->website ?>'><?= $item->website ?></a></td>
									</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</section>
	<script src="./assets/js/jquery.min.js.download"></script>
	<script src="./assets/js/popper.js.download"></script>
	<script src="./assets/js/bootstrap.min.js.download"></script>
	<script src="./assets/js/main.js.download"></script>


</body>