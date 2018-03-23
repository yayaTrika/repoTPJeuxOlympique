<?php
/* Smarty version 3.1.30, created on 2018-03-16 01:28:08
  from "C:\xampp\htdocs\MesProjets\Jeux_olympique\view\joueur\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aab0f98b17c89_28773034',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '00012638951fc38b403afca8cc8aed4d6ce7f2a5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MesProjets\\Jeux_olympique\\view\\joueur\\liste.html',
      1 => 1521160077,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aab0f98b17c89_28773034 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head lang="en">
        <meta charset="UTF-8">
        <title>Liste des joueurs et entraineur</title>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/js/cripteListeJE.js"><?php echo '</script'; ?>
>
    </head>
    <body>
        <div class="nav navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
                <!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Discipline/add">Ajout de Discipliner</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Discipline/liste">Liste des disciplines</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Joueur/add">Ajout de Joueur</a></li>
                <li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Joueur/liste">Liste des Joueurs/Entraineur</a></li>

            </ul>
        </div>
        <div class="container" style="margin-top: 75px">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Liste Joueur/Entraineur
                </div>
                <div class="panel-body">
                    <form>
                        <div class="form-group">
                            <select class="form-control" id='choix'>
                                <option class="form-control" value="">Faite votre choix</option>
                                <option class="form-control" value="1">Joueur</option>
                                <option class="form-control" value="2">Entraineur</option>
                            </select>
                        </div>
                      <!--  <div class="form-group">
                            <input class="btn btn-success" id="btn1" type="submit" name="rechercher" value="Rechercher"/>
                        </div>  -->
                        <div class="form-group" id="msg">

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
