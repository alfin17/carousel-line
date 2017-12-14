<?php

require __DIR__ . '/vendor/autoload.php';


use \LINE\LINEBot\SignatureValidator as SignatureValidator;

// load config
$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

// initiate app
$configs =  [
	'settings' => ['displayErrorDetails' => true],
];
$app = new Slim\App($configs);

/* ROUTES */
$app->get('/', function ($request, $response) {
	return "Lanjutkan!";
});

$app->post('/', function ($request, $response)
{
	// get request body and line signature header
	$body 	   = file_get_contents('php://input');
	$signature = $_SERVER['HTTP_X_LINE_SIGNATURE'];

	// log body and signature
	file_put_contents('php://stderr', 'Body: '.$body);

	// is LINE_SIGNATURE exists in request header?
	if (empty($signature)){
		return $response->withStatus(400, 'Signature not set');
	}

	// is this request comes from LINE?
	if($_ENV['PASS_SIGNATURE'] == false && ! SignatureValidator::validateSignature($body, $_ENV['CHANNEL_SECRET'], $signature)){
		return $response->withStatus(400, 'Invalid signature');
	}

	// init bot
	$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_ENV['CHANNEL_ACCESS_TOKEN']);
	$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_ENV['CHANNEL_SECRET']]);
	$data = json_decode($body, true);
	foreach ($data['events'] as $event)
	{
		$userMessage = $event['message']['text'];
	if($userMessage == "Diskon"){
$carouselTemplateBuilder = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselTemplateBuilder([
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("TETRA SNEAKERS SHOES - BROWN TAN", "Harga Normal Rp. 469.000 Harga Diskon Rp. 329.000","https://www.mensrepublic.id/assets/images/uploads/product/tetra-brown-tan-1512971652-KtRJ81iImSYv.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Pesan Sekarang',"http://vicious.id/tetra-sneakers-shoes-brown-tan-79042"),
  ]),
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("ARTA - BROWN", "Harga Normal Rp. 289.000 Harga Diskon Rp. 229.000","https://www.mensrepublic.id/assets/images/uploads/product/arta-brown-1512968017-XeFfZ6Dg1ETK.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Pesan Sekarang',"http://vicious.id/arta-brown-209542"),
  ]),
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("ARTA - BLACK", "Harga Normal Rp. 289.000 Harga Diskon Rp. 229.000","https://www.mensrepublic.id/assets/images/uploads/product/arta-black-1512968000-l9Qt2OY41DOB.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Pesan Sekarang',"http://vicious.id/arta-black-209539"),
  ]),
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("ORA - BROWN", "Harga Normal Rp. 289.000 Harga Diskon Rp. 229.000","https://www.mensrepublic.id/assets/images/uploads/product/ora-brown-1512971491-hEYVd6EtS4NU.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Pesan Sekarang',"http://vicious.id/ora-brown-209536"),
  ]),
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("ORA - BLACK", "Harga Normal Rp. 289.000 Harga Diskon Rp. 229.000","https://www.mensrepublic.id/assets/images/uploads/product/ora-black-1512972560-LMEQIFe0FL1v.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Pesan Sekarang',"http://vicious.id/ora-black-209531"),
  ]),
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("BRATAN - BROWN", "Harga Normal Rp. 469.000 Harga Diskon Rp. 329.000","https://www.mensrepublic.id/assets/images/uploads/product/bratan-brown-1512968583-BPQF0ipVhbjM.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Pesan Sekarang',"http://vicious.id/bratan-brown-209524"),
  ]),
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("BRATAN - BLACK", "Harga Normal Rp. 469.000 Harga Diskon Rp. 329.000","https://www.mensrepublic.id/assets/images/uploads/product/bratan-black-1512968548-eXeE0N6cSp9L.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Pesan Sekarang',"http://vicious.id/bratan-black-209512"),
  ]),
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("ALHENA SNEAKERS SHOES - CAMEL", "Harga Normal Rp. 195.000 Harga Diskon Rp. 185.000","https://www.mensrepublic.id/assets/images/uploads/product/alhena-camel-1512786588-qFNDNLWpx8i9.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Pesan Sekarang',"http://vicious.id/alhena-sneakers-shoes-camel-125027"),
  ]),
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("ALHENA SNEAKERS SHOES - BLACK", "Harga Normal Rp. 195.000 Harga Diskon Rp. 185.000","https://www.mensrepublic.id/assets/images/uploads/product/alhena-black-1512786540-uqv0dBlb0Jeq.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Pesan Sekarang',"http://vicious.id/alhena-sneakers-shoes-black-125006"),
  ]),
  new \LINE\LINEBot\MessageBuilder\TemplateBuilder\CarouselColumnTemplateBuilder("WWW.VICIOUS.ID", "DISKON UP TO 50%","https://img.yukbisnis.com/business/2017-03/vicious//albums/profile/300x0/logo.jpg",[
  new \LINE\LINEBot\TemplateActionBuilder\UriTemplateActionBuilder('Selengkapnya',"http://vicious.id/category/diskon"),
  ]),
  ]);
$templateMessage = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder('Diskon Up To 50%',$carouselTemplateBuilder);
$result = $bot->replyMessage($event['replyToken'], $templateMessage);
return $result->getHTTPStatus() . ' ' . $result->getRawBody();
}
if($userMessage == "Konfirmasi"){
$confirmTemplateBuilder = new \LINE\LINEBot\MessageBuilder\TemplateBuilder\ConfirmTemplateBuilder(
   "Apakah kamu ingin melakukan konfirmasi pembayaran?",
   [
   new \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder('Ya',"http://vicious.id/shopping/confirmation"),
   new \LINE\LINEBot\TemplateActionBuilder\MessageTemplateActionBuilder('Tidak',"Yuk segera konfirmasi pesanan mu"),
   ]
   );
$templateMessage = new \LINE\LINEBot\MessageBuilder\TemplateMessageBuilder('Konfirmasi', $confirmTemplateBuilder);
$result = $bot->replyMessage($event['replyToken'], $templateMessage);
return $result->getHTTPStatus() . ' ' . $result->getRawBody();
}
	}
	

});

// $app->get('/push/{to}/{message}', function ($request, $response, $args)
// {
// 	$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($_ENV['CHANNEL_ACCESS_TOKEN']);
// 	$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $_ENV['CHANNEL_SECRET']]);

// 	$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder($args['message']);
// 	$result = $bot->pushMessage($args['to'], $textMessageBuilder);

// 	return $result->getHTTPStatus() . ' ' . $result->getRawBody();
// });

/* JUST RUN IT */
$app->run();
