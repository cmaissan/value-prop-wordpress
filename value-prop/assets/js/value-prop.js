(function() {

    let containerEl = document.querySelector('.value-prop');
    let inputEl = document.querySelector('.value-prop__input');
    let submitEl = document.querySelector('.value-prop__submit');
    let responseEl = document.querySelector('.value-prop__response');
    let errorEl = document.querySelector('.value-prop__error');

    /**
     * Display response.
     * 
     * @param {string} response 
     */
    function displayResponse(response) {
        let clean = response.replace(/(<([^>]+)>)/gi, '');
        let paragraphs = clean.split('\n');
        let html = '';
        for (let i = 0; i < paragraphs.length; i = i + 1) {
            html += '<p>' + paragraphs[i] + '</p>'
        }
        errorEl.style.display = 'none';
        responseEl.innerHTML = html;
    }

    /**
     * Display error message..
     * 
     * @param {string} error 
     */
    function displayError(error) {
        errorEl.style.display = 'block';
        errorEl.innerHTML = error;
    }

    /**
     * Make API request when form submitted.
     */
    submitEl.addEventListener('click', () => {
        containerEl.classList.toggle('loading', true);
        fetch('https://cutejudiciousdeveloper.jsutton.repl.co/vp', {
            method: 'POST',
            mode: 'cors',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                url: inputEl.value
            })
        }).then((response) => {
            return response.json()
        }).then((data) => {
            if (!data.choices || data.choices.length === 0) {
                displayError('Invalid response');
            } else {
                displayResponse(data.choices[0].message.content);
            }
        }).finally(() => {
            containerEl.classList.toggle('loading', false);
        })
    });

})();