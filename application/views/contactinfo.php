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
                                <a class="active" href="contactinfo"> Контактная информация</a>
                            </li>
                            <li>
                                <a href="drivinglicense"> Водительское удостоверения</a>
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
                <h1 class="page-header"> Контактная информация</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Основная
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="form-group">
                                <label>Домашний телефон</label>
                                <input class="form-control" name="phone" id="phone">
                            </div>
                            <div class="form-group">
                                <label>Сколько раз вы меняли мобильный телефон?</label>
                                <select class="form-control" name="phone_1" id="phone_1">
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
                            <div class="form-group" id="phone_inner">

                            </div>
                            <script>
                            $(document).ready(function()
                            {

                                $("#phone_1").change(function()
                                {

                                    var id = $( "select#phone_1 option:checked" ).val();
                                    if(id != 0 && $('#phone_inner').empty()){
                                    var content = "";
                                    content += '<label>По какой причине?</label>'; 
                                    content += '<select class="form-control" name="phone_2" id="phone_2">';
                                    content += '<option value="в целях безопасности" selected="selected">в целях безопасности</option>';
                                    content += '<option value="в связи с переездом в другой регион/страну">в связи с переездом в другой регион/страну</option>';
                                    content += '<option value="в связи с потерей сим. карты">в связи с потерей сим. карты</option>';
                                    content += '<option value="личные цели">личные цели</option>';
                                    content += '<option value="иные причины">иные причины</option>';
                                    content += '</select>';
                                    $('#phone_inner').append(content);
                                    }
                                    else{
                                        $('#phone_inner').empty();
                                    }
                                });

                            }); 
                            </script>

                            <div class="form-group">
                                <label>Сколько раз вы меняли email?</label>
                                <select class="form-control" name="email" id="email">
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
                            <div class="form-group" id="email_inner">

                            </div>
                            <script>
                            $(document).ready(function()
                            {

                                $("#email").change(function()
                                {

                                    var id = $( "select#email option:checked" ).val();
                                    if(id != 0 && $('#email_inner').empty()){
                                    var content = "";
                                    content += '<label>По какой причине?</label>'; 
                                    content += '<select class="form-control" name="email_1" id="email_1">';
                                    content += '<option value="личная и корпоративная почта" selected="selected">личная и корпоративная почта</option>';
                                    content += '<option value="в связи с работой в разных организациях">в связи с работой в разных организациях</option>';
                                    content += '<option value="спам/бан">спам/бан</option>';
                                    content += '<option value="утеря пароля и невозможность его восстановления">утеря пароля и невозможность его восстановления</option>';
                                    content += '<option value="в связи с необходимостью создания нескольких аккаунтов в со-циальной сети">в связи с необходимостью создания нескольких аккаунтов в со-циальной сети</option>';
                                    content += '<option value="другие причины">другие причины</option>';
                                    content += '</select>';
                                    $('#email_inner').append(content);
                                    }
                                    else{
                                        $('#email_inner').empty();
                                    }
                                });

                            }); 
                            </script>

                            <div class="form-group">
                                <div class="row">
                                    <div class="col-sm-6 col-sm-offset-4">
                                        <input type="submit" id="contactinfo_submit" name="contactinfo_submit" class="btn btn-outline btn-success" value="Отправить данные">
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

            <div class="col-lg-9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Укажите людей, которые могли бы дать Вам рекомендацию
                    </div>
                    <div class="panel-body">
                        <form method="POST">
                            <div class="row" id="new_fio_1">

                                <div class="col-md-12">
                                    <p>ФИО,      организация,         должность,       контакты</p>
                                    <input name="recom_1" type="text" class="form-control">
                                </div>
                            </div>

                            <div class="row" id="new_fio_2" style="padding-top: 20px; display: none;">
                                <div class="col-md-12">
                                        
                                        <input name="recom_2" type="text" class="form-control" placeholder="ФИО организация должность контакты">

                                </div>
                            </div>

                            <div class="row" id="new_fio_3" style="padding-top: 20px; display: none;">
                                <div class="col-md-12">
                                        
                                        <input name="recom_3" type="text" class="form-control" placeholder="ФИО организация должность контакты">
                                </div>
                            </div>

                            <div class="row" id="new_fio_4" style="padding-top: 20px; display: none;">
                                <div class="col-md-12">
                                        
                                        <input name="recom_4" type="text" class="form-control" placeholder="ФИО организация должность контакты">
                                </div>
                            </div>

                            <div class="row" id="new_fio_5" style="padding-top: 20px; display: none;">
                                <div class="col-md-12">
                                        
                                        <input name="recom_5" type="text" class="form-control" placeholder="ФИО организация должность контакты">
                                </div>
                            </div>
                        
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                        <button type="button" class="btn btn-primary">Добавить</button>
                                    </div>
                                    <div class="col-xs-3 col-xs-offset-3" style="padding-top: 15px; margin-left: 0">
                                        <input type="submit" id="submit" name="submit" class="btn btn-outline btn-success"></input>
                                    </div>
                                </div>

                            </div>

                        </form>
                        <script type="text/javascript">

                            $("button").click(function(){
                                var $new_fio_2 = $("#new_fio_2");
                                var $new_fio_3 = $("#new_fio_3");
                                var $new_fio_4 = $("#new_fio_4");
                                if($new_fio_4.is(':visible')){
                                    $("#new_fio_5").show();
                                }
                                if($new_fio_3.is(':visible')){
                                    $("#new_fio_4").show();
                                }
                                if($new_fio_2.is(':visible')){
                                    $("#new_fio_3").show();
                                }
                                $new_fio_2.show();

                                

                            }); 
                        </script>
                            
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