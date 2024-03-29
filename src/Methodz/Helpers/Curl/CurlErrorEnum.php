<?php

namespace Methodz\Helpers\Curl;

enum CurlErrorEnum: int
{
	case CURL_UNKNOWN_ERROR = -1;
	case CURL_NO_ERROR = 0;
	case CURL_UNSUPPORTED_PROTOCOL = 1;
	case CURL_FAILED_INI = 2;
	case CURL_URL_MAL_FORMAT = 3;
	case CURL_URL_MAL_FORMAT_USE = 4;
	case CURL_COULD_NOT_RESOLVE_PROXY = 5;
	case CURL_COULD_NOT_RESOLVE_HOST = 6;
	case CURL_COULD_NOT_CONNECT = 7;
	case CURL_FTP_WEIRD_SERVER_REPLY = 8;
	case CURL_REMOTE_ACCESS_DENIED = 9;
	case CURL_FTP_WEIRD_PASS_REPLY = 11;
	case CURL_FTP_WEIRD_USER_REPLY = 12;
	case CURL_FTP_WEIRD_PASV_REPLY = 13;
	case CURL_FTP_WEIRD_227_FORMAT = 14;
	case CURL_FTP_CANT_GET_HOST = 15;
	case CURL_FTP_CANT_RECONNECT = 16;
	case CURL_FTP_COULD_NOT_SET_TYPE = 17;
	case CURL_PARTIAL_FILE = 18;
	case CURL_FTP_COULD_NOT_RETRIEVE_FILE = 19;
	case CURL_QUOTE_ERROR = 21;
	case CURL_HTTP_RETURNED_ERROR = 22;
	case CURL_WRITE_ERROR = 23;
	case CURL_MALFORMAT_USER = 24;
	case CURL_UPLOAD_FAIL = 25;
	case CURL_READ_ERROR = 26;
	case CURL_OUT_OF_MEMORY = 27;
	case CURL_OPERATION_TIMEOUT = 28;
	case CURL_FTP_COULD_NOT_SET_ASCII = 29;
	case CURL_FTP_PORT_FAIL = 30;
	case CURL_FTP_COULD_NOT_USE_RES = 31;
	case CURL_FTP_COULD_NOT_GET_SIZE = 32;
	case CURL_RANGE_ERROR = 33;
	case CURL_HTTP_POST_ERROR = 34;
	case CURL_SSL_CONNECT_ERROR = 35;
	case CURL_BAD_DOWNLOAD_RESUME = 36;
	case CURL_FILE_COULD_NOT_READ_FIL = 37;
	case CURL_LDAP_CANNOT_BIN = 38;
	case CURL_LDAP_SEARCH_FAIL = 39;
	case CURL_LIBRARY_NOT_FOUND = 40;
	case CURL_FUNCTION_NOT_FOUND = 41;
	case CURL_ABORTED_BY_CALLBACK = 42;
	case CURL_BAD_FUNCTION_ARGUMENT = 43;
	case CURL_BAD_CALLING_ORDER = 44;
	case CURL_INTERFACE_FAIL = 45;
	case CURL_BAD_PASSWORD_ENTERED = 46;
	case CURL_TOO_MANY_REDIRECT = 47;
	case CURL_UNKNOWN_TELNET_OPTION = 48;
	case CURL_TELNET_OPTION_SYNTAX = 49;
	case CURL_OBSOLETE = 50;
	case CURL_PEER_FAILED_VERIFICATION = 51;
	case CURL_GOT_NOTHING = 52;
	case CURL_SSL_ENGINE_NOTFOUND = 53;
	case CURL_SSL_ENGINE_SET_FAIL = 54;
	case CURL_SEND_ERROR = 55;
	case CURL_RECEIVE_ERROR = 56;
	case CURL_SHARE_IN_USE = 57;
	case CURL_SSL_CERTPROBLEM = 58;
	case CURL_SSL_CIPHER = 59;
	case CURL_SSL_CACERT = 60;
	case CURL_BAD_CONTENT_ENCODING = 61;
	case CURL_LDAP_INVALID_UR = 62;
	case CURL_FILESIZE_EXCEED = 63;
	case CURL_USE_SSL_FAIL = 64;
	case CURL_SEND_FAIL_REWIND = 65;
	case CURL_SSL_ENGINE_INIT_FAIL = 66;
	case CURL_LOGIN_DENIED = 67;
	case CURL_TFTP_NOTFOUND = 68;
	case CURL_TFTP_PER = 69;
	case CURL_REMOTE_DISK_FUL = 70;
	case CURL_TFTP_ILLEGAL = 71;
	case CURL_TFTP_UNKNOWN = 72;
	case CURL_REMOTE_FILE_EXIST = 73;
	case CURL_TFTP_NO_SUCH_USE = 74;
	case CURL_CONV_FAIL = 75;
	case CURL_CONV_REQ = 76;
	case CURL_SSL_CACERT_BAD_FILE = 77;
	case CURL_REMOTE_FILE_NOT_FOUND = 78;
	case CURL_SSH = 79;
	case CURL_SSL_SHUTDOWN_FAIL = 80;
	case CURL_AGAIN = 81;
	case CURL_SSL_CRL_BAD_FILE = 82;
	case CURL_SSL_ISSUER_ERROR = 83;
	case CURL_FTP_PRET_FAIL = 84;
	case CURL_RTSP_CSEQ_ERROR = 85;
	case CURL_RTSP_SESSION_ERROR = 86;
	case CURL_FTP_BAD_FILE_LIS = 87;
	case CURL_CHUNK_FAIL = 88;

	public static function getError(int $number): self {
		foreach (self::cases() as $case) {
			if ($case->value == $number) {
				return $case;
			}
		}
		return CurlErrorEnum::CURL_UNKNOWN_ERROR;
	}
}
