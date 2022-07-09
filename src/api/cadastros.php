<?
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');
header('Content-Type: application/json');
session_start();

$action = $_REQUEST['a'];


if ($action == 'cadastro') {
	// print_r($_POST);
	//16      30
	$financas[1] = 1;
	$financas[2] = 5;
	$financas[3] = 5;
	$financas[4] = 5;
	//17      25
	$mercado[1] = 3;
	$mercado[2] = 1;
	$mercado[3] = 3;
	$mercado[4] = 1;
	$mercado[5] = 5;
	//10      15
	$pessoas[1] = 3;
	$pessoas[2] = 5;
	$pessoas[3] = 1;
	$pessoas[4] = 1;
	//11      10
	$leis[1] = 5;
	$leis[2] = 1;
	$leis[3] = 1;
	//18      20
	$operacao[1] = 3;
	$operacao[2] = 1;
	$operacao[3] = 5;
	$operacao[4] = 3;
	$operacao[5] = 5;
	$operacao[6] = 1;

	$total['financas'] = ceil((array_sum($_POST['financas'])/array_sum($financas))*30);
	$total['mercado'] = ceil((array_sum($_POST['mercado'])/array_sum($mercado))*25);
	$total['pessoas'] = ceil((array_sum($_POST['pessoas'])/array_sum($pessoas))*15);
	$total['leis'] = ceil((array_sum($_POST['leis'])/array_sum($leis))*10);
	$total['operacao'] = ceil((array_sum($_POST['operacao'])/array_sum($operacao))*20);

	$porcentagem['financas'] = round(($total['financas']*100)/30);
	$porcentagem['mercado'] = round(($total['mercado']*100)/25);
	$porcentagem['pessoas'] = round(($total['pessoas']*100)/15);
	$porcentagem['leis'] = round(($total['leis']*100)/10);
	$porcentagem['operacao'] = round(($total['operacao']*100)/20);

	$return['notas'] = $total;
	$return['notas']['total'] = array_sum($total);
	$return['porcentagem'] = $porcentagem;
	$return['porcentagem']['media'] = array_sum($porcentagem)/count($porcentagem);

    $return['status'] = true;
     $msg = $_POST['nome'].', sua pontuação total foi de '.$return['notas']['total'].' pontos, com média geral de '.$return['porcentagem']['media'].'%.';
     if($return['porcentagem']['media'] == 100){
     	$msg .= " Parabéns! Você está no caminho certo! Em breve nossa equipe entrará em contato para acompanhamento.";
     }elseif($return['porcentagem']['media'] >= 70 && $return['porcentagem']['media'] < 100){
     	$msg .= " Sua empresa está na média, mas identificamos que precisa melhorar nas seguintes áreas: ";
     	if($porcentagem['financas'] < 100){
     		$msg .= " Planejamento e finanças,";
     	}
     	if($porcentagem['mercado'] < 100){
     		$msg .= " Mercado e vendas,";
     	}
     	if($porcentagem['pessoas'] < 100){
     		$msg .= " Pessoas,";
     	}
     	if($porcentagem['leis'] < 100){
     		$msg .= " Leis e normas,";
     	}
     	if($porcentagem['operacao'] < 100){
     		$msg .= " Operação e logística,";
     	}
     	$msg = rtrim($msg,',');
     	$msg .= ". Em breve nossa equipe entrará em contato.";
     }elseif($return['porcentagem']['media'] < 70){
     	$msg .= " Sua empresa precisa urgentemente de mudanças. Identificamos que precisa melhorar nas seguintes áreas: ";
     	if($porcentagem['financas'] < 100){
     		$msg .= " Planejamento e finanças,";
     	}
     	if($porcentagem['mercado'] < 100){
     		$msg .= " Mercado e vendas,";
     	}
     	if($porcentagem['pessoas'] < 100){
     		$msg .= " Pessoas,";
     	}
     	if($porcentagem['leis'] < 100){
     		$msg .= " Leis e normas,";
     	}
     	if($porcentagem['operacao'] < 100){
     		$msg .= " Operação e logística,";
     	}
     	$msg = rtrim($msg,',');
     	$msg .= ". Em breve nossa equipe entrará em contato.";
     }
     $return['msg'] = $msg;
    echo json_encode($return);

}

?>