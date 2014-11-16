<?php
/**
 * CDNPAL NGINAD Project
 *
 * @link http://www.nginad.com
 * @copyright Copyright (c) 2013-2015 CDNPAL Ltd. All Rights Reserved
 * @license GPLv3
 */

namespace buyrtb\parsers\openrtb;
use \Exception;

class DisplayParser {

	public function parse_request(&$Logger, \buyrtb\parsers\openrtb\OpenRTBParser &$Parser, \model\rtb\RtbBidRequestBanner &$RtbBidRequestBanner, &$ad_impression_banner) {

	        // Parse Dimensions
	        try {
	        	\buyrtb\parsers\openrtb\parselets\common\banner\ParseDimensions::execute($Logger, $this, $RtbBidRequestBanner, $ad_impression_banner);
	        } catch (Exception $e) {
	        	throw new Exception($e->getMessage(), $e->getCode(), $e->getPrevious());
	        }
	        
	        // Parse Above the Fold
	        try {
	        	\buyrtb\parsers\openrtb\parselets\common\banner\ParseAboveTheFold::execute($Logger, $this, $RtbBidRequestBanner, $ad_impression_banner);
	        } catch (Exception $e) {
	        	throw new Exception($e->getMessage(), $e->getCode(), $e->getPrevious());
	        }

        
	}
}
