<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="profile">Личный кабинет</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['user_fio']; ?> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Профиль</a>
                    </li>
                    <li><a href="#"><i class="fa fa-gear fa-fw"></i> Настройки</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Выход</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search">
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                        </div>
                        <!-- /input-group -->
                    </li>
                    <li>
                        <a href="profile"><i class="fa fa-dashboard fa-fw"></i> Главная страница</a>
                    </li>
                    <li class="active">
                        <a href="#"><i class="fa fa-table fa-fw"></i> Анкетирование<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level collapse in" aria-expanded="true" style="">
                            <li>
                                <a href="questionnaire"> Базовая информация</a>
                            </li>
                            <li>
                                <a href="education"> Информация об образовании</a>
                            </li>
                            <li>
                                <a href="contactinfo"> Контактная информация</a>
                            </li>
                            <li>
                                <a class="active" href="drivinglicense"> Водительское удостоверения</a>
                            </li>
                            <li>
                                <a href="military"> Отношение к воинской обязанности</a>
                            </li>
                            <li>
                                <a href="languages"> Знание иностранных языков</a>
                            </li>
                            <li>
                                <a href="academicdegree"> Учёная степень</a>
                            </li>
                            <li>
                                <a href="experience"> Стаж работы</a>
                            </li>
                            <li>
                                <a href="anexperience"> Опыт работы</a>
                            </li>
                        </ul>
                        <!-- /.nav-second-level -->
                    </li>
                    <li>
                        <a href="forms"><i class="fa fa-edit fa-fw"></i> Доступные тесты</a>
                    </li>
                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> Водительское удостоверения</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-8">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Водительское удостоверения
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Имеете ли вы водительское удостоверение?</label>
                                <select class="form-control" id="drivinglicense">
                                    <option value="Нет" selected="selected">Нет</option>
                                    <option value="Да">Да</option>
                                </select>
                            </div>
                            <div class="form-group" id="drivinglicense_1" style="display: none;">
                                <label>Категория</label>
                                <div class="form-group">
                                <label class="checkbox-inline">
                                    <input id="checkbox_1" name="checkbox_1" value="А – мотоциклы" type="checkbox">А – мотоциклы</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_2" name="checkbox_2" value="А1 – легкие мопеды (объем двигателя до 125 кубических сантиметров)" type="checkbox">А1 – легкие мопеды (объем двигателя до 125 кубических сантиметров)</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_3" name="checkbox_3" value="В – легковые автомобили" type="checkbox">В – легковые автомобили</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_4" name="checkbox_4" value="В1 – квадроциклы" type="checkbox">В1 – квадроциклы</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_5" name="checkbox_5" value="С – грузовые автомобили с грузоподъем-ностью более 3 тонн" type="checkbox">С – грузовые автомобили с грузоподъем-ностью более 3 тонн</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_6" name="checkbox_6" value="С1 – грузовые машины массой до 7,5 тонн" type="checkbox">С1 – грузовые машины массой до 7,5 тонн</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_7" name="checkbox_7" value="D – автобусы с количеством пассажиров более 8-ми" type="checkbox">D – автобусы с количеством пассажиров более 8-ми</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_8" name="checkbox_8" value="D1 – автобусы с числом пассажиров от 8-ми до 16-ти" type="checkbox">D1 – автобусы с числом пассажиров от 8-ми до 16-ти</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_9" name="checkbox_9" value="ВЕ – легковые автомобили, прицеп" type="checkbox">ВЕ – легковые автомобили, прицеп</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_10" name="checkbox_10" value="СЕ – грузовые автомобили, прицеп" type="checkbox">СЕ – грузовые автомобили, прицеп</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_11" name="checkbox_11" value="DE – автобусы, прицеп" type="checkbox">DE – автобусы, прицеп</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_12" name="checkbox_12" value="Tm – трамвайные права" type="checkbox">Tm – трамвайные права</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_13" name="checkbox_13" value="Tb – троллейбусные права" type="checkbox">Tb – троллейбусные права</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_14" name="checkbox_14" value="С1Е1 – автопоезд категории С и Е с при-цепом, вес которого должен достигать пре-дела 750 кг, и общая масса авто не более 12 тонн" type="checkbox">С1Е1 – автопоезд категории С и Е с при-цепом, вес которого должен достигать пре-дела 750 кг, и общая масса авто не более 12 тонн</label>
                                </div>
                                <div class="form-group">
                                    <label class="checkbox-inline"><input id="checkbox_15" name="checkbox_15" value="D1E1 – транспортное средство катего-рий D и Е, с прицепом, вес которого до 750 кг, и общая масса авто не более 12 тонн" type="checkbox">D1E1 – транспортное средство катего-рий D и Е, с прицепом, вес которого до 750 кг, и общая масса авто не более 12 тонн</label>
                                </div>
                            </div>
                            <div class="form-group" id="drivinglicense_2" style="display: none;">
                                <label>Водительский стаж (лет)</label>
                                <select class="form-control" name="driving">
                                    <option value="0,1-1 (менее года)" selected="selected">0,1-1 (менее года)</option>
                                    <option value="1-2">1-2</option>
                                    <option value="2-4">2-4</option>
                                    <option value="4-7">4-7</option>
                                    <option value="7-11">7-11</option>
                                    <option value="более 11 лет">более 11 лет</option>
                                </select>
                            </div>
                            <div class="form-group" id="car_show" style="display: none;">
                                <label>Наличие транспортного средства</label>
                                <select class="form-control" name="car" id="car">
                                    <option value="Нет" selected="selected">Нет</option>
                                    <option value="Да">Да</option>
                                    
                                </select>
                            </div>
                            <div class="form-group" id="car_inner" style="display: none;">
                                <label>Категория</label>
                                <div class="form-group">
                                 <select class="form-control" name="car_info">
                                    <option value="легковой автомобиль" selected="selected">легковой автомобиль</option>
                                    <option value="А1 – легкие мопеды (объем двигателя до 125 кубических сантиметров)">А1 – легкие мопеды (объем двигателя до 125 кубических сантиметров)</option>
                                    <option value="общественный автомобильный транспорт">общественный автомобильный транспорт</option>
                                    <option value="другое">другое</option>
                                </select>
                            </div>
                        </div>
                            <div class="form-group">
                                <div class="col-md-6">
                                    <input type="submit" name="submit" id="submit" class="btn btn-outline btn-success" value="Отправить">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            
        </div>
        <!-- /.row -->
        
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>
$(function() {
    $('#car').on('change', function() {
      if(this.value == "Да"){
        $("#car_inner").show()
      }else if(this.value == "Нет"){
        $("#car_inner").hide()
      }
    })
});
$(function() {
    $('#drivinglicense').on('change', function() {
      if(this.value == "Да"){
        $("#drivinglicense_1").show()
        $("#drivinglicense_2").show()
        $("#drivinglicense_3").show()
        $("#car_show").show()
      }else if(this.value == "Нет"){
        $("#drivinglicense_1").hide()
        $("#drivinglicense_2").hide()
        $("#drivinglicense_3").hide()
        $("#car_show").hide()
      }
    })
});
</script>