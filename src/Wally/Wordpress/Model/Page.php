<?php

namespace Wally\Wordpress\Model;

/**
 * 
 * Page model.
 * 
 * This class model a Page of blog.
 * 
 * @author Walter Dal Mut
 *
 */
class Page
	extends \Wally\Wordpress\Model\PageAbstract
{
	const WP_DATE = 'dateCreated';
	const WP_DATE_GMT = 'dateCreatedGmt';
	
	public function __set($key, $value)
	{
		if ($key == self::WP_DATE || $key == self::WP_DATE_GMT) {
			$value = new \Zend\Date\Date($value, \Zend\Date\Date::ISO_8601);
		}
		
		parent::__set($key, $value);
	}
	
	public function toArray()
	{
		$data = $this->_data;
		
		$clear = array();
		foreach ($data as $key => $value) {
		    if ($key != self::WP_DATE) {
    			$f = new Zend_Filter;
    			$f->addFilter(new Zend\Filter\Word\CamelCaseToSeparator("_"));
    			$f->addFilter(new Zend\Filter\StringToLower());
    			$key = $f->filter($key);
		    }
		    
		    if ($value instanceof Zend\Date) {
		        $value = $value->toString("yyyyMMddTHHmmss");
		    }
		    
			$clear[$key] = $value;
		}
		
		return $clear;
	}
}
