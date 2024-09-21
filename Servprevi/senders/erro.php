<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        
        <style>
            .erro{
                margin: 40px auto;
                padding: 20px 0;
                text-align: center;
                max-width: 600px;
				margin: 40px auto;
                border: 3px dotted #b52d2d;
                background-color: #d24646;

                border-radius:7px 7px 7px 7px;
                -webkit-border-radius:7px 7px 7px 7px;
                -moz-border-radius:7px 7px 7px 7px;  
            }

                .erro span{
                     font-family: "humnst777_btroman", trebuchet, tahoma; 
                    font-size: 18px;
                    font-style: italic;
                    color: #fff;
                }

                .btnBack{ display: block; margin: 12px auto; max-width: 180px; background-color: #173b5f; 
				text-align: center; color: #fff; padding: 16px 0px; text-decoration: none; font-size: 1em; 
				border-radius:7px 7px 7px 7px;
                -webkit-border-radius:7px 7px 7px 7px;
                -moz-border-radius:7px 7px 7px 7px;  
				}
				.btnBack:hover{ background-color: #235285; }


        </style>
    </head>
    <body>
        <div class="erro">
            <span>Mensagem Não Enviada!</span><br/>
        </div>
        <a href="javascript:history.back()" class="btnBack" title="OK">Tentar Novamente</a>
    </body>

</html>        