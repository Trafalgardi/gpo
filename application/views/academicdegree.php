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
                                <a href="buttons.html"> Информация об образовании</a>
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
                                <a class="active" href="academicdegree"> Учёная степень</a>
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
                <h1 class="page-header"> Учёная степень </h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Учёная степень
                    </div>
                    <div class="panel-body">
                        <form method="POST" id="form_1">
                        	<label> Кандидат в доктора наук</label>  
                            <select class="form-control" id="academicdegree_1">
                            	<option value="" disabled selected>Выберети из списка...</option>
                                <option value="архитектурных наук">архитектурных наук</option>
                                <option value="технических наук">технических наук</option>
                                <option value="физико-математических">физико-математических</option>
                                <option value="ветеринарных наук">ветеринарных наук</option>
                                <option value="медицинских наук">медицинских наук</option>
                                <option value="биологических наук">биологических наук</option>
                                <option value="географических наук">географических наук</option>
                                <option value="геолого – минералогических наук">геолого – минералогических наук</option>
                                <option value="сельскохозяйственные науки">сельскохозяйственные науки</option>
                                <option value="химических наук">химических наук</option>
                                <option value="военных наук">военных наук</option>
                                <option value="искусствоведения">искусствоведения</option>
                                <option value="исторических наук">исторических наук</option>
                                <option value="культурологии">культурологии</option>
                                <option value="политологических наук">политологических наук</option>
                                <option value="психологических наук">психологических наук</option>
                                <option value="социологических наук">социологических наук</option>
                                <option value="филологических наук">филологических наук</option>
                                <option value="философских наук">философских наук</option>
                                <option value="экономических наук">экономических наук</option>
                                <option value="юридических наук">юридических наук</option>
                                <option value="педагогических наук">педагогических наук</option>
                            </select>
                            
                        </form>
                        <div class="col-xs-3" style="padding-top: 15px; margin-left: 0">
                                <button type="button" id="button1" class="btn btn-primary">Добавить</button>
                            </div>
                    </div>
                    <div class="panel-footer">
                        После заполнения станет недоступно
                    </div>
                </div>
            </div>
            <!-- /.col-lg-4 -->
            <div class="row">
            <div class="col-lg-6">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        Учёная степень 
                    </div>
                    <div class="panel-body">
                        <form method="POST" id="form_2">
                        	<label> Доктор наук</label>  
                            <select class="form-control" id="academicdegree_doc_1">
                            	<option value="" disabled selected>Выберети из списка...</option>
                                <option value="архитектурных наук" >архитектурных наук</option>
                                <option value="технических наук">технических наук</option>
                                <option value="физико-математических">физико-математических</option>
                                <option value="ветеринарных наук">ветеринарных наук</option>
                                <option value="медицинских наук">медицинских наук</option>
                                <option value="биологических наук">биологических наук</option>
                                <option value="географических наук">географических наук</option>
                                <option value="геолого – минералогических наук">геолого – минералогических наук</option>
                                <option value="сельскохозяйственные науки">сельскохозяйственные науки</option>
                                <option value="химических наук">химических наук</option>
                                <option value="военных наук">военных наук</option>
                                <option value="искусствоведения">искусствоведения</option>
                                <option value="исторических наук">исторических наук</option>
                                <option value="культурологии">культурологии</option>
                                <option value="политологических наук">политологических наук</option>
                                <option value="психологических наук">психологических наук</option>
                                <option value="социологических наук">социологических наук</option>
                                <option value="филологических наук">филологических наук</option>
                                <option value="философских наук">философских наук</option>
                                <option value="экономических наук">экономических наук</option>
                                <option value="юридических наук">юридических наук</option>
                                <option value="педагогических наук">педагогических наук</option>
                            </select>
                        </form>
                        <div class="col-xs-3" style="padding-top: 15px; margin-left: 0">
                            <button id="button" type="button" class="btn btn-primary">Добавить</button>
                        </div>
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
$(document).ready(function()
{
	$(function(){
		var i = 2;
    $("#button").click(function() {
    	var b = i - 1;
    	if($("#academicdegree_doc_" + b).val() != null){
    		var content = "";
    		if($("#academicdegree_doc_" + i).val() == null){
				content += '<select class="form-control" id="academicdegree_doc_' + i + '" style="margin-top: 25px;margin-bottom: 25px;">'; 
	            content += '	<option value="" disabled selected>Выберети из списка...</option>'; 
	            content += '    <option value="архитектурных наук" >архитектурных наук</option>'; 
	            content += '    <option value="технических наук">технических наук</option>'; 
	            content += '    <option value="физико-математических">физико-математических</option>'; 
	            content += '    <option value="ветеринарных наук">ветеринарных наук</option>'; 
	            content += '    <option value="медицинских наук">медицинских наук</option>'; 
	            content += '    <option value="биологических наук">биологических наук</option>'; 
	            content += '    <option value="географических наук">географических наук</option>'; 
	            content += '    <option value="геолого – минералогических наук">геолого – минералогических наук</option>'; 
	            content += '    <option value="сельскохозяйственные науки">сельскохозяйственные науки</option>'; 
	            content += '    <option value="химических наук">химических наук</option>'; 
	            content += '    <option value="военных наук">военных наук</option>'; 
	            content += '    <option value="искусствоведения">искусствоведения</option>'; 
	            content += '    <option value="исторических наук">исторических наук</option>'; 
	            content += '    <option value="культурологии">культурологии</option>'; 
	            content += '    <option value="политологических наук">политологических наук</option>'; 
	            content += '    <option value="психологических наук">психологических наук</option>'; 
	            content += '    <option value="социологических наук">социологических наук</option>'; 
	            content += '    <option value="филологических наук">филологических наук</option>'; 
	            content += '    <option value="философских наук">философских наук</option>'; 
	            content += '    <option value="экономических наук">экономических наук</option>'; 
	            content += '    <option value="юридических наук">юридических наук</option>'; 
	            content += '    <option value="педагогических наук">педагогических наук</option>'; 
	            content += '</select> '; 
	            $('#form_2').append(content);

	            i++;
	        
			
    			}
    		}
        
    	});
   
	});
});


</script>
<script>
$(document).ready(function()
{
	$(function(){
		var i = 2;
    $("#button1").click(function() {
    	var b = i - 1;
    	if($("#academicdegree_" + b).val() != null){
    		var content = "";
    		if($("#academicdegree_" + i).val() == null){
				content += '<select class="form-control" id="academicdegree_' + i + '" style="margin-top: 25px;margin-bottom: 25px;">'; 
	            content += '	<option value="" disabled selected>Выберети из списка...</option>'; 
	            content += '    <option value="архитектурных наук" >архитектурных наук</option>'; 
	            content += '    <option value="технических наук">технических наук</option>'; 
	            content += '    <option value="физико-математических">физико-математических</option>'; 
	            content += '    <option value="ветеринарных наук">ветеринарных наук</option>'; 
	            content += '    <option value="медицинских наук">медицинских наук</option>'; 
	            content += '    <option value="биологических наук">биологических наук</option>'; 
	            content += '    <option value="географических наук">географических наук</option>'; 
	            content += '    <option value="геолого – минералогических наук">геолого – минералогических наук</option>'; 
	            content += '    <option value="сельскохозяйственные науки">сельскохозяйственные науки</option>'; 
	            content += '    <option value="химических наук">химических наук</option>'; 
	            content += '    <option value="военных наук">военных наук</option>'; 
	            content += '    <option value="искусствоведения">искусствоведения</option>'; 
	            content += '    <option value="исторических наук">исторических наук</option>'; 
	            content += '    <option value="культурологии">культурологии</option>'; 
	            content += '    <option value="политологических наук">политологических наук</option>'; 
	            content += '    <option value="психологических наук">психологических наук</option>'; 
	            content += '    <option value="социологических наук">социологических наук</option>'; 
	            content += '    <option value="филологических наук">филологических наук</option>'; 
	            content += '    <option value="философских наук">философских наук</option>'; 
	            content += '    <option value="экономических наук">экономических наук</option>'; 
	            content += '    <option value="юридических наук">юридических наук</option>'; 
	            content += '    <option value="педагогических наук">педагогических наук</option>'; 
	            content += '</select> '; 
	            $('#form_1').append(content);

	            i++;
	        
			
    			}
    		}
        
    	});
   
	});
});
</script>