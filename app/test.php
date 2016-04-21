<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 4/21/16
 * Time: 4:14 PM
 */

function getRequestCode($body)
{
    $domDoc = new DOMDocument('1.0');
    $obj = simplexml_load_string($body);
    $domDoc->loadXML($body);
//    $el = $domDoc->getElementsByTagNameNS('http://schemas.xmlsoap.org/soap/envelope/', '*');
    $el = $domDoc->getElementsByTagNameNS('urn:tnwebservice', '*');
    foreach ($el as $item) {
//        var_dump($item);
        if (strpos($item->nodeName, 'request_code') !== false) {
            var_dump($item->nodeValue);
        }
    }
    
}

getRequestCode(
    '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Header><ns1:serviceAuth xmlns:ns1="urn:tnwebservice">
     <ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header>
     <soap:Body><ns1:submitOrderObject xmlns:ns1="urn:tnwebservice"><ns1:order_number>500000213</ns1:order_number>
     <ns1:order_date>15.02.2016</ns1:order_date><ns1:last_name>Корякина</ns1:last_name><ns1:first_name>Екатерина</ns1:first_name>
     <ns1:phone>+7 (954) 565-87-97</ns1:phone><ns1:dispatch_date>17.02.2016</ns1:dispatch_date><ns1:transport>16</ns1:transport>
     <ns1:addresses><ns1:item><ns1:latitude>54.183961</ns1:latitude><ns1:longitude>37.606963</ns1:longitude><ns1:address>
    Россия,
    
    Тула, Тульская Область,
    улица: ленина,
    дом: 50,
    квартира: .
    </ns1:address><ns1:delivery_date>17.02.2016</ns1:delivery_date><ns1:loading_method>2</ns1:loading_method>
    <ns1:items><ns1:item><ns1:warehouse>00011</ns1:warehouse><ns1:product>TN356983</ns1:product><ns1:qty>46.0000</ns1:qty>
    <ns1:measure_unit>CB069127</ns1:measure_unit><ns1:price>3120.0000</ns1:price><ns1:total>143520.0000</ns1:total></ns1:item></ns1:items>
    </ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty>
    <ns1:price>14000</ns1:price><ns1:total>14000</ns1:total></ns1:item><ns1:item><ns1:service>TN525163</ns1:service>
    <ns1:qty>1</ns1:qty><ns1:price>1000</ns1:price><ns1:total>1000</ns1:total></ns1:item></ns1:services>
    <ns1:request_code>383</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>'
);




$x = '<soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Header><ns1:serviceAuth xmlns:ns1="urn:tnwebservice"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderObject xmlns:ns1="urn:tnwebservice"><ns1:order_number>500000220</ns1:order_number><ns1:order_date>15.02.2016</ns1:order_date><ns1:contraparty>42120841</ns1:contraparty><ns1:last_name>К</ns1:last_name><ns1:first_name>Е</ns1:first_name><ns1:phone>+7 (789) 456-12-35</ns1:phone><ns1:dispatch_date>19.02.2016</ns1:dispatch_date><ns1:transport>17</ns1:transport><ns1:addresses><ns1:item><ns1:latitude>54.622263</ns1:latitude><ns1:longitude>39.755123</ns1:longitude><ns1:address>
Россия,

Рязань, Рязанская Область,
улица: ленина,
дом: 3,
квартира: 5.
</ns1:address><ns1:delivery_date>19.02.2016</ns1:delivery_date><ns1:loading_method>2</ns1:loading_method><ns1:items><ns1:item><ns1:warehouse>00011</ns1:warehouse><ns1:product>TN356983</ns1:product><ns1:qty>20.0000</ns1:qty><ns1:measure_unit>CB069127</ns1:measure_unit><ns1:price>3120.0000</ns1:price><ns1:total>62400.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00007</ns1:warehouse><ns1:product>TN365338</ns1:product><ns1:qty>4.0000</ns1:qty><ns1:measure_unit>CB341497</ns1:measure_unit><ns1:price>1428.0000</ns1:price><ns1:total>5712.0000</ns1:total></ns1:item></ns1:items></ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty><ns1:price>4000</ns1:price><ns1:total>4000</ns1:total></ns1:item><ns1:item><ns1:service>TN525163</ns1:service><ns1:qty>1</ns1:qty><ns1:price>1000</ns1:price><ns1:total>1000</ns1:total></ns1:item></ns1:services><ns1:request_code>390</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>

[2016-04-21 15:31:45] local.INFO: <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Header><ns1:serviceAuth xmlns:ns1="urn:tnwebservice"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderObject xmlns:ns1="urn:tnwebservice"><ns1:order_number>500000220</ns1:order_number><ns1:order_date>15.02.2016</ns1:order_date><ns1:contraparty>42120841</ns1:contraparty><ns1:last_name>К</ns1:last_name><ns1:first_name>Е</ns1:first_name><ns1:phone>+7 (789) 456-12-35</ns1:phone><ns1:dispatch_date>19.02.2016</ns1:dispatch_date><ns1:transport>17</ns1:transport><ns1:addresses><ns1:item><ns1:latitude>54.622263</ns1:latitude><ns1:longitude>39.755123</ns1:longitude><ns1:address>
Россия,

Рязань, Рязанская Область,
улица: ленина,
дом: 3,
квартира: 5.
</ns1:address><ns1:delivery_date>19.02.2016</ns1:delivery_date><ns1:loading_method>2</ns1:loading_method><ns1:items><ns1:item><ns1:warehouse>00011</ns1:warehouse><ns1:product>TN356983</ns1:product><ns1:qty>20.0000</ns1:qty><ns1:measure_unit>CB069127</ns1:measure_unit><ns1:price>3120.0000</ns1:price><ns1:total>62400.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00007</ns1:warehouse><ns1:product>TN365338</ns1:product><ns1:qty>4.0000</ns1:qty><ns1:measure_unit>CB341497</ns1:measure_unit><ns1:price>1428.0000</ns1:price><ns1:total>5712.0000</ns1:total></ns1:item></ns1:items></ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty><ns1:price>4000</ns1:price><ns1:total>4000</ns1:total></ns1:item><ns1:item><ns1:service>TN525163</ns1:service><ns1:qty>1</ns1:qty><ns1:price>1000</ns1:price><ns1:total>1000</ns1:total></ns1:item></ns1:services><ns1:request_code>390</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>  
[2016-04-21 15:37:47] local.INFO: <?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://wsdl-client.loc/soap" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"><SOAP-ENV:Header><serviceAuth>User was authorized.</serviceAuth></SOAP-ENV:Header><SOAP-ENV:Body><ns1:submitOrderObjectResponse><return xsi:type="SOAP-ENC:Struct"><request_code xsi:type="xsd:string"></request_code></return></ns1:submitOrderObjectResponse></SOAP-ENV:Body></SOAP-ENV:Envelope>
  
[2016-04-21 15:38:05] local.INFO: <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Header><ns1:serviceAuth xmlns:ns1="urn:tnwebservice"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderObject xmlns:ns1="urn:tnwebservice"><ns1:order_number>500000220</ns1:order_number><ns1:order_date>15.02.2016</ns1:order_date><ns1:contraparty>42120841</ns1:contraparty><ns1:last_name>К</ns1:last_name><ns1:first_name>Е</ns1:first_name><ns1:phone>+7 (789) 456-12-35</ns1:phone><ns1:dispatch_date>19.02.2016</ns1:dispatch_date><ns1:transport>17</ns1:transport><ns1:addresses><ns1:item><ns1:latitude>54.622263</ns1:latitude><ns1:longitude>39.755123</ns1:longitude><ns1:address>
Россия,

Рязань, Рязанская Область,
улица: ленина,
дом: 3,
квартира: 5.
</ns1:address><ns1:delivery_date>19.02.2016</ns1:delivery_date><ns1:loading_method>2</ns1:loading_method><ns1:items><ns1:item><ns1:warehouse>00011</ns1:warehouse><ns1:product>TN356983</ns1:product><ns1:qty>20.0000</ns1:qty><ns1:measure_unit>CB069127</ns1:measure_unit><ns1:price>3120.0000</ns1:price><ns1:total>62400.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00007</ns1:warehouse><ns1:product>TN365338</ns1:product><ns1:qty>4.0000</ns1:qty><ns1:measure_unit>CB341497</ns1:measure_unit><ns1:price>1428.0000</ns1:price><ns1:total>5712.0000</ns1:total></ns1:item></ns1:items></ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty><ns1:price>4000</ns1:price><ns1:total>4000</ns1:total></ns1:item><ns1:item><ns1:service>TN525163</ns1:service><ns1:qty>1</ns1:qty><ns1:price>1000</ns1:price><ns1:total>1000</ns1:total></ns1:item></ns1:services><ns1:request_code>390</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>  
[2016-04-21 15:39:26] local.INFO: <?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://wsdl-client.loc/soap" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"><SOAP-ENV:Header><serviceAuth>User was authorized.</serviceAuth></SOAP-ENV:Header><SOAP-ENV:Body><ns1:submitOrderObjectResponse><return xsi:type="SOAP-ENC:Struct"><request_code xsi:type="xsd:string"></request_code></return></ns1:submitOrderObjectResponse></SOAP-ENV:Body></SOAP-ENV:Envelope>
  
[2016-04-21 15:42:21] local.INFO: <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Header><ns1:serviceAuth xmlns:ns1="urn:tnwebservice"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderObject xmlns:ns1="urn:tnwebservice"><ns1:order_number>500000206</ns1:order_number><ns1:order_date>14.02.2016</ns1:order_date><ns1:last_name>Гринько</ns1:last_name><ns1:first_name>Дмитрий</ns1:first_name><ns1:phone>+7 (322) 323-23-22</ns1:phone><ns1:dispatch_date>29.02.2016</ns1:dispatch_date><ns1:transport>22</ns1:transport><ns1:addresses><ns1:item><ns1:latitude>55.600201</ns1:latitude><ns1:longitude>37.165765</ns1:longitude><ns1:address>
Россия,

Москва, Город Москва,
улица: Ленина,
дом: 1,
квартира: 23.
</ns1:address><ns1:delivery_date>29.02.2016</ns1:delivery_date><ns1:loading_method>2</ns1:loading_method><ns1:items><ns1:item><ns1:warehouse>00003</ns1:warehouse><ns1:product>TN362079</ns1:product><ns1:qty>111.0000</ns1:qty><ns1:measure_unit>CB081864</ns1:measure_unit><ns1:price>7200.0000</ns1:price><ns1:total>799200.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00268</ns1:warehouse><ns1:product>TN352707</ns1:product><ns1:qty>11.0000</ns1:qty><ns1:measure_unit>CB025817</ns1:measure_unit><ns1:price>2265.0000</ns1:price><ns1:total>24915.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00226</ns1:warehouse><ns1:product>TN387899</ns1:product><ns1:qty>2.0000</ns1:qty><ns1:measure_unit>CB175052</ns1:measure_unit><ns1:price>3310.0000</ns1:price><ns1:total>6620.0000</ns1:total></ns1:item></ns1:items></ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty><ns1:price>13000</ns1:price><ns1:total>13000</ns1:total></ns1:item><ns1:item><ns1:service>TN525163</ns1:service><ns1:qty>1</ns1:qty><ns1:price>1000</ns1:price><ns1:total>1000</ns1:total></ns1:item></ns1:services><ns1:request_code>391</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>  
[2016-04-21 15:46:13] local.INFO: <?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://wsdl-client.loc/soap" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"><SOAP-ENV:Header><serviceAuth>User was authorized.</serviceAuth></SOAP-ENV:Header><SOAP-ENV:Body><ns1:submitOrderObjectResponse><return xsi:type="SOAP-ENC:Struct"><request_code xsi:type="xsd:string">391</request_code></return></ns1:submitOrderObjectResponse></SOAP-ENV:Body></SOAP-ENV:Envelope>
  
[2016-04-21 15:46:29] local.INFO: <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Header><ns1:serviceAuth xmlns:ns1="urn:tnwebservice"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:submitOrderObject xmlns:ns1="urn:tnwebservice"><ns1:order_number>500000206</ns1:order_number><ns1:order_date>14.02.2016</ns1:order_date><ns1:last_name>Гринько</ns1:last_name><ns1:first_name>Дмитрий</ns1:first_name><ns1:phone>+7 (322) 323-23-22</ns1:phone><ns1:dispatch_date>29.02.2016</ns1:dispatch_date><ns1:transport>22</ns1:transport><ns1:addresses><ns1:item><ns1:latitude>55.600201</ns1:latitude><ns1:longitude>37.165765</ns1:longitude><ns1:address>
Россия,

Москва, Город Москва,
улица: Ленина,
дом: 1,
квартира: 23.
</ns1:address><ns1:delivery_date>29.02.2016</ns1:delivery_date><ns1:loading_method>2</ns1:loading_method><ns1:items><ns1:item><ns1:warehouse>00003</ns1:warehouse><ns1:product>TN362079</ns1:product><ns1:qty>111.0000</ns1:qty><ns1:measure_unit>CB081864</ns1:measure_unit><ns1:price>7200.0000</ns1:price><ns1:total>799200.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00268</ns1:warehouse><ns1:product>TN352707</ns1:product><ns1:qty>11.0000</ns1:qty><ns1:measure_unit>CB025817</ns1:measure_unit><ns1:price>2265.0000</ns1:price><ns1:total>24915.0000</ns1:total></ns1:item><ns1:item><ns1:warehouse>00226</ns1:warehouse><ns1:product>TN387899</ns1:product><ns1:qty>2.0000</ns1:qty><ns1:measure_unit>CB175052</ns1:measure_unit><ns1:price>3310.0000</ns1:price><ns1:total>6620.0000</ns1:total></ns1:item></ns1:items></ns1:item></ns1:addresses><ns1:services><ns1:item><ns1:service>TN525168</ns1:service><ns1:qty>1</ns1:qty><ns1:price>13000</ns1:price><ns1:total>13000</ns1:total></ns1:item><ns1:item><ns1:service>TN525163</ns1:service><ns1:qty>1</ns1:qty><ns1:price>1000</ns1:price><ns1:total>1000</ns1:total></ns1:item></ns1:services><ns1:request_code>391</ns1:request_code></ns1:submitOrderObject></soap:Body></soap:Envelope>  
[2016-04-21 15:46:30] local.INFO: <?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://wsdl-client.loc/soap" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"><SOAP-ENV:Header><serviceAuth>User was authorized.</serviceAuth></SOAP-ENV:Header><SOAP-ENV:Body><ns1:submitOrderObjectResponse><return xsi:type="SOAP-ENC:Struct"><request_code xsi:type="xsd:string">391</request_code></return></ns1:submitOrderObjectResponse></SOAP-ENV:Body></SOAP-ENV:Envelope>
  
[2016-04-21 15:49:25] local.INFO: <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Header><ns1:serviceAuth xmlns:ns1="urn:tnwebservice"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:getRequestStatusObject xmlns:ns1="urn:tnwebservice"><ns1:request_code>391</ns1:request_code></ns1:getRequestStatusObject></soap:Body></soap:Envelope>  
[2016-04-21 15:50:29] local.INFO: <?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://wsdl-client.loc/soap" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"><SOAP-ENV:Header><serviceAuth>User was authorized.</serviceAuth></SOAP-ENV:Header><SOAP-ENV:Body><ns1:getRequestStatusObjectResponse><return xsi:type="SOAP-ENC:Struct"><request_code xsi:type="xsd:string">391</request_code></return></ns1:getRequestStatusObjectResponse></SOAP-ENV:Body></SOAP-ENV:Envelope>
  
[2016-04-21 15:50:55] local.INFO: <soap:Envelope xmlns:soap="http://schemas.xmlsoap.org/soap/envelope/"><soap:Header><ns1:serviceAuth xmlns:ns1="urn:tnwebservice"><ns1:key>123123 # On production server use Jasypt encrypted value with ENC(...)</ns1:key></ns1:serviceAuth></soap:Header><soap:Body><ns1:getRequestStatusObject xmlns:ns1="urn:tnwebservice"><ns1:request_code>391</ns1:request_code></ns1:getRequestStatusObject></soap:Body></soap:Envelope>  
[2016-04-21 15:50:57] local.INFO: <?xml version="1.0" encoding="UTF-8"?>
<SOAP-ENV:Envelope xmlns:SOAP-ENV="http://schemas.xmlsoap.org/soap/envelope/" xmlns:ns1="http://wsdl-client.loc/soap" xmlns:xsd="http://www.w3.org/2001/XMLSchema" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xmlns:SOAP-ENC="http://schemas.xmlsoap.org/soap/encoding/" SOAP-ENV:encodingStyle="http://schemas.xmlsoap.org/soap/encoding/"><SOAP-ENV:Header><serviceAuth>User was authorized.</serviceAuth></SOAP-ENV:Header><SOAP-ENV:Body><ns1:getRequestStatusObjectResponse><return xsi:type="SOAP-ENC:Struct"><request_code xsi:type="xsd:string">391</request_code></return></ns1:getRequestStatusObjectResponse></SOAP-ENV:Body></SOAP-ENV:Envelope>
  



';