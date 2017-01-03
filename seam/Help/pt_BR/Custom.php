<?php
	$sPageTitle = "Campos Personalizados";
	require "Include/Header.php";
?>

<div class="Help_Section">
	<div class="Help_Header">Quais são os campos personalizados?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>Campos personalizados permitem expandir a funcionalidade do SEAM além da informação de base que podem ser armazenados como um padrão. Os campos personalizados permitem que você personalize o banco de dados para atender às suas necessidades específicas. Os campos personalizados podem ser adicionados aos indivíduos e grupos. Para os indivíduos, você poderia,
por exemplo, ter um campo personalizado que mostra o mentor de um indivíduo. para grupos, você pode ter uma data de início.</p>
</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para atribuir campos personalizados?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>Para as pessoas e os grupos é diferente.</p>
	<p>Para as pessoas, clique em "Editar Campos Pessoa personalizados" em "Admin" no menu drop-down. Para adicionar um novo campo, selecione o tipo, um nome e o lado em que ele deve aparecer. O nome será exibido na caixa sombreada em Pessoa e o lado determina qual coluna ele mostra-se quando ver a tela Pessoa.</p>
	<p>Para grupos, clique no grupo que você deseja adicionar um campo personalizado e clique em "Editar Propriedades do formulário específico de grupo". Se o link não estiver visível, esta grupo pode não ter propriedades específicas do grupo ativado. Clique em "Editar Grupo "e selecione a opção " Use as propriedades específicas do grupo? ". Para adicionar um novo campo, selecione o tipo, nome, descrição e clique em "Adicionar novo campo".</p></td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Quais são os tipos?</div>
	<table width="100%" class="LightShadedBox"><tr><td>Veja em <a href="Help.php?page=Types">Tipo</a>.</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para editar um campo personalizado?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>Para as pessoas, você pode alterar o nome, opção especial, e  lado.
Quando são feitas alterações a essas categorias, você deve clicar em "Salvar alterações" antes de qualquer outra coisa ou todas as alterações serão perdidas. Se o tipo precisa ser mudado, isto só pode ser feito através da criação de um novo campo e a exclusão do campo indesejado.
Se você quiser alterar a ordem em que os campos são exibidos, use o para cima e para baixo nas setas para a esquerda para se mover da sua localização. Para excluir um campo, clique no "X" no lado esquerdo.</p>
	<p>Para grupos, você pode mudar o nome, descrição e opinião da pessoa. quando as mudanças são feitas para essas categorias, você deve clicar em "Salvar alterações" antes de qualquer coisa
mudanças ou tudo estará perdido. Permitindo a visualização pessoa permite que esta propriedade a ser exibida quando se vê uma pessoa. Se o tipo precisa de ser mudado, ele só pode ser feito por meio da criação de um novo campo e exclusão do campo indesejado. Se você deseja mudar a ordem
em que os campos são exibidos, use o para cima e para baixo nas setas para a esquerda
para se mover da sua localização. Para excluir um campo, clique no "X" à esquerda.</p></td></tr></table>
</div>

<?php
	require "Include/Footer.php";
?>
