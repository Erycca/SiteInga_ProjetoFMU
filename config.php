$conecta = mysql_connect('HOST', 'LOGIN', 'SENHA') or print (mysql_error());

print "Conexão OK!";

mysql_close($conecta);

