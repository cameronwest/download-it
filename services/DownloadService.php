<?php
namespace Craft;

/**
 * Download service
 */
class DownloadService extends BaseApplicationComponent
{
	/**
	 * Just download it.
	 * @param url to download contents of
	 * @return file contents
	 */
	public function it($url)
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);

		$data = curl_exec($ch);

		curl_close($ch);

		return $data;
	}
}
/* End of DownloadService.php */ 