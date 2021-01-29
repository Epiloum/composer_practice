<?php
require_once '../../vendor/autoload.php';

$spsh = \PhpOffice\PhpSpreadsheet\IOFactory::load('./plain_table.xlsx');
$data = $spsh->getActiveSheet()->rangeToArray('A1:C50', null, true, true, true);

foreach($data as $k => $v)
{
	if(!$v['A'])
	{
		echo "END on Row#$k\n";
		break;
	}
	
	echo implode("\t", $v);
	echo "\n";
}