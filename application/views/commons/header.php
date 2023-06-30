<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="Exercício de exemplo do capítulo 5 do livro Codeigniter Teorian na Prática" />
        <meta name="author" content="Jonathan Lamim Antunes" />
        <title>Site Institucional</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
        <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css"   rel="stylesheet" />
        <link href="<?=base_url('assets/css/internas.css')?>" rel="stylesheet" />
        <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    </head>
    <body>
        <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">LCI</a>
                </div>
               <div id="navbar" class="collapse navbar-collapse">
                    <?php $this->load->view('commons/menu'); ?>
                </div>
            </div>
        </nav>
