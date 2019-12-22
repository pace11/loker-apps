<div class="panel panel-headline">
    <div class="panel-heading">
        <div class="row">
            <div class="col-md-12">
                <div class="pull-left">
                    <h3 class="panel-title">Proses Perhitungan Metode Topsis</h3>
                    <p class="panel-subtitle"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="panel-body">
        <div class="row">
            <div class="col-md-12">
                <?php
                    mysqli_query($conn, "DELETE FROM tbl_ranking");
                    
                    $sql = mysqli_query($conn, "SELECT * FROM tbl_nilairemedial
                                                JOIN tbl_siswa ON tbl_nilairemedial.nis=tbl_siswa.nis
                                                JOIN tbl_rapor ON tbl_nilairemedial.nis=tbl_rapor.nis 
                                                JOIN tbl_kehadiran ON tbl_nilairemedial.nis=tbl_kehadiran.nis
                                                JOIN tbl_kepribadian ON tbl_nilairemedial.nis=tbl_kepribadian.nis
                                                JOIN tbl_kesehatanfisik ON tbl_nilairemedial.nis=tbl_kesehatanfisik.nis
                                                JOIN tbl_wawancara ON tbl_nilairemedial.nis=tbl_wawancara.nis
                                                ORDER BY tbl_nilairemedial.nis ASC");
                    while($data=mysqli_fetch_array($sql)){
                        $isi[] = [
                            "nis" => $data['nis'],
                            "nama" => $data['nama_siswa'],
                            "kriteria" => [
                                $data['status_remedial'],
                                $data['status_rapor'],
                                $data['status_kehadiran'],
                                $data['status_kepribadian'],
                                $data['status_kesehatanfisik'],
                                $data['status_wawancara'],
                            ],
                        ];
                    }

                    $q = mysqli_query($conn, "SELECT * FROM tbl_kriteria");
                    while($qdata=mysqli_fetch_array($q)){
                        $bobotKriteria[] = ($qdata['nilai_terbobot']/100);
                    }

                    $sum1=[];
                    $sum1Akar=[];
                    $normalisasi=[[]];
                    $distancePositif=[];
                    $distanceNegatif=[];
                    $preferensi=[];
                    $sorting=[[]];

                    for ($a=0;$a<count($bobotKriteria);$a++){
                        $sum1[$a]=0;
                        $sum1Akar[$a]=0;
                    }

                    for ($a=0;$a<count($isi);$a++){
                        $distancePositif[$a]=0;
                        $distanceNegatif[$a]=0;
                        $preferensi[$a]=0;
                    }

                    for ($a=0;$a<count($isi);$a++){
                        for($b=0;$b<count($isi[$a]['kriteria']);$b++){
                            $sum1[$b] += ($isi[$a]['kriteria'][$b]*2);
                        }
                    }

                    for ($c=0;$c<count($sum1);$c++){
                        $sum1Akar[$c] = round(sqrt($sum1[$c]),4);
                    }

                    for ($d=0;$d<count($isi);$d++){
                        for ($e=0;$e<count($isi[$d]['kriteria']);$e++){
                            $isi[$d]['matriks_ternormalisasi'][] = round(($isi[$d]['kriteria'][$e]/$sum1Akar[$e]),4);
                        }   
                    }

                    for ($d=0;$d<count($isi);$d++){
                        for ($e=0;$e<count($isi[$d]['matriks_ternormalisasi']);$e++){
                            $isi[$d]['matriks_kinerja'][] = round(($isi[$d]['matriks_ternormalisasi'][$e]*$bobotKriteria[$e]),4);
                        }   
                    }

                    for ($d=0;$d<count($isi);$d++){
                        for ($e=0;$e<count($isi[$d]['matriks_kinerja']);$e++){
                            $solusiIdeal[$e][$d] = $isi[$d]['matriks_kinerja'][$e];
                        }
                    }

                    for ($d=0;$d<count($solusiIdeal);$d++){
                        for ($e=0;$e<count($solusiIdeal[$d]);$e++){
                            $solusiIdealPositif[$d] = max($solusiIdeal[$d]);
                        }
                        for ($e=0;$e<count($solusiIdeal[$d]);$e++){
                            $solusiIdealNegatif[$d] = min($solusiIdeal[$d]);
                        }
                    }

                    for ($d=0;$d<count($isi);$d++){
                        for ($e=0;$e<count($isi[$d]['matriks_kinerja']);$e++){
                            $distancePositif[$d] += pow(($solusiIdealPositif[$e]-$isi[$d]['matriks_kinerja'][$e]),2);
                        }
                    }

                    for ($d=0;$d<count($isi);$d++){
                        for ($e=0;$e<count($isi[$d]['matriks_kinerja']);$e++){
                            $distanceNegatif[$d] += pow(($isi[$d]['matriks_kinerja'][$e]-$solusiIdealNegatif[$e]),2);
                        }
                    }

                    for ($d=0;$d<count($isi);$d++){
                        $distancePositifAkar[$d] = round(sqrt($distancePositif[$d]),4);
                        $isi[$d]['distance_positif'] = $distancePositifAkar[$d];
                        $distanceNegatifAkar[$d] = round(sqrt($distanceNegatif[$d]),4);
                        $isi[$d]['distance_negatif'] = $distanceNegatifAkar[$d];
                    }

                    for ($d=0;$d<count($isi);$d++){
                        $isi[$d]['nilai_preferensi'] = round(($distanceNegatifAkar[$d]/($distanceNegatifAkar[$d]+$distancePositifAkar[$d])),4);
                    }

                    $idr = 1;
                    for ($a=0;$a<count($isi);$a++){
                        $nis = $isi[$a]['nis'];
                        $nilai = $isi[$a]['nilai_preferensi'];
                        mysqli_query($conn, "INSERT INTO tbl_ranking SET
                                        id_ranking      = $idr,
                                        nis             = $nis,
                                        nilai_ranking   = $nilai");
                        $idr++;
                    }

                ?>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="9">Matriks Keputusan R</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama Lengkap Siswa</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th>
                                <th>C6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            for ($a=0;$a<count($isi);$a++){
                                echo '<tr>'; 
                                echo '<td>'.$no.'.</td>';
                                echo '<td><span class="label label-info">'.$isi[$a]['nis'].'</span></td>';
                                echo '<td>'.$isi[$a]['nama'].'</td>';
                                for ($b=0;$b<count($isi[$a]['kriteria']);$b++){
                                    echo '<td>'.$isi[$a]['kriteria'][$b].'</td>';
                                }
                                echo '</tr>';
                            $no++; 
                            }
                            echo '<tr>';
                            echo '<td class="pembagi" colspan="3">Akar Pembagi</td>';
                            for ($b=0;$b<count($sum1Akar);$b++){
                                echo '<td><span class="label label-warning">'.$sum1Akar[$b].'</span></td>';
                            }
                            echo '</tr>';
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="9">Matriks Ternormalisasi Terbobot</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama Lengkap Siswa</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th>
                                <th>C6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            for ($a=0;$a<count($isi);$a++){
                                echo '<tr>'; 
                                echo '<td>'.$no.'.</td>';
                                echo '<td><span class="label label-info">'.$isi[$a]['nis'].'</span></td>';
                                echo '<td>'.$isi[$a]['nama'].'</td>';
                                for ($b=0;$b<count($isi[$a]['kriteria']);$b++){
                                    echo '<td>'.$isi[$a]['matriks_ternormalisasi'][$b].'</td>';
                                }
                                echo '</tr>';
                            $no++; 
                            }
                            echo '<tr>';
                            echo '<td class="pembagi" colspan="3">Nilai Terbobot dari Tiap Kriteria</td>';
                            for ($b=0;$b<count($bobotKriteria);$b++){
                                echo '<td><span class="label label-warning">'.$bobotKriteria[$b].'</span></td>';
                            }
                            echo '</tr>';
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="9">Matriks Kinerja Bobot</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama Lengkap Siswa</th>
                                <th>C1</th>
                                <th>C2</th>
                                <th>C3</th>
                                <th>C4</th>
                                <th>C5</th>
                                <th>C6</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $no=1;
                            for ($a=0;$a<count($isi);$a++){
                                echo '<tr>'; 
                                echo '<td>'.$no.'.</td>';
                                echo '<td><span class="label label-info">'.$isi[$a]['nis'].'</span></td>';
                                echo '<td>'.$isi[$a]['nama'].'</td>';
                                for ($b=0;$b<count($isi[$a]['kriteria']);$b++){
                                    echo '<td>'.$isi[$a]['matriks_kinerja'][$b].'</td>';
                                }
                                echo '</tr>';
                            $no++; 
                            }
                            echo '<tr>';
                            echo '<td class="positif" colspan="3">Solusi Ideal Positif +</td>';
                            for ($a=0;$a<count($solusiIdealPositif);$a++){
                                echo '<td><span class="label label-success">'.$solusiIdealPositif[$a].'</span></td>';
                            }
                            echo '</tr>';
                            echo '<tr>';
                            echo '<td class="negatif" colspan="3">Solusi Ideal Negatif -</td>';
                            for ($a=0;$a<count($solusiIdealNegatif);$a++){
                                echo '<td><span class="label label-danger">'.$solusiIdealNegatif[$a].'</span></td>';
                            }
                            echo '</tr>';
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="8">Distance Nilai Terbobot Setiap Alternatif</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama Lengkap Siswa</th>
                                <th>Solusi Ideal Positif</th>
                                <th>Solusi Ideal Negatif</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no=1;
                            for ($a=0;$a<count($isi);$a++){
                                echo '<tr>';
                                echo '<td>'.$no.'</td>';
                                echo '<td><span class="label label-info">'.$isi[$a]['nis'].'</span></td>';
                                echo '<td>'.$isi[$a]['nama'].'</td>';
                                echo '<td><span class="label label-success">'.$isi[$a]['distance_positif'].'</span></td>';
                                echo '<td><span class="label label-danger">'.$isi[$a]['distance_negatif'].'</span></td>';
                                echo '</tr>';
                            $no++;
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th colspan="4">Hasil Nilai Preferensi dan Ranking</th>
                            </tr>
                            <tr>
                                <th>No</th>
                                <th>Nis</th>
                                <th>Nama Lengkap Siswa</th>
                                <th>Nilai Preferensi</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no=1;
                            $m = mysqli_query($conn, "SELECT * FROM tbl_ranking
                                                    JOIN tbl_siswa ON tbl_ranking.nis=tbl_siswa.nis
                                                    ORDER BY tbl_ranking.nilai_ranking DESC");
                            while($datam = mysqli_fetch_array($m)){
                                echo '<tr>';
                                echo '<td>'.$no.'</td>';
                                echo '<td><span class="label label-info">'.$datam['nis'].'</span></td>';
                                echo '<td>'.$datam['nama_siswa'].'</td>';
                                echo '<td><span class="label label-success">'.$datam['nilai_ranking'].'</span></td>';
                                echo '</tr>';
                            $no++; 
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>