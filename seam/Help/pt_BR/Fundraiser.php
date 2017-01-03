<?php
	$sPageTitle = "Campanhas / Fundo de Arrecadação";
	require "Include/Header.php";
?>

<div class="Help_Section">
	<div class="Help_Header">Qual é a característica de Fundo de Arrecadação?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>Automação de Fundo de Arrecadação é usado para eventos onde os membros estão comprando e vendendo itens e / ou serviços para beneficiar a igreja. Um exemplo é o leilão de bens e serviços,
onde os membros doam itens e serviços a serem leiloados. Este recurso é projetado para eventos onde a maioria dos compradores e vendedores se encontram no banco de dados.</p>
	</tr></table>
</div>

<div class="Help_Section">
	<div class="Help_Header">Como um Fundo de Arrecadação é criado?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>Selecione Campanhas-> Criar Nova Campanha. Digite uma data, título e descrição e pressione Salvar.</p>
	</tr></table>
</div>

<div class="Help_Section">
	<div class="Help_Header">Como são doados itens inseridos na Campanha?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>Uma vez que a arrecadação de fundos foi salvo, são apresentados mais botões na parte superior. Pressione Adicionar artigo doado para inserir um novo item. Os campos são:
      <ul>
        <li><strong>Item:</strong>Este identificador do item será utilizado para classificar os itens para que você possa facilmente reorganizá-los.</li>
        <li><strong>Vários itens: vender para todo mundo:</strong>Se estiver habilitado muitas cópias deste item pode ser vendido. Haverá uma contagem na página do comprador eo comprador será cobrada por qualquer contagem é inserido.</li>
          <li><stron>Doadores:</strong>O doador é uma pessoa no banco de dados.</li>
        <li><strong>Título:</strong>Esta é uma breve descrição do item.</li>
        <li><strong>Preço estimado:</strong>Este valor é uma estimativa para o item, para referência.</li>
        <li><strong>Valor Material:</strong>O valor do material é o valor da doação, não incluindo o trabalho.</li>
        <li><strong>Preço estimado:</strong>O preço mínimo é para a referência, no caso de o doador não quer vender muito baixo.</li>
        <li><strong>Descrição:</strong>A descrição mais longa, utilizado na folha de catálogo e oferta.</li>
        <li><strong>Comprador:</strong>A pessoa que comprou o item. Os compradores são registrados antes de poderem comprar as coisas (ver abaixo). Este campo e o preço final são preenchidos uma vez que a compra é finalizada.</li>
        <li><strong>Preço Final:</strong> O preço pago pelo item. Para "vender para todo mundo" itens este preço será aplicado a todas as compras.</li>
      </ul><p></td>
	</tr></table>
</div>

<div class="Help_Section">
	<div class="Help_Header">Por que e como são registrados os compradores?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>Os compradores são registrados para que eles possam comprar vários itens e depois conferir no final e pagar por tudo. Para entrar compradores, selecione Campanhas-> Ver compradores. Pressione Adicionar Comprador para adicionar um comprador. O número comprador é incrementado automaticamente, ou você pode digitá-lo. O comprador é uma pessoa no banco de dados. O comprador deve ser um membro de uma família na base de dados.</p>
	</td>
	</tr></table>
</div>

<div class="Help_Section">
	<div class="Help_Header">Como é que uma única compra é registrada?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>Selecione Campanhas-> Editar Campanhas para ver a lista de itens. Clique no link à esquerda para o item trazer a página do editor de item doado. Selecione o comprador e digite o preço do lado direito, em seguida, pressione Salvar.</p>
	</td>
	</tr></table>
</div>

<div class="Help_Section">
	<div class="Help_Header">Existe uma maneira de inserir uma grande quantidade de compras de forma rápida?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>Selecione Campanhas-> Editar Campanhas e pressione Entrada em lote de Vencedores (superior direito). Esta página permite que os dez itens a ser inserido rapidamente. Para cada item, selecione o item e vencedor e inserira o preço. Pressione o botão Entrar Vencedores para entrar todos os itens da página de uma só vez.</p>
	</td>
	</tr></table>
</div>

<div class="Help_Section">
	<div class="Help_Header">Como são gravados os vários itens de compra ?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>Selecione Camapanhas-> Ver compradores e, em seguida, clique no link para um comprador. Há um lugar nesta página para inserir a quantidade de cada um dos "vender a todos" itens.</p>
	</td>
	</tr></table>
</div>

<div class="Help_Section">
	<div class="Help_Header">Como é que alguém faz o check-out e pagamento?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>Selecione Campanhas-> Ver compradores e, em seguida, clique no link para um comprador. Verifique se o "Vender para a Todos " quantidades estão corretas e pressione Gerar Declaração. Isto irá criar uma declaração PDF mostrando as doações e aquisições para esse comprador. O total das compras é mostrado de modo que é o valor a ser pago no check-out. A declaração pode ser impressa e entregue ao comprador. </p>
	</td>
	</tr></table>
</div>

<div class="Help_Section">
	<div class="Help_Header">O que é que alguém doa, mas não participa? Como pode um comunicado estar preparado
para mostrar as doações?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>Uma vez que o Fundo de Arrecadação é longo e todas as doações e aquisições foram inseridas, selecionar o menu de opções Campanhas-> Adicionar à lista de Doador Comprador. Isto irá criar um registro comprador para quem doou itens, mas já não foi listado como um comprador. Uma vez que esses registros comprador são criados eles podem ser seleccionado e suas indicações podem ser geradas. Estas declarações podem ser úteis para os doadores para efeitos fiscais.</p>
	</td>
	</tr></table>
</div>

<?php
	require "Include/Footer.php";
?>
