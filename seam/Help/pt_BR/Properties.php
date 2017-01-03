<?php
	$sPageTitle = "Properties";
	require "Include/Header.php";
?>

<div class="Help_Section">
	<div class="Help_Header">O que é a propriedade?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>A propriedade é um rótulo que pode ser aplicado a uma pessoa, um grupo ou uma família. Conjuntos distintos de propriedades são definidas para os três tipos de registro diferentes e novas propriedades podem ser criados conforme a necessidade. Um registro pode ser atribuído um número ilimitado de Propriedades.</p>
	<p>Além disso, as propriedades podem ter valores que contenham informações relacionadas à propriedade. Por exemplo, a propriedade de um registro de pessoa pode ser "internado". Uma pessoa com esta propriedade está atualmente no hospital, e o valor dessa propriedade pode conter o nome do hospital e o número do quarto.</p></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para saber quais propriedades foram atribuídos?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>Da pessoa, família ou grupo, você encontrará uma seção chamada "Propriedades Atribuídas", no qual serão listados todas as propriedades atribuídas a essa pessoa, família
ou grupo, juntamente com os valores de propriedade, se suportado por essa propriedade.</p></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para atribuir uma propriedade a uma pessoa / família / grupo?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
		<li>Para uma pessoa ou família, para filtrar a pessoa desejada e abrir o Pessoa/Ver Família para esse registro. Para um grupo, clique em "Lista de Grupos" em "Grupos" No menu drop-down e selecione o grupo desejado.
		<li>Na seção chamada "propriedades atribuídas" será uma lista drop-down de todas as propriedades disponíveis, que não são atualmente atribuídas a essa pessoa. Selecione a propriedade desejada e pressione "Atribuir".
		<li>Se a propriedade suporta um valor de propriedade, então você será solicitado a digitar o valor. Se a propriedade não suporta um valor, a propriedade só vai ser automaticamente atribuído.
	</ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como a editar um valor de propriedade atribuído a uma pessoa / família / grupo?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
		<li>Para uma pessoa ou família, para filtrar a pessoa desejada e abrir o Pessoa / Ver Família para esse registro. Para um grupo, clique em "Lista de Grupos" em "Grupos" no menu drop-down e selecione o grupo desejado.
		<li>Na seção chamada "propriedades atribuídas" encontrar a propriedade que você deseja editar. Clique no link "Editar" (se este link não estiver presente, então a propriedade não suporta um valor e não há nada para editar).
		<li>Na página resultante, editar o valor. Pressione o botão "Update".
	</ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para remover ou cancelar a atribuição de uma propriedade de uma pessoa / família / grupo?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
		<li>Para uma pessoa ou família, para filtrar a pessoa desejada e abrir Ver Pessoa/Família para esse registro. Para um grupo, clique em "Lista de Grupos" em "Grupos" no menu drop-down e selecione o grupo desejado.
		<li>Na seção chamada "propriedades atribuídas" encontrar o imóvel que você deseja remover. Clique no link "Remover".
		<li>Na tela resultante, confirmar a remoção.
	</ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como acrescento uma nova propriedade que eu possa atribuir a um registro de pessoa?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
		<li>No menu superior, selecione "Propriedades Pessoa List" (em "Propriedades").	
		<li>Na tela seguinte, selecione "Adicionar uma nova pessoa propriedade."
		<li>Preencha o formulário. Se você gostaria que a propriedade para apoiar um Valor, digite um prompt (ex. - "Digite o nome do hospital e número do quarto."). Deixar o campo em branco Prompt irá impedir o armazenamento de um valor com a propriedade.
	</ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como acrescento uma nova propriedade que eu possa atribuir a um registro de família?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
        <li>No menu superior, selecione "Propriedades Familiares List" (em "Propriedades").
        <li>Na tela seguinte, selecione "Adicionar uma nova propriedade da família."
        <li>Preencha o formulário. Se você gostaria que a propriedade para suportar um valor, introduzir um prompt (ex. - "Digite o nome do hospital e número do quarto."). Deixar o campo em branco Prompt irá impedir o armazenamento de um valor Com a propriedade.
      </ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como acrescento uma nova propriedade que eu possa atribuir a um registro de grupo?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
        <li>No menu superior, selecione "Propriedades do Grupo List" (em "Propriedades").
        <li>Na tela seguinte, selecione "Adicionar uma nova Propriedade de Grupo".
        <li>Preencha o formulário. Se você gostaria que a propriedade suporte um valor, introduza um prompt (ex. - "Digite o nome do hospital e número do quarto."). Deixar o campo em branco Prompt irá impedir o armazenamento de um valor com a propriedade.
      </ol></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header"><p>O que é um tipo de propriedade?</p></div>
	<table width="100%" class="LightShadedBox"><tr><td><p>Este é apenas um método de organização de propriedades em grupos. A propriedade deve ser associado a um tipo de propriedade. Tipos de propriedade comum pode ser: Estado físico contendo as propriedades de: deficientes,  internados, etc</p></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para adicionar um novo tipo de propriedade?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
		<li>No menu superior, selecione "Tipos de Propriedades" (em "Propriedades").	
		<li>Na tela seguinte, selecione "Adicionar um novo tipo de propriedade."
		<li>Preencha o formulário e clique em "Salvar".
	</ol></td></tr></table>
</div>

<?php
	require "Include/Footer.php";
?>