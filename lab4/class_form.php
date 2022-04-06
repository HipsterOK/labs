<html>
    <head>
	<title>Носков С.К.</title>
        <meta charset = "UTF-8">
        <style>
            .ui-slider {
                height: 15px;
                width: 200px;
            }  .wrapper {
                float: center;
            	margin: 0 auto;
            }
            
        </style>
        <link rel="stylesheet" href="jquery-ui-1.12.1/jquery-ui.css">
        <script src="jquery-ui-1.12.1/external/jquery/jquery.js"></script>
        <script src="jquery-ui-1.12.1/jquery-ui.js"></script>
		<script>
		    $( function() {
			    $( document ).tooltip();
			    $("#birth_date").datepicker({
                    dateFormat: "dd.mm.yy",
                    altFormat: "yy-mm-dd",
                    altField: "#altFormatDate",
                    changeMonth: true,
                    changeYear: true,
                    monthNames: ["Январь", "Февраль", "Март", "Апрель", "Май", "Июнь", "Июль", "Август", "Сентябрь",	"Октябрь", "Ноябрь", "Декабрь"],
                    monthNamesShort:["Янв", "Фев", "Мар", "Апр", "Май", "Июн", "Июл", "Авг", "Сен", "Окт", "Ноя", "Дек"],
                    dayNames: ["Воскресенье", "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота"],
                    dayNamesMin : ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
                });

                $("#education").selectmenu();
                
                $("#ok_dialog").dialog({
                    autoOpen: false,
                    modal: true,
                    buttons: {
                        "Вернуться к классам": function() {
                            window.location.href = 'index.html';
                            $(this).dialog("close");
                        },
                        "Хорошо": function() {
                            $(this).dialog("close");
                        }
                    }
                });
                $("#error_dialog").dialog({
                    autoOpen: false,
                });
		    });
	    </script>
	</head>
	<body align="center" style="background-image: url(back1.jpg)">
        <?php
	        $header = $_GET['header'];
	        echo "<h1>$header</h1>";
	    ?>
	    
	    <form name="class_form" align="center">
            <p><div>Имя</div><input id = "name" title="Имя" type="text"></p>
            <p>
                <div>Дата создания</div>
                <input id = "date" title="Дата создания" type="text" >
                <input id = "altFormatDate" type="hidden" >
            </p>
            <p>
                <div>Голос</div>
                <select name="type" id="education">
                    <option value = "0">Низкий</option>
                    <option value = "1" selected="selected">Высокий</option>
                    <option value = "2">Немой</option>
                </select>
            </p>
            <p>
                <div>История</div>
                <textarea id='yourself' cols='30' rows='10'></textarea>
            </p>
            
            <p><input class="ui-button ui-widget ui-corner-all" type="button" value="Создать персонажа" onclick="send_form();"></p>
        </form>
        
        <div id="ok_dialog" title="Успех!">
            <p>Персонаж успешно создан.</p>
        </div>
        <div id="error_dialog" title="Ошибка!">
            <p>Не все поля заполнены.</p>
        </div>
	</body>
	
        
	<script>
	    function send_form(){
	        var name = document.getElementById("name").value;
            var date = document.getElementById("date").value;
            var yourself = document.getElementById("yourself").value;
           
            if (length(name)==0  ||
                length(date)==0  ||
                length(yourself)==0    
            ){
                $("#error_dialog").dialog("open");
                return;
            }
            
            $("#ok_dialog").dialog("open");
	    }
	   
	    
	   function length(str){
            var strIter = str[Symbol.iterator]();
            let str_lenght = 0;
            for (let ch of strIter){str_lenght++;}
            return str_lenght;
        }
	</script>
</html>