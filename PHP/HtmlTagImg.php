<?php
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type img
 * Root class to generate an img element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 28/06/2010
 */
/**
 * Classe m�re permettant de g�n�rer un �l�ment HTML de type img
 * Root class to generate an img element
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 28/06/2010
 */
class HtmlTagImg extends HtmlTag
{
	/**
	 * Constructeur de la classe / Class constructor
	 * @see parent::__construct()
	 *
	 * @uses HtmlTagImg::__tagName()
	 * @return HtmlTagImg
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagImg::__tagName());
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'alt' de l'�l�ment HtmlTag
	 * Method to set alt attribute value
	 *
	 * @uses HtmlTagImg::addAttribute()
	 * @param string la valeur de alt
	 * @return bool true|false
	 */
	public function setAlt($_alt)
	{
		return $this->addAttribute('alt',$_alt,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'alt' de l'�l�ment HtmlTag
	 * Method to get alt attribute value
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getAlt()
	{
		return $this->getAttribute('alt');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'alt' de l'�l�ment HtmlTag
	 * Method to unset alt attribute value
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetAlt()
	{
		return $this->unsetAttribute('alt');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'src' de l'�l�ment HtmlTag
	 * Method to set src attribute value
	 *
	 * @uses HtmlTagImg::addAttribute()
	 * @param string la valeur de src
	 * @return bool true|false
	 */
	public function setSrc($_src)
	{
		return $this->addAttribute('src',$_src,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'src' de l'�l�ment HtmlTag
	 * Method to get src attribute value
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getSrc()
	{
		return $this->getAttribute('src');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'src' de l'�l�ment HtmlTag
	 * Method to unset src attribute value
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetSrc()
	{
		return $this->unsetAttribute('src');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'width' de l'�l�ment HtmlTag
	 * Method to set width attribute value
	 *
	 * @uses HtmlTagImg::addAttribute()
	 * @param string la valeur de width
	 * @return bool true|false
	 */
	public function setWidth($_width)
	{
		return $this->addAttribute('width',$_width,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'width' de l'�l�ment HtmlTag
	 * Method to get width attribute value
	 *
	 * @uses HtmlTagImg::getAttribute()
	 * @return string|null
	 */
	public function getWidth()
	{
		return $this->getAttribute('width');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'width' de l'�l�ment HtmlTag
	 * Method to unset width attribute value
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetWidth()
	{
		return $this->unsetAttribute('width');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'height' de l'�l�ment HtmlTag
	 * Method to set height attribute value
	 *
	 * @uses HtmlTagImg::addAttribute()
	 * @param string la valeur de height
	 * @return bool true|false
	 */
	public function setHeight($_height)
	{
		return $this->addAttribute('height',$_height,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'height' de l'�l�ment HtmlTag
	 * Method to get height attribute value
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getHeight()
	{
		return $this->getAttribute('height');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'height' de l'�l�ment HtmlTag
	 * Method to unset height attribute value
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetHeight()
	{
		return $this->unsetAttribute('height');
	}
	/**
	 * Gestion des particuliers d'attributs
	 * Override method to manage specifics cases
	 * @see HtmlTag::addAttribute()
	 *
	 * @param string nom de l'attribut
	 * @param scalar valeur de l'attribut
	 * @param bool appel depuis une m�thode de HtmlTag pour d�finir un attribut sp�cifique
	 * @return bool true|false
	 */
	public function addAttribute($_attributeName,$_attributeValue,$_specificAttributeMethodCall = false)
	{
		switch($_attributeName)
		{
			case 'height':
			case 'width':
				return parent::addAttribute($_attributeName,intval($_attributeValue),$_specificAttributeMethodCall);
				break;
			default:
				return parent::addAttribute($_attributeName,$_attributeValue,$_specificAttributeMethodCall);
				break;
		}
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 * Method returning the tag name
	 *
	 * @return string img
	 */
	public static function __tagName()
	{
		return 'img';
	}
	/**
	 * M�thode retournant le nom de la classe telle quelle
	 * Method returning the class name
	 *
	 * @return string __CLASS__
	 */
	public static function __className()
	{
		return __CLASS__;
	}
}
?>