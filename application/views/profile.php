<div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <a class="navbar-brand" href="index">Кадровая безопасность</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"> </i><?php echo $_SESSION['user_fio']; ?> <i class="fa fa-caret-down"></i>
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
                            <a href="index"><i class="fa fa-dashboard fa-fw"></i> Главная страница</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i> Анкетирование<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
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
                            <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Доступные тесты</a>
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
                    <h1 class="page-header">Главная страница</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <?php if(isset($_SESSION['success'])) {?>

            <div class="alert alert-success"><?php echo $_SESSION['success']?> </div>

            <?php }?>
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i></i> Информация о сайте
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-badge success"><i class="fa fa-check"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title"> Добро пожаловать!</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Добро пожаловать на сайт разработанный студентами <a class="alert-link" href="https://tusur.ru/">ТУСУР</a> в рамках группового проектного обучения. Этот web-ресурс предназначен для тестирования пользователей на уровень благонадежности в рамках кадровой безопасности предприятия.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge danger"><i class="fa fa-lock"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Регистрация</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Для начало вам необходимо зарегистрироваться, для этого перейдите по ссылке в правом верхнем углу экрана.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge warning"><i class="fa fa-unlock"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Авторизация</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>После регистрации авторизуйтесь в системе для получение доступа к анкетированию и тестированию.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge info"><i class="fa fa-list-alt"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Анкетирование</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Заполните подробную информацию о себе.</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-tasks"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Тестирование</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Пройдите доступные вам тесты. Тесты, которые необходимо пройти, будут добавлены оператором, это может произойти не сразу.</p>
                                            <hr>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-badge info"><i class="fa fa-save"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Обработка результатов</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Данный который вы заполняете при анкетирование и тестирование будут храниться в базе данных.</p>
                                        </div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-badge success"><i class="fa fa-graduation-cap"></i>
                                    </div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4 class="timeline-title">Получение коэффициента благонадежности</h4>
                                        </div>
                                        <div class="timeline-body">
                                            <p>Алгоритм обработает данные, которые были занесены в базу он вычесляет ваш коэфициет благонадежности.</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
                
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>