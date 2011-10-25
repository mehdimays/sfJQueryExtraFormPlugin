# sfJQueryExtraFormPlugin 
This plugin is actually in development stage. DO NOT USE IT IN PRODUCTION

## Requirements
* [Symfony](http://www.symfony-project.org/) v. 1.4+
* [jQuery](http://jquery.com/) v. 1.6+
* [jQuery UI](http://jqueryui.com/) v. 1.8+ (required: Widget, optional: Progressbar, Button)

## Installation

### The Git way

Clone the plugin from Github:

    git clone git://github.com/ClementGautier/sfJQueryExtraFormPlugin.git plugins/sfJQueryExtraFormPlugin
    cd plugins/sfJQueryExtraFormPlugin
    git submodule update --init

If you use Git as a VCS for your project, it should be better to add the plugin as a submodule:

    git submodule add git://github.com/ClementGautier/sfJQueryExtraFormPlugin.git plugins/sfJQueryExtraFormPlugin
    git submodule update --init --recursive

### The SVN way

Install the plugin via the subversion repository:

    svn checkout http://svn.github.com/ClementGautier/sfJQueryExtraFormPlugin.git plugins/sfJQueryExtraFormPlugin

Install externals:

    svn checkout http://svn.github.com/ClementGautier/jquery.html5.git plugins/sfJQueryExtraFormPlugin/lib/vendor/jquery.html5
    svn checkout http://svn.github.com/blueimp/jQuery-File-Upload.git plugins/sfJQueryExtraFormPlugin/lib/vendor/jquery.fileupload

### Final steps

Enable the plugin

``` php
// config/ProjectConfiguration.class.php
$this->enablePlugins(array('sfJQueryExtraFormPlugin'));
```

And update plugin assets:

    php symfony plugin:publish-assets

## Features
  * HTML5 attributes support (placeholder / autofocus / required / min / max / step)
  * HTML5 input types support (email / range / number / color / ...)
  * DatePicker
  * [Ajax FileUpload](https://github.com/blueimp/jQuery-File-Upload)
  * and much more comming soon

## Demo

A demo module is available, just enable it in your settings and try yourself :

``` yml
// apps/frontend/config/settings.yml
all:
  .settings:
    enabled_modules:
      - sfJQueryExtraFormDemo
```

## Browser Support (tested versions)
* Google Chrome - 7.0+
* Apple Safari - 4.0+
* Mozilla Firefox - 3.0+
* Opera - 10.0+
* Microsoft Internet Explorer 6.0+

## Documentation & Support

* No documentation yet (a good code don't need a documentation, that's it)
* Support requests and bug reports can be posted to the [Issue Tracker](https://github.com/ClementGautier/sfJQueryExtraFormPlugin/issues).
