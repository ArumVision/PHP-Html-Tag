<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des formulaires
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 20/12/2009
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des formulaires
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 20/12/2009
 */
class HtmlTagForm extends HtmlTag
{
	/**
	 * M�thode post
	 * @var string
	 */
	const POST = 'post';
	/**
	 * M�thode get
	 * @var string
	 */
	const GET = 'get';
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagForm::__tagName()
	 * @uses HtmlTag::addAttributes()
	 * @uses HtmlTag::addAttribute()
	 * @param string l'action du formulaire
	 * @param string la m�thode de transmission des donn�es des champs
	 * @param string le type des donn�es transmises
	 * @return HtmlTagForm
	 */
	public function __construct($_action = '#',$_method = self::POST,$_enctype = 'multipart/form-data')
	{
		parent::__construct(HtmlTagForm::__tagName());
		$this->addAttributes(array('action'=>!empty($_action)?$_action:'#','method'=>(!empty($_method) && defined(HtmlTagForm::__className() . '::' . strtoupper($_method)))?strtolower($_method):self::POST));
		if(!empty($_enctype))
			$this->addAttribute('enctype',$_enctype,true);
	}
	/**
	 * M�thode permettant d'ajouter un �l�ment au formulaire
	 *
	 * @uses HtmlTag::setValue()
	 * @uses HtmlTag::addValue()
	 * @uses HtmlTagForm::getFormFields()
	 * @uses HtmlTagForm::setFormFields()
	 * @uses HtmlTagForm::CONTAINER_TAG_NAME
	 * @param HtmlTag l'�l�ment du formulaire
	 * @param HtmlTag le label associ� � l'�l�ment
	 * @param HtmlTag le conteneur de l'�l�ment
	 */
	public function addFormField(HtmlTag $_field,HtmlTag $_label,$_container = null)
	{
		$container = ($_container instanceof HtmlTag)?$_container:new HtmlTagP();
		$container->addValue($_label);
		$container->addValue($_field);
		return $this->addValue($container);
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string form
	 */
	public static function __tagName()
	{
		return 'form';
	}
	/**
	 * M�thode retournant le nom de la classe telle quelle
	 *
	 * @return string __CLASS__
	 */
	public static function __className()
	{
		return __CLASS__;
	}
}
?>