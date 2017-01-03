<?php
	$sPageTitle = "Administração";
	require "Include/Header.php";
?>

<div class="Help_Section">
	<div class="Help_Header">Como faço para adicionar novos usuários?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Os usuários podem ser adicionados clicando em "Adicionar novo usuário" em "Admin" no menu drop-down. A lista de todos os não-usuários irá aparecer e você pode selecionar a pessoa que você deseja fazer um usuário. Selecione os direitos e, em seguida, clique em "Salvar".</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Quais são os diferentes direitos disponíveis?</div>
	<table width="100%" class="LightShadedBox"><tr><td>
		Os direitos são os seguintes:
		<ul>
			<li><b>Adicionar Registros:</b> Este direito permite que os registros sejam inseridos.<b>Editar Registros</b> Isto permite registos a serem alterados.</li>
			<li><b>Editar Registros:</b> Isto permite registos a serem modificados.</li>
			<li><b>Delete Registros:</b> Isso permite que os registros sejam excluídos.</li>
			<li><b>Gerenciar Propriedades e classificações:</b> Isso permite que as propriedades e classificações a serem gerenciados pelo banco de dados.</li>
			<li><b>Gerenciar Grupos e funções:</b> Os grupos podem ser adicionados, editados e excluídos, bem como os papéis editados com esta opção.</li>
			<li><b>Gerenciar Doações e Finanças:</b> Doações financeiras podem ser adicionados, editados e excluídos com esta opção.</li>
			<li><b>Visualizar, adicionar e editar notas:</b> As notas podem ser adicionados, editados e excluídos com esta opção.</li>
			<li><b>Edite Auto:</b> Isso permite que a edição do usuário e apenas membros da família. Esta opção permite que os usuários mantenham seus próprios dados, endereços de e-mail especialmente e números de telefone que mudam com freqüência.</li>
			<li><b>Cabo eleitoral:</b> Isso permite edição de apurar dados e operação dos recursos de automação de propaganda eleitoral.</li>
			<li><b>Admin:</b> Esta opção seleciona automaticamente todas as opções anteriores.</li>
		</ul></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para editar usuários?</div>
<table width="100%" class="LightShadedBox"><tr><td>Os usuários podem ser editados clicando em "Editar usuários" em "Admin" no drop-down menu. Uma lista de usuários será exibida e você pode selecionar qual pessoa que você deseja editar. Ao clicar em "Reset" irá redefinir a senha para o próximo logon. "Edit" permite que os direitos e estilo a ser editado. "Delete" remove usuário direitos do indivíduo.
</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Qual é a senha padrão atribuído a novos usuários?</div>
<table width="100%" class="LightShadedBox"><tr><td>A senha padrão é 123456.</td></tr></table>
</div>

<?php
	require "Include/Footer.php";
?>
