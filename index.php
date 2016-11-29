<?php

	require 'vendor/autoload.php';

	$app = new \Slim\App();

	$app->get('/exemplo', function($request, $response, $args){
        $dados = $request->getQueryParams()['dados'];
		echo "Hello $dados";

	});

	$app->post('/exemplo', function($request, $response, $args){

		$nome = $request->getParsedBody()['dados'];

		echo "Hello $nome";
		//var_dump($nome);

	});


	$app->put('/exemplo', function($request, $response, $args){

		$nome = $request->getParsedBody()['dados'];

		echo "Tudo bem $nome?";
		//var_dump($nome);

	});


	$app->delete('/exemplo', function($request, $response, $args){

		$nome = $request->getParsedBody()['dados'];

		echo "Tchau $nome";
		//var_dump($nome);

	});


	$app->run();


