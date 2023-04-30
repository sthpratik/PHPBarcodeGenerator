<?php   

/*
 * PHP QR Code encoder
 *
 * Exemplatory usage
 *
 * PHP QR Code is distributed under LGPL 3
 * Copyright (C) 2010 Dominik Dzienia <deltalab at poczta dot fm>
 *
 * This library is free software; you can redistribute it and/or
 * modify it under the terms of the GNU Lesser General Public
 * License as published by the Free Software Foundation; either
 * version 3 of the License, or any later version.
 *
 * This library is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU
 * Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public
 * License along with this library; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA 02110-1301 USA
 */
    

    
    //set it to writable location, a place for temp generated PNG files

    $code = isset($_REQUEST['data']) ? $_REQUEST['data'] :'http://softechpro.co';

    function QRCodeGenerator($code)
    {              
        //processing form input
        //remember to sanitize user input in real-life solution !!!
        $errorCorrectionLevel = 'L';
        if (isset($_REQUEST['level']) && in_array($_REQUEST['level'], array('L','M','Q','H')))
            $errorCorrectionLevel = $_REQUEST['level'];    
    
        $matrixPointSize = 4;
        if (isset($_REQUEST['size']))
            $matrixPointSize = min(max((int)$_REQUEST['size'], 1), 10);
    
        //it's very important!
        if (trim($code) == '')
            die('data cannot be empty! <a href="?">back</a>');
            
        // user data
        QRcode::png($code, false, $errorCorrectionLevel, $matrixPointSize, 2);    
                  
    }
        
    switch ($_REQUEST['type']) {
        case "EAN8":
            header("Content-type: image/svg+xml");
            include 'EAN8/EAN8.php';                 
            echo draw($code);
            break;
        case "EAN13":
            include 'EAN13/EAN13.php';
            echo draw($code);
            break;
        // case "ISBN10":
        //     include 'ISBN10/EAN8.php';
        //     $code = isset($_GET['data']) ? $_GET['data'] :'4400054'; 
        //     header("Content-type: image/svg+xml");
        //     echo draw($code);
        //     break;
        case "Code39":
            include 'Code39/Code39.php';
            echo draw($code);
            break;
        case "Code128":
            include 'Code128/Code128.php';
            echo draw($code);
            break;
        case "UPCA":
            include 'UPCA/UPCA.php';
            echo draw($code);
            break; 
        default : 
            include "qrlib.php";  
            QRCodeGenerator($code);
            break;

    }

  // };



?>
 

    