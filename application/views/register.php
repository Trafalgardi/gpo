<div class="container">
    <div class="form-row">
		<div class="col-lg-6 offset-md-3">
			<div class="card card-login">
				<div class="card-header">
					<h1 style="text-align: center; color: green;">Регистрация</h1>					
				</div>
				<div class="card-body">
					<div class="form-row">
						<div class="col-12">
							<?php if(isset($_SESSION['success'])) {?>

							<div class="alert alert-success"><?php echo $_SESSION['success']?> </div>

							<?php }?>

							<?php echo validation_errors('<div class="alert alert-danger">', '</div>');?>

							<form id="register-form" action="" method="POST" role="form">
								<div class="form-group">
									<label>Логин</label>
									<input type="text" name="username" id="username" class="form-control" placeholder="Имя пользователя" value="">
								</div>
								<div class="form-group">
									<label>Телефон</label>
									<input name="phone" id="phone" class="form-control">
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" id="email" class="form-control" placeholder="Email" value="">
								</div>
								<label>ФИО</label>
								<div class="form-row form-group">
									<div class="col">
									    <input type="text" name="fio_1" id="fio_1" class="form-control" placeholder="Фамилия">
									</div>
									<div class="col">
									    <input type="text" name="fio_2" id="fio_2" class="form-control" placeholder="Имя">
									</div>
								    <div class="col">
								      <input type="text" name="fio_3" id="fio_3" class="form-control" placeholder="Отчество">
								    </div>
								</div>
								<div class="form-group">
									<label>Дата рождения</label>	
									<input type="date" name="dateofbirth" id="dateofbirth" class="form-control" placeholder="Дата рождения">
								</div>
								
								<div class="form-group control">
									<label>Пол</label>
							      	<select name="sex" style="height: 40px; font-size: 16px;" id="sex" class="form-control">
							      	 	<option value="Иное" selected>Иное</option>
							      	 	<option value="Мужской">Мужской</option>
							      	  	<option value="Женский">Женский</option>
							     	</select>
							    </div>								 
								<div class="form-group">
									<label>Пароль</label>
									<input type="password" name="password" id="password" class="form-control" placeholder="Пароль">
								</div>
								<div class="form-group">
									<input type="password" name="confirm-password" id="confirm-password" class="form-control" placeholder="Подтвердите пароль">
								</div>
								<div class="form-group">
									<div class="form-group">
										<div class="col-sm-12">
											<input type="submit" name="register-submit" id="register-submit" disabled="" class="form-control btn btn-register" value="Зарегистрироваться">
										</div>
										<div calss="col-sm-12">
											<input type="checkbox" id="politics" onclick="check();" value="" autocomplete="off"/> Нажимая на кнопку "Зарегистрироваться", я даю своё <a href="<?php echo base_url();?>index.php/auth/politics"> согласие на обработку персональных данных.</a>
										</div>
										<div class="form-group">
											<div class="form-row">
												<div class="col-12">
													<div class="text-center">
														<a href="<?php echo base_url();?>index.php/auth/login"> Уже зарегистрированы? Войдите!</a>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								</form>
								<script>
								function check() {
								var submit = document.getElementsByName('register-submit')[0];
								if (document.getElementById('politics').checked)
								submit.disabled = '';
								else
								submit.disabled = 'disabled';
								}

								

								</script>

						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
