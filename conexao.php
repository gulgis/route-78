<?php
	error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
	mysql_connect ("localhost", "root","") or die ("Não foi possivel conectar ao Banco");
	mysql_select_db ("lojabike");
?>