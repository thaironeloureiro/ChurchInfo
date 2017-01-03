<?php
	$sPageTitle = "Suporte Geográfico";
	require "Include/Header.php";
?>

<div class="Help_Section">
	<div class="Help_Header">Como é que SEAM sabe exatamente onde as famílias vivem?</div>
	<table width="100%" class="LightShadedBox">
	<tr><td>
	<P>SEAM armazena a latitude e longitude de cada família. Estes números podem
ser inserido na página de edição de família, ou com base no endereço. </P>
	</td></tr></table>
</div><p>

<div class="Help_Section">
	<div class="Help_Header">Como faço para encontrar famílias que vivem próximos umas das outras?</div>
	<table width="100%" class="LightShadedBox">
	<tr><td>
	<P>Selecione Familiares Utilities Geográfica no menu Pessoas / Famílias, em seguida, selecione a família a partir da lista.
Pressione Mostrar Vizinhos e esta página será atualizada com as famílias vizinhas mais próximas listadas na parte inferior.
O número máximo de vizinhos e campos distância máxima são usadas para limitar o número de vizinho
famílias exibido.
	</P>
	</td></tr></table>
</div><p>

<div class="Help_Section">
	<div class="Help_Header">Como faço para ver onde famílias vivem em um mapa?</div>
	<table width="100%" class="LightShadedBox">
	<tr><td>
	<P>A maneira mais fácil é selecionar Mapa Família / menu Familes. Este mapa é gerado
usando o serviço de mapas do Google. Para que esse recurso funcione, a chave do Google Map deve ser definida especificamente
para seu web site. O cenário é perto da parte inferior da página Configurações Gerais disponível a partir do Administrador
menu. O site para obter a sua chave original do Google é: 
	<a href="http://maps.google.com/apis/maps/signup.html"> aqui</a>.
	</P>
	</td></tr></table>
</div><p>

<div class="Help_Section">
	<div class="Help_Header">Existem outros tipos de mapas disponíveis?</div>
	<table width="100%" class="LightShadedBox">
	<tr><td>
	<P>
	A página família Geographic Utilities também pode fazer arquivos de anotação para o 
	<a href="http://www.gpsvisualizer.com/map">	GPS Visualizer</a> web site
ou o Atlas programa mapa Rua Delorme EUA. Para fazer com que um arquivo de anotação e selecione o formato desejado
pressione Criar Arquivo de Dados.
	</P>
	</td></tr></table>
</div><p>



<?php
	require "Include/Footer.php";
?>
