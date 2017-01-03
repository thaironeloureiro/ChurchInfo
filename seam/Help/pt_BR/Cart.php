<?php
	$sPageTitle = "Carrinho";
	require "Include/Header.php";
?>

<div class="Help_Section">
	<div class="Help_Header">O que é o Cart (carrinho)?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>O carrinho é um espaço de armazenamento temporário para Pessoas registros. Você pode adicionar pessoas para o carrinho de compras, em seguida, processar essas pessoas todos os registros de uma só vez, através da geração de etiquetas ou despejar o conteúdo do carrinho a um grupo.</p>
		<p>Você pode colocar um número ilimitado de pessoas no carrinho. Colocar alguém no carrinho de compras não faz nada para seu registro, eles são apenas atribuídos temporariamente para o carrinho de compras. Você pode colocar alguém no carrinho de compras, em seguida, retire, em seguida, sem fazer qualquer tratamento, e seu registro permanecerá inalterada.</p>
		<p>O carrinho é específico do usuário da sessão e. Cada usuário tem seu próprio carro, e esse carro só vai durar até que o usuário faz logoff - Carrinhos não abrangem sessões.</p>
	</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como posso ver o que está no meu carrinho?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>No menu superior, segunda fila, do lado direito, um contador em tempo real irá dizer-lhe quantos registros você tem no carrinho. Este balcão vai para cima ou para baixo como você adicionar ou remover registros.</p>
		<p>Para ver os registros reais em seu carrinho de compras, clique em "Lista de Compras Itens" (em "carrinho"). Isto irá exibir todos os registros atualmente no carrinho.</p>
	</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para adicionar uma pessoa ao carrinho?</div>
	<table width="100%" class="LightShadedBox"><tr><td><p>Há várias maneiras de fazer isso:</p>
		<p><b>Para adicionar uma pessoa individual:</b>
		<ol>
		  <li>No menu superior, clique em "Ver Todas as Pessoas" (em "Pessoas / Famílias") e listar todas as pessoas, ou digite um nome na caixa de filtro no menu superior e pressione Enter.
		  <li>Quando os resultados do filtro são exibidos, haverá um link no canto direito de cada registro de pessoa chamada "Adicionar ao carrinho". Clique neste link para a pessoa desejada.
		  <li>Se essa pessoa não existir no carrinho, eles serão adicionados.
		</ol>
		Alternativamente, você pode visualizar o registro de pessoa desejada, e dentro desse registro será um link para "Adicionar ao carrinho". Ao clicar neste link realiza a mesma coisa que o processo acima descrito.</p>
		<p><b>Para adicionar os resultados de um relatório:</b><br>
		Alguns relatórios permitirá que você para despejar os resultados para o carrinho, e outros não - depende o que o relatório retorna. Uma vez que o carro mantém as pessoas, um relatório que retornou registros familiares não permitirá que os resultados sejam colocados no carrinho de compras.
		<ol>
		  <li>Execute o relatório desejado.
		  <li>Se o relatório for Cart-ativado, na parte inferior dos resultados que você vai encontrar um botão "Adicionar ao carrinho de resultados." Ao clicar neste botão irá adicionar todos os resultados desse relatório ao carrinho.
		</ol>
		<p><b>Para adicionar todas as pessoas atribuído a um grupo:</b>
		<ol>
		  <li>No menu superior, clique em "Empty Cart para Group" (em "carrinho").
		  <li>Clique no grupo desejado ou criar um novo grupo - Não se preocupe, se você fizer um novo grupo, você pode esvaziar o carrinho para ele também.
		  <li>Se você optar por criar um novo grupo, na página Novo Grupo, há uma caixa para "Empty Cart para este grupo?". Ele já deve estar marcada, por isso, deixe InfoCentral fazer o movimento para você.
		</ol>
	</td></tr></table>
</div>

<div class="Help_Section">
	<p><div class="Help_Header">Como faço para remover uma pessoa da Cart?</div>
	<table width="100%" class="LightShadedBox"><tr><td><ol>
			<li>No menu superior, clique em "Lista de Compras Itens" (em "carrinho").
			<li>Na tela resultante, todas as pessoas atualmente no carrinho de compras será listada, com um link "Remover" para a extrema direita do seu nome. Ao clicar nesse link irá remover a pessoa especificada da Cart.
		</ol>
		<p>Nota: Para esvaziar o carrinho completamente, clique no link "Carrinho Vazio" na parte inferior da página. Não, porém, confundir isso com "Empty Cart ao grupo." "Empty Cart" simplesmente remove todas as pessoas a partir do carrinho, sem movê-los em qualquer lugar.</p>
	</td></tr></table>
</div>

<?php
	require "Include/Footer.php";
?>