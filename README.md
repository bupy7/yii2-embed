yii2-embed
==========
Wrapper for PHP library https://github.com/oscarotero/Embed to get information from any web page.

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist bupy7/yii2-embed "*"
```

or add

```
"bupy7/yii2-embed": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \bupy7\embed\Embed::widget([
    'url' => 'http://www.youtube.com/watch?v=XflzWihgHRc',
]); ?>
```

##License

yii2-embed is released under the BSD 3-Clause License.