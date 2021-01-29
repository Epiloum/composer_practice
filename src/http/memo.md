# title
guzzle http

# url
https://packagist.org/packages/guzzlehttp/guzzle

# troubleshootings
cURL error 60: SSL certificate: unable to get local issuer certificate

원인 : SSL 인증서 문제

해결 : 
1. 아래 URL에서 cacert.pem 파일 다운로드
https://curl.haxx.se/docs/caextract.html

2. 다운로드 받은 파일을 [PHP Path]/extras/ssl/ 아래에 이동

3. php.ini에서 다음 줄 수정
curl.cainfo = "[PHP Path]\cacert.pem"