<?php
	$sPageTitle = "Finanças";
	require "Include/Header.php";
?>

<div class="Help_Section">
	<div class="Help_Header">O acompanhamento financeiro é fornecido pelo SEAM?</div>
	<table width="100%" class="LightShadedBox"><tr>
	<td><p>SEAM mantém o controle das seguintes informações:</p>
	  <ul>
	    <li><b>Penhor: </b> Promessa de apoio, planejando doar um montante total específico.</li>
	    <li><b>Recibo de Depósito:</b> Imprima um lote de doações em forma de depósito bancário padrão para o banco.</li>
       <li><b>Pagamento:</b> A doação de pagamento em dinheiro, cheque, cartão de crédito ou depósito bancário.</li>
	    <li><b>Demonstrações Lembrete:</b> Imprimir cartas para lembrar Famílias de sua promessa e relatório de progresso dos seus pagamentos para o atual ano fiscal.</li>
	    <li><b>Declarações Fiscais:</b> Imprimir cartas reconhecendo doações durante o ano civil para efeitos fiscais.</li>
	  </ul></td>
	</tr></table>
</div>

<div class="Help_Section">
	<p>
	<div class="Help_Header">Como faço para inserir uma promessa?</div>
    <table width="100%" class="LightShadedBox"><tr>
    <td><p>Existem duas maneiras pelas quais podem ser adicionados promessas:</p>
      <ul>
        <li><strong>A partir da Visão da Família:</strong> Ao visualizar uma família, um link para "Adicionar uma nova promessa" estará na parte inferior da tela. Insira as informações e clique em "Salvar".</li>
        <li><strong>Entrada de Lote:</strong> Se você clicar em "Salvar e Adicionar" ao invés de "Salvar", o Editor de Promessas irá limpar e preparar-se para uma outra entrada penhor. Selecione a próxima família da lista a fazer um compromissos, e preencher o resto das informações penhor. Continue a clicar "Salvar e Adicionar"  até que todos os compromissos tenham sido inseridos.</li>
      </ul></td>
    </tr></table>
</div>

<div class="Help_Section">
	<p>
	<div class="Help_Header">Como faço para depositar doações?</div>
    <table width="100%" class="LightShadedBox"><tr>
    <td><p>Quando um lote de doações em dinheiro e cheque é recebido eles são inseridos no SEAM para as famílias que doam receberem crédito contra o seus compromissos e também para efeitos fiscais.</p>
      <ul>
        <li><strong>Faça um novo comprovante de depósito:</strong> Selecione "Criar novo depósito (cheques e dinheiro)" a partir do menu "Depósito".</li>
        <li><strong>Digite os depósitos:</strong> Veja abaixo.</li>
        <li><strong>Imprimir o comprovante de depósito:</strong> Selecione "Editar Recibo de Depósito" a partir do menu "Depósito". Clique em "Gerar PDF". Este documento PDF será impresso em um formulário de depósito bancário padrão.</li>
        <li><strong>Feche o depósito:</strong> Selecione "Fechar Comprovante de depósito" para fechar o comprovante de depósito, uma vez que o depósito foi embalado para o banco.</li>
      </ul>
    <p>Cartão de crédito automático e projetos de depósitos bancários são apoiados por igrejas e
outras organizações com uma conta ECHO.</p>
      <ul>
        <li><strong>Configure os pagamentos automáticos</strong> Para cada família participante no programa automático de pagamento, na visão de família, clique em "Adicionar um novo pagamento automático"</li>
        <li><strong>Preencha as informações de pagamento automático</strong> Preencher todos os campos deste formulário, com exceção dos últimos seis campos. Dos últimos seis campos, os três primeiros devem ser preenchido para operações com cartão de crédito, e os três últimos devem ser preenchidas por operações de depósito bancário. Muitos desses campos começam com valores padrões tomados a partir do registro de família, mas estes valores podem ser editado, se necessário. Note-se que a data especificada aqui é a primeira data em que o pagamento é autorizado, e o intervalo de pagamento especifica o período de tempo em meses, até que outro pagamento seja autorizado.</li>
        <li><strong>Faça um novo comprovante de depósito:</strong> Selecione "Recibo de Depósito Novo (cartão de crédito)" ou "Criar novo depósito (depósito bancário)"
a partir do menu "Depósito".</li>
        <li><strong>Coloque os pagamentos autorizados</strong> Pressione "Carregar operações autorizadas" para criar registros de pagamento para todas as transações automáticas que foram autorizados como de hoje. Note-se que apenas operações de cartão de crédito ou projetos de transações bancárias serão carregados, dependendo da natureza deste comprovante de depósito. Quando as transações são carregadas, a próxima data de pagamento de cada pagamento automático é empurrado para a frente pelo intervalo especificado em meses.</li>
        <li><strong>Processar pagamentos</strong> Pressione "Executar Transações" para executar todas as transações usando o servidor de transações ECHO. Isso pode levar algum tempo, dependendo do número de transações e a velocidade da conexão de rede. Quando a página é atualizada nota-se o estado de cada operação na coluna "limpo".</li>
        <li><strong>Corrigir problemas com pagamentos que não estão limpos</strong> Pressione o botão "Detalhes" por quaisquer transações que não estão claros, para ver por que a transação falhou. Edite o automático registro da transação utilizando o ponto de vista da Família para corrigir eventuais erros. Depois de fazer correções, repita o passo "Processar pagamentos" para voltar a apresentar as transações fracassadas. Transações bem sucedidas não serão submetidas novamente.</li>
        <li><strong>Feche o comprovante de depósito</strong> Ativar "Fechar comprovante de depósito" quando terminar com este comprovante de depósito, e pressione "Salvar".</li>
      </ul></td>
    </tr></table>
</div>

<div class="Help_Section">
	<p>
	<div class="Help_Header">Como faço para inserir um pagamento?</div>
    <table width="100%" class="LightShadedBox"><tr>
    <td><p>Pagamentos são muito semelhantes aos compromissos. Há duas maneiras em que os pagamentos podem ser adicionados:</p>
      <ul>
        <li><strong>A partir da Visão da Família:</strong> Ao visualizar uma família, um link para "Adicionar um novo pagamento" será exibido perto da parte inferior da tela. Insira as informações e clique em "Salvar".</li>
        <li><strong>Entrada de Lote:</strong> Se você clicar em "Salvar e Adicionar" ao invés de "Salvar", o Editor de Pagamento irá limpar e preparar-se para uma outra entrada. Selecione a próxima família de fazer um pagamento a partir da lista e preencha o restante das informações de pagamento. Continue a clicarem "Salvar e Adicionar" até que todos os pagamentos tenham sido inseridos.</li>
      </ul></td>
    </tr></table>
</div>

<?php
	require "Include/Footer.php";
?>
