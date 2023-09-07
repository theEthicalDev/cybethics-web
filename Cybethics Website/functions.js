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
            button.textContent = 'Resolve';
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
    addScrollAnimations();
});

function prepareDevOpsAnimation() {
    // Selecting elements

    // Demo purposes: animation
    var pointElements = document.querySelectorAll('.point');
    function animateProgress(index) {
        var totalPoints = pointElements.length;
        setPoints(totalPoints, index);
    };

    const targetDiv = document.getElementById("devops-grid-item");

    const devOpsAnimation = () => {
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
                setPoints(totalPoints, index);
            });
        });
        for (let i = 0; i < 4; i++) {
            // const randomIndex = Math.floor(Math.random() * 3) + 1;
            setTimeout(() => {
                animateProgress(i);
            }, 1000 + 500 * (i + 1)); // Use (i + 1) to stagger the execution by 2000 milliseconds for each iteration
        }
    };

    addScrollAnimation(devOpsAnimation, targetDiv);

    function setPoints(totalPoints, index) {
        var barFill = document.querySelector('.bar__fill');
        barFill.style.width = ((index) / (totalPoints - 1)) * 100 + '%';
        const allPoints = document.getElementsByClassName('point');
        Array.from(allPoints).forEach(function (el, i) {
            el.classList.remove('point--complete');
            el.classList.remove('point--active');
            if (i < index) {
                el.classList.add('point--complete');
            } else if (i === index) {
                el.classList.add('point--active');
            }
        });
    }
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

function addScrollAnimations() {
    const counters = document.getElementsByClassName('counter');
    Array.from(counters).forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'));
        const duration = 2000; // in milliseconds
        const frameDuration = 1000 / 60; // 60 frames per second

        const totalFrames = duration / frameDuration;
        const increment = target / totalFrames;

        let count = 0;
        let currentFrame = 0;

        const updateCounter = () => {
            if (count < target) {
                count += increment;
                counter.textContent = Math.floor(count);

                currentFrame++;
                if (currentFrame < totalFrames - 15) {
                    requestAnimationFrame(updateCounter);
                } else if (currentFrame < totalFrames) {
                    setTimeout(updateCounter, frameDuration * 2);
                } else {
                    counter.textContent = target;
                    if (target === 8) {
                        counter.classList.add('rotate-right');
                        counter.style = "left: 6px; position: relative;";
                    }
                }
            }
        };

        const targetDiv = counter;
        addScrollAnimation(updateCounter, targetDiv);
    });
}

function addScrollAnimation(animation, targetDiv) {
    const targetPositionStart = targetDiv.getBoundingClientRect().top + window.scrollY - (window.innerHeight);
    const targetPositionEnd = targetDiv.getBoundingClientRect().bottom + window.scrollY;
    window.addEventListener("scroll", () => {
        const animated = targetDiv.getAttribute('animated');
        if (!animated && window.scrollY >= targetPositionStart && window.scrollY <= targetPositionEnd) {
            targetDiv.setAttribute('animated', true);
            animation();
        }
    });
}