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
                                <select class="form-control" id="military">
                                    <option value="невоеннообязанный" selected="selected">Невоеннообязанный</option>
                                    <option value="военнообязанный">Военнообязанный</option>
                                </select>
                            </div>
                            <div class="form-group" id="yesmilitary" style="display: none;">
                                <div class="form-group">
                                    <label>Военнообязанный</label>
                                    <select class="form-control" id="yesmilitary_1">
                                        <option value="прошедший военную службу по кон-тракту" selected="selected">прошедший военную службу по контракту</option>
                                        <option value="прошедшие военную службу">прошедшие военную службу</option>
                                        <option value="прошедшие альтернативную граждан-скую службу">прошедшие альтернативную гражданскую службу</option>
                                        <option value="призывного возраста">призывного возраста</option>
                                        <option value="другое">другое</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group" id="military_2" style="display: none;">
                                <label>Водительский стаж (лет)</label>
                                <select class="form-control" id="driving">
                                    <option value="0,1-1 (менее года)" selected="selected">0,1-1 (менее года)</option>
                                    <option value="1-2">1-2</option>
                                    <option value="2-4">2-4</option>
                                    <option value="4-7">4-7</option>
                                    <option value="7-11">7-11</option>
                                    <option value="более 11 лет">более 11 лет</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-6" id="notmilitary">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Невоеннообязанный
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>По какой причине?</label>
                                <select class="form-control" name="notmilitary_1" id="notmilitary_1">
                                    <option value="по медицинским показателям" selected="selected">по медицинским показателям</option>
                                    <option value="наличие непогашенной судимости">наличие непогашенной судимости</option>
                                    <option value="другое">другое</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="yesmilitary_3" style="display: none;">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Воинское звание
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Воинское звание</label>
                                <select class="form-control" name="yesmilitary_rank" id="yesmilitary_rank">
                                    <option value="войсковые" selected="selected">Войсковые</option>
                                    <option value="корабельные">Корабельные</option>
                                </select>
                            </div>
                            <div class="form-group" id="yesmilitary_rank_1_div">
                                <label>Войсковые воинское звания</label>
                                <select class="form-control" name="yesmilitary_rank_1" id="yesmilitary_rank_1" >
                                    <option value="" disabled selected>Выберети из списка...</option>
                                    <option value="рядовой (курсант)">рядовой (курсант)</option>
                                    <option value="ефрейтор">ефрейтор</option>
                                
                                    <option value="младший сержант">младший сержант</option>
                                    <option value="сержант">сержант</option>
                                    <option value="Прапорщики">Прапорщики</option>
                                    <option value="старший сержант">старший сержант</option>
                                    <option value="старшина">старшина</option>
                                
                                    <option value="прапорщик" >прапорщик</option>
                                    <option value="старший прапорщик">старший прапорщик</option>
                                
                                    <option value="младший лейтенант">младший лейтенант</option>
                                    <option value="лейтенант">лейтенант</option>
                                    <option value="старший лейтенант">старший лейтенант</option>
                                    <option value="капитан">капитан</option>
                                
                                    <option value="майор" >майор</option>
                                    <option value="подполковник">подполковник</option>
                                    <option value="Прапорщики">Прапорщики</option>
                                    <option value="полковник">полковник</option>
                                    <option value="Старший офицерский состав">Старший офицерский состав</option>
                                    <option value="Высший офицерский состав">Высший офицерский состав</option>
                                
                                    <option value="генерал-майор" >генерал-майор</option>
                                    <option value="генерал-лейтенант">генерал-лейтенант</option>
                                    <option value="генерал-полковник">генерал-полковник</option>
                                    <option value="генерал армии">генерал армии</option>
                                </select>
                            </div>
                            <div class="form-group" id="yesmilitary_rank_2_div" style="display: none;">
                                <label>Корабельные воинское звание</label>
                                <select class="form-control" name="yesmilitary_rank_2" id="yesmilitary_rank_2">
                                    <option value="" disabled selected>Выберети из списка...</option>
                                    <option value="матрос (курсант)">матрос (курсант)</option>
                                    <option value="старший матрос">старший матрос</option>
                                
                                    <option value="старшина 2 статьи">старшина 2 статьи</option>
                                    <option value="старшина 1 статьи">старшина 1 статьи</option>
                                    <option value="главный старшина">главный старшина</option>
                                    <option value="главный корабельный старшина">главный корабельный старшина</option>
                                
                                    <option value="мичман">мичман</option>
                                    <option value="старший мичман">старший мичман</option>
                                
                                    <option value="младший лейтенант">младший лейтенант</option>
                                    <option value="лейтенант">лейтенант</option>
                                    <option value="старший-лейтенант">старший-лейтенант</option>
                                    <option value="капитан-лейтенант">капитан-лейтенант</option>
                                
                                    <option value="капитан 3 ранга">капитан 3 ранга</option>
                                    <option value="капитан 2 ранга">капитан 2 ранга</option>
                                    <option value="капитан 1 ранга">капитан 1 ранга</option>
                                
                                    <option value="контр-адмирал">контр-адмирал</option>
                                    <option value="вице-адмирал">вице-адмирал</option>
                                    <option value="адмирал флота">адмирал флота</option>
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
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
        $("#yesmilitary_3").hide()
      }else if(this.value == "военнообязанный"){
        $("#yesmilitary").show()
        $("#notmilitary").hide()
        $("#yesmilitary_3").show()
      }
    })
});
</script>