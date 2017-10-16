<?php
/**
 * Nextcloud - spreedme
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author Leon <leon@struktur.de>
 * @copyright struktur AG 2016
 */
namespace OCA\SpreedME\Config;
class Config {
	// Domain of your Spreed WebRTC server (including protocol and optional port number), examples:
	//const SPREED_WEBRTC_ORIGIN = 'https://mynextcloudserver.com';
	//const SPREED_WEBRTC_ORIGIN = 'https://webrtc.mynextcloudserver.com:8080';
	// If this is empty or only includes a port (e.g. :8080), host will automatically be determined (current host)
	const SPREED_WEBRTC_ORIGIN = '';
	// This has to be the same `basePath`
	// you already set in the [http] section of the `server.conf` file from Spreed WebRTC server
	const SPREED_WEBRTC_BASEPATH = '/webrtc/';
	// This has to be the same `sharedsecret_secret` (64-character HEX string)
	// you already set in the [users] section of the `server.conf` file from Spreed WebRTC server
	const SPREED_WEBRTC_SHAREDSECRET = 'SPREEDSECRET';
	// Set to true if at least one another Nextcloud instance uses the same Spreed WebRTC server
	const SPREED_WEBRTC_IS_SHARED_INSTANCE = false;
	// If set to false (default), all file transfers (e.g. when sharing a presentation or sending a file to another peer) are directly sent to the appropriate user in a peer-to-peer fashion.
	// If set to true, all files are first uploaded to Nextcloud, then this file is shared and can be downloaded by other peers. This is required e.g. when using an MCU.
	const SPREED_WEBRTC_UPLOAD_FILE_TRANSFERS = false;
	// Whether anonymous users (i.e. users which are not logged in) should be able to upload/share files and presentations
	// This value is only taken into account when 'SPREED_WEBRTC_UPLOAD_FILE_TRANSFERS' is set to true
	const SPREED_WEBRTC_ALLOW_ANONYMOUS_FILE_TRANSFERS = false;
	// Set to true if you want to allow access to this app + spreed-webrtc for non-registered users who received a temporary password by an Nextcloud admin.
	// You can generate such a temporary password at: /index.php/apps/spreedme/admin/tp (Nextcloud admin user account required)
	const OWNCLOUD_TEMPORARY_PASSWORD_LOGIN_ENABLED = true;
	private function __construct() {
	}
}
