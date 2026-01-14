<?php
    echo "<Script>
    let p = 0;
    for(let i = 0; i < progress.length; i++) {
        if(progress[i] === 1) {
            this.document.querySelectorAll('nav ul li')[i].classList.add('done');
            p++;
        }
    }
    this.document.querySelector('.navbox nav progress').value = p;
    </script>";
?>