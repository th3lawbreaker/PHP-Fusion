<?php
/*-------------------------------------------------------+
| PHP-Fusion Content Management System
| Copyright (C) PHP-Fusion Inc
| https://www.php-fusion.co.uk/
+--------------------------------------------------------+
| Filename: mimetypes_include.php
| Author: Arda Kilicdagi (Arda, SoulSmasher)
+--------------------------------------------------------+
| This program is released as free software under the
| Affero GPL license. You can redistribute it and/or
| modify it under the terms of this license which you
| can read by viewing the included agpl.txt or online
| at www.gnu.org/licenses/agpl.html. Removal of this
| copyright header is strictly prohibited without
| written permission from the original author(s).
+--------------------------------------------------------*/
defined('IN_FUSION') || exit;

if (!function_exists('mimeTypes')) {
    function mimeTypes() {
        /*-------------------------------------------------------+
        | Taken From CodeIgniter 3.0 Dev Branch, 2013.06.26
        | https://github.com/EllisLab/CodeIgniter/blob/develop/application/config/mimes.php
        | Licensed under the Academic Free License version 3.0
        | http://opensource.org/licenses/AFL-3.0
        +--------------------------------------------------------*/
        return [
            'hqx'   => [
                'application/mac-binhex40',
                'application/mac-binhex',
                'application/x-binhex40',
                'application/x-mac-binhex40'
            ],
            'cpt'   => 'application/mac-compactpro',
            'csv'   => [
                'text/x-comma-separated-values',
                'text/comma-separated-values',
                'application/octet-stream',
                'application/vnd.ms-excel',
                'application/x-csv',
                'text/x-csv',
                'text/csv',
                'application/csv',
                'application/excel',
                'application/vnd.msexcel',
                'text/plain'
            ],
            'bin'   => [
                'application/macbinary',
                'application/mac-binary',
                'application/octet-stream',
                'application/x-binary',
                'application/x-macbinary'
            ],
            'dms'   => 'application/octet-stream',
            'lha'   => 'application/octet-stream',
            'lzh'   => 'application/octet-stream',
            'exe'   => ['application/octet-stream', 'application/x-msdownload'],
            'class' => 'application/octet-stream',
            'psd'   => ['application/x-photoshop', 'image/vnd.adobe.photoshop'],
            'so'    => 'application/octet-stream',
            'sea'   => 'application/octet-stream',
            'dll'   => 'application/octet-stream',
            'oda'   => 'application/oda',
            'pdf'   => [
                'application/pdf',
                'application/force-download',
                'application/x-download',
                'binary/octet-stream'
            ],
            'ai'    => ['application/pdf', 'application/postscript'],
            'eps'   => 'application/postscript',
            'ps'    => 'application/postscript',
            'smi'   => 'application/smil',
            'smil'  => 'application/smil',
            'mif'   => 'application/vnd.mif',
            'xls'   => [
                'application/vnd.ms-excel',
                'application/msexcel',
                'application/x-msexcel',
                'application/x-ms-excel',
                'application/x-excel',
                'application/x-dos_ms_excel',
                'application/xls',
                'application/x-xls',
                'application/excel',
                'application/download',
                'application/vnd.ms-office',
                'application/msword'
            ],
            'ppt'   => ['application/powerpoint', 'application/vnd.ms-powerpoint'],
            'pptx'  => [
                'application/vnd.openxmlformats-officedocument.presentationml.presentation',
                'application/x-zip',
                'application/zip'
            ],
            'wbxml' => 'application/wbxml',
            'wmlc'  => 'application/wmlc',
            'dcr'   => 'application/x-director',
            'dir'   => 'application/x-director',
            'dxr'   => 'application/x-director',
            'dvi'   => 'application/x-dvi',
            'gtar'  => 'application/x-gtar',
            'gz'    => 'application/x-gzip',
            'gzip'  => 'application/x-gzip',
            'php'   => [
                'application/x-httpd-php',
                'application/php',
                'application/x-php',
                'text/php',
                'text/x-php',
                'application/x-httpd-php-source'
            ],
            'php4'  => 'application/x-httpd-php',
            'php3'  => 'application/x-httpd-php',
            'phtml' => 'application/x-httpd-php',
            'phps'  => 'application/x-httpd-php-source',
            'js'    => ['application/x-javascript', 'text/plain'],
            'swf'   => 'application/x-shockwave-flash',
            'sit'   => 'application/x-stuffit',
            'tar'   => 'application/x-tar',
            'tgz'   => ['application/x-tar', 'application/x-gzip-compressed'],
            'xhtml' => 'application/xhtml+xml',
            'xht'   => 'application/xhtml+xml',
            'zip'   => [
                'application/x-zip',
                'application/zip',
                'application/x-zip-compressed',
                'application/s-compressed',
                'multipart/x-zip',
                'application/octet-stream'
            ],
            'rar'   => [
                'application/x-rar',
                'application/rar',
                'application/x-rar-compressed',
                'application/octet-stream'
            ],
            'mid'   => 'audio/midi',
            'midi'  => 'audio/midi',
            'mpga'  => 'audio/mpeg',
            'mp2'   => 'audio/mpeg',
            'mp3'   => ['audio/mpeg', 'audio/mpg', 'audio/mpeg3', 'audio/mp3'],
            'aif'   => ['audio/x-aiff', 'audio/aiff'],
            'aiff'  => ['audio/x-aiff', 'audio/aiff'],
            'aifc'  => 'audio/x-aiff',
            'ram'   => 'audio/x-pn-realaudio',
            'rm'    => 'audio/x-pn-realaudio',
            'rpm'   => 'audio/x-pn-realaudio-plugin',
            'ra'    => 'audio/x-realaudio',
            'rv'    => 'video/vnd.rn-realvideo',
            'wav'   => ['audio/x-wav', 'audio/wave', 'audio/wav'],
            'bmp'   => ['image/bmp', 'image/x-windows-bmp'],
            'gif'   => 'image/gif',
            'jpeg'  => ['image/jpeg', 'image/pjpeg'],
            'jpg'   => ['image/jpeg', 'image/pjpeg'],
            'jpe'   => ['image/jpeg', 'image/pjpeg'],
            'png'   => ['image/png', 'image/x-png'],
            'tiff'  => 'image/tiff',
            'tif'   => 'image/tiff',
            'css'   => ['text/css', 'text/plain'],
            'html'  => ['text/html', 'text/plain'],
            'htm'   => ['text/html', 'text/plain'],
            'shtml' => ['text/html', 'text/plain'],
            'txt'   => 'text/plain',
            'text'  => 'text/plain',
            'log'   => ['text/plain', 'text/x-log'],
            'rtx'   => 'text/richtext',
            'rtf'   => 'text/rtf',
            'xml'   => ['application/xml', 'text/xml', 'text/plain'],
            'xsl'   => ['application/xml', 'text/xsl', 'text/xml'],
            'mpeg'  => 'video/mpeg',
            'mpg'   => 'video/mpeg',
            'mpe'   => 'video/mpeg',
            'qt'    => 'video/quicktime',
            'mov'   => 'video/quicktime',
            'avi'   => ['video/x-msvideo', 'video/msvideo', 'video/avi', 'application/x-troff-msvideo'],
            'movie' => 'video/x-sgi-movie',
            'doc'   => ['application/msword', 'application/vnd.ms-office'],
            'docx'  => [
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'application/zip',
                'application/msword',
                'application/x-zip'
            ],
            'dot'   => ['application/msword', 'application/vnd.ms-office'],
            'dotx'  => [
                'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
                'application/zip',
                'application/msword'
            ],
            'xlsx'  => [
                'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet',
                'application/zip',
                'application/vnd.ms-excel',
                'application/msword',
                'application/x-zip'
            ],
            'word'  => ['application/msword', 'application/octet-stream'],
            'xl'    => 'application/excel',
            'eml'   => 'message/rfc822',
            'json'  => ['application/json', 'text/json'],
            'pem'   => ['application/x-x509-user-cert', 'application/x-pem-file', 'application/octet-stream'],
            'p10'   => ['application/x-pkcs10', 'application/pkcs10'],
            'p12'   => 'application/x-pkcs12',
            'p7a'   => 'application/x-pkcs7-signature',
            'p7c'   => ['application/pkcs7-mime', 'application/x-pkcs7-mime'],
            'p7m'   => ['application/pkcs7-mime', 'application/x-pkcs7-mime'],
            'p7r'   => 'application/x-pkcs7-certreqresp',
            'p7s'   => 'application/pkcs7-signature',
            'crt'   => ['application/x-x509-ca-cert', 'application/x-x509-user-cert', 'application/pkix-cert'],
            'crl'   => ['application/pkix-crl', 'application/pkcs-crl'],
            'der'   => 'application/x-x509-ca-cert',
            'kdb'   => 'application/octet-stream',
            'pgp'   => 'application/pgp',
            'gpg'   => 'application/gpg-keys',
            'sst'   => 'application/octet-stream',
            'csr'   => 'application/octet-stream',
            'rsa'   => 'application/x-pkcs7',
            'cer'   => ['application/pkix-cert', 'application/x-x509-ca-cert'],
            '3g2'   => 'video/3gpp2',
            '3gp'   => 'video/3gp',
            'mp4'   => 'video/mp4',
            'm4a'   => 'audio/x-m4a',
            'f4v'   => 'video/mp4',
            'webm'  => 'video/webm',
            'aac'   => 'audio/x-acc',
            'm4u'   => 'application/vnd.mpegurl',
            'm3u'   => 'text/plain',
            'xspf'  => 'application/xspf+xml',
            'vlc'   => 'application/videolan',
            'wmv'   => ['video/x-ms-wmv', 'video/x-ms-asf'],
            'au'    => 'audio/x-au',
            'ac3'   => 'audio/ac3',
            'flac'  => 'audio/x-flac',
            'ogg'   => 'audio/ogg',
            'kmz'   => ['application/vnd.google-earth.kmz', 'application/zip', 'application/x-zip'],
            'kml'   => ['application/vnd.google-earth.kml+xml', 'application/xml', 'text/xml'],
            'ics'   => 'text/calendar',
            'zsh'   => 'text/x-scriptzsh',
            '7zip'  => [
                'application/x-compressed',
                'application/x-zip-compressed',
                'application/zip',
                'multipart/x-zip',
                'application/octet-stream'
            ],
            'cdr'   => [
                'application/cdr',
                'application/coreldraw',
                'application/x-cdr',
                'application/x-coreldraw',
                'image/cdr',
                'image/x-cdr',
                'zz-application/zz-winassoc-cdr'
            ],
            'wma'   => ['audio/x-ms-wma', 'video/x-ms-asf'],
            'jar'   => [
                'application/java-archive',
                'application/x-java-application',
                'application/x-jar',
                'application/x-compressed'
            ]
        ];
    }
}

if (!function_exists('img_mimeTypes')) {
    function img_mimeTypes() {
        return [
            'jpg'  => 'image/jpg',
            'jpeg' => 'image/jpeg',
            'gif'  => 'image/gif',
            'png'  => 'image/png',
            'tiff' => 'image/tiff',
            'tif'  => 'image/tif',
            'bmp'  => 'image/x-ms-bmp',
            'ico'  => 'image/x-icon'
        ];
    }
}
