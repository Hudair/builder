<?php
namespace App\Utilities\Builder;

class Html {

   public $groups = array();
   public $fontsDropdown = array();
   public $overAllJs = '';
   public $XML = '';
   protected $currentSectionSort = null;
   protected $maxOrder = 999999;

   public function __construct() {
       $this->_base_path = SUPRA_BASE_PATH;
       $this->_base_url = SUPRA_BASE_URL;
       $XMLData = file_get_contents($this->_base_path.'/order.xml');
       $this->XML=simplexml_load_string($XMLData);

       $this->_init_sections();
       $this->_init_fonts(new Fonts());

       $this->_sort_sections();
       $this->_sort_inner();

        $this->view();

   }

   protected function _sort_sections() {
       $order = array();
       foreach($this->XML->children() as $value) {
           $key = $value->getName();
           foreach($this->groups as $group_key => $section) {
               if ($group_key == $key) {
                   $order[$group_key] = $this->groups[ $group_key ];
                   unset($this->groups[ $group_key ]);
               }
           }
       }
       $this->groups = array_merge($order, $this->groups);
   }

   /**
    * Sort sections
    */
   protected function _sort_inner() {
       foreach ($this->groups as $gName => $group) {
           if (!isset($this->XML->{$gName})) {
               continue;
           }

           $this->currentSectionSort = $gName;

           $order = array();

           foreach($this->XML->{$gName}->children() as $value) {
               $key = $value->getName();
               foreach($group['sections'] as $section_key => $section) {
                   if ($section->name == $key) {
                       $order[] = $group['sections'][ $section_key ];
                       unset($group['sections'][ $section_key ]);
                   }
               }
           }
           $this->groups[ $gName ]['sections'] = array_merge($order, $group['sections']);
       }
   }

   /**
    * @param $prev
    * @param $next
    *
    * @return int
    */
   protected function _sort($prev, $next) {
       $a = $this->XML->{$prev}->attributes()['order'] ? (int)$this->XML->{$prev}->attributes()['order'] : $this->maxOrder;
       $b = $this->XML->{$next}->attributes()['order'] ? (int)$this->XML->{$next}->attributes()['order'] : $this->maxOrder;

       if ($a == $b) $r = 0;
       else $r = ($a > $b) ? 1: -1;

       return $r;
   }

   /**
    * Prepare sections to view by json
    */
   protected function _init_sections() {
       $sections_base = $this->_base_path.'/sections';
       $modules_group = scandir($sections_base);
       if (count($modules_group) > 2) {
           for ( $i = 2; $i < count( $modules_group ); $i ++ ) {
               if ($modules_group[ $i ] == '.DS_Store') {
                   continue;
               }

               if ( is_file( $sections_base . '/' . $modules_group[ $i ] ) && $modules_group[ $i ] == 'overall.js' ) {
                   $this->overAllJs =
                       file_get_contents( $sections_base . '/' . $modules_group[ $i ] );
                   continue;
               }

               if (is_dir($sections_base . '/' . $modules_group[ $i ])) {
                   $gName = ucfirst($modules_group[$i]);
                   if (
                       isset($this->XML->{$modules_group[$i]})
                       && $this->XML->{$modules_group[$i]}->attributes()['name']
                   ) {
                       $gName = (string)$this->XML->{$modules_group[$i]}->attributes()['name'];
                   }
                   $this->groups[$modules_group[$i]]['sections'] = array();
                   $this->groups[$modules_group[$i]]['name'] = $gName;

                   $modules = scandir($sections_base . '/' . $modules_group[$i]);
                   for ($j = 2; $j < count($modules); $j++) {
                       if ($modules[$j] == '.DS_Store') {
                           continue;
                       }

                       if (is_dir($sections_base . '/' . $modules_group[$i] . '/' . $modules[$j])) {
                           $this->groups[$modules_group[$i]]['sections'][] =
                               new Section($sections_base . '/' . $modules_group[$i], $modules[$j]);
                       }
                       if (is_file($sections_base . '/' . $modules_group[$i] . '/' . $modules[$j])) {
                           $this->groups[$modules_group[$i]]['overallJs'] =
                               file_get_contents($sections_base . '/' . $modules_group[$i] . '/' . $modules[$j]);
                       }
                   }
               }
           }
       }
   }

   /**
    * Prepare fonts to view in typography dropdown
    */
   protected function _init_fonts(Fonts $fonts) {
       $this->fontsDropdown = $fonts->getFontsList();
   }

   protected function view() {
       ?>
       <script>
       	<?php
           //TODO: this need for limiting the output of PHP's echo
           if (count($this->groups) > 10) {
               $part1 = array_slice($this->groups, 0, 10);
               $part2 = array_slice($this->groups, 10, count($this->groups));
               echo "sectionsPreview=".json_encode($part1).";\n";
               echo "sectionsPreview1=".json_encode($part2).";\n";
               echo "sectionsPreview = Object.assign(sectionsPreview, sectionsPreview1);\n";
           } else {
               echo "sectionsPreview=".json_encode($this->groups).";\n";
           }
       	echo "typographyFonts=".json_encode($this->fontsDropdown).";\n";
           echo "overAllJs=".json_encode($this->overAllJs).";\n";
       	?>
       </script>

       <?php
   }
}
