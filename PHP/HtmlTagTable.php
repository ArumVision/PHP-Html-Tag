<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer des tableaux HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 15/12/2009
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer des tableaux HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 15/12/2009
 */
class HtmlTagTable extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagTable::__tagName()
	 * @return HtmlTagTable
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagTable::__tagName());
	}
	/**
	 * @uses Htmltag::addvalue()
	 * @param HtmlTag
	 */
	public function setCaption(HtmlTagCaption $_caption)
	{
		return $this->addvalue($_caption);
	}
	/**
	 * @uses Htmltag::addvalue()
	 * @param HtmlTagTableTPart
	 */
	public function setTbody(HtmlTagTbody $_tbody)
	{
		return $this->addvalue($_tbody);
	}
	/**
	 * @uses Htmltag::addvalue()
	 * @param HtmlTagTableTPart
	 */
	public function setTfoot(HtmlTagTfoot $_tfoot)
	{
		return $this->addvalue($_tfoot);
	}
	/**
	 * @uses Htmltag::addvalue()
	 * @param HtmlTagTableTPart
	 */
	public function setThead(HtmlTagThead $_thead)
	{
		return $this->addvalue($_thead);
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string table
	 */
	public static function __tagName()
	{
		return 'table';
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