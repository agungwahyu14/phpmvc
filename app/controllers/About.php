<?php

    class About {
        public function page()
        {
            echo 'About/page';
        }
        public function index($nama = 'Agung', $pekerjaan = 'Siswa'){
            echo "Halo, nama saya $nama, saya adalah seorang $pekerjaan";
        }
    }
?>