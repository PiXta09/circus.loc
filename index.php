<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Цирк!</title>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container-fluid header">
		<div class="float-left col-3"><a href="index.php">Цирк</a></div>
		<div class="row align-items-center justify-content-center">
			<div class="col-4 center"><a href="containing.php">У нас вы увидите</a></div>
			<div class="col-4 center"><a href="troupe.php">У нас работают</a></div>
			<div class="col-4 center">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
					Авторизироваться
				</button>

				<!-- Modal -->
				<div class="modal" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content okoshko" id="okoshko">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLabel">Авторизация</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">×</span>
								</button>
							</div>

								<div class="modal-body">
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">Логин</label>
											<div class="col-sm-10">
												<input type="text" class="form-control" id="login" name="login" placeholder="Логин">
											</div>
										</div>
										<div class="form-group row">
											<label for="inputEmail3" class="col-sm-2 col-form-label">Пароль</label>
											<div class="col-sm-10">
												<input type="password" class="form-control" id="parol" name="password" placeholder="Пароль">
											</div>
											<div class="alert alert-danger al-1" role="alert" id="alert"></div>
										</div>

									</div>
								<div class="modal-footer">
									<button class="btn btn-primary knopka" onclick="authorization()">Войти</button>
								</div>

						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	
	<div class="container-fluid">
		<h1>Контент в разработке</h1>
        <?php
            session_start();
        ?>
		<img src="images/circus1.jpg" width="100%">
	</div>
	
	<div class="container-fluid footer">
		<div class="row align-items-center justify-content-center">
			<div class="col-12 center">Наши контактные данные: ул.Пушкина, д.Колотушкина</div>
		</div>
	</div>

	<script src="ajax.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
