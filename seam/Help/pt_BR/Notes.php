<?php
	$sPageTitle = "Notas";
	require "Include/Header.php";
?>

<div class="Help_Section">
	<div class="Help_Header">O que é uma Nota?</div>
	<table width="100%" class="LightShadedBox"><tr><td>A nota é apenas um memorando diverso atribuído a uma pessoa ou registro de família. Qualquer usuário com a permissão Notas pode adicionar uma nota, e muitas notas podem ser adicionadas a uma pessoa ou registro de família.
		<p>As notas podem ser públicas, ou seja, cada usuário pode vê-las, ou privada, ou seja, somente o usuário que escreveu a nota pode lê-la em vista posteriores da pessoa ou do registro de família. As notas podem ser apagadas ou editadas se o desejar.</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como posso ver as notas para um registro de pessoa?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
			<li>Filtre para a pessoa desejada, e veja o tela Detalhe da Pessoa.
			<li>Na parte inferior da tela Pessoa há uma seção chamada "Notas" que irá conter todas as notas para esse registro, em ordem cronológica inversa (a nota mais recente primeiro).
		</ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para adicionar uma nota?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
			<li>Filtre para o registro de pessoa para a qual você gostaria de adicionar a nota. 
			<li>Na parte inferior da Tela Pessoa há uma seção chamada "Notas". Clique em "Adicionar uma nota a este registro".
			<li>Na página resultante, digite o texto da nota na caixa de entrada fornecido. Você pode entrar tanto ou tão pouco texto como você gosta. Se você gostaria que a nota a ser privado, ou seja, só você será capaz de ler a nota, no futuro, marque a caixa "Private".
			<li>Quando terminar, clique em "Save".
		</ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para editar um Note?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
			<li>Filtre para o registro de pessoa a que a nota desejada é atribuída.
			<li>Encontre a nota desejada na seção "Notas" e clique em "Editar esta Nota."
			<li>No formulário resultando fazer as alterações desejadas. Pressione o botão "Salvar" quando terminar.
		</ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como eu faço uma nota privada visível por todos?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Edite o Note, e desmarque a opção "Private".</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para excluir uma nota?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
			<li>Filtre para o registro de pessoa a que a nota desejada é atribuída.
			<li>Encontre a nota desejada na seção "Notas" e clique em "Excluir esta Nota."
			<li>Na tela resultante, confirme a exclusão.
		</ol></td></tr></table>
</div>

<?php
	require "Include/Footer.php";
?>
