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
                                    <a class="active" href="questionnaire"> Базовая информация</a>
                                </li>
                                <li>
                                    <a href="education"> Информация об образовании</a>
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
                    <h1 class="page-header"> Базовая информация</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <!-- Над придумать что тут написать -->
                        </div>
                        <div class="panel-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label>На должность</label>
                                    <input class="form-control" type="text" name="nadoljnost">
                                </div>
                                <div class="form-group">
                                    <label>В отдел</label>
                                    <input class="form-control" type="text" name="votdel">
                                </div>
                                <div class="form-group">
                                    <label>Паспортные данные</label>
                                    <input class="form-control" name="pasportdata" id="pasportdata" placeholder="номер, серия, кем и когда выдан">
                                </div>
                                <div class="form-group">
                                    <label>Гражданство</label>
                                    <select class="form-control" name="citizenship" id="citizenship">
                                        <option value="гражданство РФ" selected="selected">гражданство РФ</option>
                                        <option value="двойное гражданство">двойное гражданство</option>
                                        <option value="политический беженец (политическое убежище)">политический беженец (политическое убежище)</option>
                                        <option value="лицо без гражданства">лицо без гражданства</option>
                                        <option value="другое">другое</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Семейное положение</label>
                                    <select class="form-control" name="sp" id="sp">
                                        <option value="замужем/женат" selected="selected">замужем/женат</option>
                                        <option value="вдова/вдовец">вдова/вдовец</option>
                                        <option value="не замужем/ холост">не замужем/ холост</option>
                                        <option value="в разводе">в разводе</option>
                                        <option value="сожительство">сожительство</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Дети</label>
                                    <input class="form-control" type="text" name="deti" placeholder="Да">
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-4">
                                            <input type="submit" name="osnova-submit" class="btn btn-outline btn-success" value="Отправить">
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
                <div class="col-lg-4">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <!-- Над придумать что тут написать -->
                        </div>
                        <div class="panel-body">
                            <form method="POST">
                                <div class="form-group">
                                    <label>Сколько раз вы меняли фамилию?</label>
                                    <select class="form-control" name="fio" id="fio">
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
                                <div class="form-group" id="inner">

                                </div>
                                <script>
                                    $(document).ready(function(){

                                       $("#fio").change(function(){

                                        var id = $( "select#fio option:checked" ).val();
                                        if(id != 0 && $('#inner').empty()){

                                        $('#inner').append('<label>По какой причине?</label><select class="form-control" name="fio" id="fio"><option value="в целях безопасности" selected="selected">в целях безопасности</option><option value="в связи с вступлением в брак">в связи с вступлением в брак</option><option value="усыновлен/удочерена">усыновлен/удочерена</option><option value="по собственному желанию">по собственному желанию</option><option value="иные причины">иные причины</option></select>');
                                        }
                                        else{
                                            $('#inner').empty();
                                        }
                                       });

                                    }); 
                                    </script>

                                    <div class="form-group">
                                    <label>Сколько раз вы меняли имя?</label>
                                    <select class="form-control" name="fioI" id="fioI">
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
                                <div class="form-group" id="innerI">

                                </div>
                                <script>
                                    $(document).ready(function(){
  
                                       $("#fioI").change(function(){

                                        var id = $( "select#fioI option:checked" ).val();
                                        if(id != 0 && $('#innerI').empty()){

                                        $('#innerI').append('<label>По какой причине?</label><select class="form-control" name="fioIP" id="fioIP"><option value="в целях безопасности" selected="selected">в целях безопасности</option><option value="усыновлен/удочерена">усыновлен/удочерена</option><option value="по собственному желанию">по собственному желанию</option><option value="иные причины">иные причины</option></select>');
                                        }
                                        else{
                                            $('#innerI').empty();
                                        }
                                       });

                                    }); 
                                    </script>

                                    <div class="form-group">
                                    <label>Сколько раз вы меняли отчество?</label>
                                    <select class="form-control" name="fioF" id="fioO">
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
                                <div class="form-group" id="innerO">

                                </div>
                                <script>
                                    $(document).ready(function(){
  
                                       $("#fioO").change(function(){

                                        var id = $( "select#fioO option:checked" ).val();
                                        if(id != 0 && $('#innerO').empty()){

                                        $('#innerO').append('<label>По какой причине?</label><select class="form-control" name="fioOP" id="fioOP"><option value="в целях безопасности" selected="selected">в целях безопасности</option><option value="усыновлен/удочерена">усыновлен/удочерена</option><option value="по собственному желанию">по собственному желанию</option><option value="иные причины">иные причины</option></select>');
                                        }
                                        else{
                                            $('#innerO').empty();
                                        }
                                       });

                                    }); 
                                    </script>

                                    <div class="form-group">
                                    <label>Сколько раз вы меняли дату рождения?</label>
                                    <select class="form-control" name="data_birth" id="data_birth">
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
                                <div class="form-group" id="inner_data_birth">

                                </div>
                                <script>
                                    $(document).ready(function(){
  
                                       $("#data_birth").change(function(){

                                        var id = $( "select#data_birth option:checked" ).val();
                                        if(id != 0 && $('#inner_data_birth').empty()){

                                        $('#inner_data_birth').append('<label>По какой причине?</label><select class="form-control" name="data_birth_P" id="data_birth_P"><option value="в целях безопасности" selected="selected">в целях безопасности</option><option value="усыновлен/удочерена">усыновлен/удочерена</option><option value="по собственному желанию">по собственному желанию</option><option value="иные причины">иные причины</option></select>');
                                        }
                                        else{
                                            $('#inner_data_birth').empty();
                                        }
                                       });

                                    }); 
                                    </script>

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-6 col-sm-offset-4">
                                            <input type="submit" name="li-submit" class="btn btn-outline btn-success" value="Отправить">
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
                <div class="col-lg-4">
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

    <!-- jQuery -->