<?xml version="1.0" encoding="UTF-8"?>
<XRDS xmlns="xri://$xrds">
 <XRD xmlns="xri://$xrd*($v*2.0)" xmlns:simple="http://xrds-simple.net/core/1.0" version="2.0">
  <Type>xri://$xrds*simple</Type>
  <Service>
   <URI>{{ config('app.url') }}/index.php?action=finishopenidlogin</URI>
   <Type>http://specs.openid.net/auth/2.0/return_to</Type>
  </Service>
  <Service>
   <URI>{{ config('app.url') }}/index.php?action=finishaddopenid</URI>
   <Type>http://specs.openid.net/auth/2.0/return_to</Type>
  </Service>
  <Service>
   <URI>{{ config('app.url') }}/main/openidserver</URI>
   <Type>http://specs.openid.net/auth/2.0/server</Type>
   <LocalID>http://specs.openid.net/auth/2.0/identifier_select</LocalID>
  </Service>
 </XRD>
</XRDS>