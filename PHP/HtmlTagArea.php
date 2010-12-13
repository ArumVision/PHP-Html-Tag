<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type area
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type area
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagArea extends HtmlTag
{
	/**
	 * Valeur de shape = rect
	 * @var string
	 */
	const SHAPE_RECT = 'rect';
	/**
	 * Valeur de shape = circle
	 * @var string
	 */
	const SHAPE_CIRCLE = 'circle';
	/**
	 * Valeur de shape = poly
	 * @var string
	 */
	const SHAPE_POLY = 'poly';
	/**
	 * Valeur de shape = default
	 * @var string
	 */
	const SHAPE_DEFAULT = 'default';
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagArea::__tagName()
	 * @return HtmlTagArea
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagArea::__tagName());
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'alt' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param string la valeur de alt
	 * @return bool true|false
	 */
	public function setAlt($_alt)
	{
		return $this->addAttribute('alt',$_alt,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'alt' de l'�l�ment HtmlTag
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
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetAlt()
	{
		return $this->unsetAttribute('alt');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'coords' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param string la valeur de coords
	 * @return bool true|false
	 */
	public function setCoords($_coords)
	{
		return $this->addAttribute('coords',$_coords,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'coords' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getCoords()
	{
		return $this->getAttribute('coords');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'coords' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::unsetAttribute()
	 * @return string|null
	 */
	public function unsetCoords()
	{
		return $this->unsetAttribute('coords');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'href' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::addAttribute()
	 * @param string la valeur de href
	 * @return bool true|false
	 */
	public function setHref($_href)
	{
		return $this->addAttribute('href',$_href,true);
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'href' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getHref()
	{
		return $this->getAttribute('href');
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'href' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::removeAttribute()
	 * @return bool true|false
	 */
	public function unsetHref()
	{
		return $this->removeAttribute('href');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'nohref' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::addAttribute()
	 * @return bool true|false
	 */
	public function setNohref()
	{
		return $this->addAttribute('nohref','nohref',true);
	}
	/**
	 * M�thode permettant de supprimer l'attribut 'href' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::removeAttribute()
	 * @return string|null
	 */
	public function unsetNohref()
	{
		return $this->removeAttribute('nohref');
	}
	/**
	 * M�thode permettant de d�finir l'attribut 'shape' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::addAttribute()
	 * @uses HtmlTagArea::__className()
	 * @uses HtmlTagArea::SHAPE_RECT
	 * @uses HtmlTagArea::SHAPE_CIRCLE
	 * @uses HtmlTagArea::SHAPE_POLY
	 * @uses HtmlTagArea::SHAPE_DEFAULT
	 * @param string la valeur de shape
	 * @return bool true|false
	 */
	public function setShape($_shape)
	{
		return (is_string($_shape) && defined($this->__className() . '::SHAPE_' . strtoupper($_shape)))?$this->addAttribute('shape',$_shape,true):false;
	}
	/**
	 * M�thode permettant de r�cup�rer l'attribut 'shape' de l'�l�ment HtmlTag
	 *
	 * @uses HtmlTag::getAttribute()
	 * @return string|null
	 */
	public function getShape()
	{
		return $this->getAttribute('shape');
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string area
	 */
	public static function __tagName()
	{
		return 'area';
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