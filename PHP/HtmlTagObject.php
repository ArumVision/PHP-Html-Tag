<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type object
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type object
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagObject extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagObject::__tagName()
	 * @return HtmlTagObject
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagObject::__tagName());
	}
	/**
	 * M�thode permettant de d�finir une valeur d'un param�tre
	 * 
	 * @uses HtmlTagObject::setValue()
	 * @uses HtmlTagParam::defineParamValue()
	 * @uses HtmlTag::addValue()
	 * @param string nom du param�tre
	 * @param scalar valeur du param�tre
	 * @return bool true|false
	 */
	public function addParam($_paramName,$_paramValue)
	{
		if(is_string($_paramName) && is_scalar($_paramValue))
		{
			$param = new HtmlTagParam();
			return $param->defineParamValue($_paramName,$_paramValue)?$this->setValue($param):false;
		}
		else
			return false;
	}
	/**
	 * On s'assure que les �l�ments pass�s � l'objet soient bien du type param
	 * @see parent::setValue()
	 * 
	 * @param HtmlTagParam
	 * @return bool true|false
	 */
	public function setValue(HtmlTagParam $_param)
	{
		return parent::setValue($_param);
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string object
	 */
	public static function __tagName()
	{
		return 'object';
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