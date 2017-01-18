<?php
namespace Tx\Guide\Service;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2014 TYPO3 CMS Team
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

class SanitizationService
{
	/**
	 * @param $content
	 * @param $allowedTags
	 * @return mixed|string
	 */
	public static function sanitizeHtml($content, $allowedTags='<h1><h2><h3><h4><h5><h6><ul><li><ol><pre><code><p>')
	{
		/*
		 * Keep only white listed tags
		 */
		$content = strip_tags($content, $allowedTags);
		/*
		 * Kill off all attributes because we don't want them
		 */
		$content = preg_replace('/<([a-z][a-z0-9]*)[^>]*?(\/?)>/i', '<$1$2>', $content);
		return $content;
	}
}