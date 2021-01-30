# guzzle http
## url
https://packagist.org/packages/guzzlehttp/guzzle

## troubleshootings
cURL error 60: SSL certificate: unable to get local issuer certificate

원인 : SSL 인증서 문제
해결 : 
1. 아래 URL에서 cacert.pem 파일 다운로드
https://curl.haxx.se/docs/caextract.html

2. 다운로드 받은 파일을 [PHP Path]/extras/ssl/ 아래에 이동

3. php.ini에서 다음 줄 수정
curl.cainfo = "[PHP Path]\cacert.pem"

#dom-crawler
## url
https://packagist.org/packages/symfony/dom-crawler

## troubleshootings
PHP Fatal error:  Uncaught LogicException: To filter with a CSS selector, install the CssSelector component ("comp
oser require symfony/css-selector"). Or use filterXpath instead. in Z:\Development\Git Space\composer_practice\ven
dor\symfony\dom-crawler\Crawler.php:1231

원인 : filter() 메서드 사용시 symfony/css-selector Component 미설치
해결 : composer에서 symfony/css-selector 설치

#symfony/css-selector
## usage
dom-crawler에서 CSS 선택자를 이용하기 위해 필요