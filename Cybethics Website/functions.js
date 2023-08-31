function cybethicsNameContinue() {
    const continuedElems = Array.from(document.getElementsByClassName('continued'));
    const button = document.getElementById('cyber-ethical-solutions-button');
    button.setAttribute('disabled', true);
    if (continuedElems.length > 0) {
        setTimeout(function () {
            for (const continuedElem of continuedElems) {
                continuedElem.classList.remove('continued');
            }
            const titles = document.getElementsByClassName('cyber-ethical-solutions-item-title');
            button.removeAttribute('disabled');
            button.textContent = 'Continue';
        }, 1000);
    } else {
        const elements = new Set();
        document.querySelectorAll('[class^="cyber-ethical-solutions"]').forEach(el => elements.add(el));
        const allCyberEthicalSolutionsElems = Array.from(elements);
        const titles = document.getElementsByClassName('cyber-ethical-solutions-item-title');
        for (const titleElem of titles) {
            const oldValue = '' + titleElem.textContent;
            setTimeout(function () {
                const targetLetter = oldValue;
                const alphabet = 'abcdefghijklmnopqrstuvwxyz';
                titleElem.textContent = '_';
                let counter = 1;
                for (let i = 0; i < alphabet.length; i++) {
                    titleElem.textContent = alphabet[i];
                    if (titleElem.textContent === targetLetter) {
                        break;
                    }
                }
                titleElem.parentElement.parentElement.classList.add('continued');
            }, 500);
        }
        setTimeout(function () {
            for (const cyberEthicalSolutionsContainer of allCyberEthicalSolutionsElems) {
                cyberEthicalSolutionsContainer.classList.add('continued');
            }
        }, 2000);
        setTimeout(function () {
            for (title of titles) {
                title.classList.add('continued');
            }
            button.textContent = 'Reset';
            button.removeAttribute('disabled');
        }, 5000);
    }
}

// Rotating text above the contact form
document.addEventListener("DOMContentLoaded", function() {
    let words = document.querySelectorAll(".word");
    
    let wordArray = Array.from(words);

    wordArray.forEach(word => {
        let letters = word.textContent.split("");
        word.textContent = "";

        letters.forEach(letter => {
            let span = document.createElement("span");
            span.textContent = letter;
            span.style.minWidth = "0.2em";
            span.className = "letter";
            word.appendChild(span);
        });
    });

    let currentWordIndex = 0;
    let maxWordIndex = wordArray.length - 1;
    wordArray[currentWordIndex].style.opacity = "1";

    let rotateText = () => {
        let currentWord = wordArray[currentWordIndex];
        let nextWord =
            currentWordIndex === maxWordIndex ? wordArray[0] : wordArray[currentWordIndex + 1];

        Array.from(currentWord.children).forEach((letter, i) => {
            console.log(i);
            setTimeout(() => {
                letter.className = "letter out";
            }, i * 80);
        });

        nextWord.style.opacity = "1";
        Array.from(nextWord.children).forEach((letter, i) => {
            letter.className = "letter behind";
            setTimeout(() => {
                letter.className = "letter in";
            }, 340 + i * 80);
        });

        currentWordIndex =
            currentWordIndex === maxWordIndex ? 0 : currentWordIndex + 1;
    };

    rotateText();
    setInterval(rotateText, 4000);
});
