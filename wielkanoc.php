<?php declare(strict_types=1); ?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wielkanoc</title>
</head>
<body>
    <?php 
        function kiedyWielkanoc(int $rok) { //IY - rok
            $cyklMetona = $rok % 19;    // A = MOD(IY,19)
	        $wiek = intval($rok / 100);    // B = IY/100
	        $reszta = $rok % 100;    // C = MOD(IY,100)
	        $epakta = (19 * $cyklMetona + $wiek - intval($wiek / 4) - intval(($wiek + 1 - intval(($wiek + 8) / 25)) / 3) + 15) % 30;    // H = MOD(19*A+B-B/4-(B+1-(B+8)/25)/3+15,30)
                    // 19 * A           + B     -            B/4    -        (B     + 1 -        (B     + 8) / 25 ) / 3  + 15
	        $poprawkaTygodniowa = (32 + 2 * (($wiek % 4) + intval($reszta / 4)) - $epakta - ($reszta % 4)) % 7;     // L = MOD(32+2*(MOD(B,4)+C/4)-H-MOD(C,4),7)
                    //             32 + 2 * (MOD(B,4)    +        C       / 4 ) - H       -     MOD(C,4)
            $poprawkaMiesieczna = intval(($cyklMetona + 11 * $epakta + 22 * $poprawkaTygodniowa) / 451);    // M = (A+11*H+22*L)/451
            // M                = (       A           + 11 * H       + 22 * L                  ) / 451
	        $n = $epakta + $poprawkaTygodniowa - 7 * $poprawkaMiesieczna + 114;
            // N = H+L-7*M+114 
            $dzien = 1 + $n % 31; // ID = 1+MOD(N,31)
            $miesiac = 4;     // IM = 4
            if(intval($n / 31) == 3) {
	            // IF(N/31.EQ.3) IM = IM-1
                $miesiac--;
            }
	            // END

            echo "Wielkanoc w roku $rok wypada $dzien.0$miesiac";
        }

        kiedyWielkanoc(2026);
    ?>
</body>
</html>