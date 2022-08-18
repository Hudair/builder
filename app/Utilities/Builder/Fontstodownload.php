<?php
namespace App\Utilities\Builder;

use \App\Utilities\Builder\Fonts;
class FontsToDownload extends Fonts {

    private $fontsNames = [];
    private $zip = null;

    public function __construct($style, &$zip) {
        $this->basePath = SUPRA_BASE_PATH;
        $this->matchFonts($style);
        $this->zip = $zip;
    }

    public function matchFonts($style) {
        preg_match_all('/font-family:\s?\'?([^,;\']*)\'?[,;]/', $style, $maches);
        $this->fontsNames = array_merge($this->fontsNames, array_unique($maches[1]));
    }

    public function getIncludeFonts() {
        $this->_searchFontsFiles($this->basePath.'/fonts');

        $array = array();
        foreach($this->files as $key => $value) {
            foreach ($this->fontsNames as $name) {
                if (strpos($key, $name . "-") !== false) {
                    $array[$key] = $value;
                    $this->zip->addFile( $value['path'] . '/' . $value['fonts'][0] , 'fonts/' . $value['fonts'][0] );
                }
            }
        }

        $this->files = $array;


        $fontCSSContent = $this->getFontCSSContent();
        $font_css = $fontCSSContent['css'];
        $font_css = preg_replace('#('.$this->basePath.')?(/[\w/_()-]*/)#im', '/fonts/', $font_css);

        $this->zip->addFromString(
            'css/fonts.css'
            , $font_css
        );
    }
}
