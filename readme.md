This plugin is an easy way to provide download functionality for any URL, whether internal or external. This would usually be an Asset from Amazon S3.

The idea is to have a template that simply acts as a pretty URL on the client domain that is used to download external assets.


To use the plugin, simply provide the URL to the file you want like so:

{{ craft.download.it(url) }}

This will effectively use your site as a proxy to download the file, so be aware that there is a network transfer cost for your server.


Please note that if you do this, your template should ONLY output this file. The plugin will attempt to send headers to force the download, and if you have content output before or after this tag then it will probably break.