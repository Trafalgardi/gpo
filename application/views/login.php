<div class="container">
    <div class="form-row">
		<div class="col-lg-6 offset-md-3">
			<div class="card card-login">
				<div class="card-header">
					<h1 style="text-align: center; color: green;">Авторизация</h1>					
				</div>
				<div class="card-body">
					<div class="form-row">
						<div class="col-12">

							<?php if(isset($_SESSION['success'])) {?>

							<div class="alert alert-success"><?php echo $_SESSION['success']?> </div>

							<?php }?>

							<?php echo validation_errors('<div class="alert alert-danger">', '</div>');?>

							<form id="login-form" action="" method="POST" role="form">							
								<div class="form-group">
									<input type="text" name="username" id="username" class="form-control" placeholder="Имя пользователя">
								</div>
								<div class="form-group">
									<input type="password" name="password" id="password" class="form-control" placeholder="Пароль">
								</div>
								<div class="form-group">
									<div class="form-row">
										<div class="col-md-6 offset-md-3">
											<input type="submit" name="login-submit" id="login-submit" class="form-control btn btn-login" value="Войти">
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-row">
										<div class="col-12">
											<div class="text-center">
												<a href="#" class="forgot-password">Забыли пароль?</a>
											</div>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="form-row">
										<div class="col-12">
											<div class="text-center">
												<a href="<?php echo base_url(); ?>index.php/auth/register"> Нет учетной записи? Зарегистрируйся!</a>
											</div>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
