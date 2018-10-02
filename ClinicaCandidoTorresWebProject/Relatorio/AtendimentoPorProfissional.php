<?php

include("../BancoDeDados/conexao.php");

include("./MPDF57/mpdf.php");
$grupo = agendaPorProfissional();
$mpdf = new mPDF();
$mpdf->SetDisplayMode("fullpage");
$mpdf->WriteHTML("<h1>Relátorio de Atendimento - Por Profissional</h1><hr/>");

$html = "<table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Paciente</th>
                    <th>Celular</th>
                    <th>Atendimento</th>
                    <th>Data</th>
                </tr>
            </thead>
            <tbody>";
                    foreach ($grupo as $agenda) {
                
                $html = $html ."    <tr>
                    <td>{$agenda["IDAGENDA"]}</td>
                    <td>{$agenda["NOMEDOPACIENTE"]}</td>
                    <td>".formatoData($agenda["CELULAR"])."</td>
                    <td>{$agenda["TIPODEATENDIMENTO"]}</td>
                    <td>{$agenda["DATADEATENDIMENTO"]}</td>
                     </tr>";
                 }
               
          $html = $html ."  </tbody>
        </table>";
$mpdf->WriteHTML($html);
$mpdf->Output();
exit();


