<?php
/**
 * Chargement des classes
 */
require_once realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'autoload.inc');
/**
 * Chargement du document complet repr�sentant le template principale
 */
HtmlTag::loadDomDocumentFile(realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'tpl.html'));
/**
 * Instance du gestionnaire de template
 * @var HtmlTagTpl
 */
$tpl = new HtmlTagTpl();
/**
 * D�finition des variables
 */
$tpl->setVariablesArray(array('label_value'=>'Label du champ','label_title'=>'Renseigner le champ texte'));
$tpl->setVariable('input_value','Valeur par d�faut du champ texte');
$tpl->setVariable('submit_value','&nbsp;Soumettre le formulaire&nbsp;');
/**
 * G�n�ration du code HTML du formulaire
 * @var string
 */
$formContent = $tpl->fetch(realpath(dirname(__FILE__) . DIRECTORY_SEPARATOR . 'form.html'));
/**
 * Instance du gestionnaire de template
 * @var HtmlTagTpl
 */
$tpl = new HtmlTagTpl();
/**
 * D�finition des variables
 */
$tpl->setVariable('page_title','Page d\'exemple');
/**
 * D�finition du contnu g�n�r� pour le formulaire
 */
$tpl->setVariable('form_content',$formContent);
/**
 * G�n�ration du code HTML dynamis� avec le formulaire
 */
$tpl->fetch();
/**
 * G�n�ration du code HTML complet
 */
echo HtmlTag::displayFullHtml(true);
?>