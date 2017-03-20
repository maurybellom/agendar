PHP include(seguranca.php); 
php include(includesconfig.php);

$titulo    = $_POST[titulo];
$login    = $_POST[login];
$fonte    = $_POST[fonte];
$subtitulo = $_POST[subtitulo];
$tipo      = $_POST[tipo];
$conteudo  = $_POST[conteudo];
$destaque  = $_POST[destaque];

$agendar  = $_POST[agendar];
$destaque_album  = $_POST[destaque_album];
$data = $_POST['ano'].-.$_POST['mes'].-.$_POST['dia']. - .$_POST['hora_inic']..$_POST['min_inic'];
$foto      = $_POST[foto];




$arquivo = isset($_FILES[foto])  $_FILES[foto]  FALSE;

     if ($arquivo['type'] == imagejpeg  $arquivo['type']== imagepjpeg)
	 {  
	 if ($arquivo['size']500000)  
	 {    
	  $tamanhoup = round($arquivo['size']1024).'kb';
	  
	  echo script type=textjavascriptalert(Arquivo muito grande. Tamanho máximo permitido 500kb. O arquivo enviado contém $tamanhoup.)scriptscriptwindow.location = 'httpobservadorregional.com.bradminindex.phpsessao=cadastrar_noticia';script;
	  exit('');
	  
	 }    
	 $novonome = md5(mt_rand(1,10000).$arquivo['name']).'.jpg';
	 $dir = ..imagesnoticias;
	 if (!file_exists($dir))  
	 {    
	 mkdir($dir, 0755);
	 }  
	 $caminho = $dir.$novonome;  
	 move_uploaded_file($arquivo['tmp_name'],$caminho);
	 
	 echo 'script type=textjavascriptalert(Cadastrado com Sucesso... Obrigado!)scriptscriptwindow.location=httpobservadorregional.com.bradminindex.phpsessao=cadastrar_noticia;script'; 
	 
	 $sql =  INSERT INTO noticias set login='$login', fonte='$fonte', titulo='$titulo', subtitulo='$subtitulo', tipo='$tipo', conteudo='$conteudo', destaque='$destaque',  agendar='$agendar',destaque_album='$destaque_album', data='$data', foto='$novonome';
	
	  $query = mysql_query($sql); 
	 
	 } 
	 else
	 {  
	 echo scriptalert(Arquivo inválido. É permitido somente imagem com extensão .jpg.); window.location = 'httpobservadorregional.com.bradminindex.phpsessao=cadastrar_noticia';script;
	 } 














