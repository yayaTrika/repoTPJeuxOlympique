<?php
/* Smarty version 3.1.30, created on 2018-03-16 01:18:39
  from "C:\xampp\htdocs\MesProjets\Jeux_olympique\view\discipline\liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5aab0d5f67bd37_30627004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9844ff5b1a76043af9b494679b1dee488686c3d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MesProjets\\Jeux_olympique\\view\\discipline\\liste.html',
      1 => 1521159516,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aab0d5f67bd37_30627004 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
    <head lang="fr">
        <meta charset="UTF-8">
        <title>Liste des disciplines</title>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
        <link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
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
                    Liste des disciplines
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-responsive table-striped">
                        <tr>
                            <th style="text-align: center">IDentifiant</th>
                            <th style="text-align: center">Libelle discipline</th>
                            <th style="text-align: center">Action</th>
                        </tr>
                        <?php if (isset($_smarty_tpl->tpl_vars['liste']->value)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['liste']->value != null) {?>
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['liste']->value, 'discipline');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['discipline']->value) {
?>
                                    <tr>
                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['discipline']->value['idD'];?>
</td>
                                        <td style="text-align: center"><?php echo $_smarty_tpl->tpl_vars['discipline']->value['libD'];?>
</td>
                                        <td style="text-align: center"><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
discipline/edit/<?php echo $_smarty_tpl->tpl_vars['discipline']->value['idD'];?>
"> <input  class="btn btn-warning" type="submit" name="edit" value="Edit" id="edit"/></a></td>
                                    </tr>
                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

                            <?php }?>
                        <?php }?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html><?php }
}
