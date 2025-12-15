let code = document.querySelectorAll('pre code');
for (const block of code) {
    block.innerHTML = block.textContent
        .replace(/"([^"]*)"/g, '<span class="orange">"$1"</span>')
        .replace("<?php", '<span class="blue">&lt?php</span>')
        .replace("?>", '<span class="blue">?&gt</span>')
        .replace("echo", '<span class="yellow">echo</span>')
        .replace(/#.*$/gm, '<span class="green">$&</span>')
        .replace(/\/\/.*$/gm, '<span class="green">$&</span>')
        .replace(/\/\*[\s\S]*?\*\//gm, '<span class="green">$&</span>')
        .replace(/\d+/g, '<span class="lightgreen">$&</span>')
        .replace(/\$[a-zA-Z_][a-zA-Z0-9_]*/g, '<span class="lightblue">$&</span>')
        .replace(/<br>/g, "&ltbr&gt");
}