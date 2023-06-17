<?php

if (isset($_POST["submit_cek"])) {

    $tinggi_badan_anak = $_POST["input_tinggi_badan_anak"];
    $berat_badan_anak = $_POST["input_berat_badan_anak"];
    $jenis_kelamin_anak = $_POST["input_jenis_kelamin_anak"];


    //function untuk penentuan gizi buruk


    if ($jenis_kelamin_anak == "pria") {
        //tinggi badan < 65 cm
        if ($tinggi_badan_anak < 65.0) {
            if ($berat_badan_anak <= 5.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 6.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 9.6) {
                $keterangan = "Diatas +3 SD";
            }
        }

        // cek isi varible di bawah apakah masi ada typo samakan dengan isi variable yang ada di paling bawah dan di file cek.php

        //tinggi badan < 65.5
        if ($tinggi_badan_anak < 65.5) {
            if ($berat_badan_anak <= 6.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 8.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 9.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 66
        if ($tinggi_badan_anak < 66.0) {
            if ($berat_badan_anak <= 6.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 9.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 66.5    
        if ($tinggi_badan_anak < 66.5) {
            if ($berat_badan_anak <= 6.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 67.0
        if ($tinggi_badan_anak < 67.0) {
            if ($berat_badan_anak <= 6.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 67.5
        if ($tinggi_badan_anak < 67.5) {
            if ($berat_badan_anak <= 6.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 68.0
        if ($tinggi_badan_anak < 68.0) {
            if ($berat_badan_anak <= 6.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 68.5
        if ($tinggi_badan_anak < 68.5) {
            if ($berat_badan_anak <= 6.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 69.0
        if ($tinggi_badan_anak < 69.0) {
            if ($berat_badan_anak <= 6.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 69.5
        if ($tinggi_badan_anak < 69.5) {
            if ($berat_badan_anak <= 6.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 70.0
        if ($tinggi_badan_anak < 70.0) {
            if ($berat_badan_anak <= 6.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 70.5
        if ($tinggi_badan_anak < 70.5) {
            if ($berat_badan_anak <= 6.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 71.0
        if ($tinggi_badan_anak < 71.0) {
            if ($berat_badan_anak <= 6.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 71.5
        if ($tinggi_badan_anak < 71.5) {
            if ($berat_badan_anak <= 7.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 72.0
        if ($tinggi_badan_anak < 72.0) {
            if ($berat_badan_anak <= 7.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 72.5
        if ($tinggi_badan_anak < 72.5) {
            if ($berat_badan_anak <= 7.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 73.0
        if ($tinggi_badan_anak < 73.0) {
            if ($berat_badan_anak <= 7.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 73.5
        if ($tinggi_badan_anak < 73.5) {
            if ($berat_badan_anak <= 7.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 74.0
        if ($tinggi_badan_anak < 74.0) {
            if ($berat_badan_anak <= 7.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 74.5
        if ($tinggi_badan_anak < 74.5) {
            if ($berat_badan_anak <= 7.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 75.0
        if ($tinggi_badan_anak < 75.0) {
            if ($berat_badan_anak <= 7.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 75.5
        if ($tinggi_badan_anak < 75.5) {
            if ($berat_badan_anak <= 7.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 76.0
        if ($tinggi_badan_anak < 76.0) {
            if ($berat_badan_anak <= 7.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 76.5
        if ($tinggi_badan_anak < 76.5) {
            if ($berat_badan_anak <= 7.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 77.0
        if ($tinggi_badan_anak < 77.0) {
            if ($berat_badan_anak <= 7.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 77.5
        if ($tinggi_badan_anak < 77.5) {
            if ($berat_badan_anak <= 8.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 78.0
        if ($tinggi_badan_anak < 78.0) {
            if ($berat_badan_anak <= 8.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 78.5
        if ($tinggi_badan_anak < 78.5) {
            if ($berat_badan_anak <= 8.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 79.0
        if ($tinggi_badan_anak < 79.0) {
            if ($berat_badan_anak <= 8.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 79.5
        if ($tinggi_badan_anak < 79.5) {
            if ($berat_badan_anak <= 8.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 80.0
        if ($tinggi_badan_anak < 80.0) {
            if ($berat_badan_anak <= 8.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 80.5
        if ($tinggi_badan_anak < 80.5) {
            if ($berat_badan_anak <= 8.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 81.0
        if ($tinggi_badan_anak < 81.0) {
            if ($berat_badan_anak <= 8.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 14.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 81.5
        if ($tinggi_badan_anak < 81.5) {
            if ($berat_badan_anak <= 8.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 10.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 14.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 82.0
        if ($tinggi_badan_anak < 82.0) {
            if ($berat_badan_anak <= 8.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 10.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 11.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 13.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 14.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 82.5
        if ($tinggi_badan_anak < 82.5) {
            if ($berat_badan_anak <= 8.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 10.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 11.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 12.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 13.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 14.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 83.0
        if ($tinggi_badan_anak < 83.0) {
            if ($berat_badan_anak <= 8.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 10.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 11.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 12.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 13.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 14.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 83.5
        if ($tinggi_badan_anak < 83.5) {
            if ($berat_badan_anak <= 8.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 11.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 12.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 13.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 14.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 84.0
        if ($tinggi_badan_anak < 84.0) {
            if ($berat_badan_anak <= 9.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 10.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 11.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 12.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 13.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 14.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 84.5
        if ($tinggi_badan_anak < 84.5) {
            if ($berat_badan_anak <= 9.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 9.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 10.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 11.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 12.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 13.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 14.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 85.0
        if ($tinggi_badan_anak < 85.0) {
            if ($berat_badan_anak <= 9.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 10.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 11.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 12.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 13.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 15.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 85.5
        if ($tinggi_badan_anak < 85.5) {
            if ($berat_badan_anak <= 9.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 10.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 11.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 12.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 13.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 15.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 86.0
        if ($tinggi_badan_anak < 86.0) {
            if ($berat_badan_anak <= 9.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 11.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 11.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 12.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 14.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 15.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 86.5
        if ($tinggi_badan_anak < 86.5) {
            if ($berat_badan_anak <= 9.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 11.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 12.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 13.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 14.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 15.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 87.0
        if ($tinggi_badan_anak < 87.0) {
            if ($berat_badan_anak <= 9.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 11.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 12.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 13.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 14.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 15.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 87.5
        if ($tinggi_badan_anak < 87.5) {
            if ($berat_badan_anak <= 9.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 11.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 12.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 13.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 14.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 15.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 88.0
        if ($tinggi_badan_anak < 88.0) {
            if ($berat_badan_anak <= 9.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 11.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 12.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 13.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 14.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 16.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 88.5
        if ($tinggi_badan_anak < 88.5) {
            if ($berat_badan_anak <= 9.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 11.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 12.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 13.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 14.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 16.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 89.0
        if ($tinggi_badan_anak < 89.0) {
            if ($berat_badan_anak <= 10.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 11.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 12.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 13.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 14.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 16.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 89.5
        if ($tinggi_badan_anak < 89.5) {
            if ($berat_badan_anak <= 10.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 10.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 11.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 12.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 13.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 15.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 16.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 90.0
        if ($tinggi_badan_anak < 90.0) {
            if ($berat_badan_anak <= 10.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 11.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 12.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 14.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 15.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 16.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 90.5
        if ($tinggi_badan_anak < 90.5) {
            if ($berat_badan_anak <= 10.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 12.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 13.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 14.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 15.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 16.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 91.0
        if ($tinggi_badan_anak < 91.0) {
            if ($berat_badan_anak <= 10.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 12.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 13.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 14.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 15.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 16.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 91.5
        if ($tinggi_badan_anak < 91.5) {
            if ($berat_badan_anak <= 10.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 12.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 13.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 14.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 15.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 17.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 92.0
        if ($tinggi_badan_anak < 92.0) {
            if ($berat_badan_anak <= 10.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 12.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 13.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 14.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 15.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 17.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 92.5
        if ($tinggi_badan_anak < 92.5) {
            if ($berat_badan_anak <= 10.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 12.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 13.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 14.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 15.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 17.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 93.0
        if ($tinggi_badan_anak < 93.0) {
            if ($berat_badan_anak <= 10.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 12.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 13.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 14.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 16.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 17.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 93.5
        if ($tinggi_badan_anak < 93.5) {
            if ($berat_badan_anak <= 10.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 12.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 13.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 14.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 16.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 17.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 94.0
        if ($tinggi_badan_anak < 94.0) {
            if ($berat_badan_anak <= 11.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 12.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 13.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 15.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 16.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 17.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 94.5
        if ($tinggi_badan_anak < 94.5) {
            if ($berat_badan_anak <= 11.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 11.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 12.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 13.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 15.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 16.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 17.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 95.0
        if ($tinggi_badan_anak < 95.0) {
            if ($berat_badan_anak <= 11.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 12.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 13.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 14.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 15.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 16.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 18.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 95.5
        if ($tinggi_badan_anak < 95.5) {
            if ($berat_badan_anak <= 11.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 12.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 13.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 14.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 15.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 16.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 18.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 96.0
        if ($tinggi_badan_anak < 96.0) {
            if ($berat_badan_anak <= 11.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 12.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 13.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 14.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 15.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 16.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 18.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 96.5
        if ($tinggi_badan_anak < 96.5) {
            if ($berat_badan_anak <= 11.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 12.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 13.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 14.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 15.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 17.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 18.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 97.0
        if ($tinggi_badan_anak < 97.0) {
            if ($berat_badan_anak <= 11.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 12.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 13.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 14.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 15.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 17.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 18.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 97.5
        if ($tinggi_badan_anak < 97.5) {
            if ($berat_badan_anak <= 11.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 12.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 13.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 14.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 15.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 17.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 18.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 98.0
        if ($tinggi_badan_anak < 98.0) {
            if ($berat_badan_anak <= 11.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 12.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 13.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 14.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 16.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 17.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 19.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 98.5
        if ($tinggi_badan_anak < 98.5) {
            if ($berat_badan_anak <= 11.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 12.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 13.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 14.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 16.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 17.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 19.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 99.0
        if ($tinggi_badan_anak < 99.0) {
            if ($berat_badan_anak <= 11.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 12.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 13.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 15.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 16.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 17.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 19.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 99.5
        if ($tinggi_badan_anak < 99.5) {
            if ($berat_badan_anak <= 12.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 14.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 15.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 16.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 18.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 19.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 100.0
        if ($tinggi_badan_anak < 100.0) {
            if ($berat_badan_anak <= 12.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 14.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 15.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 16.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 18.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 19.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 100.5
        if ($tinggi_badan_anak < 100.5) {
            if ($berat_badan_anak <= 12.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 14.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 15.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 16.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 18.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 20.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 101.0
        if ($tinggi_badan_anak < 101.0) {
            if ($berat_badan_anak <= 12.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 14.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 15.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 17.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 18.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 20.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 101.5
        if ($tinggi_badan_anak < 101.5) {
            if ($berat_badan_anak <= 12.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 14.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 15.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 17.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 18.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 20.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 101.5
        if ($tinggi_badan_anak < 101.5) {
            if ($berat_badan_anak <= 12.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 14.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 15.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 17.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 18.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 20.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 102.0
        if ($tinggi_badan_anak < 102.0) {
            if ($berat_badan_anak <= 12.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 14.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 15.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 17.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 18.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 20.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 102.5
        if ($tinggi_badan_anak < 102.5) {
            if ($berat_badan_anak <= 12.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 14.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 16.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 17.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 19.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 20.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 103.0
        if ($tinggi_badan_anak < 103.0) {
            if ($berat_badan_anak <= 12.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 14.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 16.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 17.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 19.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 21.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 103.5
        if ($tinggi_badan_anak < 103.5) {
            if ($berat_badan_anak <= 12.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 13.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 15.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 16.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 17.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 19.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 21.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 104.0
        if ($tinggi_badan_anak < 104.0) {
            if ($berat_badan_anak <= 13.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 14.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 15.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 16.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 18.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 19.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 21.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 104.5
        if ($tinggi_badan_anak < 104.5) {
            if ($berat_badan_anak <= 13.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 14.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 15.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 16.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 18.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 19.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 21.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 105.0
        if ($tinggi_badan_anak < 105.0) {
            if ($berat_badan_anak <= 13.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 14.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 15.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 16.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 18.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 20.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 22.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 105.5
        if ($tinggi_badan_anak < 105.5) {
            if ($berat_badan_anak <= 13.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 14.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 15.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 17.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 18.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 20.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 22.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 106.0
        if ($tinggi_badan_anak < 106.0) {
            if ($berat_badan_anak <= 13.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 14.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 15.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 17.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 18.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 20.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 22.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 106.5
        if ($tinggi_badan_anak < 106.5) {
            if ($berat_badan_anak <= 13.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 14.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 15.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 17.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 18.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 20.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 22.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 107.0
        if ($tinggi_badan_anak < 107.0) {
            if ($berat_badan_anak <= 13.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 14.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 16.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 17.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 19.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 20.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 22.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 107.5
        if ($tinggi_badan_anak < 107.5) {
            if ($berat_badan_anak <= 13.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 14.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 16.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 17.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 19.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 21.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 23.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 108.0
        if ($tinggi_badan_anak < 108.0) {
            if ($berat_badan_anak <= 13.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 15.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 16.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 17.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 19.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 21.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 23.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 108.5
        if ($tinggi_badan_anak < 108.5) {
            if ($berat_badan_anak <= 14.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 15.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 16.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 18.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 19.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 21.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 23.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 109.0
        if ($tinggi_badan_anak < 109.0) {
            if ($berat_badan_anak <= 14.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 15.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 16.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 18.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 19.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 21.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 23.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 109.5
        if ($tinggi_badan_anak < 109.5) {
            if ($berat_badan_anak <= 14.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 15.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 16.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 18.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 20.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 22.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 24.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 110.0
        if ($tinggi_badan_anak < 110.0) {
            if ($berat_badan_anak <= 14.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 15.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 17.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 18.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 20.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 22.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 24.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 110.5
        if ($tinggi_badan_anak < 110.5) {
            if ($berat_badan_anak <= 14.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 15.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 17.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 18.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 20.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 22.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 24.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 111.0
        if ($tinggi_badan_anak < 111.0) {
            if ($berat_badan_anak <= 14.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 16.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 17.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 18.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 20.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 22.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 25.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 111.5
        if ($tinggi_badan_anak < 111.5) {
            if ($berat_badan_anak <= 14.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 16.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 17.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 19.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 20.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 22.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 25.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 112.0
        if ($tinggi_badan_anak < 112.0) {
            if ($berat_badan_anak <= 14.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 16.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 17.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 19.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 21.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 23.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 25.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 112.5
        if ($tinggi_badan_anak < 112.5) {
            if ($berat_badan_anak <= 15.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 16.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 17.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 19.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 21.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 23.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 25.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 113.0
        if ($tinggi_badan_anak < 113.0) {
            if ($berat_badan_anak <= 15.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 16.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 18.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 19.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 21.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 23.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 26.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 113.5
        if ($tinggi_badan_anak < 113.5) {
            if ($berat_badan_anak <= 15.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 16.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 18.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 19.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 21.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 23.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 26.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 114.0
        if ($tinggi_badan_anak < 114.0) {
            if ($berat_badan_anak <= 15.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 16.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 18.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 20.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 21.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 24.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 26.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 114.5
        if ($tinggi_badan_anak < 114.5) {
            if ($berat_badan_anak <= 15.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 16.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 18.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 20.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 22.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 24.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 26.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 115.0
        if ($tinggi_badan_anak < 115.0) {
            if ($berat_badan_anak <= 15.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 17.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 18.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 20.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 22.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 24.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 27.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 115.5
        if ($tinggi_badan_anak < 115.5) {
            if ($berat_badan_anak <= 15.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 17.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 18.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 20.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 22.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 24.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 27.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 115.5
        if ($tinggi_badan_anak < 115.5) {
            if ($berat_badan_anak <= 15.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 17.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 18.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 20.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 22.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 24.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 27.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 116.0
        if ($tinggi_badan_anak < 116.0) {
            if ($berat_badan_anak <= 16.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 17.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 19.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 20.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 22.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 25.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 27.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 116.5
        if ($tinggi_badan_anak < 116.5) {
            if ($berat_badan_anak <= 16.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 17.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 19.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 21.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 23.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 25.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 28.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 117.0
        if ($tinggi_badan_anak < 117.0) {
            if ($berat_badan_anak <= 16.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 17.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 19.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 21.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 23.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 25.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 28.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 117.5
        if ($tinggi_badan_anak < 117.5) {
            if ($berat_badan_anak <= 16.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 17.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 19.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 21.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 23.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 25.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 28.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 118.0
        if ($tinggi_badan_anak < 118.0) {
            if ($berat_badan_anak <= 16.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 18.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 19.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 21.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 23.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 26.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 28.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 118.5
        if ($tinggi_badan_anak < 118.5) {
            if ($berat_badan_anak <= 16.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 18.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 19.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 21.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 23.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 26.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 29.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 119.0
        if ($tinggi_badan_anak < 119.0) {
            if ($berat_badan_anak <= 16.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 18.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 20.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 22.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 24.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 26.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 29.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 119.5
        if ($tinggi_badan_anak < 119.5) {
            if ($berat_badan_anak <= 16.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 18.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 20.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 22.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 24.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 26.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 29.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        //tinggi badan < 120.0
        if ($tinggi_badan_anak < 120.0) {
            if ($berat_badan_anak <= 17.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 18.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 20.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 22.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 24.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 27.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 30.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
    }


    //wanita
    if ($jenis_kelamin_anak == "wanita") {
        //tinggi badan < 65 cm
        if ($tinggi_badan_anak < 65.0) {
            if ($berat_badan_anak <= 5.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 6.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 7.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 9.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 65.5) {
            if ($berat_badan_anak <= 5.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 6.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 8.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 9.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 66.0) {
            if ($berat_badan_anak <= 5.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 6.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 66.5) {
            if ($berat_badan_anak <= 5.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 6.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 67.0) {
            if ($berat_badan_anak <= 5.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 67.5) {
            if ($berat_badan_anak <= 6.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 68.0) {
            if ($berat_badan_anak <= 6.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 7.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 68.5) {
            if ($berat_badan_anak <= 6.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 69.0) {
            if ($berat_badan_anak <= 6.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 8.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 69.5) {
            if ($berat_badan_anak <= 6.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 6.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 9.9) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 10.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 70.0) {
            if ($berat_badan_anak <= 6.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 70.5) {
            if ($berat_badan_anak <= 6.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 71.0) {
            if ($berat_badan_anak <= 6.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 71.5) {
            if ($berat_badan_anak <= 6.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 7.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 72.0) {
            if ($berat_badan_anak <= 6.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 72.5) {
            if ($berat_badan_anak <= 6.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 73.0) {
            if ($berat_badan_anak <= 6.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 8.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 11.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 73.5) {
            if ($berat_badan_anak <= 7.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 9.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 10.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 74.0) {
            if ($berat_badan_anak <= 7.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.1) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 74.5) {
            if ($berat_badan_anak <= 7.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 75.0) {
            if ($berat_badan_anak <= 7.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 75.5) {
            if ($berat_badan_anak <= 7.2) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 7.9) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.5) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 76.0) {
            if ($berat_badan_anak <= 7.3) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.5) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 76.5) {
            if ($berat_badan_anak <= 7.4) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.0) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.5) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.5) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 77.0) {
            if ($berat_badan_anak <= 7.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.1) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.6) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.6) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.8) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 77.5) {
            if ($berat_badan_anak <= 7.5) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.2) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 8.9) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.7) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.7) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.7) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 12.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 78.0) {
            if ($berat_badan_anak <= 7.6) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.3) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.0) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.8) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.8) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 11.8) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.0) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 78.5) {
            if ($berat_badan_anak <= 7.7) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.1) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 9.9) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 10.9) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.0) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.2) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 79.0) {
            if ($berat_badan_anak <= 7.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.4) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.2) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.0) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.0) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.1) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.3) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 79.5) {
            if ($berat_badan_anak <= 7.8) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.5) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.3) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.1) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.1) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.2) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.4) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 80.0) {
            if ($berat_badan_anak <= 7.9) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.6) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.4) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.2) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.2) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.3) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.6) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 80.5) {
            if ($berat_badan_anak <= 8.0) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.7) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.5) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.3) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.3) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.4) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.7) {
                $keterangan = "Diatas +3 SD";
            }
        }
        if ($tinggi_badan_anak < 81.0) {
            if ($berat_badan_anak <= 8.1) {
                $keterangan = "Gizi buruk -3 SD";
            } else if ($berat_badan_anak <= 8.8) {
                $keterangan = "Gizi buruk -2 SD";
            } else if ($berat_badan_anak <= 9.6) {
                $keterangan = "Gizi buruk -1 SD";
            } else if ($berat_badan_anak <= 10.4) {
                $keterangan = "normal";
            } else if ($berat_badan_anak <= 11.4) {
                $keterangan = "Diatas +1 SD";
            } else if ($berat_badan_anak <= 12.6) {
                $keterangan = "Diatas +2 SD";
            } else if ($berat_badan_anak <= 13.9) {
                $keterangan = "Diatas +3 SD";
            }
        }
    }
    //keterangan

    if ($keterangan == 'Gizi buruk -3 SD') {
        $penjelasan = 'Ini adalah GIzi buruk -3 SD';
    } else if ($keterangan == 'Gizi buruk -2 SD') {
        $penjelasan = 'Ini adalah Gizi buruk -2 SD';
    } else if ($keterangan == 'Gizi buruk -1 SD') {
        $penjelasan = 'Ini adalah Gizi buruk -1 SD';
    } else if ($keterangan == 'normal') {
        $penjelasan = 'Ini adalah Gizi buruk normal';
    } else if ($keterangan == 'Diatas +1 SD') {
        $penjelasan = 'Ini adalah Gizi buruk 1 SD';
    } else if ($keterangan == 'Diatas +2 SD') {
        $penjelasan = 'Ini adalah Gizi buruk 2 SD';
    } else if ($keterangan == 'Diatas +3 SD') {
        $penjelasan = 'Ini adalah Gizi buruk 3 SD';
    }
}
