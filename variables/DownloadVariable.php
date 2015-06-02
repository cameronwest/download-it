<?php
namespace Craft;

/**
 * Download template variable
 */
class DownloadVariable
{
	/**
	 * Just download it.
	 * @param url to download contents of
	 * @sideEffect force download and exit processing
	 */
	public function it($url)
	{
		$filename = array_pop(explode('/', $url));
		$content = craft()->download->it($url);

		header("Content-Type: application/force-download");
		header("Content-Disposition: attachment; filename=\"$filename\"");
		header("Content-Length: " . strlen($content));

		echo $content;
		exit();

	}
}
/* End of DownloadVariable.php */