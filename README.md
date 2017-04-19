# Europa Commission theme

This package includes ec_resp theme bundled with versions 2.2 & 2.3 of the nexteuropa platform .


## Requirements

The ec_resp theme requires the following libraries in order to work properly.

* Bootstrap
* Bootstrap-LESS
* html5shiv
* mousewheel
* respond

You can add the libraries to your project by adding the following lines 
into your project's make file:

```php
; ===========================
; Libraries for Ec_resp Theme
; ===========================

; Ec_resp theme: Bootstrap 3.3.5
libraries[ec_resp_bootstrap][download][type] = get
libraries[ec_resp_bootstrap][download][url] = https://github.com/twbs/bootstrap/releases/download/v3.3.5/bootstrap-3.3.5-dist.zip
libraries[ec_resp_bootstrap][download][file_type] = "zip"
libraries[ec_resp_bootstrap][destination] =  "themes/ec_resp"
libraries[ec_resp_bootstrap][directory_name] = bootstrap

; Ec_resp theme: Bootstrap less
libraries[ec_resp_bootstrap_less][download][type] = "get"
libraries[ec_resp_bootstrap_less][download][url] = "https://github.com/twbs/bootstrap/archive/v3.3.5.zip"
libraries[ec_resp_bootstrap_less][download][subtree] = "bootstrap-3.3.5/less"
libraries[ec_resp_bootstrap_less][destination] =  "themes/ec_resp/bootstrap"
libraries[ec_resp_bootstrap_less][directory_name] = less

; Ec_resp theme: Html5
libraries[html5shiv][destination] = "themes/ec_resp"
libraries[html5shiv][directory_name] = "scripts"
libraries[html5shiv][download][type] = "get"
libraries[html5shiv][download][url] = "https://raw.githubusercontent.com/aFarkas/html5shiv/master/dist/html5shiv.min.js"

; Ec_resp theme: jQuery Mousewheel
libraries[mousewheel][destination] = "themes/ec_resp"
libraries[mousewheel][directory_name] = "scripts"
libraries[mousewheel][download][type] = "get"
libraries[mousewheel][download][url] = "https://raw.githubusercontent.com/jquery/jquery-mousewheel/master/jquery.mousewheel.min.js"

; Ec_resp theme: Respond JS
libraries[respond][destination] = "themes/ec_resp"
libraries[respond][directory_name] = "scripts"
libraries[respond][download][type] = "get"
libraries[respond][download][url] = "https://raw.githubusercontent.com/scottjehl/Respond/master/dest/respond.min.js"
```

If you would rather add the libraries manually you can do so simply by copying them
into the folders specified on the "destination" property.