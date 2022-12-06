<?php
$pdf = new Tpdf('P', 'mm', 'Legal', true, 'UTF-8', false);
$pdf->SetFont('Times', '', 12, '', 'false');
$pdf->SetTitle('Data Laporan');
$pdf->SetMargins(15, 20, 18);
// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
$pdf->SetAuthor('Author');
$pdf->SetDisplayMode('real', 'default');
//rencana praktik
$pdf->AddPage('P', 'LEGAL');

$pdf->SetY(1);
$pdf->Cell(131);
$pdf->MultiCell(0, 5, "", 0, 0, '');
$html = '<p align="center"><font size="15"><br />
<b>PT SYSWARE INDONESIA</b></font><br />
<font size="15"><b>DATA LAPORAN</b> </font><br />
<font size="8">Komplek Puri Mutiara Blok BD No. 5, Jl. Griya Utama, Sunter Agung, Kemayoran, RT.2/RW.5 Sunter Agung Tanjung Priok, RT.2/RW.5, Sunter Agung, Tanjung Priok, North Jakarta City, Jakarta 14350<br />
Website : https://wwww.sysware.com/ </font><br /><br />
' . $pdf->SetLineWidth(0.5) . '
' . $pdf->Line(20, 40, 190, 40) . '
</p>
'; 

$pdf->SetFont('Times', '', 9, '', 'false');


$html .= '<table border="1" cellspacing="0" cellpadding="3">
			<tr align="center">
				<th width="20">No</th>
				<th width="80">Nama</th>
				<th width="80">Email</th>
				<th width="100">Nama Perusahaan</th>
				<th width="50">Tanggal</th>
				<th width="80">Pekerjaan</th>
				<th width="120">Lokasi</th>
			</tr>';
$no = 1;
foreach ($list as $peg) {
	$html .= '<tr>
				<td width="20">'. $no.'</td>
				<td width="80">'. $peg->nama.'</td>
				<td width="80">'. $peg->email.'</td>
				<td width="100">'. $peg->nama_perusahaan.'</td>
				<td width="50">'. $peg->tanggal.'</td>
				<td width="80">'. $peg->pekerjaan.'</td>
				<td width="120">'. $peg->lokasi.'</td>
			</tr>';
			$no++;
}
$html .= '</table><br /><br /><br />';
// $html .= '<table cellpadding="1" border="0">
// 			<tr>
// 				<td width="1"></td>
// 				<td width="1"></td>
// 				<td width="410">Mengetahui</td>
// 				<td>Menyetuji</td>
// 			</tr>
// 			<tr>
// 				<td></td>
// 				<td></td>
// 				<td width="410">Ketua Sekretaris PT Sysware Indo</td>
// 				<td>CEO PT Sysware Indo</td>
// 			</tr>
// 			<tr>
// 				<td></td>
// 				<td></td>
// 				<td width="410"></td>
// 				<td></td>
// 			</tr>
// 			<tr>
// 				<td></td>
// 				<td></td>
// 			</tr>
// 			<tr>
// 				<td></td>
// 				<td></td>
// 			</tr>
// 			<tr>
// 				<td></td>
// 				<td></td>
// 			</tr>
// 			<tr>
// 				<td></td>
// 				<td></td>
// 			</tr>
			
// 		</table>';

$pdf->writeHTML($html, true, false, true, false, '');

$pdf->Output('Laporan PT Sysware'.'pdf', 'i');
