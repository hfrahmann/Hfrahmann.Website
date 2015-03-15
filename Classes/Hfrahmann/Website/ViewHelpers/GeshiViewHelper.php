<?php
namespace Hfrahmann\Website\ViewHelpers;

/*                                                                        *
 * This script belongs to Hfrahmann.Website
 *                                                                        */

use TYPO3\Flow\Annotations as Flow;
use TYPO3\TYPO3CR\Domain\Model\NodeInterface;

/**
 * This view helper highlights sourcecode.
 */
class GeshiViewHelper extends \TYPO3\Fluid\Core\ViewHelper\AbstractViewHelper {

    /**
     * @param string $source
     * @param string $language
     * @return string
     */
    public function render($source= '', $language = '') {
        $geshi = new \GeSHi($source, $language);
        return $geshi->parse_code();
    }
}


?>