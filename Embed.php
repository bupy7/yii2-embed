<?php

namespace bupy7\embed;

use yii\base\Widget;
use Embed\Embed as EmbedLibrary;

/**
 * Wrapper for PHP library https://github.com/oscarotero/Embed to get information from any web page.
 * 
 * @author Vasilij Belosludcev http://mihaly4.ru
 * @since 1.0.0
 */
class Embed extends Widget
{
    
    /**
     * @var string URL to page for get informations.
     */
    public $url;
    
    /**
     * @var string Alias to view for display information about page.
     * @example @app/path/to/view
     */
    public $pathToView = 'info';
    
    public function run()
    {
        $info = EmbedLibrary::create($this->url);
        return $this->render($this->pathToView, [
            'info' => $info,
        ]);
    }
    
}
