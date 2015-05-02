<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php 
        include_http_metas();
        include_metas(); 
    ?>
    <title><?php include_slot('title', 'Site about bicycles') ?></title>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php 
        include_stylesheets();
        include_javascripts();
    ?>
    <!--[if lt IE 9]>
      <link rel="stylesheet" type="text/css" media="screen" href="/css/ie8.css">
    <![endif]-->
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="page-header">
            <h1>Велосипеды</h1>  
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <a href="<?=url_for('bicycles')?>" title="На главную">На главную</a>
        </div>
      </div>
    </div>
    <div class="container">
        <?php echo $sf_content ?>
    </div>
  </body>
</html>
