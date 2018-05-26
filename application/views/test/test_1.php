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
                            <a href="index"><i class="fa fa-dashboard fa-fw"></i> Доступные тесты</a>
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
                            <a href="../test/test_1"><i class="fa fa-edit fa-fw"></i> Доступные тесты</a>
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
                    <h1 class="page-header"> Доступные тесты</h1>
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
                            <i> Информация о доступных тестах</i>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Green Panel
                        </div>
                        <div class="panel-body">
                            <a href="test_one"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p></a>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Yellow Panel
                        </div>
                        <div class="panel-body">
                            <a href="test_two"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p></a>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Red Panel
                        </div>
                        <div class="panel-body">
                            <a href="test_three"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tincidunt est vitae ultrices accumsan. Aliquam ornare lacus adipiscing, posuere lectus et, fringilla augue.</p></a>
                        </div>
                        <div class="panel-footer">
                            Panel Footer
                        </div>
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
            </div>
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