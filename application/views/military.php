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
                                <a href="drivinglicense"> Водительское удостоверения</a>
                            </li>
                            <li>
                                <a class="active" href="military"> Отношение к воинской обязанности</a>
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
                <h1 class="page-header"> Отношение к воинской обязанности</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Отношение к воинской обязанности
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Отношение к воинской обязанности</label>
                                <select class="form-control" id="military" name="military">
                                    <option value="невоеннообязанный" selected="selected">Невоеннообязанный</option>
                                    <option value="военнообязанный">Военнообязанный</option>
                                </select>
                            </div>
                            <div class="form-group" id="notmilitary">
                                <label>По какой причине?</label>
                                <select class="form-control" name="notmilitary_1" id="notmilitary_1">
                                    <option value="по медицинским показателям" selected="selected">по медицинским показателям</option>
                                    <option value="наличие непогашенной судимости">наличие непогашенной судимости</option>
                                    <option value="другое">другое</option>
                                </select>
                            </div>
                            <div class="form-group" id="yesmilitary" style="display: none;">
                                <div class="form-group">
                                    <label>Военнообязанный</label>
                                    <select class="form-control" id="yesmilitary_1" name="yesmilitary_1">
                                        <option value="прошедший военную службу по контракту" selected="selected">прошедший военную службу по контракту</option>
                                        <option value="прошедшие военную службу">прошедшие военную службу</option>
                                        <option value="прошедшие альтернативную гражданскую службу">прошедшие альтернативную гражданскую службу</option>
                                        <option value="призывного возраста">призывного возраста</option>
                                        <option value="другое">другое</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="yesmilitary_rank_1_div" style="display: none;">
                                <label>Войсковые воинское звания</label>
                                <select class="form-control" name="yesmilitary_rank_1" id="yesmilitary_rank_1" >
                                    <option value="нет" selected>Выберети из списка...</option>
                                    <option value="солдаты/матросы">солдаты/матросы</option>
                                    <option value="сержанты/старшины">сержанты/старшины</option>
                                
                                    <option value="прапорщики/мичманы">прапорщики/мичманы</option>
                                    <option value="младший офицерский состав">младший офицерский состав</option>
                
                                    <option value="Старший офицерский состав">Старший офицерский состав</option>
                                    <option value="Высший офицерский состав">Высший офицерский состав</option>
                            
                                </select>
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
    $('#yesmilitary_rank').on('change', function() {
      if(this.value == "войсковые"){
        $("#yesmilitary_rank_1_div").show()
        $("#yesmilitary_rank_2_div").hide()
      }else if(this.value == "корабельные"){
        $("#yesmilitary_rank_2_div").show()
        $("#yesmilitary_rank_1_div").hide()
      }
    })
});
$(function() {
    $('#military').on('change', function() {
      if(this.value == "невоеннообязанный"){
        $("#notmilitary").show()
        $("#yesmilitary").hide()
        $("#yesmilitary_rank_1_div").hide()
      }else if(this.value == "военнообязанный"){
        $("#yesmilitary").show()
        $("#notmilitary").hide()
        $("#yesmilitary_rank_1_div").show()
      }
    })
});
</script>