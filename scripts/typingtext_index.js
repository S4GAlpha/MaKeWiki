

document.addEventListener('DOMContentLoaded', function () {
    const textElement = document.getElementById('autoType');
    const textToType = "Benvenuto nella community di MaKeWiki! \n Allaccia la cintura tramite il login o signup che si parte per un mare di opportunità";

    let index = 0;
    let currentLine = 1;

    function type() {
        if (index < textToType.length) {
            const currentText = textToType.slice(0, index);
            const cursor = (index % 2 === 0) ? '|' : ' ';

            textElement.innerHTML = currentText + `<span class="cursor">${cursor}</span>`;
            
            const currentChar = textToType.charAt(index);
            if (currentChar === '\n') {
                currentLine++;
            }

            if (currentLine === 3) {
                textElement.innerHTML += `<span class="color-line">${textToType.slice(index, index + 1)}</span>`;
            } else if (currentLine < 3){
                textElement.innerHTML += textToType.slice(index, index + 1);
            }

            index++;

            setTimeout(type, 100);
        }
    }

    type();
});