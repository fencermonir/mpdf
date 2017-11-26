<?php

namespace Mpdf\Tag;

class PRETag extends BlockTag
{

	public function open($attr, &$ahtml, &$ihtml)
	{
		$this->mpdf->ispre = true; // ADDED - Prevents left trim of textbuffer in printbuffer()
		parent::open($attr, $ahtml, $ihtml); // TODO: Change the autogenerated stub
	}
}
