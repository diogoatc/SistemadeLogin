<?php


session_start(); 





session_destroy();

session_unset(); 





echo "<script>alert('Voc� saiu!');top.location.href='login.html';</script>"; /*aqui voc� pode por alguma coisa falando que ele saiu ou fazer como eu, coloquei redirecionar para uma certa p�gina*/





?>