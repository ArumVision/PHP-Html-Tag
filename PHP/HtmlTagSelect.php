<?php
/**
 * Classe m�re pour toute classe permettant de g�n�rer un �l�ment select HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
/**
 * Classe m�re pour toute classe permettant de g�n�rer un �l�ment select HtmlTag
 * @package Common
 * @subpackage HtmlTag
 * @author Mika�l DELSOL
 * @copyright Mika�l DELSOL
 * @version 1.0
 * @date 16/12/2009
 */
class HtmlTagSelect extends HtmlTag
{
	/**
	 * Constructeur de la classe
	 * @see parent::__construct()
	 * 
	 * @uses HtmlTagSelect::__tagName()
	 * @return HtmlTagSelect
	 */
	public function __construct()
	{
		parent::__construct(HtmlTagSelect::__tagName());
	}
	/**
	 * M�thode permettant d'ajouter une option au select
	 *
	 * @uses HtmlTag::addValue()
	 * @param HtmlTagOption
	 */
	public function addSelectOption(HtmlTagOption $_HtmlTagOption)
	{
		return $this->addValue($_HtmlTagOption);
	}
	/**
	 * M�thode permettant de simplement ajouter une option � la liste de s�lection
	 *
	 * @uses HtmlTag::setValue()
	 * @uses HtmlTag::addAttributes()
	 * @uses HtmlTagSelect::addSelectOption()
	 * @param mixed
	 * @param array
	 */
	public function createOption($_content,array $_attributes = array())
	{
		$htmlSelectOption = new HtmlTagOption();
		$htmlSelectOption->setValue($_content);
		if(is_array($_attributes))
			$htmlSelectOption->addAttributes($_attributes);
		return $this->addSelectOption($htmlSelectOption);
	}
	/**
	 * On s'assure que les �l�ments pass�s au select soient bien du type option/optgroup
	 * @see parent::setValue()
	 * 
	 * @param HtmlTagOption|HtmlTagOptgroup
	 * @return bool true|false
	 */
	public function setValue(HtmlTag $_option)
	{
		return (($_option instanceof HtmlTagOptgroup) || ($_option instanceof HtmlTagOption))?parent::setValue($_option):false;
	}
	/**
	 * M�thode retournant le nom du tag de la classe
	 *
	 * @return string select
	 */
	public static function __tagName()
	{
		return 'select';
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