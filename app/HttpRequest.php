<?php
/**
 * Created by PhpStorm.
 * User: pavel
 * Date: 07.04.16
 * Time: 20:27
 */

namespace App;


class HttpRequest  {
    const METH_GET = 1;
    const METH_HEAD = 2;
    const METH_POST = 3;
    const METH_PUT = 4;
    const METH_DELETE = 5;
    const METH_OPTIONS = 6;
    const METH_TRACE = 7;
    const METH_CONNECT = 8;
    const METH_PROPFIND = 9;
    const METH_PROPPATCH = 10;
    const METH_MKCOL = 11;
    const METH_COPY = 12;
    const METH_MOVE = 13;
    const METH_LOCK = 14;
    const METH_UNLOCK = 15;
    const METH_VERSION_CONTROL = 16;
    const METH_REPORT = 17;
    const METH_CHECKOUT = 18;
    const METH_CHECKIN = 19;
    const METH_UNCHECKOUT = 20;
    const METH_MKWORKSPACE = 21;
    const METH_UPDATE = 22;
    const METH_LABEL = 23;
    const METH_MERGE = 24;
    const METH_BASELINE_CONTROL = 25;
    const METH_MKACTIVITY = 26;
    const METH_ACL = 27;
    const VERSION_1_0 = 1;
    const VERSION_1_1 = 2;
    const VERSION_NONE = 0;
    const VERSION_ANY = 0;
    const SSL_VERSION_TLSv1 = 1;
    const SSL_VERSION_SSLv2 = 2;
    const SSL_VERSION_SSLv3 = 3;
    const SSL_VERSION_ANY = 0;
    const IPRESOLVE_V4 = 1;
    const IPRESOLVE_V6 = 2;
    const IPRESOLVE_ANY = 0;
    const AUTH_BASIC = 1;
    const AUTH_DIGEST = 2;
    const AUTH_NTLM = 8;
    const AUTH_GSSNEG = 4;
    const AUTH_ANY = -1;
    const PROXY_SOCKS4 = 4;
    const PROXY_SOCKS5 = 5;
    const PROXY_HTTP = 0;

    private $options;
    private $postFields;
    private $postFiles;
    private $responseInfo;
    private $responseMessage;
    private $responseCode;
    private $responseStatus;
    private $method;
    private $url;
    private $contentType;
    private $requestBody;
    private $queryData;
    private $putFile;
    private $putData;
    private $history;
    public $recordHistory;


    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * HttpRequest constructor
     * @link http://php.net/manual/en/function.httprequest-construct.php
     * @param string $url [optional] <p>
     * the target request url
     * </p>
     * @param int $request_method [optional] <p>
     * the request method to use
     * </p>
     * @param array $options [optional] <p>
     * an associative array with request options
     * </p>
     * @return void
     */
    public function __construct ($url = null, $request_method = null, array $options = null ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set options
     * @link http://php.net/manual/en/function.httprequest-setoptions.php
     * @param array $options [optional] <p>
     * an associative array, which values will overwrite the
     * currently set request options;
     * if empty or omitted, the options of the HttpRequest object will be reset
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setOptions (array $options = null ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get options
     * @link http://php.net/manual/en/function.httprequest-getoptions.php
     * @return array an associative array containing currently set options.
     */
    public function getOptions () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set ssl options
     * @link http://php.net/manual/en/function.httprequest-setssloptions.php
     * @param array $options [optional] <p>
     * an associative array containing any SSL specific options;
     * if empty or omitted, the SSL options will be reset
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setSslOptions (array $options = null ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get ssl options
     * @link http://php.net/manual/en/function.httprequest-getssloptions.php
     * @return array an associative array containing any previously set SSL options.
     */
    public function getSslOptions () {}

    /**
     * (PECL pecl_http &gt;= 0.12.0)<br/>
     * Add ssl options
     * @link http://php.net/manual/en/function.httprequest-addssloptions.php
     * @param array $options <p>
     * an associative array as parameter containing additional SSL specific options
     * </p>
     * @return bool true on success or false on failure.
     */
    public function addSslOptions ($optionsarray ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Add headers
     * @link http://php.net/manual/en/function.httprequest-addheaders.php
     * @param array $headers <p>
     * an associative array as parameter containing additional header name/value pairs
     * </p>
     * @return bool true on success or false on failure.
     */
    public function addHeaders ($headersarray ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get headers
     * @link http://php.net/manual/en/function.httprequest-getheaders.php
     * @return array an associative array containing all currently set headers.
     */
    public function getHeaders () {}

    /**
     * (PECL pecl_http &gt;= 0.12.0)<br/>
     * Set headers
     * @link http://php.net/manual/en/function.httprequest-setheaders.php
     * @param array $headers [optional] <p>
     * an associative array as parameter containing header name/value pairs;
     * if empty or omitted, all previously set headers will be unset
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setHeaders ( array $headers = null ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Add cookies
     * @link http://php.net/manual/en/function.httprequest-addcookies.php
     * @param array $cookies <p>
     * an associative array containing any cookie name/value pairs to add
     * </p>
     * @return bool true on success or false on failure.
     */
    public function addCookies ($cookiesarray ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get cookies
     * @link http://php.net/manual/en/function.httprequest-getcookies.php
     * @return array an associative array containing any previously set cookies.
     */
    public function getCookies () {}

    /**
     * (PECL pecl_http &gt;= 0.12.0)<br/>
     * Set cookies
     * @link http://php.net/manual/en/function.httprequest-setcookies.php
     * @param array $cookies [optional] <p>
     * an associative array as parameter containing cookie name/value pairs;
     * if empty or omitted, all previously set cookies will be unset
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setCookies ( array $cookies = null ) {}

    /**
     * (PECL pecl_http &gt;= 1.0.0)<br/>
     * Enable cookies
     * @link http://php.net/manual/en/function.httprequest-enablecookies.php
     * @return bool true on success or false on failure.
     */
    public function enableCookies () {}

    /**
     * (PECL pecl_http &gt;= 1.0.0)<br/>
     * Reset cookies
     * @link http://php.net/manual/en/function.httprequest-resetcookies.php
     * @param bool $session_only [optional] <p>
     * whether only session cookies should be reset (needs libcurl >= v7.15.4, else libcurl >= v7.14.1)
     * </p>
     * @return bool true on success or false on failure.
     */
    public function resetCookies ($session_only = null) {}

    public function flushCookies () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set method
     * @link http://php.net/manual/en/function.httprequest-setmethod.php
     * @param int $request_method <p>
     * the request method to use
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setMethod ($request_method) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get method
     * @link http://php.net/manual/en/function.httprequest-getmethod.php
     * @return int the currently set request method.
     */
    public function getMethod () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set URL
     * @link http://php.net/manual/en/function.httprequest-seturl.php
     * @param string $url <p>
     * the request url
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setUrl ($url) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get url
     * @link http://php.net/manual/en/function.httprequest-geturl.php
     * @return string the currently set request url as string.
     */
    public function getUrl () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set content type
     * @link http://php.net/manual/en/function.httprequest-setcontenttype.php
     * @param string $content_type <p>
     * the content type of the request (primary/secondary)
     * </p>
     * @return bool TRUE on success, or FALSE if the content type does not seem to
     * contain a primary and a secondary part.
     */
    public function setContentType ($content_type) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get content type
     * @link http://php.net/manual/en/function.httprequest-getcontenttype.php
     * @return string the previously set content type as string.
     */
    public function getContentType () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set query data
     * @link http://php.net/manual/en/function.httprequest-setquerydata.php
     * @param mixed $query_data <p>
     * a string or associative array parameter containing the pre-encoded
     * query string or to be encoded query fields;
     * if empty, the query data will be unset
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setQueryData ($query_data) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get query data
     * @link http://php.net/manual/en/function.httprequest-getquerydata.php
     * @return string a string containing the urlencoded query.
     */
    public function getQueryData () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Add query data
     * @link http://php.net/manual/en/function.httprequest-addquerydata.php
     * @param array $query_params <p>
     * an associative array as parameter containing the query fields to add
     * </p>
     * @return bool true on success or false on failure.
     */
    public function addQueryData ($query_paramsarray ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set post fields
     * @link http://php.net/manual/en/function.httprequest-setpostfields.php
     * @param array $post_data <p>
     * an associative array containing the post fields;
     * if empty, the post data will be unset
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setPostFields ($post_dataarray ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get post fields
     * @link http://php.net/manual/en/function.httprequest-getpostfields.php
     * @return array the currently set post fields as associative array.
     */
    public function getPostFields () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Add post fields
     * @link http://php.net/manual/en/function.httprequest-addpostfields.php
     * @param array $post_data <p>
     * an associative array as parameter containing the post fields
     * </p>
     * @return bool true on success or false on failure.
     */
    public function addPostFields ($post_dataarray ) {}

    /**
     * @param $request_body_data [optional]
     */
    public function setBody ($request_body_data) {}

    public function getBody () {}

    /**
     * @param $request_body_data
     */
    public function addBody ($request_body_data) {}

    /**
     * (PECL pecl_http 0.14.0-1.4.1)<br/>
     * Set raw post data
     * @link http://php.net/manual/en/function.httprequest-setrawpostdata.php
     * @param string $raw_post_data [optional] <p>
     * raw post data
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setRawPostData ($raw_post_data = null) {}

    /**
     * (PECL pecl_http 0.14.0-1.4.1)<br/>
     * Get raw post data
     * @link http://php.net/manual/en/function.httprequest-getrawpostdata.php
     * @return string a string containing the currently set raw post data.
     */
    public function getRawPostData () {}

    /**
     * (PECL pecl_http 0.14.0-1.4.1)<br/>
     * Add raw post data
     * @link http://php.net/manual/en/function.httprequest-addrawpostdata.php
     * @param string $raw_post_data <p>
     * the raw post data to concatenate
     * </p>
     * @return bool true on success or false on failure.
     */
    public function addRawPostData ($raw_post_data) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set post files
     * @link http://php.net/manual/en/function.httprequest-setpostfiles.php
     * @param array $post_files <p>
     * an array containing the files to post;
     * if empty, the post files will be unset
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setPostFiles ($post_filesarray ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Add post file
     * @link http://php.net/manual/en/function.httprequest-addpostfile.php
     * @param string $name <p>
     * the form element name
     * </p>
     * @param string $file <p>
     * the path to the file
     * </p>
     * @param string $content_type [optional] <p>
     * the content type of the file
     * </p>
     * @return bool TRUE on success, or FALSE if the content type seems not to contain a
     * primary and a secondary content type part.
     */
    public function addPostFile ($name, $file, $content_type = null) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get post files
     * @link http://php.net/manual/en/function.httprequest-getpostfiles.php
     * @return array an array containing currently set post files.
     */
    public function getPostFiles () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Set put file
     * @link http://php.net/manual/en/function.httprequest-setputfile.php
     * @param string $file [optional] <p>
     * the path to the file to send;
     * if empty or omitted the put file will be unset
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setPutFile ($file = null) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get put file
     * @link http://php.net/manual/en/function.httprequest-getputfile.php
     * @return string a string containing the path to the currently set put file.
     */
    public function getPutFile () {}

    /**
     * (PECL pecl_http &gt;= 0.25.0)<br/>
     * Set put data
     * @link http://php.net/manual/en/function.httprequest-setputdata.php
     * @param string $put_data [optional] <p>
     * the data to upload
     * </p>
     * @return bool true on success or false on failure.
     */
    public function setPutData ($put_data = null) {}

    /**
     * (PECL pecl_http &gt;= 0.25.0)<br/>
     * Get put data
     * @link http://php.net/manual/en/function.httprequest-getputdata.php
     * @return string a string containing the currently set PUT data.
     */
    public function getPutData () {}

    /**
     * (PECL pecl_http &gt;= 0.25.0)<br/>
     * Add put data
     * @link http://php.net/manual/en/function.httprequest-addputdata.php
     * @param string $put_data <p>
     * the data to concatenate
     * </p>
     * @return bool true on success or false on failure.
     */
    public function addPutData ($put_data) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Send request
     * @link http://php.net/manual/en/function.httprequest-send.php
     * @return HttpMessage the received response as HttpMessage object.
     */
    public function send () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get response data
     * @link http://php.net/manual/en/function.httprequest-getresponsedata.php
     * @return array an associative array with the key "headers" containing an associative
     * array holding all response headers, as well as the key "body" containing a
     * string with the response body.
     */
    public function getResponseData () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get response header(s)
     * @link http://php.net/manual/en/function.httprequest-getresponseheader.php
     * @param string $name [optional] <p>
     * header to read; if empty, all response headers will be returned
     * </p>
     * @return mixed either a string with the value of the header matching name if requested,
     * FALSE on failure, or an associative array containing all response headers.
     */
    public function getResponseHeader ($name = null) {}

    /**
     * (PECL pecl_http &gt;= 0.23.0)<br/>
     * Get response cookie(s)
     * @link http://php.net/manual/en/function.httprequest-getresponsecookies.php
     * @param int $flags [optional] <p>
     * http_parse_cookie flags
     * </p>
     * @param array $allowed_extras [optional] <p>
     * allowed keys treated as extra information instead of cookie names
     * </p>
     * @return stdClass[] an array of stdClass objects like http_parse_cookie would return.
     */
    public function getResponseCookies ($flags = null,  array $allowed_extras = null ) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get response code
     * @link http://php.net/manual/en/function.httprequest-getresponsecode.php
     * @return int an int representing the response code.
     */
    public function getResponseCode () {}

    /**
     * (PECL pecl_http &gt;= 0.23.0)<br/>
     * Get response status
     * @link http://php.net/manual/en/function.httprequest-getresponsestatus.php
     * @return string a string containing the response status text.
     */
    public function getResponseStatus () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get response body
     * @link http://php.net/manual/en/function.httprequest-getresponsebody.php
     * @return string a string containing the response body.
     */
    public function getResponseBody () {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get response info
     * @link http://php.net/manual/en/function.httprequest-getresponseinfo.php
     * @param string $name [optional] <p>
     * the info to read; if empty or omitted, an associative array containing
     * all available info will be returned
     * </p>
     * @return mixed either a scalar containing the value of the info matching name if
     * requested, FALSE on failure, or an associative array containing all
     * available info.
     */
    public function getResponseInfo ($name = null) {}

    /**
     * (PECL pecl_http &gt;= 0.10.0)<br/>
     * Get response message
     * @link http://php.net/manual/en/function.httprequest-getresponsemessage.php
     * @return HttpMessage an HttpMessage object of the response.
     */
    public function getResponseMessage () {}

    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Get raw response message
     * @link http://php.net/manual/en/function.httprequest-getrawresponsemessage.php
     * @return string the complete web server response, including the headers in a form of a string.
     */
    public function getRawResponseMessage () {}

    /**
     * (PECL pecl_http &gt;= 0.11.0)<br/>
     * Get request message
     * @link http://php.net/manual/en/function.httprequest-getrequestmessage.php
     * @return HttpMessage an HttpMessage object representing the sent request.
     */
    public function getRequestMessage () {}

    /**
     * (PECL pecl_http &gt;= 0.21.0)<br/>
     * Get raw request message
     * @link http://php.net/manual/en/function.httprequest-getrawrequestmessage.php
     * @return string an HttpMessage in a form of a string.
     */
    public function getRawRequestMessage () {}

    /**
     * (PECL pecl_http &gt;= 0.15.0)<br/>
     * Get history
     * @link http://php.net/manual/en/function.httprequest-gethistory.php
     * @return HttpMessage an HttpMessage object representing the complete request/response history.
     */
    public function getHistory () {}

    /**
     * (PECL pecl_http &gt;= 0.15.0)<br/>
     * Clear history
     * @link http://php.net/manual/en/function.httprequest-clearhistory.php
     * @return void
     */
    public function clearHistory () {}

    /**
     * @param $url [optional]
     * @param $method [optional]
     * @param $options [optional]
     * @param $class_name [optional]
     */
    public static function factory ($url, $method, $options, $class_name) {}

    /**
     * @param $url
     * @param $options [optional]
     * @param $info [optional]
     */
    public static function get ($url, $options, &$info) {}

    /**
     * @param $url
     * @param $options [optional]
     * @param $info [optional]
     */
    public static function head ($url, $options, &$info) {}

    /**
     * @param $url
     * @param $data
     * @param $options [optional]
     * @param $info [optional]
     */
    public static function postData ($url, $data, $options, &$info) {}

    /**
     * @param $url
     * @param $data
     * @param $options [optional]
     * @param $info [optional]
     */
    public static function postFields ($url, $data, $options, &$info) {}

    /**
     * @param $url
     * @param $data
     * @param $options [optional]
     * @param $info [optional]
     */
    public static function putData ($url, $data, $options, &$info) {}

    /**
     * @param $url
     * @param $file
     * @param $options [optional]
     * @param $info [optional]
     */
    public static function putFile ($url, $file, $options, &$info) {}

    /**
     * @param $url
     * @param $stream
     * @param $options [optional]
     * @param $info [optional]
     */
    public static function putStream ($url, $stream, $options, &$info) {}

    /**
     * @param $method_name
     */
    public static function methodRegister ($method_name) {}

    /**
     * @param $method
     */
    public static function methodUnregister ($method) {}

    /**
     * @param $method_id
     */
    public static function methodName ($method_id) {}

    /**
     * @param $method
     */
    public static function methodExists ($method) {}

    /**
     * @param $fields
     * @param $files
     */
    public static function encodeBody ($fields, $files) {}

}