<?php
/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

$config = [
    "HybridAuth" => [
        "base_url" => "http://localhost/forecast_clash/vendor/hybridauth/hybridauth/hybridauth/",
        "providers" => [
            // openid providers
            "OpenID" => [
                "enabled" => false
            ],
            "Yahoo" => [
                "enabled" => false,
                "keys" => ["key" => "", "secret" => ""],
            ],
            "AOL" => [
                "enabled" => false
            ],
            "Google" => [
                "enabled" => true,
                "keys" => ["id" => "", "secret" => ""],
            ],
            "Facebook" => [
                "enabled" => true,
                "keys" => ["id" => "1427081177598582", "secret" => "5b215a7d791dda7abed5d65abd3d1831"],
                "trustForwarded" => false
            ],
            "Twitter" => [
                "enabled" => true,
                "keys" => ["key" => "", "secret" => ""],
                "includeEmail" => false
            ],
            // windows live
            "Live" => [
                "enabled" => false,
                "keys" => ["id" => "", "secret" => ""]
            ],
            "LinkedIn" => [
                "enabled" => false,
                "keys" => ["key" => "", "secret" => ""]
            ],
            "Foursquare" => [
                "enabled" => false,
                "keys" => ["id" => "", "secret" => ""]
            ],
        ],
        // If you want to enable logging, set 'debug_mode' to true.
        // You can also set it to
        // - "error" To log only error messages. Useful in production
        // - "info" To log info and error messages (ignore debug messages)
        "debug_mode" => true,
        // Path to file writable by the web server. Required if 'debug_mode' is not false
        "debug_file" => "c:/xampp/htdocs/forecast_clash/logs/hautherror.log",
    ]
]
?>