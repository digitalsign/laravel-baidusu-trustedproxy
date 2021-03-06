<?php

/**
 * 请运行 `php artisan baidusu:update-range`
 * 与
 * @link https://github.com/digitalsign/laravel-baidusu-trustedproxy/issues/1
 * 保持更新
 */
return [
    // all this were wget from https://www.cloudflare.com/ips-v6
    '2400:cb00::/32',
    '2606:4700::/32',
    '2803:f800::/32',
    '2405:b500::/32',
    '2405:8100::/32',
    '2a06:98c0::/29',
    '2c0f:f248::/32',

    // all this were wget from https://www.cloudflare.com/ips-v4
    '173.245.48.0/20',
    '103.21.244.0/22',
    '103.22.200.0/22',
    '103.31.4.0/22',
    '141.101.64.0/18',
    '108.162.192.0/18',
    '190.93.240.0/20',
    '188.114.96.0/20',
    '197.234.240.0/22',
    '198.41.128.0/17',
    '162.158.0.0/15',
    '104.16.0.0/12',
    '172.64.0.0/13',
    '131.0.72.0/22',

    // https://su.baidu.com/agency/api.html#/10_changjianwenti/0_HIDE_FAQ/20_baiduyunjiasujiedianIPdizhiduan.md
    '111.32.135.0/24',
    '111.32.136.0/24',
    '125.39.174.0/24',
    '125.39.239.0/24',
    '42.81.6.0/24',
    '42.81.8.0/24',
    '119.84.92.0/24',
    '119.84.93.0/24',
    '113.207.100.0/24',
    '113.207.101.0/24',
    '113.207.102.0/24',
    '180.163.188.0/24',
    '180.163.189.0/24',
    '101.227.206.0/24',
    '101.227.207.0/24',
    '180.163.113.0/24',
    '119.167.246.0/24',
    '150.138.149.0/24',
    '150.138.150.0/24',
    '150.138.151.0/24',
    '61.182.137.0/24',
    '61.182.136.0/24',
    '120.52.29.0/24',
    '120.52.113.0/24',
    '183.232.51.0/24',
    '183.232.53.0/24',
    '157.255.25.0/24',
    '157.255.26.0/24',
    '112.25.90.0/24',
    '112.25.91.0/24',
    '58.211.2.0/24',
    '58.211.137.0/24',
    '61.155.149.0/24',
    '61.156.149.0/24',
    '61.155.165.0/24',
    '183.60.235.0/24',
    '116.31.126.0/24',
    '116.31.127.0/24',
    '59.51.81.0/24',
    '220.170.185.0/24',
    '220.170.186.0/24',
    '183.61.236.0/24',
    '14.17.71.0/24',
    '119.147.134.0/24',
    '117.34.13.0/24',
    '117.34.14.0/24',
    '42.236.93.0/24',
    '42.236.94.0/24',
    '124.95.168.0/24',
    '124.95.188.0/24',
    '122.190.2.0/24',
    '122.190.3.0/24',
    '183.61.177.0/24',
    '183.61.190.0/24',
    '117.148.160.0/24',
    '117.148.161.0/24',
    '222.216.190.0/24',
    '219.159.84.0/24',
    '115.231.186.0/24',
    '115.231.187.0/24',
    '119.188.97.0/24',
    '119.188.9.0/24',
    '117.27.149.0/24',
    '163.53.89.0/24',
];
