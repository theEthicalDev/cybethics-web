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

document.addEventListener("DOMContentLoaded", function () {
    prepareRotatingText();
    prepareDevOpsAnimation();
});

function prepareDevOpsAnimation() {
    // Selecting elements
    var boxOne = document.querySelector('.box:nth-child(1)');
    var boxTwo = document.querySelector('.box:nth-child(2)');
    var boxThree = document.querySelector('.box:nth-child(3)');

    // Creating TimelineMax instances
    var timelineBoxOne = new TimelineMax();
    var timelineBoxTwo = new TimelineMax();
    var timelineBoxThree = new TimelineMax();

    // Animating boxOne
    timelineBoxOne.to(boxOne, 0.6, {
        opacity: 0.25,
        scale: 1,
        ease: Back.easeOut
    }).to(boxOne, 0.6, {
        rotation: 4,
        ease: Back.easeOut
    }, 2);

    // Animating boxTwo
    timelineBoxTwo.to(boxTwo, 0.6, {
        opacity: 0.5,
        scale: 1,
        ease: Back.easeOut
    }, 0.6).to(boxTwo, 0.6, {
        rotation: -4,
        ease: Back.easeOut
    }, 1.8);

    // Animating boxThree
    timelineBoxThree.to(boxThree, 0.6, {
        opacity: 1,
        scale: 1,
        ease: Back.easeOut
    }, 1.2);

    // Adding click event to point elements
    var pointElements = document.querySelectorAll('.point');
    pointElements.forEach(function (point) {
        point.addEventListener('click', function (e) {
            var totalPoints = pointElements.length;
            var index = Array.from(pointElements).indexOf(point);
            var completeIndex = Array.from(document.querySelectorAll('.point--active')).indexOf(document.querySelector('.point--active'));

            var barFill = document.querySelector('.bar__fill');
            barFill.style.width = ((index) / (totalPoints - 1)) * 100 + '%';

            if (index >= completeIndex) {
                document.querySelector('.point--active').classList.add('point--complete');
                document.querySelector('.point--active').classList.remove('point--active');

                point.classList.add('point--active');
                Array.from(point.parentElement.children).slice(0, index).forEach(function (el) {
                    el.classList.add('point--complete');
                });
                Array.from(point.parentElement.children).slice(index + 1).forEach(function (el) {
                    el.classList.remove('point--complete');
                });
            }
        });
    });

    // Demo purposes: animation
    var animateProgress = function () {
        var totalPoints = pointElements.length;
        var index = Math.floor(Math.random() * 4);
        var completeIndex = Array.from(document.querySelectorAll('.point--active')).indexOf(document.querySelector('.point--active'));

        var barFill = document.querySelector('.bar__fill');
        barFill.style.width = ((index) / (totalPoints - 1)) * 100 + '%';

        if (index >= completeIndex) {
            document.querySelector('.point--active').classList.add('point--complete');
            document.querySelector('.point--active').classList.remove('point--active');

            var nextPoint = pointElements[index];
            nextPoint.classList.add('point--active');
            Array.from(nextPoint.parentElement.children).slice(0, index).forEach(function (el) {
                el.classList.add('point--complete');
            });
            Array.from(nextPoint.parentElement.children).slice(index + 1).forEach(function (el) {
                el.classList.remove('point--complete');
            });
        }
    };

    var animateProgressInterval = setInterval(animateProgress, 1200);

    document.addEventListener('mouseover', function () {
        clearInterval(animateProgressInterval);
    });
}

// Rotating text above the contact form
function prepareRotatingText() {
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
        let nextWord = currentWordIndex === maxWordIndex ? wordArray[0] : wordArray[currentWordIndex + 1];

        Array.from(currentWord.children).forEach((letter, i) => {
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
}

