<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type map
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des champs de type map
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 07/07/2010
 */
class HtmlTagMap extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagMap::__tagName()
	 * @return HtmlTagMap
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagMap::__tagName());
	}
	/**
	 * M�thode permettant de d�finir un �l�ment area de la map par ses attributs
	 * 
	 * @uses HtmlTag::addAttributes()
	 * @uses HtmlTagMap::setValue()
	 * @param array les attributs de l'�l�ment map � ajouter � la map
	 * @return bool true|false
	 */
	public function addArea(array $_attributes)
	{
		$area = new HtmlTagArea();
		return $area->addAttributes($_attributes)?$this->setValue($area):false;
	}
	/**
	 * On s'assure que les �l�ments pass�s � la map soient bien du type area
	 * @see parent::setValue()
	 * 
	 * @param HtmlTagArea
	 * @return bool true|false
	 */
	public function setValue(HtmlTagArea $_area)
	{
		return parent::setValue($_area);
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string map
	 */
	public static function __tagName()
	{
		return 'map';
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