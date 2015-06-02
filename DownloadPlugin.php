<?php
namespace Craft;

/**
 * Class DownloadPlugin
 *
 * @author Cameron West
 * @version 1.0
 * @date: 1/2/15
 * @package Download
 */
class DownloadPlugin extends BasePlugin
{

	/**
	 * @return string
	 */
	function getName()
	{
		return Craft::t('Download It');
	}

	/**
	 * @return string
	 */
	function getVersion()
	{
		return '1.0';
	}

	/**
	 * @return string
	 */
	function getDeveloper()
	{
		return 'Cameron West';
	}

	/**
	 * @return string
	 */
	function getDeveloperUrl()
	{
		return 'http://paramoredigital.com';
	}
}
/* End of DownloadPlugin.php */