<?php
/**
 * ��վ����Դ��
 * http://www.haoid.cn
 */
if($action != 'entry') {
	define('FRAME', 'setting');
	$frames = buildframes(array(FRAME));
	$frames = $frames[FRAME];
}
