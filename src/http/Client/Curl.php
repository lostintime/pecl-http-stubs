<?php

namespace http\Client {

    /**
     * The http\Client\Curl namespace holds option value constants specific to the curl driver of the http\Client.
     */
    namespace Curl {
        const AUTH_ANY              = -17;
        const AUTH_BASIC            = 1;
        const AUTH_DIGEST           = 2;
        const AUTH_DIGEST_IE        = 16;
        const AUTH_GSSNEG           = 4;
        const AUTH_NTLM             = 8;
        const AUTH_SPNEGO           = 4;
        const HTTP_VERSION_1_0      = 1;
        const HTTP_VERSION_1_1      = 2;
        const HTTP_VERSION_ANY      = 0;
        const IPRESOLVE_ANY         = 0;
        const IPRESOLVE_V4          = 1;
        const IPRESOLVE_V6          = 2;
        const POSTREDIR_301         = 1;
        const POSTREDIR_302         = 2;
        const POSTREDIR_303         = 4;
        const POSTREDIR_ALL         = 7;
        const PROXY_HTTP            = 0;
        const PROXY_HTTP_1_0        = 1;
        const PROXY_SOCKS4          = 4;
        const PROXY_SOCKS4A         = 5;
        const PROXY_SOCKS5          = 5;
        const PROXY_SOCKS5_HOSTNAME = 5;
        const SSL_VERSION_ANY       = 0;
        const SSL_VERSION_SSLv2     = 2;
        const SSL_VERSION_SSLv3     = 3;
        const SSL_VERSION_TLSv1     = 1;
        const SSL_VERSION_TLSv1_0   = 4;
        const SSL_VERSION_TLSv1_1   = 5;
        const SSL_VERSION_TLSv1_2   = 6;
    }
}