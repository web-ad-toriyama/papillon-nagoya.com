<?php
function smarty_outputfilter_hchar($source, Smarty_Internal_Template $smarty)
{
	return mb_convert_kana($source, "ka", "UTF-8");
}
