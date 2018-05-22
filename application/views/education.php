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
                                <a class="active" href="buttons.html"> Информация об образовании</a>
                            </li>
                            <li>
                                <a href="notifications.html"> Опыт работы</a>
                            </li>
                            <li>
                                <a href="typography.html"> Стаж работы</a>
                            </li>
                            <li>
                                <a href="icons.html"> Icons</a>
                            </li>
                            <li>
                                <a href="grid.html">Grid</a>
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
                <h1 class="page-header"> Информация об образовании</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Уровень образования 
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_1" name="checkbox_1" type="checkbox" value="Без образования">Без образования</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_2" name="checkbox_2" type="checkbox" value="Полное среднее образование">Полное среднее образование</label>
                                <div id="checkbox_at_2">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" name="polnoesrednie">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_3" name="checkbox_3" type="checkbox" value="Магистратура">Магистратура</label>
                                <div id="checkbox_at_3">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" name="polnoesrednie">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_4" name="checkbox_4" type="checkbox" value="Специалитет">Специалитет</label>
                                <div id="checkbox_at_4">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" name="polnoesrednie">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_5" name="checkbox_5" type="checkbox" value="Кандидат наук">Кандидат наук</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_6" name="checkbox_6" type="checkbox" value="Доктор наук">Доктор наук</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_7" name="checkbox_7" type="checkbox" value="PhD">PhD</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_8" name="checkbox_8" type="checkbox" value="Профессиональная переподготовка">Профессиональная переподготовка</label>
                                <div id="checkbox_at_8">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" name="polnoesrednie">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_9" name="checkbox_9" type="checkbox" value="Профессиональная переподготовка в области управления">Профессиональная переподготовка в области управления</label>
                                <div id="checkbox_at_9">
                                    <label> Средний балл</label>
                                    <input class="form-control" type="text" name="polnoesrednie">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_10" name="checkbox_10" type="checkbox" value="Высшее образования + учёная степень">Высшее образования + учёная степень</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_11" name="checkbox_11" type="checkbox" value="Высшее образование + профессиональная переподготовка">Высшее образование + профессиональная переподготовка</label>
                            </div>
                            <div class="form-group">
                                <label class="checkbox-inline"><input id="checkbox_12" name="checkbox_12" type="checkbox" value="Высшее образование + учёная степень + профессиональная переподготовка в области управления">Высшее образование + учёная степень + профессиональная переподготовка в области управления</label>
                            </div>
                            <div class="form-group">
                                <p></p>
                            </div>

                            <script>

                            $( "input" ).change(function() {
                            for( var $i = 2; $i < 10; $i++){
                                if($i != 5 && $i != 6){
                                    var $input = $("#checkbox_" + $i);
                                    if($input.is( ":checked" ))
                                    {
                                        $("#checkbox_at_" + $i).show()
                                    }else {

                                        $("#checkbox_at_" + $i).hide()

                                    } 
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
            <!-- /.col-lg-4 -->
            
            <!-- /.col-lg-4 -->
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <!-- Над придумать что тут написать -->
                    </div>
                    <div class="panel-body">
                        
                        <form method="POST">

                            <div class="form-group">
                                <label>Место рождения</label>
                                <input class="form-control" name="place_birth" id="place_birth" placeholder="село, город, край, область, республика">
                            </div>

                            <div class="form-group">
                                <label>Место регистрации</label>
                                <input class="form-control" name="place_registed" id="place_registed" placeholder="Индекс, область, город, улица, дом, корпус, кв.">
                            </div>

                            <div class="form-group">
                                <label>Сколько раз вы меняли место регистрации?</label>
                                <select class="form-control" name="place_registed_ch" id="place_registed_ch">
                                    <option value="0" selected="selected">Не менял(а)</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10+</option>
                                </select>

                            </div>
                            <div class="form-group" id="inner_place_registed">

                            </div>
                            <script>
                                $(document).ready(function(){

                                   $("#place_registed_ch").change(function(){

                                    var id = $( "select#place_registed_ch option:checked" ).val();
                                    if(id != 0 && $('#inner_place_registed').empty()){

                                    $('#inner_place_registed').append('<label>По какой причине?</label><select class="form-control" name="place_registed_ch1" id="place_registed_ch1"><option value="в целях безопасности" selected="selected">в целях безопасности</option><option value="в связи с покупкой жилья">в связи с покупкой жилья</option><option value="в связи со сменой работы">в связи со сменой работы</option><option value="в связи с состоянием здоровья">в связи с состоянием здоровья</option><option value="семейные обстоятельства">семейные обстоятельства</option><option value="личные цели">личные цели</option><option value="иные причины">иные причины</option></select>');
                                    }
                                    else{
                                        $('#inner_place_registed').empty();
                                    }
                                   });

                                }); 
                                </script>

                                <div class="form-group">
                                <label>Место жительства</label>
                                <input class="form-control" name="place_life" id="place_life" placeholder="Индекс, область, город, улица, дом, корпус, кв.">
                            </div>

                            <div class="form-group">
                                <label>Сколько раз вы меняли место жительства?</label>
                                <select class="form-control" name="place_life_ch" id="place_life_ch">
                                    <option value="0" selected="selected">Не менял(а)</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10+</option>
                                </select>

                            </div>
                            <div class="form-group" id="inner_place_life">

                            </div>
                            <script>
                                $(document).ready(function(){

                                   $("#place_life_ch").change(function(){

                                    var id = $( "select#place_life_ch option:checked" ).val();
                                    if(id != 0 && $('#inner_place_life').empty()){

                                    $('#inner_place_life').append('<label>По какой причине?</label><select class="form-control" name="place_life_ch1" id="place_life_ch1"><option value="в целях безопасности" selected="selected">в целях безопасности</option><option value="в связи с покупкой жилья">в связи с покупкой жилья</option><option value="в связи со сменой работы">в связи со сменой работы</option><option value="в связи с состоянием здоровья">в связи с состоянием здоровья</option><option value="семейные обстоятельства">семейные обстоятельства</option><option value="личные цели">личные цели</option><option value="иные причины">иные причины</option></select>');
                                    }
                                    else{
                                        $('#inner_place_life').empty();
                                    }
                                   });

                                }); 
                                </script>

                                <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-4">
                                        <input type="submit" name="mesto-submit" class="btn btn-outline btn-success" value="Отправить">
                                    </div>
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