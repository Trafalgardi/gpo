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
                                <a href="military"> Отношение к воинской обязанности</a>
                            </li>
                            <li>
                                <a class="active" href="languages"> Знание иностранных языков</a>
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
                <h1 class="page-header"> Знание иностранных языков</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Знание иностранных языков
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Владеете ли вы иностранным языком?</label>
                                <select class="form-control" id="languages">
                                    <option value="да" selected="selected">Да</option>
                                    <option value="нет">Нет</option>
                                </select>
                            </div>
                        </form>
                        <script type="text/javascript">
                            
                            $(function() {
                                $('#languages').on('change', function() {
                                  if(this.value == "да"){
                                    $("#yeslanguages_1").show()
                                    $("#yeslanguages_2").show()
                                    $("#yeslanguages_3").show()
                                  }else if(this.value == "нет"){
                                    $("#yeslanguages_1").hide()
                                    $("#yeslanguages_2").hide()
                                    $("#yeslanguages_3").hide()
                                  }
                                })
                            });
                        </script>
                    </div>
                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="yeslanguages_1">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Языки
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group" id="yeslanguages">
                                <div class="form-group">
                                <label class="checkbox-inline"><input id="languages_small_1" name="languages_small_1" type="checkbox" value="Язык малых народов">Язык малых народов</label>
                                <div id="checkbox_at_1_small">
                                    <input class="form-control" id="languages_small" type="text" name="polnoesrednie" placeholder="Название...">
                                    <label> Уровень владения</label>
                                    
                                    <select class="form-control" id="languages_small_1_1">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="languages_small_2" name="languages_small_2" type="checkbox" value="Древний язык">Древний язык</label>
                                <div id="checkbox_at_2_small">
                                    <input class="form-control" id="languages_old" type="text" name="polnoesrednie" placeholder="Название...">
                                    <label> Уровень владения</label>
                                    
                                    <select class="form-control" id="languages_old_1">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="languages_small_3" name="languages_small_3" type="checkbox" value="Мертвый язык">Мертвый язык</label>
                                <div id="checkbox_at_3_small">
                                    <input class="form-control" id="languages_dead" type="text" name="polnoesrednie" placeholder="Название...">
                                    <label> Уровень владения</label>
                                    
                                    <select class="form-control" id="languages_dead_1">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            </div>
                        </form>
                        <script>

                            $( "input" ).change(function() {
                            for( var $i = 1; $i < 4; $i++){
                                var $input = $("#languages_small_" + $i);
                                if($input.is( ":checked" ))
                                {
                                    $("#checkbox_at_" + $i + "_small").show()
                                }else {

                                    $("#checkbox_at_" + $i + "_small").hide()

                                }
                            }
                            

                            }).change();
                            
                            

                            </script>
                    </div>
                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <div class="col-lg-6" id="yeslanguages_2">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Европейский
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_1" name="checkbox_1" type="checkbox" value="английский">английский</label>
                                <div id="checkbox_at_1">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_1_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_2" name="checkbox_2" type="checkbox" value="французский">французский</label>
                                <div id="checkbox_at_2">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_2_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_3" name="checkbox_3" type="checkbox" value="немецкий">немецкий</label>
                                <div id="checkbox_at_3">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_3_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_4" name="checkbox_4" type="checkbox" value="испанский">испанский</label>
                                <div id="checkbox_at_4">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_4_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_5" name="checkbox_5" type="checkbox" value="португальский">португальский</label>
                                <div id="checkbox_at_5">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_5_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_6" name="checkbox_6" type="checkbox" value="итальянский">итальянский</label>
                                <div id="checkbox_at_6">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_6_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_7" name="checkbox_7" type="checkbox" value="польский">польский</label>
                                <div id="checkbox_at_7">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_7_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_8" name="checkbox_8" type="checkbox" value="болгарский">болгарский</label>
                                <div id="checkbox_at_8">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_8_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_9" name="checkbox_9" type="checkbox" value="греческий">греческий</label>
                                <div id="checkbox_at_9">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_9_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_10" type="checkbox" value="другой">другой</label>
                                <div id="checkbox_at_10">
                                    <input class="form-control" id="checkbox_10_name" type="text" name="polnoesrednie" placeholder="Название...">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_10_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>

                            <script>

                            $( "input" ).change(function() {
                            for( var $i = 1; $i < 11; $i++){
                                var $input = $("#checkbox_" + $i);
                                if($input.is( ":checked" ))
                                {
                                    $("#checkbox_at_" + $i).show()
                                }else {

                                    $("#checkbox_at_" + $i).hide()

                                }
                            }
                            

                            }).change();
                            
                            

                            </script>
                        </form>
                    </div>
                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
            <div class="col-lg-6" id="yeslanguages_3">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Восточный
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_11" name="checkbox_11" type="checkbox" value="китайский">китайский</label>
                                <div id="checkbox_at_11">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_11_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_12" name="checkbox_12" type="checkbox" value="арабский">арабский</label>
                                <div id="checkbox_at_12">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_12_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_13" name="checkbox_13" type="checkbox" value="хинди">хинди</label>
                                <div id="checkbox_at_13">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_13_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_14" name="checkbox_14" type="checkbox" value="корейский">корейский</label>
                                <div id="checkbox_at_14">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_14_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_15" name="checkbox_15" type="checkbox" value="турецкий">турецкий</label>
                                <div id="checkbox_at_15">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_15_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_16" name="checkbox_16" type="checkbox" value="иврит">иврит</label>
                                <div id="checkbox_at_16">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_16_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_17" name="checkbox_17" type="checkbox" value="малайский">малайский</label>
                                <div id="checkbox_at_17">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_17_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_18" name="checkbox_18" type="checkbox" value="монгольский">монгольский</label>
                                <div id="checkbox_at_18">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_18_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_19" name="checkbox_19" type="checkbox" value="тайский">тайский</label>
                                <div id="checkbox_at_19">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_19_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_20" type="checkbox" value="другой">другой</label>
                                <div id="checkbox_at_20">
                                    <input class="form-control" id="checkbox_20_name" type="text" name="polnoesrednie" placeholder="Название...">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_20_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                </div>
                            </div>

                            <script>

                            $( "input" ).change(function() {
                            for( var $i = 11; $i < 21; $i++){
                                var $input = $("#checkbox_" + $i);
                                if($input.is( ":checked" ))
                                {
                                    $("#checkbox_at_" + $i).show()
                                }else {

                                    $("#checkbox_at_" + $i).hide()

                                }
                            }
                            

                            }).change();
                            
                            

                            </script>
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

</script>