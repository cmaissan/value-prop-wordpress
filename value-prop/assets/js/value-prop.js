(function() {

    let inputEl = document.querySelector('.value-prop__input');
    let submitEl = document.querySelector('.value-prop__submit');

    submitEl.addEventListener('click', () => {
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
            console.log(data);
        });
    });

})();