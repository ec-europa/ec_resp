# Europa Commission theme

This package includes ec_resp theme bundled with versions 2.2 & 2.3 of the nexteuropa platform .

## Compiling *.less files
The easiest way to compile files is to install **node.js with npm** locally. Recent version of the **node.js** includes the **npm** package manager.

With the **npm** package manager you can easily install tools which are needed for compiling *.less files.

> `npm install -g less` - installing less compiler

> `npm install -g less-plugin-clean-css` - installing additional plugin

### Compiling process:
For the **ec_resp.css**
>Go to the `../css/less` directory and perform following commands (check if the **bootstrap** framework is available in the main directory otherwise compiler will throw an error):

> `lessc ec_resp.less > ../ec_resp.css` - compiling into the regular .css file

> `lessc ec_resp.less > ../ec_resp.css --clean-css` - compiling into minified .css file

For the **eu_resp.css**
> Go to the `../css/interinstitutional_less` directory and perform following commands:

>`lessc eu_resp.less > ../eu_resp.css` - compiling into the regular .css file

>`lessc eu_resp.less > ../eu_resp.css --clean-css` - compiling into minified .css file