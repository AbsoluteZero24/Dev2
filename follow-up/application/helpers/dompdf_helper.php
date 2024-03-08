<?php if (!defined('BASEPATH')) exit('No direct script access allowed');
           function pdf_create($html, $xfilename, $stream=true, $papersize = 'letter', $orientation = 'portrait')
    {

  require_once("dompdf/dompdf_config.inc.php");
   spl_autoload_register('DOMPDF_autoload');  

        $dompdf = new DOMPDF();
        $dompdf->load_html($html);
        $dompdf->set_paper($papersize, $orientation);
        $dompdf->render();

        if ($stream)
        {
            $options['Attachment'] = 0;
            $options['Accept-Ranges'] = 0;
            $options['compress'] = 1;
            $dompdf->stream($xfilename.".pdf", $options);
        }
        else
        {
				
			$output = $dompdf->output();
			file_put_contents('repositories/failed_imei/'.$xfilename.'.pdf', $output);
            //write_file("$xfilename.pdf", $dompdf->output());
        }
    }
?>