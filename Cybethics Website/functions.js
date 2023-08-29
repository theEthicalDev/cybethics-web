function cybethicsNameContinue() {
    const continuedElems = Array.from(document.getElementsByClassName('continued'));
    const button = document.getElementsByClassName('cyber-ethical-solutions-button')[0];
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
                    let counter = 1;
                    while (counter <= 2) {
                        console.log(counter);
                        counter++;
                    }
                    titleElem.textContent = alphabet[i];
                    if (titleElem.textContent === targetLetter) {
                        break; // Stop the loop when the target letter is reached
                    }
                }
                titleElem.parentElement.parentElement.classList.add('continued');
            }, 500);
            // setTimeout(function () {
            //     titleElem.parentElement.parentElement.classList.add('continued');
            //     titleElem.textContent = oldValue;
            // }, 500);
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


