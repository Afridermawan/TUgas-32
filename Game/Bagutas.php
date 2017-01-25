<?php

namespace Game;

class Bagutas
{
    public $pemain;
	public $alat = [
		"batu",
		"gunting",
		"kertas",
	];

	public function SetPemain($pemain)
	{
		echo "Nama $pemain : ";
		// $namaPemain = fopen("php://stdin", "r");
		$namaPemain = trim(fgets(STDIN, 1024));

		$this->pemain[$pemain]['nama'] = $namaPemain;
	}

	public function tampilAlat()
	{
		foreach ($this->alat as $key => $val){
			echo $key+1 . "." . $val;
			echo "\n";
		}
	}
	public function pilihAlat($pemain)
	{
		echo "Masukan nomor Alat yang akan di digunakan : ";
		$pilihAlat = fopen("php://stdin", "r");
		$pilihAlat = fgets($pilihAlat);

		if (trim($pilihAlat <= count($this->alat))) {
			foreach ($this->alat as $key => $val) {
				if (trim($pilihAlat) == $key+1) {
					$this->pemain[$pemain]['alat'] = $val;
				}
			}
		} else {
			echo "Anda belum memilih Alat untuk bertanding\n";
		}
	}

	public function metodePermainan($pemain1, $pemain2)
    {
        if ($this->pemain[$pemain1]['alat'] == 'gunting'
            && $this->pemain[$pemain2]['alat'] == 'gunting') {
        	echo str_repeat("= ", 20)."\n";
        	echo "Siapakah pemenangnya ??, please wait ..\n";
        	sleep(2);
            echo "Draw\n";
            echo str_repeat("= ", 20)."\n";
        } elseif ($this->pemain[$pemain1]['alat'] == 'gunting'
            && $this->pemain[$pemain2]['alat'] == 'batu') {
        	echo str_repeat("= ", 20)."\n";
            echo "Siapakah pemenangnya ??, please wait ..\n";
            sleep(2);
            echo "Pemain 1 (Lose) - Pemain 2 (Win)\n";
            echo " = Dengan nama =>".$this->pemain[$pemain2]['nama']." =\n";
            echo str_repeat("= ", 20)."\n";
        } elseif ($this->pemain[$pemain1]['alat'] == 'gunting'
            && $this->pemain[$pemain2]['alat'] == 'kertas') {
        	echo str_repeat("= ", 20)."\n";
            echo "Siapakah pemenangnya ??, please wait ..\n";
            sleep(2);
            echo "Pemain 1 (Win) - Pemain 2 (Lose)\n";
            echo "= Dengan nama =>".$this->pemain[$pemain1]['nama']." =\n";
            echo str_repeat("= ", 20)."\n";
        } elseif ($this->pemain[$pemain1]['alat'] == 'batu'
            && $this->pemain[$pemain2]['alat'] == 'gunting') {
        	echo str_repeat("= ", 20)."\n";
            echo "Siapakah pemenangnya ??, please wait ..\n";
            sleep(2);
            echo "Pemain 1 (Win) - Pemain 2 (Lose)\n";
            echo "= Dengan nama =>".$this->pemain[$pemain1]['nama']." =\n";
            echo str_repeat("= ", 20)."\n";
        } elseif ($this->pemain[$pemain1]['alat'] == 'batu'
            && $this->pemain[$pemain2]['alat'] == 'batu') {
        	echo str_repeat("= ", 20)."\n";
            echo "Siapakah pemenangnya ??, please wait ..\n";
            sleep(2);
            echo "Draw\n";
            echo str_repeat("= ", 20)."\n";
        } elseif ($this->pemain[$pemain1]['alat'] == 'batu'
            && $this->pemain[$pemain2]['alat'] == 'kertas') {
        	echo str_repeat("= ", 20)."\n";
            echo "Siapakah pemenangnya ??, please wait ..\n";
            sleep(2);
            echo "Pemain 1 (Lose) - Pemain 2 (Win)\n";
            echo "= Dengan nama =>".$this->pemain[$pemain2]['nama']." =\n";
            echo str_repeat("= ", 20)."\n";
            #
        }elseif ($this->pemain[$pemain1]['alat'] == 'kertas'
            && $this->pemain[$pemain2]['alat'] == 'gunting') {
        	echo str_repeat("= ", 20)."\n";
            echo "Siapakah pemenangnya ??, please wait ..\n";
            sleep(2);
            echo "Pemain 1 (Lose) - Pemain 2 (Win)\n";
            echo "= Dengan nama =>".$this->pemain[$pemain2]['nama']." =\n";
            echo str_repeat("= ", 20)."\n";
        } elseif ($this->pemain[$pemain1]['alat'] == 'kertas'
            && $this->pemain[$pemain2]['alat'] == 'batu') {
        	echo str_repeat("= ", 20)."\n";
            echo "Siapakah pemenangnya ??, please wait ..\n";
            sleep(2);
            echo "Pemain 1 (Win) - Pemain 2 (Lose)\n";
            echo "= Dengan nama =>".$this->pemain[$pemain1]['nama']." =\n";
            echo str_repeat("= ", 20)."\n";
        } elseif ($this->pemain[$pemain1]['alat'] == 'kertas'
            && $this->pemain[$pemain2]['alat'] == 'kertas') {
        	echo str_repeat("= ", 20)."\n";
            echo "Siapakah pemenangnya ??, please wait ..\n";
            sleep(2);
            echo "Draw\n";
            echo str_repeat("= ", 20)."\n";
        }else {
        	echo "error";
        }
    }
}