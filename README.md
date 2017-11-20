# TokenBindingSample
This is a **Php  sample** application for WSO2 Identity server.

This applicaiton is less GUI friendly in navigation (have to type URL address to go to pages) 
but much friendlier in sending the request


How to run:
1. Host this application in lampp or nginx (any php webserver) 
2. Type the address to go to the relevant pages and send the request
3. Get the response in callback URL


Addresses For:
1. authorization code - /
2. authorization token request - /authorizationcode.php
3. password grandtype - /password.php
4. refresh token - /refreshtoken.php
5. introspection point - /introspect.php
6. Callback URL - /callback.php
