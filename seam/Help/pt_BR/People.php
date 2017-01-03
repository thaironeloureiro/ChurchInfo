<?php
	$sPageTitle = "People";
	require "Include/Header.php";
?>

<div class="Help_Section">
	<div class="Help_Header">O que são Pessoas?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Não surpreendentemente, um registro de pessoa representa um único indivíduo. Registros de pessoas podem ser agrupadas em famílias, podem pertencer a grupos, podem ter propriedades, e podem ser feitas Usuários do SEAM.</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para encontrar uma pessoa específica?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
		<li>No menu à esquerda, encontrar a caixa de entrada, logo abaixo do título "Pessoas".
		<li>Digite uma string de pesquisa na caixa e pressione Enter
		<li>O sistema irá retornar todos os registros que contêm Pessoa onde a string de pesquisa coincida com o primeiro ou último nome.
		<li>Clicando sobre o nome da pessoa irá revelar o Detalhe, que lista todas as informações sobre essa pessoa, incluindo todas as propriedades atribuídas, grupos atribuídos e Notas.
	</ol>
	<p>Esta é uma pesquisa wild-card, ou seja, o sistema está à procura de qualquer a seqüência de caracteres, não importa onde no primeiro ou último nome pode aparecer. Por exemplo, procurando por "Ian" retornará todos os registros de pessoas com o primeiro nome de "Ian" ou Brian "(ou qualquer outra coisa que contém os caracteres" ian ​​"nessa ordem).</p>
	<p>Deixando a caixa de pesquisa vazia e pressionar Enter resultará na exibição de todos os registros de pessoas no sistema. Isso não é recomendado, uma vez que irá consumir recursos do sistema e produzir um longo atraso antes que a página seja exibida.</p></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Por que algumas das informações sobre o Ver Pessoa em texto vermelho?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>Esta é a informação hereditária de um registro de família associada. As pessoas podem ser agrupadas em famílias. Pessoas atribuídas à mesma família, provavelmente, compartilham muito da mesma informação - o mesmo endereço, o mesmo telefone, o mesmo e-mail, etc Nestes casos, esta informação só precisa ser digitado para a família e todas as pessoas designadas para que família vai "herdar" essa informação, a menos que o registro de pessoa em questão tenha a sua própria informação.</p>
	<p>Por exemplo, a família Smith tem quatro membros: João, Maria, Billy, e Sally. Nenhum dos quatro registros de pessoas tem um endereço, telefone ou endereço de e-mail na lista, mas esta informação está presente no registro de família Smith. Quando Ver Pessoa - Sally Smith é exibido, o sistema exibe o endereço do registro de família. Ele usa o texto em vermelho para indicar que esta informação tenha sido herdada. Dizer que Sally vai para a faculdade, e um endereço para seu quarto do dormitório está inscrita no seu registro de pessoa. Desde que ela agora tem seu próprio endereço, esse endereço será exibido em texto preto em sua Ver Pessoa.</p>
	<p>Isto torna mais fácil para alterar a informação comum a todos os membros de uma família. Para uma família de 10 registros Pessoa, mudando 10 endereços cada vez que eles se movem convida um erro a fluência em algum lugar. Herdando as informações da Família, o endereço precisa ser mudado em um só lugar.</p></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para adicionar uma nova pessoa?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>Existem duas maneiras de adicionar uma nova pessoa:</p>
	<ol>
		<li>No menu à esquerda, clique em "Adicionar uma nova pessoa"
		<li>Preencha o formulário
		<li>Pressione o botão "Salvar" ou "Salvar e Adicionar". Este último irá adicionar a pessoa e voltar para um formulário vazio para adicionar outra pessoa, o que é útil para grandes quantidades de entrada de dados.
	</ol>
	<p>No entanto, para inserir uma nova família e vários registros de pessoas de uma só vez o que você pretende atribuir a essa família, utilize o Editor de família.</p></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">O que  é classificação?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Isso define o papel da Pessoa dentro da igreja. As classificações comuns são Membro, Visitante, Congregado, Não congregado, Falecido, etc</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para inserir a idade de uma pessoa?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>Você não faz. SEAM calcula automaticamente  a idade com base na data de nascimento.</p>
	<p>Idade será calculada com base nas informações prestadas. No mínimo um ano do nascimento deve ser digitada.
Mesmo se você não saiba o ano de nascimento de uma pessoa, você sempre pode estimar até que a informação está disponível.</p></td></tr></table>
</div>

<div class="Help_Section">
  <p><div class="Help_Header">Como faço para excluir uma pessoa?</div>
  <table width="100%" class="LightShadedBox"><tr><td><p>Deixando os registros antigos de pessoas no banco de dados não dói nada e pode ajudar a manter o registro histórico. Uma sugestão é mudar a classificação da Pessoa para Não congregado ou falecido.
Mas se você precisar excluir ...</p>
	<ol>
		<li>Filtro para a pessoa desejada, e traga a sua Ver Pessoa.
		<li>Selecione "Apagar este Registro" (se este link não aparecer, então você não tem permissão para excluir registros)
		<li>Confirme a exclusão
	</ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Quais são os campos personalizados em Pessoa?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Campos personalizados - Pessoa: é um poderoso recurso que permite que você adicione todos os campos que você precisa para usar que não venha embutido com o SEAM. Esta funcionalidade permite, por exemplo, adicionar um Mentor para uma pessoa, ou adicionar uma data adicional (como confirmação). As possibilidades são infinitas.</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para usar Campos Pessoa personalizados?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Veja em  <a href="Help.php?page=Custom">Campos Personalizados</a>.</td></tr></table>
</div>


<div class="Help_Section">
	<p><div class="Help_Header">Como faço para colocar uma pessoa no carrinho?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Veja em <a href="Help.php?page=Cart">Carrinho</a>.</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como atribuir uma pessoa a um grupo?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Veja em <a href="Help.php?page=Groups">Grupos</a>.</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para atribuir uma propriedade a uma pessoa?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Veja em <a href="Help.php?page=Properties">Propriedades</a>.</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para adicionar uma nota a uma pessoa?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Veja em <a href="Help.php?page=Notes">Notas</a>.</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como posso controlar finanças de uma pessoa?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Veja em  <a href="Help.php?page=Finances">Finanças</a>.</td></tr></table>
</div>

<?php
	require "Include/Footer.php";
?>
