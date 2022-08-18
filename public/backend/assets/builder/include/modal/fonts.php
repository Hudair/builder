<?php

class Fonts {

    protected $basePath = 'fonts';

    protected $files = array();

    protected $listWeight = array(
          'black'     => '900'
        , 'extrabold' => '800'
        , 'bold'      => '700'
        , 'semibold'  => '600'
        , 'medium'    => '500'
        , 'regular'   => '400'
        , 'light'     => '300'
        , 'extralight'=> '200'
        , 'thin'      => '100'
    );

    public function getFontsList() {
        $this->_searchFontsFiles($this->basePath);

        $fontCSSContent = $this->getFontCSSContent();
        $font_css = $fontCSSContent['css'];
        $font_list = $fontCSSContent['list'];


        file_put_contents('css/fonts.css', $font_css);

        return $font_list;
    }

    protected function getFontCSSContent() {
        $font_css = "";
        $font_list = array();
        foreach($this->files as $key => $value) {
            $fontArray = explode('-', $key);
            $italic = preg_match('/italic/i', $fontArray[1], $style);
            $wKey = preg_replace('/italic/i', '', $fontArray[1]);
            $font_css .= "@font-face {\n";
            $font_css .= "\tfont-family: '$fontArray[0]';\n";
            foreach ($value['fonts'] as $item) {
                preg_match('#.*\.([^.]*)$#i', $item, $ext);
                $font_css .= $this->_getFontDeclaration($ext[1], $item, $value['path']);
            }
            $weight = isset($this->listWeight[strtolower($wKey !== '' ? $wKey : 'regular')]) ?
                $this->listWeight[strtolower($wKey !== '' ? $wKey : 'regular')] : '400';
            $fontStyle = !!$italic ? 'italic' : 'normal';
            $font_css .= "\tfont-weight: $weight;\n";
            $font_css .= "\tfont-style: $fontStyle;\n";
            $font_css .= "}\n\n";

            if (!key_exists($fontArray[0], $font_list)) {
                $font_list[$fontArray[0]] = array(
                    'font_family' => $fontArray[0],
                    'font_name' => $this->_from_camel_case($fontArray[0])
                );
            }
        }

        return array(
            "css" => $font_css
            , "list" => array_values($font_list)
        );
    }

    protected function _from_camel_case($input) {
        preg_match_all('!([A-Z][A-Z0-9]*(?=$|[A-Z][a-z0-9])|[A-Za-z][a-z0-9]+)!', $input, $matches);
        $ret = $matches[0];
        foreach ($ret as &$match) {
            $match = $match == strtoupper($match) ? $match : ucfirst($match);
        }
        return implode(' ', $ret);
    }

    protected function _getFontDeclaration($ext, $file, $path) {
        switch ($ext) {
            case "svg":
                return "\tsrc: url('../$path/$file#ciclefina') format('svg');\n";
            case "woff":
                return "\tsrc: url('../$path/{$file}') format('woff');\n";
//                    "\t\turl('../$path/$file') format('woff2');\n";
                break;
            case "eot":
                return "\tsrc: url('../$path/$file');\n".
                    "\tsrc: url('../$path/$file?#iefix') format('embedded-opentype');\n";
            default:
            case "ttf":
                return "\tsrc: url('../$path/$file') format('truetype');\n";
        }
    }

    protected function _searchFontsFiles($basePath) {
        $fonts_level_1 = scandir($basePath);
        $count_level_1 = count($fonts_level_1);
        if ($count_level_1 > 2) {
            for ($i = 2; $i < $count_level_1; $i++) {
                if ($fonts_level_1[ $i ] == '.DS_Store') {
                    continue;
                }

                if ( is_dir( $basePath . '/' . $fonts_level_1[ $i ] ) ) {
                    $this->_searchFontsFiles($basePath . '/' . $fonts_level_1[ $i ]);
                }
                if ( is_file( $basePath . '/' . $fonts_level_1[ $i ] ) ) {
                    $pathInfo = pathinfo($basePath . '/' . $fonts_level_1[ $i ]);

                    if (!isset($pathInfo['extension']) || !in_array(
                        strtolower($pathInfo['extension']),
                        ['woff', 'eot', 'ttf', 'svg']
                    )) {
                        continue;
                    }

                    if (array_key_exists($pathInfo['filename'], $this->files)) {
                        $this->files[$pathInfo['filename']]['fonts'][] = $pathInfo['basename'];
                    } else {
                        $this->files[$pathInfo['filename']] = [
                            'path' => $basePath,
                            'fonts' => [$pathInfo['basename']]
                        ];
                    }
                }
            }
        }
    }
}