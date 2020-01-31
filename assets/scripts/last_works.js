const lastWorks = (event) => {
    
    var card = null;

    if(event.target.className === 'card-title' || event.target.className === 'card-text') {

        card = event.target.parentElement.parentElement;

    } else {

        card = event.target.parentElement;

    }

    // TODO: CODE HERE

};
