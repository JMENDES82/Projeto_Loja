<?php 

Class Config{

	//INFORMÃÇÕES BÁSICAS DO SITE
	/*const SITE_URL = "http://localhost";
	const SITE_PASTA = "loja";
	const SITE_NOME = "";
	const SITE_EMAIL_ADM = "";
	const BD_LIMIT_POR_PAG = 6;
	const SITE_CEP = '31535522';


	//INFORMAÇÕES DO BANCO DE DADOS
	const BD_HOST = "localhost",
		  BD_USER = "root",
		  BD_SENHA = "",
		  BD_BANCO = "",
		  BD_PREFIX = "qc_"; */




	//INFORMÃÇÕES BÁSICAS DO SITE HOSPEDADO
	const SITE_URL = "-";
	const SITE_PASTA = "";
	const SITE_NOME = "-";
	const SITE_EMAIL_ADM = "-";
	const BD_LIMIT_POR_PAG = 6;
	const SITE_CEP = '29102571';


	//INFORMAÇÕES DO BANCO DE DADOS HOSPEDADO
	const BD_HOST = "-",
		  BD_USER = "-",
		  BD_SENHA = "-",
		  BD_BANCO = "-",
		  BD_PREFIX = "qc_";




	//INFORMAÇÕES PARA PHP MAILLER
	const EMAIL_HOST = "-";
	const EMAIL_USER = "-";
	const EMAIL_NOME = "-";
	const EMAIL_SENHA = "-";
	const EMAIL_PORTA = ;
	const EMAIL_SMTPAUTH = true;
	const EMAIL_SMTPSECURE = "tls";
	const EMAIL_COPIA = "-";



	//CONSTANTES PARA O PAGSEGURO
	const PS_EMAIL  = "-"; // email pagseguro
    const PS_TOKEN  = "-"; // token produção
    const PS_TOKEN_SBX = "-";  // token do sandbox
    const PS_AMBIENTE = "-"; // production   /  sandbox
}
 ?>

