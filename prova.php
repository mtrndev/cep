<?php



$cep = $_POST['cep'];
$url = "https://viacep.com.br/ws/".$cep. "/json/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$resultado = json_decode(curl_exec($ch));
$array= array($resultado);
//var_dump($array);


foreach ($array as $mostra){
	//var_dump($mostra);
echo 'Rua: ';
echo $mostra->logradouro;
echo '<br>';
echo 'Bairro: ';
echo $mostra->bairro;
echo '<Br>';
echo ' Cidade:';

echo $mostra->localidade;
echo '<hr>';

}

?>
<form action='' method='post'>
	<input type="cep" name="cep" id='cep'>
	<input type="submit" name="pesquisar cep">
</form>