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
                        Европейский + Восточный
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_1" name="checkbox_1" type="checkbox" value="1">английский</label>
                                <div id="checkbox_at_1">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_1_else" name="checkbox_1_else">
                                        <option value="английский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="английский:разговорный уровень">разговорный уровень</option>
                                        <option value="английский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_1_else_1" name="checkbox_1_else_1">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_2" name="checkbox_2" type="checkbox" value="французский">французский</label>
                                <div id="checkbox_at_2">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_2_else" name="checkbox_2_else">
                                        <option value="французский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="французский:разговорный уровень">разговорный уровень</option>
                                        <option value="французский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_2_else_2" name="checkbox_2_else_2">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_3" name="checkbox_3" type="checkbox" value="немецкий">немецкий</label>
                                <div id="checkbox_at_3">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_3_else" name="checkbox_3_else">
                                        <option value="немецкий:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="немецкий:разговорный уровень">разговорный уровень</option>
                                        <option value="немецкий:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_3_else_3" name="checkbox_3_else_3">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_4" name="checkbox_4" type="checkbox" value="испанский">испанский</label>
                                <div id="checkbox_at_4">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_4_else" name="checkbox_4_else">
                                        <option value="испанский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="испанский:разговорный уровень">разговорный уровень</option>
                                        <option value="испанский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_4_else_4" name="checkbox_4_else_4">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_5" name="checkbox_5" type="checkbox" value="португальский">португальский</label>
                                <div id="checkbox_at_5">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_5_else" name="checkbox_5_else">
                                        <option value="португальский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="португальский:разговорный уровень">разговорный уровень</option>
                                        <option value="португальский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_5_else_5" name="checkbox_5_else_5">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_6" name="checkbox_6" type="checkbox" value="итальянский">итальянский</label>
                                <div id="checkbox_at_6">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_6_else" name="checkbox_6_else">
                                        <option value="итальянский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="итальянский:разговорный уровень">разговорный уровень</option>
                                        <option value="итальянский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_6_else_6" name="checkbox_6_else_6">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_7" name="checkbox_7" type="checkbox" value="польский">польский</label>
                                <div id="checkbox_at_7">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_7_else" name="checkbox_7_else">
                                        <option value="польский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="польский:разговорный уровень">разговорный уровень</option>
                                        <option value="польский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_7_else_7" name="checkbox_7_else_7">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_8" name="checkbox_8" type="checkbox" value="болгарский">болгарский</label>
                                <div id="checkbox_at_8">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_8_else" name="checkbox_8_else">
                                        <option value="болгарский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="болгарский:разговорный уровень">разговорный уровень</option>
                                        <option value="болгарский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_8_else_8" name="checkbox_8_else_8">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_9" name="checkbox_9" type="checkbox" value="греческий">греческий</label>
                                <div id="checkbox_at_9">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_9_else" name="checkbox_9_else">
                                        <option value="греческий:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="греческий:разговорный уровень">разговорный уровень</option>
                                        <option value="греческий:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_9_else_9" name="checkbox_9_else_9">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_10" type="checkbox" value="другой">другой</label>
                                <div id="checkbox_at_10">
                                    <input class="form-control" id="checkbox_10_" type="text" name="polnoesrednie" placeholder="Название...">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_10_else" name="checkbox_10_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_10_else_10" name="checkbox_10_else_10">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_11" name="checkbox_11" type="checkbox" value="китайский">китайский</label>
                                <div id="checkbox_at_11">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_11_else" name="checkbox_11_else">
                                        <option value="китайский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="китайский:разговорный уровень">разговорный уровень</option>
                                        <option value="китайский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_11_else_11" name="checkbox_11_else_11">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_12" name="checkbox_12" type="checkbox" value="арабский">арабский</label>
                                <div id="checkbox_at_12">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_12_else" name="checkbox_12_else">
                                        <option value="арабский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="арабский:разговорный уровень">разговорный уровень</option>
                                        <option value="арабский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_12_else_12" name="checkbox_12_else_12">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_13" name="checkbox_13" type="checkbox" value="хинди">хинди</label>
                                <div id="checkbox_at_13">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_13_else" name="checkbox_13_else">
                                        <option value="хинди:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="хинди:разговорный уровень">разговорный уровень</option>
                                        <option value="хинди:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_13_else_13" name="checkbox_13_else_13">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_14" name="checkbox_14" type="checkbox" value="корейский">корейский</label>
                                <div id="checkbox_at_14">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_14_else" name="checkbox_14_else">
                                        <option value="корейский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="корейский:разговорный уровень">разговорный уровень</option>
                                        <option value="корейский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_14_else_14" name="checkbox_14_else_14">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_15" name="checkbox_15" type="checkbox" value="турецкий">турецкий</label>
                                <div id="checkbox_at_15">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_15_else" name="checkbox_15_else">
                                        <option value="турецкий:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="турецкий:разговорный уровень">разговорный уровень</option>
                                        <option value="турецкий:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_15_else_15" name="checkbox_15_else_15">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_16" name="checkbox_16" type="checkbox" value="иврит">иврит</label>
                                <div id="checkbox_at_16">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_16_else" name="checkbox_16_else">
                                        <option value="иврит:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="иврит:разговорный уровень">разговорный уровень</option>
                                        <option value="иврит:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_16_else_16" name="checkbox_16_else_16">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_17" name="checkbox_17" type="checkbox" value="малайский">малайский</label>
                                <div id="checkbox_at_17">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_17_else" name="checkbox_17_else">
                                        <option value="малайский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="малайский:разговорный уровень">разговорный уровень</option>
                                        <option value="малайский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_17_else_17" name="checkbox_17_else_17">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_18" name="checkbox_18" type="checkbox" value="монгольский">монгольский</label>
                                <div id="checkbox_at_18">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_18_else" name="checkbox_18_else">
                                        <option value="монгольский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="монгольский:разговорный уровень">разговорный уровень</option>
                                        <option value="монгольский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_18_else_18" name="checkbox_18_else_18">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_19" name="checkbox_19" type="checkbox" value="тайский">тайский</label>
                                <div id="checkbox_at_19">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_19_else" name="checkbox_19_else">
                                        <option value="тайский:базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="тайский:разговорный уровень">разговорный уровень</option>
                                        <option value="тайский:профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_19_else_19" name="checkbox_19_else_19">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_20" type="checkbox" value="другой">другой</label>
                                <div id="checkbox_at_20">
                                    <input class="form-control" id="checkbox_20" type="text" name="polnoesrednie" placeholder="Название...">
                                    <label> Уровень владения</label>
                                    <select class="form-control" id="checkbox_20_else" name="checkbox_20_else">
                                        <option value="базовый уровень" selected="selected">базовый уровень</option>
                                        <option value="разговорный уровень">разговорный уровень</option>
                                        <option value="профессиональный (деловой) уровень">профессиональный (деловой) уровень</option>
                                    </select>
                                    <label> Шкала уровней владения иностранными языками по системе CEFR</label>
                                    <select class="form-control" id="checkbox_20_else_20" name="checkbox_20_else_20">
                                        <option value="С2" selected="selected">С2</option>
                                        <option value="С1">С1</option>
                                        <option value="B2">B2</option>
                                        <option value="B1">B1</option>
                                        <option value="A2">A2</option>
                                        <option value="A1">A1</option>
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
            
        </div>
        <!-- /.row -->
        
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<script>

</script>